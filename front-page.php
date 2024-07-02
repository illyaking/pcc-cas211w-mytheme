<?php get_header('alt'); ?>

<!-- WELCOME SECTION -->

<main>

    <div class="container-fluid welcome">
        <h2>
            <center><?php echo get_theme_mod( 'welcome_title', 'Welcome to Our Business' ); ?></center>
        </h2>
        <hr class="featurette-divider">
        <!-- Three columns of text below the carousel -->
        <div class="row services">
            <?php
                $args = array(
                   'orderby' => 'date',
                   'posts_per_page' => 3,
                   'category_name' => 'services'
                );
                $recent_posts = new WP_Query( $args );
            ?>
            <?php if ( $recent_posts->have_posts() ) : ?>
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <div class="col-sm-4 centerGuy">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                <h2><?php the_title(); ?></h2>
                <div class="excerptFontPage"><?php the_excerpt(); ?></div>
            </div><!-- /.cols -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <div class="col-xs-12 news-section">
                <p><?php _e( 'No posts have been created yet in the Services category.<br>
                    Add that category and create posts.<br>Be sure to give each post a featured image.', 'illyaking'); ?></p>
            </div><!-- /.col -->
            <?php endif; ?>
        </div><!-- /.row -->

    </div><!-- /.div -->

    <div class="container-fluid marketing">

        <div id="learnMore" class="row primary">
            <div class="col-md-7">

                <h2 class="featurette-heading"><?php echo get_theme_mod( 'primary_title', 'First featurette heading' ); ?></h2>
                <p><?php echo get_theme_mod( 'primary_statement', 'Porta nibh venenatis cras sed felis eget velit aliquet. Velit scelerisque in dictum non consectetur a erat nam at. Accumsan sit amet nulla facilisi morbi tempus. Sem nulla pharetra diam sit amet. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.' ); ?></p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <?php if ( get_theme_mod( 'primary_image') ) : ?>
                <img class="featurette-image img-responsive" style="float: right;" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo get_theme_mod( 'primary_image'); ?> ">
                <?php else : ?>

                <img class="featurette-image img-responsive" style="float: right;" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2ZGI0ODEzNGYxIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTZkYjQ4MTM0ZjEiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
                <?php endif; ?>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->

        <div class="row secondary">
            <div class="col-md-5 col-md-pull-7">
                <?php if ( get_theme_mod( 'secondary_image') ) : ?>
                <img class="featurette-image img-responsive" style="float: left;" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo get_theme_mod( 'secondary_image'); ?> ">
                <?php else : ?>

                <img class="featurette-image img-responsive" style="float: left;" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2ZGI0ODEzNGYxIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTZkYjQ4MTM0ZjEiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
                <?php endif; ?>
            </div><!-- /.col-md-5 -->
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading"><?php echo get_theme_mod( 'secondary_title', 'Oh yeah, its that good' ); ?></h2>
                <p><?php echo get_theme_mod( 'secondary_statement', 'Porta nibh venenatis cras sed felis eget velit aliquet. Velit scelerisque in dictum non consectetur a erat nam at. Accumsan sit amet nulla facilisi morbi tempus. Sem nulla pharetra diam sit amet. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.' ); ?></p>
            </div> <!-- /.col-md-7 -->
        </div><!-- /.row -->

        <div class="row triad">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo get_theme_mod( 'triad_title', 'And lastly, this one' ); ?></h2>
                <p><?php echo get_theme_mod( 'triad_statement', 'Porta nibh venenatis cras sed felis eget velit aliquet. Velit scelerisque in dictum non consectetur a erat nam at. Accumsan sit amet nulla facilisi morbi tempus. Sem nulla pharetra diam sit amet. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.' ); ?></p>
            </div><!-- /.col-md-7 -->
            <div class="col-md-5 col-md-pull-7">
                <?php if ( get_theme_mod( 'triad_image') ) : ?>
                <img class="featurette-image img-responsive" style="float: right;" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo get_theme_mod( 'triad_image'); ?> ">
                <?php else : ?>

                <img class="featurette-image img-responsive" style="float: right;" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2ZGI0ODEzNGYxIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTZkYjQ4MTM0ZjEiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
                <?php endif; ?>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div>

        <section id="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 tetrad">
                        <?php echo do_shortcode(
                            get_theme_mod('contact_form_area', 'Insert Shortcode here')
                        ); ?>
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 tetrad" style="
                            background-image:url(https://illyaking.com/wp-content/themes/illyaking/img/SouthPark.jpg); 
                            background-size:cover;
                            background-attachment: fixed;
                            ">

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.div -->
        </section> <!-- /#section.contactForm -->
    
</main> <!-- FEATURE SECTION -->

<?php get_footer(); ?>