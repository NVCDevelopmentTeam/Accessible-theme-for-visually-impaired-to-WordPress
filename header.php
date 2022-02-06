<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
		<style>
  			/* CSS goes here, at the top of the page 
			@import url('https://fonts.googleapis.com/css?family=PT+Sans');
			@import url('https://fonts.googleapis.com/css?family=PT+Serif');

			h1, h2, h4, h5, h6 {
				font-family: 'PT Sans', 'Helvetica', 'Arial';;
			}

			html, body {
				margin: 0;
				padding: 0;
				font-family: 'PT Serif', 'Helvetica', 'Arial';
			}
			#top-bar {
				width: 100%;
				background: #F1F1F1; /* light gray */
				border-bottom: 1px solid #D4D4D4; /* dark gray "underline" */
				height: 25px;
			}
			.normal-wrapper {
				width: 900px;
				margin: 0 auto;
				padding: 15px 40px;
				overflow: auto;
			}
			.logo-icon {
				color: #000000;
				font-size: 60pt;
				float: left;
			}
			h1 {
				float: left;
				margin: 21px 0 0 25px;
			}
			#navbar {
			    list-style-type: none; /* remove bullet points */
			    margin: 29px 0 0 0;
			    padding: 0;
			    float: right;
			    font-size: 16pt;
			}
			#navbar li {
			    display: inline; /* make items horizontal */
			}
			#navbar li a:link, #navbar li a:visited, #navbar li a:active { 
				text-decoration: none; /* remove underline */
				color: #000000;
				padding: 0 16px 0 10px; /* space links apart */
				margin: 0;
				border-right: 2px solid #B4B4B4; /* divider */
			}
			#navbar li a:link.last-link {
				/* remove divider */
				border-right: 0px;
			}
			#navbar li a:hover {
				/* change color on hover (mouseover) */
				color: #EB6361;
			}
			#top-color-splash {
				width: 100%;
				height: 4px;
				background: #EB6361;
			}
			.one-third {
				width: 40%;
				float: left;
				box-sizing: border-box; /* ensure padding and borders do not increase the size */
				margin-top: 20px;
			}
			.two-third {
				width: 60%;
				float: left;
				box-sizing: border-box; /* ensure padding and borders do not increase the size */
				padding-left: 40px;
				text-align: right;
				margin-top: 20px;
			}
			.featured-image {
				max-width: 500px; /* reduce image size while maintaining aspect ratio */
			}
			.no-margin-top {
				margin-top: 0; /* remove margin on things like headers */
			}
			#quote-area {
				background: #363636;
				color: #FFFFFF;
				text-align: center;
				padding: 15px 0;
			}
			h3 {
				font-weight: normal;
				font-size: 20pt;
				margin-top: 0px;
			}
			h4 {
				font-weight: normal;
				font-size: 16pt;
				margin-bottom: 0;
			}
			.icon-outer {
				box-sizing: border-box; /* ensure padding and borders do not increase the size */
				float: left;
				width: 33.33%;
				padding: 25px;
				margin: 0;
				text-align: center;
			}
			.icon-circle {
				background: #EEEEEE;
				color: #B4B4B4; 
				width: 200px;
				height: 200px;
				border-radius: 200px; /* make rounded corners */
				margin: 0 auto;
				border: 2px solid #D6D6D6;
				box-sizing: border-box; /* ensure padding and borders do not increase the size */
				font-size: 75pt;
				padding: 30px 0 0 0;
				cursor: pointer;
			}
			.icon-circle:hover {
				/* change color on hover (mouseover) */
				color: #FFFFFF;
				background: #EB6361; /* red */
			}
			h5 {
				margin: 15px 0 10px 0;
				font-size: 20pt;
			}
			#footer {
				width: 100%;
				background: #F1F1F1; /* light gray */
				border-top: 1px solid #D4D4D4; /* dark gray "topline" */
				height: 150px;
			}
			.hidden {
				display: none;
		</style>
<?php wp_head();?>
	</head>
	<body>
		<div id="top-bar"></div>

		<div class="normal-wrapper">
			<div id="logo-container">
				<i class="fa fa-volume-down logo-icon"></i><h1>Noise Media</h1>
			</div>

			<ul id="navbar">
				<li><a href="" Accesskey=h>Home</a></li>
				<li><a href="" accesskey=a>About</a></li>
				<li><a href="" accesskey=r>Reviews</a></li>
				<li><a href="" class="last-link" accesskey=c>Contact</a></li>
			</ul>

		</div>

		<div id="top-color-splash"></div>