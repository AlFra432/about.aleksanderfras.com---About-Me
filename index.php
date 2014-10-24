<?php
	require_once("inc/require.php");
?><!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="initial-scale=1.0 maximum-scale=1.0 user-scalable=no">
		<meta name="msapplication-TileColor" content="#174520">
		<meta name="msapplication-TileImage" content="/mstile-144.png">
		<title>Aleksander Fras - About me</title>
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png"> 
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<style id="af-style">
		<?php
			readfile("less/style.min.css");
		?>
		</style>
		<script>
		var htmlElement = document.getElementsByTagName("html")[0];
		htmlElement.className = htmlElement.className.replace("no-js", "js");
		var html5els = ["section", "header", "footer", "article"], i;
		for(i in html5els){
			document.createElement(html5els[i]);
		}
		</script>
	</head>
	<body class="about">
		<header id="logo-line">
			<a id="logo-container" href="//aleksanderfras.com" title="AFlogo">
				<img id="logo" width="250" height="237" src="<?php echo AFLOGO; ?>" alt="AFlogo" />
			</a>
		</header>
		<section>
			<article>
				<h1 id="main-heading">about me</h1>
				<p>
				Hi, my name is Aleksander. Usually, I don't want to be categorized, but based on what I have been doing 
				for the past few years, I could call myself <a href="http://goo.gl/wevnoX" title="Web developer" target="_blank">web developer</a>. I am developing everything that is related 
				to <a href="//wordpress.org" title="Wordpress developer" target="_blank">Wordpress</a> (themes, plugins, widgets and so on) 
				and I am quite familiar with developing things for <a href="//www.joomla.org/" title="Joomla theme developer" target="_blank">Joomla</a> too. 
				But that's not all. My knowledge of programming/scripting/markup languages like C++, C#, 
				PHP, JavaScript, VB, VBScript, HTML(5), XML and databases like MySql and Oracle makes me a quite a diversile programmer and powerful weapon to have. 
				I am eager to learn new languages and I always strive to better myself. My next objective is to learn 
				<a href="//ruby-lang.org/en" target="_blank" title="">Ruby</a> on 
				<a href="//rubyonrails.org" target="_blank" title="Open-source web framework">Rails</a>.
				</p>
				<p>
				Although I consider myself more as an back-end developer I am also equally or even better front-end developer. 
				My knowledge of HTML, CSS and Javascript is profound and I am also quite good with 
				<a href="https://www.adobe.com/products/illustrator.html?promoid=KLXLT" target="_blank" title="Vector graphics editor - Adobe Illustrator CS6">Adobe Illustrator</a>. 
				I absolutely enjoy seeing and creating good <a href="//awwwards.com/" target="_blank" title="Awwards - Website Awards">web designs</a> and 
				<a href="//awwwards.com/99-creative-logo-designs-for-inspiration.html" target="_blank" title="Awwards - 99 creative logo designs for inspiration">logos</a>. 
				</p>
				<p>
				I am a big fan of <a href="//github.com" title="Github" target="_blank">Github</a> and fan of everything 
				it's community does. Some of my favourite Github projects, that I also use on regular basis, are
				<a href="//requirejs.org/" target="_blank" title="JavaScript file and module loader">Require.js</a>, 
				<a href="//lesscss.org/" target="_blank" title="The dynamic stylesheet language">Less.js</a>, 
				<a href="//julian.com/research/velocity/" target="_blank" title="Javascript animation engine">Velocity.js</a>,
				<a href="//nodejs.org/" target="_blank" title="Platform built on Chrome's JavaScript runtime">Node.js</a>,
				<a href="//jquery.com/" target="_blank" title="New Wave JavaScript">jQuery</a>,
				<a href="//getbootstrap.com/" target="_blank" title="Front-end framework for faster and easier web development">Bootstrap</a>,
				<a href="//fortawesome.github.io/Font-Awesome/" target="_blank" title="The iconic font and CSS framework">Font-Awesome</a> and 
				<a href="//atom.io/" title="Hackable text editor" target="_blank">ATOM</a> (although I prefer using 
				<a href="//sublimetext.com" target="_blank" title="Sophisticated text editor for code, markup and prose">SublimeText</a> for now). 
				You can find my contributions on Github under my nickname <a href="//github.com/AlFra432" title="AlFra432 on Github" target="_blank">AlFra432</a>.
				I am also a member of <a href="//stackoverflow.com/users/2149160/alfra" title="Stackoverflow" target="_blank">Stackoverflow</a>, where I post my 
				questions and answer others'.
				</p>
				<p>
				If you would like to know more about me please check out my <a href="//blog.aleksanderfras.com" target="_blank" title="Aleksander Fras - Blog">blog</a>. 
				Here you will find my latest <a href="//blog.aleksanderfras.com/portfolio" title="Portfolio" target="_blank">work</a>, 
				some <a href="//blog.aleksanderfras.com/tutorials" title="Tutorials" target="_blank">tutorials</a> and other other interesting stuff that I do. 
				I am also present on social networks 
				such as <a href="//twitter.com/AlFra432" title="Aleksander Fras on Twitter" target="_blank">Twitter</a> and 
				<a href="//linkedin.com/" title="Aleksander Fras on LinkedIn" target="_blank">LinkedIn</a>.
				If you have any questions or interesting offers I am always available for discussion at my 
				<a href="mailto:fras.aleksander@gmail.com" title="frasaleksander[at]gmail[dot]com" target="_blank"> email</a> address.
				</p>
			</article>
		</section>
		<footer>
		</footer>
	</body>
</html>
