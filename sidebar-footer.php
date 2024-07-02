<?php 
/**
 *
 * Sidebar Footer
 * 
 **/

if ( is_active_sidebar('footersidebar') ) : ?>
  <?php dynamic_sidebar('footersidebar'); ?>
<?php else: ?>
  <div class="footerBox"> 
    <h4><?php _e( 'Add Your Widgets to the Footer sidebar', 'illyaking' ); ?></h4>
  </div>
<?php endif; ?>