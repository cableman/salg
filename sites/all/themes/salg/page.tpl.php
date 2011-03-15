<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/reset/reset-min.css"></link>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
  <body>
    <div id="header-region" class="clear-block"><?php print $header; ?></div>
    <div id="content-wrapper">
      <div id="header">
         <div id="menu">
           <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
           <?php print $search_box ?>
        </div>
      </div>
      <div id="content">
        <div id="left-sidebar">
          <?php if ($left) { ?>
            <?php print $left ?>
          <?php } ?>
        </div>
        <?php if ($messages) {
          print '<div class="messages-box box roundCorners">' .$messages. "</div>";
        } ?>
        <div id="main-content" class="box roundCorners light-color">
          <?php print $help ?>
          <?php print $content; ?>
          <?php print $feed_icons; ?>
        </div>
      </div>
      <div id="footer">
        <p>&copy; Design by Jesper Kristensen</p>
      </div>
    </div>
    <?php print $closure ?>
  </body>
</html>
