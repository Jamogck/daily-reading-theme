<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Daily_Reading
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header id="site-header" class="row bg-img <?php the_field( 'reading_theme' ); ?>">
		<div id="layer">
			<div class="day header-text">
				<h2><?php the_title(); ?></h2>
				<h3><?php the_field( 'day_title' ); ?></h3>
				<h4><?php the_field( 'day_sub_title' ); ?></h4>
                <a class="hero-triangle" href="#starthere"></a>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="main">
		<div id="starthere" class="row section purple-bg">
            <div class="inner center em">
                <h3>Stop &amp; Pray</h3>
                <?php the_field( 'day_intro' ); ?>
            </div>
        </div>
        <div class="row section yellow-bg">
            <div class="inner longform">
            	<h3>Scripture</h3>
                <div class="col-sm-2">
                    <p>
                        <?php the_field( 'day_sub_title' ); ?>
                    </p>
                </div>
                <div class="col-sm-10">
                   <?php the_field( 'day_reading' ); ?>
                </div>
            </div>
        </div>
        <div class="row section orange-brdr">
            <div class="inner center em">
                <?php get_template_part( 'template-parts/silence'); ?>
            </div>
        </div>
        <div class="row section orange-brdr yellow-bg">
        	<div class="inner">
                <?php get_template_part( 'template-parts/fourquestions' ); ?>
        	</div>
        </div>
        <div class="row section blue-brdr">
            <div class="inner center em">
                <?php get_template_part( 'template-parts/speak' ); ?>
            </div>
        </div>
        <div class="row section blue-bg">
            <div class="inner center em">
                <h3>Share</h3>
                <?php the_field( 'share_section' ); ?>
            </div>
        </div>
    </div>
</div> <!-- end container -->

	<footer class="entry-footer">
		<?php daily_reading_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
