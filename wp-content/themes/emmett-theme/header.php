<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <title>Emmett McSheffrey Photography</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
  
<!-- CSS FILES -->

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <body> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- Full Page Container -->
  <div class="container col-xs-12 col-md-12 col-md-12 col-lg-12">
  <!-- Sidebar Wrapper -->
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <li class="sidebar-brand">
              <h2><a href="#">GALLERIES</a></h2>
            </li>
            <li>
              <?php wp_list_pages('exclude=713,114,116,118,282,284,317,320,361,472&title_li' ); ?>
            </li>
             <li>
              <h4>COMMUNITY ARTS</h4>
            </li>
            <li>
              <?php wp_list_pages('include=116,317,320&title_li' ); ?>
            </li>
            <li>
              <h4>WEA NORTHERN IRELAND</h4>
            </li>
            <li>
              <?php wp_list_pages('include=114,118&title_li' ); ?>   
            </li>
            <li>
              <h4>ABOUT EMMETT</h4>
            </li>
            <li>
              <?php wp_list_pages('include=713,284,282,361&title_li' ); ?> 
            </li>
         </ul>
        </div>
        <!-- /#sidebar-wrapper -->  
        <div class="row">
          <div class="col-md-12">
	   <a href="#menu-toggle" id="menu-toggle"> 
              <div id="nav-icon3">	      
                <span></span>
                <span></span>
                <span></span>
              	<span></span>
              </div>
	      </a>
            <h1>EMMETT MCSHEFFREY PHOTOGRAPHY</h1>
          </div>
        </div>
        <!--END OF HEADER -->