<!DOCTYPE html>
<!-- saved from url=(0062)http://twitter.github.io/bootstrap/examples/justified-nav.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Home . St. Peters</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      .muted {
        margin: 10px 0px 30px 20px;
        max-width: 1000px;
	/*font-family: Print Clearly,Ubuntu Condensed,Aaargh, Caviar Dreams;*/
	font-size: 40px;
	text-align : center;
	line-height : 40px;
	color : #086FA1;/*#235D79; /*#034768; /*;#63ADD0;*/
	background-color : #ffffff;
	
      }
      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0px 5px 0px ;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      .footer {
        background-color: #63ADD0;
        color : #ffffff;
	text-align : center;
	height : 30px;
	padding-top : 10px;
      }
      .navbar-search {
	padding-top : 10px;
	float : right;
      }
      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://twitter.github.io/bootstrap/assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <div class="muted"><img src="./img/anglican.gif" alt="Anglican Logo"><span style="padding: 0 10px">&nbsp;</span><b>St. Peter's Kirangari Church</b></div>

<div class="row">
  <div class="span12"style = "text-align: right">
    <form method="get" action="/" class="form-inline" >
      <input name="loc" class="span3" type="text"  placeholder="Enter name">
      <button type="submit" class="btn btn-primary"> <i class="icon-search icon-white"></i></button>
    </form>
  </div>
</div>

	<!--<form class="navbar-search">
           <input type="text" class="search-query span3" placeholder="Search">
          </form>-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="http://twitter.github.io/bootstrap/examples/justified-nav.html#">Home</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="http://twitter.github.io/bootstrap/examples/justified-nav.html#">Sacraments</a></li>
                <li><a href="http://twitter.github.io/bootstrap/examples/justified-nav.html#">Leadership</a></li>
                <li><a href="http://twitter.github.io/bootstrap/examples/justified-nav.html#">About Us</a></li>
                <li><a href="http://twitter.github.io/bootstrap/examples/justified-nav.html#">Settings</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
