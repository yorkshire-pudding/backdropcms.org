<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 */
?>
<?php if ($site_name): ?>
  <a class="site-name" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
    <?php print $site_name; ?>
  </a>
<?php endif; ?>

<?php if ($logo): ?>
  <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
    <?php print $logo; ?>
  </a>
<?php endif; ?>

<?php if ($site_slogan): ?>
  <div class="site-slogan"><?php print $site_slogan; ?></div>
<?php endif; ?>

<?php if ($menu): ?>
  <nav class="header-menu">
    <span class="greeting"><?php print $greeting; ?></span>
    <?php print $menu; ?>
  </nav>
<?php endif; ?>