<?php
/**
 * @file
 * Porto's HTML template.
 */
?>
<!DOCTYPE html>
<html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
<!-- turn off IE compatibility view -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<!-- Call bootstrap.css before $scripts to resolve @import conflict with respond.js -->
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'porto'); ?>/vendor/bootstrap/css/bootstrap.css">
<?php if (theme_get_setting('rtl') == 1): ?>
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'porto'); ?>/vendor/bootstrap-rtl/bootstrap-rtl.css">
<?php endif; ?>
<?php print $styles; ?>
<?php print $scripts; ?>

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE]>
  <link rel="stylesheet" href="<?php global $parent_root; echo $parent_root; ?>/css/ie.css">
<![endif]-->

<!--[if lte IE 8]>
  <script src="<?php global $parent_root; echo $parent_root; ?>/vendor/respond.js"></script>
<![endif]-->

<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Roboto+Slab:300,400,700" rel="stylesheet">


<?php porto_user_css();?>  
</head>
<body class="<?php print $classes; ?> <?php if (theme_get_setting('site_layout') == 'boxed'){ echo "boxed"; } if (theme_get_setting('background_color') == 'dark'){ echo "dark"; }?>"<?php print $attributes;?>>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>

</html>