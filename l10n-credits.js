/*
 * Generate a HTML report from a Weblate translation report in JSON format.
 *
 * Usage: nodejs l10n-credits.js report.json > report.html
 */

const fs = require('fs');

const filename = process.argv[2];
const data = fs.readFileSync(filename, 'utf8');
const credits = JSON.parse(data);

credits.sort((a, b) => {
    const nameA = Object.keys(a)[0].toUpperCase();
    const nameB = Object.keys(b)[0].toUpperCase();

    if (nameA < nameB) {
        return -1;
    }

    if (nameA > nameB) {
        return 1;
    }

    return 0;
});

console.log('<ul>');
credits.forEach(entry => {
    for (const [language, authors] of Object.entries(entry)) {
        console.log('  <li>');
        console.log(`    <p><strong>${language}</strong></p>`);
        console.log('    <ul class="browser-default">');
        authors.forEach(author => {
            const [, name, count] = author;
            console.log(`      <li>${name} (${count})</li>`);
        });
        console.log('    </ul>');
        console.log('  </li>');
    }
});
console.log('</ul>');
