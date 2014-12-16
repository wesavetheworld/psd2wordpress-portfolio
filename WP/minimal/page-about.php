<?php 
	/* Template Name: About Page */
?>

<?php get_header(); ?>

	<!-- CONTENT AREA -->
	<section>
		<hr class="no-margin" />
	
		<div class="middle-container section-content">
			<div class="container box section-content align-center about-page">
				<h2>About Me</h2>
				
				<p>I’m a web designer based in Romania. I create clean websites, love Apple products and I’m a big fan of trance music.</p>
				<p>Wanna get in touch? Do a quick scroll to the bottom of the page. <a href="#contact-info">It’s all there</a> :)</p>
				
				<hr class="alt" />
				
				<h2 class="available">I’m currently available for freelance projects.</h2>
				<h2>Rates start at $50/hour.</h2>
				
				<div class="cta">
					<a href="<?php echo home_url(); ?>/portfolio" class="btn btn-primary">See my portfolio</a>
				</div> <!-- end cta -->
			</div> <!-- end container -->
		</div> <!-- end middle-container -->
	</section>
	
<?php get_footer(); ?>