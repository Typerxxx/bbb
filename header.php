<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>BBB</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 

<?php wp_head(); ?>
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
      <div class="mobile_menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.html"><img src="<?php bloginfo('template_url') ?>/assets/images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>
        </nav>
      </div>
      <div class="container">
        <div class="logo"><a href="index.html"><img src="<?php bloginfo('template_url') ?>/assets/images/logo.png"></a></div>
        <div class="menu_main">
          <ul>
            <?php wp_nav_menu();?>
          </ul>
        </div>
      </div>
    <!-- header section end -->