const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const $ = gulpLoadPlugins();

const sassConfig = {
    outputStyle: 'expanded',
    precision: 10,
    includePaths: [
        'node_modules/bourbon/app/assets/stylesheets/',
    ]
};

const versionConfig = {
    'value': '%MDS%',
    'append': {
        'key': 'v',
        'to': [
            'css',
            'js',
        ],
    },
};

// Rsync configuration for deploying to development.
const rsyncConfDev = {
    root: 'docroot/',
    destination: '/var/www/html',
    progress: false,
    incremental: true,
    relative: true,
    recursive: true,
    clean: true,
    compress: false,
    exclude: ['.*.swp', 'config.log', 'Makefile', 'Makefile.in'],
};

// Rsync configuration for deploying to production.
const rsyncConfProd = {
    root: 'docroot/',
    hostname: 'tuxfamily',
    destination: '/home/getgnulinux/getgnulinux.org-web/htdocs',
    progress: true,
    incremental: true,
    relative: true,
    recursive: true,
    clean: true,
    compress: true,
    exclude: ['.*.swp', 'config.log', 'Makefile', 'Makefile.in'],
};

const lint = (files, options = {fix: false}) => {
    return gulp.src(files)
        .pipe($.eslint(options))
        .pipe($.eslint.format())
        .pipe($.eslint.failAfterError());
};

gulp.task('styles:sass', () => {
    return gulp.src('src/styles/*.scss')
        .pipe($.plumber())
        .pipe($.sourcemaps.init())
        .pipe($.sass.sync(sassConfig).on('error', $.sass.logError))
        .pipe($.autoprefixer())
        .pipe($.cssnano({safe: true, autoprefixer: false}))
        .pipe($.sourcemaps.write('.'), {includeContent: true})
        .pipe(gulp.dest('docroot/styles'));
});

gulp.task('styles:vendor', () => {
    return gulp.src([
        'node_modules/flexslider/flexslider.css',
    ])
        .pipe($.cssnano({safe: true, autoprefixer: false}))
        .pipe(gulp.dest('docroot/styles/vendor'));
});

gulp.task('styles', gulp.series('styles:sass', 'styles:vendor'));

gulp.task('scripts:main', () => {
    return gulp.src('src/scripts/main.js')
        .pipe($.plumber())
        .pipe($.sourcemaps.init())
        .pipe($.babel())
        .pipe($.uglify())
        .pipe($.sourcemaps.write('.'), {includeContent: true})
        .pipe(gulp.dest('docroot/scripts'));
});

gulp.task('scripts', gulp.series('scripts:main'));

gulp.task('fonts', () => {
    return gulp.src('node_modules/flexslider/fonts/*')
        .pipe(gulp.dest('docroot/styles/vendor/fonts'));
});

gulp.task('lint:root', () => lint(['*.js']));

gulp.task('lint:src', () => {
    return lint(['src/scripts/*.js']).pipe(gulp.dest('src/scripts'));
});

gulp.task('lint', gulp.series('lint:root', 'lint:src'));

gulp.task('html', gulp.series('styles', 'scripts', () => {
    return gulp.src('src/**/*.php')
        .pipe($.useref({searchPath: ['docroot', 'src', '.']}))
        .pipe($.if('*.php', $.versionNumber(versionConfig)))
        .pipe(gulp.dest('docroot'));
}));

gulp.task('images', () => {
    return gulp.src([
        'src/images/**/*',
        '!src/images/src/**/*',
    ])
        .pipe($.imagemin([
            $.imagemin.gifsicle(),
            $.imagemin.mozjpeg({quality: 90}),
            $.imagemin.optipng(),
            $.imagemin.svgo()
        ]))
        .pipe(gulp.dest('docroot/images'));
});

gulp.task('build', gulp.series('html', 'images', 'fonts', () => {
    return gulp.src('src/**/*').pipe($.size({title: 'build', gzip: true}));
}));

gulp.task('default', gulp.series('build'));

gulp.task('deploy:dev', () => {
    return gulp.src('docroot/**').pipe($.rsync(rsyncConfDev));
});

gulp.task('develop', gulp.series('build', 'deploy:dev'));

gulp.task('deploy:prod', () => {
    const conf = rsyncConfProd;

    return gulp.src('docroot/**')
        .pipe(
            $.prompt.confirm({
                message: `Are you sure you want to deploy to ${conf.hostname}:${conf.destination}?`,
                default: false
            })
        )
        .pipe($.rsync(conf));
});
