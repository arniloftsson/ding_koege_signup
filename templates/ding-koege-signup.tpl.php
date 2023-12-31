<?php

/**
 * @file
 * Default template for user newsletter signup page.
 *
 * Available variables:
 *  - $content: The content for the page.
 *
 * Note: The page have pane classes to make it look correct in DDB default theme
 *       this is not optimal, but the only other solution would be to use
 *       exiting_pages module to convert this to an panel page (but it seams
 *       faster for performance and easier to just use the classes).
 */

?>
<div class="empty-sidebars default-layout">
  <div class="layout-wrapper">
    <div class="pane-content">
      <div class="primary-content ding-auth">
        <!-- <h1 class="pane-title"><?php print render($title); ?></h1> -->
        <div class="ding-auth--registration-information">
          <?php print render($content); ?>
        </div>
      </div>
    </div>
  </div>
</div>
