<?php 
/**
 *
 * Top Right Sidebar for Two Column Page
 * 
 **/

if ( is_active_sidebar('toprightsidebar') ) : ?>
  <?php dynamic_sidebar('toprightsidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Right Column', 'illyaking' ); ?></h4>
  </div>
<?php endif; ?>