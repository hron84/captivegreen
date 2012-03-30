<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Captive Green 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111225

-->
<div id="wrapper">
	<div id="wrapper2">
		<div id="header" class="container">
			<div id="logo">
      <h1><a href="<?php print $front_page ?>"><?php echo $site_name ?><span><?php echo $site_slogan ?></span></a></h1>
			</div>
			<div id="menu">
        <?php 
            if(isset($main_menu)) {
                print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                        'id' => 'main-menu',
                        'class' => array('links', 'inline', 'clearfix'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                ));
        } ?>
			</div>
		</div>
    <div id="banner">
      <?php print $messages ?>
    </div>
		<!-- end #header -->
		<div id="page">
			<div id="content">
        <?php print render($page['content']); ?>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
        <ul>
          <?php print render($page['sidebar_second']) ?>
        </ul>
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #page -->
		<div id="footer">
			<!--p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p-->
      <?php print render($page['footer']); ?>
		</div>
	</div>
</div>
<!-- end #footer -->
