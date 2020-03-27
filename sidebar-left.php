<?php 
/**
 *
 * Left Sidebar
 * 
 **/

if ( is_active_sidebar('leftsidebar') ) : ?>
  <?php dynamic_sidebar('leftsidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Left Sidebar', 'illyaking' ); ?></h4>
  </div>
<?php endif; ?>