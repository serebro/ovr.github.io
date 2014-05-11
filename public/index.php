<?php
/**
 * @author: Patsura Dmitry <zaets28rus@gmail.com>
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dmitry Patsura Blog - About Me</title>
	<link rel="stylesheet" type="text/css" href="/src/vendor/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/src/vendor/fontawesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="/css/component.css" />
	<link rel="stylesheet" type="text/css" href="/css/about.css	" />
	<script src="/src/vendor/modernizr/modernizr.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-20503308-1', 'dmtry.me');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li><a class="gn-icon gn-icon-cog">About me</a></li>
							<li><a class="gn-icon gn-icon-cog">Skills</a></li>
							<li><a class="gn-icon gn-icon-help">Github Activity</a></li>
							<li><a class="gn-icon gn-icon-help">Contact</a></li>
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			<li><a href="https://github.com/ovr" class="codrops-icon fa-github fa-2x pull-right">Github Profile</a></li>
			<li><a href="skype:izaets28rus?chat" class="codrops-icon fa-skype  fa-2x pull-right">Contact me by Skype</a></li>
		</ul>
	</div><!-- /container -->
	<div class="container" id="about">
		<div class="page-header">
			<h1 class="brand" style="color: #9c9c9c;">
				Patsura Dmitry
				<small style="color: #99c356;">Web-Backend PHP Developer</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<img src="/img/572096.jpg">
			</div>
			<div class="col-lg-6 col-md-12">
				Text about me bla bla bla
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<h3>Programming Languages</h3>
				<ul class="list-unstyled list-inline">
					<li>PHP,</li>
					<li>C/C++,</li>
					<li>Javascript</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-12">
				<h3>Tools</h3>
				<ul class="list-unstyled list-inline">
					<li>PhpStorm,</li>
					<li>Git,</li>
					<li>HG (Mercurial),</li>
					<li>PHPUnit,</li>
					<li>Unix,</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<h3>PHP Frameworks</h3>
				<ul class="list-unstyled list-inline">
					<li>Zend Framework 1 &amp; 2 (not work with big project),</li>
					<li>Phalcon PHP,</li>
					<li>Symfony 2,</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-12">
				<h3>Frontend Frameworks</h3>
				<ul class="list-unstyled list-inline">
					<li>JQuery,</li>
					<li>Bootstrap,</li>
					<li>Backbone,</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<h3>Work experience</h3>
				<div class="profile_info">
					<div class="clear_fix profile_career_row">
						<div class="label fl_l">Место работы:</div>
						<div class="labeled fl_l"><a href="http://artlime.ru/">Lime Design Studio</a><br>Благовещенск, 2010–2010<br><a href="#php-backend">PHP Программист</a></div>
					</div><div class="clear_fix profile_career_row block">
						<div class="label fl_l">Место работы:</div>
						<div class="labeled fl_l"><a href="http://amur.net/">Amur.net</a><br>Благовещенск, 2010–2011<br><a href="#php-backend">PHP программист</a></div>
					</div><div class="clear_fix profile_career_row block">
						<div class="label fl_l">Место работы:</div>
						<div class="labeled fl_l"><a href="http://artlime.ru/">Lime Design Studio</a><br>Благовещенск, 2011–2011<br><a href="#php-backend">PHP Программист</a></div>
					</div><div class="clear_fix profile_career_row block">
						<div class="label fl_l">Место работы:</div>
						<div class="labeled fl_l"><a href="http://uniqhand.ru/">Uniqhand.ru</a><br>Благовещенск, 2011–2014<br><a href="#php-backend">PHP Программист</a></div>
					</div><div class="clear_fix profile_career_row block">
						<div class="label fl_l">Место работы:</div>
					</div>
					<div class="labeled fl_l"><a href="http://en.wikipedia.org/wiki/Freelancer">Freelance</a><br>Благовещенск, 2014–2014<br><a href="#php-backend">Веб программист</a></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<h3>Open source</h3>
				<p>
					I love this word. I am an active contributer in <a href="#">zephir</a> project.
					Zephir is a compiled high level language aimed to the creation of C-extensions for PHP http://zephir-lang.com/.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<h3>Education</h3>
				BGPU 2014-2017 Math, Programming profile
			</div>
		</div>
		<div class="row top-buffer">
			<div class="container">
				<div class="well well-sm quick-contact">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<h1 class="title-contact">
										Quick Contact</h1>
								</div>
								<div class="col-md-4 contact-email">
									<h2>zaets28rus@gmail.com</h2>
									<h3>+7 962 283 78 83</h3>
								</div>
								<div class="col-md-4">
									<div class="row contact row-first">
										<div class="col-md-6">
											<a href="skype:izaets28rus?chat" class="skype"><i class="fa fa-skype"></i>izaets28rus</a>
										</div>
									</div>
									<div class="row contact">
										<div class="col-md-6">
											<a href="https://vk.com/zaets28rus" class="linkedin"><i class="fa fa-linkedin"></i>ВКонтакте</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/src/lib/classie.js"></script>
	<script src="/src/lib/gnmenu.js"></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
	</script>
</body>
</html>