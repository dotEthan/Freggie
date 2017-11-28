<?php require_once( dirname( __FILE__ ) . '/functions.php'); ?>
<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Bevan" rel="stylesheet" type="text/css">
    <link rel="stylesheet" src="https://normalize-css.googlecode.com/svn/trunk/normalize.css" />
    <script src="https://use.fontawesome.com/afe31722f8.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <title><?php the_title(); ?></title>
    <meta name='description' content='Freggie Food Delivery Service'>
     <meta name='author' content='Ethan Strauss'>

    <link rel='stylesheet' href='css/styles.css'>

    <!--[if lt IE 9]>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js'></script>
    <![endif]-->
</head>

<body>
    <div class="container">

        <!--nav Start-->
        <div class="nav" id="tnav">
            <div id="logo">
                <a href="<?php home_url(); ?>"><img alt="Freggie Logo" src="http://www.freggie.ca/wp-content/uploads/2015/08/logo.png"></a>
            </div>
            <div id="menubar">
                <div class="menuitems"><a href="<?php home_url(); ?>">Menu</a></div>
                <div class="menuitems"><a href="<?php home_url(); ?>order.php">Order</a></div>
                <div class="menuitems"><a href="<?php home_url(); ?>faq.php">FAQ</a></div>
                <div class="menuitems"><a href="<?php home_url(); ?>contactus.php">Contact us</a></div>
            </div>
        </div>
        <!--NAV END-->