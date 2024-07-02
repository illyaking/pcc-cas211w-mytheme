<?php 
/**
 *
 * Main Sidebar
 * 
 **/

if ( is_active_sidebar('mainsidebar') ) : ?>
  <?php dynamic_sidebar('mainsidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4> <?php _e( 'Add Your Widgets to this Main Sidebar', 'illyaking' ); ?></h4>
  </div>
<?php endif; ?>