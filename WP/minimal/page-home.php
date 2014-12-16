<?php 
	/* Template Name: Homepage */
?>

<?php get_header(); ?>

	<!-- PORTFOLIO AREA -->
	<section>
		<hr class="no-margin" />
	
		<div class="middle-container section-content">
			<div class="container">
				<ul class="row">
					<li class="span4 box">
						<div class="intro-content align-center">
							<h1 class="special-intro">I'm Adi</h1>
						</div> <!-- end intro-content -->
					</li>
					<li class="span4 box">
						<div class="intro-content align-center">
							<h1 class="intro-color-1">I create super awesome stuff</h1>
						</div> <!-- end intro-content -->
					</li>
					<li class="span4 box">
						<div class="intro-content align-center">
							<h1 class="intro-color-2">I'm available for freelance projects</h1>
						</div> <!-- end intro-content -->
					</li>
				</ul> 
				
				<?php 
				$args = array(
					'posts_per_page' => 6
				);
				
				$portfolio_items = new WP_Query($args);
				
				if ($portfolio_items->have_posts()) : ?>
				<ul class="row portfolio-entries">
					<?php while ($portfolio_items->have_posts()) : $portfolio_items->the_post(); ?>
					<li class="span4 box portfolio-entry">
						<div class="hover-state align-right">
							<p><?php the_title(); ?></p>
							<em>Click to see project</em>
						</div>
					
						<?php if (has_post_thumbnail()) : ?>
						<figure>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</figure>
						<?php endif; ?>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
				
				<div class="cta align-center"><a href="<?php echo home_url(); ?>/portfolio" class="btn btn-primary">See my full portfolio</a></div>
			</div> <!-- end container -->
		</div> <!-- end middle-container -->
	</section>

<?php get_footer(); ?>