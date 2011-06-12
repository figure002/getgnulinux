<?php load_header(); ?>

<?php menu_why_not_windows(); ?>

<div id="maincontent">


<h1 class="windows_section_h1"><?php print _("Stand for a Free Society"); ?></h1>

<div class="quote1"><div class="quote2"><div class="quote3">
<?php print _("I come up with new words, phrases, analogies, all kinds of fun
stuff in the English language and people paraphrase what I had to say and make
money talking about some of the same things that I did.<br />
<strong>If I try to lock down</strong> what I talk about and write about, the
same way as a proprietary software company does, then the whole industry of
speaking, writing, media, would be overly litigious, and transaction costs
would be prohibitive."); ?>
<span class="source"><span class="author">Don Marti,</span> <a href="http://www.go-opensource.org/go_open/episode_2/big_guns/"><?php print _("2005 interview"); ?></a></span>
</div></div></div>

<p><?php print _("There is much more to software than being trustworthy (being
\"Open-Source\"): what really counts is <strong>the freedoms you get</strong>
over it. Can you learn from it? Can you build upon it? Can you distribute it?
That's what we refer to as \"free software\"."); ?></p>

<h2 id="not_a_crazy_concept"><?php print _("Not a crazy concept"); ?></h2>
<p><?php print _("It sounds peculiar to many users that software should be free
as in freedom, since none of Microsoft's products are. Yet our society works
with many free things in it, for example:"); ?></p>

<div class="small_list">

<div class="floatquote1"><div class="floatquote2">
<?php print _("Though no one has a proprietary lock on yoga, it is still a
thriving $30 billion business in the United States."); ?></div>
<span class="source"><span class="author">Venkatesh Hariharan</span> <a href="http://www.redhat.com/magazine/025nov06/features/intellectual_india/?sc_cid=bcm_edmsept_007">[1]</a></span>
</div></div>

<ul>
    <li><?php print _("No chef would ever forbid you to modify his recipe and
make derivatives out of it. The food industry thrives despite being required by
law to list ingredients on product labels."); ?></li>
    <li><?php print _("A fair law court system permits anyone to read through
all the trial hearings and arguments. Not only the result (the final
deliberations), but also the process is fully open."); ?></li>
</ul>

<p><?php print _("Free software is free as in &quot;free speech&quot;, as in a
&quot;free market&quot;: all are necessary for a free society. Unconvinced? Let
us look at proprietary software a little closer."); ?></p>

<h2 id="proprietary_software_going_wrong"><?php print _("Proprietary software going wrong"); ?></h2>

<p><?php $p = _("The limits of proprietary software go beyond the security
issue (see <a href=\"%s\">our article on source
code</a>): today proprietary software interferes with the spread of culture
and information. This happens mainly through two technologies:");
printf($p, base_url('windows/what_about_source_code',1)); ?></p>

<ul>
	<li>
		<h3 id="digital_rights_management">Digital Restrictions Management <a class="footnote" id="footnote1" href="<?php base_url('windows/stand_for_a_free_society'); ?>#footnote_bottom1">1</a> (DRM)</h3>

        <p><?php $p = _("The main idea of DRM <a class=\"footnote\" href=\"%s#footnote_bottom1\">1</a>
is to restrict access to files. Users encounter this when, for example, they
purchase music through iTunes, and then can only play their music with one
player, from one brand. With this method, companies fight copyright
infringement, but they also severely restrain users' access to their files.");
printf($p, base_url('windows/stand_for_a_free_society',1)); ?></p>


        <div class="keypart"><?php print _("DRM is control over content"); ?></div>

        <p><?php print _("Except that the control is not in the hands of the
end-user. The original purpose of <acronym title=\"Digital Restrictions
Managment\">DRM</acronym> is understandable, but the implications over the flow
of information and culture within a society are frightening."); ?></p>
		<div class="small_list">
			<ul>
                <li><?php print _("Imagine a book that automatically became glued shut after you read it once."); ?></li>
                <li><?php print _("Imagine documents that self-destructed if you tried to take them out of the room."); ?></li>
                <li><?php print _("Imagine telephones that only worked if the person you were ringing was renting the same make and model."); ?></li>
			</ul>
		</div>
        <p><?php print _("Sounds crazy? This is where Trusted Computing comes in."); ?></p>
	</li>

	<li>
		<h3 id="trusted_computing">Trusted Computing (TC)</h3>

        <p><?php print _("Trusted Computing (sometimes
<a href=\"http://www.lafkon.net/tc/\" title=\"A very well done video on Trusted
Computing\">more accurately</a> called \"Treacherous Computing\") means a computer
can only run \"Trusted\" Software. It is meant to be an uncircumventable
protection against nuisances (like viruses or spyware) and copyright violations
(people copying proprietary software)."); ?></p>

        <div class="keypart"><?php print _("Trusted Computing is control over the computer"); ?></div>

        <p><?php print _("The critical thing about Trusted Computing is that
<strong>you cannot decide</strong> what is trustworthy and what is not. For
example, your computer might refuse to run programs that are not certified by
the software company &ndash;programs that could enable you to take documents
out of the office, or play your neighbour's DVD, or send your essay to someone
not using the same program."); ?></p>
        <p><?php print _("A whole range of possibilities opens up for companies
that benefit from restricting your computing (such as proprietary software and
recording companies). It is suddenly possible to rent DVDs that only play two
times, or music you can only listen to during September, or information you can
read but can't save or copy. All of a sudden, Trusted Computing and DRM enable
<strong>remote control</strong> over content."); ?></p>
    <p><?php print _("Trusted Computing, in effect, enables the publisher to
write their own copyright law.</p>"); ?></p>
	</li>
</ul>

<h2 id="the_wider_impact"><?php print _("The wider impact"); ?></h2>



<div class="quote1"><div class="quote2"><div class="quote3">
<?php print _("Many cultural products are now emerging &quot;triple protected&quot;,
not only by copyright and code, but also by contracts or licenses for which
users waive all remaining rights.<br />
Increasingly, copyright is replaced with click-through end-user licenses for
digital content, using contract law to establish the absolute property rights
that copyright laws were originally intended to deny to publishers."); ?>
<span class="source"><span class="author">Rosemary Bechler,</span> <a href="http://www.counterpoint-online.org/cgi-bin/item.cgi?id=637">Unbounded Freedom</a></span>
</div></div></div>


<p><?php print _("Computing is not just about calculations anymore. We use
software to communicate: to share information, ideas and culture. Software is
in our phones, cars, media players, TVs, and gets to govern just about every
new device around us."); ?></p>

<div class="floatquote1 imagequote">
    <a href="http://xkcd.com/c129.html" title="comic by Randall Munroe"><img src="/_style/windows.stand_for_a_free_society.content_protection.png" width="235" height="150" alt="DRM"/></a>
    <span class="source"><span class="author">Randall Munroe,</span> <a href="http://xkcd.com/">xkcd</a></span>
</div>

<p><?php print _("<strong>Software is increasingly used to enforce rules</strong>.
Rules that may or may not be the law. Rules that may or may not be fair. If the
software is not free there will be no space for the user to influence these rules."); ?></p>

<p><?php print _("Trusted Computing and DRM pave the way for a society in which
culture and information are not simply turned into products (they are right now,
and that is fine), but into <em>consumable</em> products."); ?></p>

<p><?php print _("Code is power. Most of today's work documents are written and
encoded with secret algorithms in proprietary software. What will be of
tomorrow's books, photos, films, essays, animations, music, news? Proprietary
programs such as Windows have no transparency. A free culture and a free society
cannot grow from such software."); ?></p>

<p><?php $p = _("May we suggest you <a href=\"%s\">switch to Linux</a>?");
printf($p, base_url('switch_to_linux',1)); ?></p>

<div class="footnotes_bottom">
<a class="footnote" id="footnote_bottom1" href="<?php base_url('windows/stand_for_a_free_society'); ?>#footnote1">1</a>
<?php print _("Note that DRM is often referred to as \"Digital Rights Management\",
although it has little to do with rights &ndash; \"Digital Restrictions Management\"
is a more accurate name."); ?></div>


<div class="further_reading">
<h2 id="further_reading"><?php print _("Read more"); ?></h2>

<div id="left_column">
<h3><a href="http://www.gnu.org/philosophy/right-to-read.html">The Right to Read</a></h3>

<p><?php print _("What is the Trusted Computing world like? This is a short
story by Richard Stallman that describes how this can affect any of us."); ?></p>

<h3><a href="http://www.timj.co.uk/digiculture/drm-fallacy">The fallacy of DRM</a></h3>
<p><?php print _("A very well constructed article about <acronym title=\"Digital
Restrictions Management\">DRM</acronym> by Tim Jackson, and on which we based
the present article."); ?></p>

<h3><a href="http://blog.jimmywales.com/index.php/archives/2004/10/21/free-knowledge-requires-free-software-and-free-file-formats/">Free Knowledge requires Free Software and Free File Formats</a></h3>
<p><?php print _("An engaged article by Jimmy Wales, who co-founded the free
encyclopedia <a href=\"http://www.wikipedia.org/\">Wikipedia</a>."); ?></p>


</div><!-- end left column -->

<div id="right_column">

<h3><a href="http://www.lafkon.net/tc/" hreflang="en" title="Trusted Computing">Trusted Computing</a></h3>
<p><?php print _("Short video animation by Benjamin Stephan and Lutz Vogel. A clear, snappy and convincing argument."); ?></p>

<h3><a href="http://www.gnu.org/philosophy/why-free.html">Why Software Should Not Have Owners</a></h3>
<p><?php print _("A pivotal text for the Free Software movement by Richard
Stallman. It clarifies common objections and explains a handful of important
ideas."); ?></p>

<h3><a href="<?php base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a></h3>
<p><?php print _("More on free software on this website."); ?></p>

<br style="clear: both;" />


</div><!-- end right column -->
</div><!-- end further reading -->

</div><!-- end of maincontent -->

<?php menu_foot_why_not_windows(); ?>

<?php load_footer(); ?>
