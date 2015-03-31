<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <title>Emmett McSheffrey Photography</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
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
  	  
 <div class ="container col-xs-12 col-md-12 col-md-12 col-lg-12">
 <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="site-header"> <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></div>
        </div>
        <div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav navbar-right xs-push">
         	 <?php wp_list_pages('include=713,284,282,361&title_li' ); ?> 
          </ul>
          <ul class="nav navbar-nav xs-pull">
	   <?php wp_list_pages('exclude=713,114,116,118,282,284,317,320,361,472&title_li' ); ?>
              	   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Community Arts<b class="caret"></b></a>
                  <ul class="dropdown-menu">
    		            <li class="dropdown-header">Various</li>
                      <?php wp_list_pages('include=116,317,320&title_li' ); ?>
    		            <li class="divider"></li>
                    <li class="dropdown-header">WEA Northern Ireland</li>
    		              <?php wp_list_pages('include=114,118&title_li' ); ?>           
                  </ul>
                </li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
  <!--END OF HEADER -->

  <!--START OF PAGE -->

<script src="//use.typekit.net/kpb5cbm.js"></script><script>// <![CDATA[
try{Typekit.load();}catch(e){}
// ]]></script>
<div class="galleryflex">[justified_image_grid ids="499,500,501,502,503,504,505,506,507" row_height=300 animation_speed=600 min_height=475 quality=50 max_rows=2 thumbs_spacing=2 height_deviation=0 last_row=show randomize_width=50]</div>
<div></div>
<div></div>
<!--END OF PAGE -->

  <!--START OF FOOTER -->





  <nav class="navbar-fixed-bottom" role="navigation">

    <p class="credit col-xs-12 col-md-12 col-md-12 col-lg-12"> © 2014 <a href="http://www.magnusvaughan.com">Magnus Vaughan</a>. All rights reserved.</p>

        <?php wp_footer(); ?>

  </nav>

    </div> <!-- /container -->

   </body>

</html>



<!--END OF FOOTER -->