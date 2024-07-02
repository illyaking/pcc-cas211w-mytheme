<?php 
/**
 *
 * Top Left Sidebar for Two Column Page
 * 
 **/
if ( is_active_sidebar('topleftsidebar') ) : ?>
  <?php dynamic_sidebar('topleftsidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Left Column', 'illyaking' ); ?></h4>
  </div>
<?php endif; ?>