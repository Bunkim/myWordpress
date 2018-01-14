<?php get_header(); ?>
<div class="bk_home_large-con">
	<div class="bk_blog-header">
		<div class="bk_blog-header_image">
			<div class="bk_blog-header_color bk_home_bg-color">
				<div class="bk_home_bg-text ">
					<h2>
						we Learn for achieve !
					</h2>
				</div>
			</div>
		</div>
	</div>
	<?php 
		if (have_posts()) : while (have_posts()) : the_post();
	?>
	<div class="bk_default-page">

	 	<h1><?php the_title(); ?></h1>
	 			<div class="bk_blog-second_sec_icon">
						<ul>
							<li>
								<div>
									<svg x="0px" y="0px" width="30" viewBox="0 0 96 96">
									<path d="M64.671,53.256C69.188,48.893,72,42.775,72,36V24C72,10.745,61.255,0,48,0S24,10.745,24,24v12
										c0,6.773,2.812,12.889,7.326,17.253C13.037,56.102,0,63.488,0,72.094V80c0,6.63,5.37,12,12,12h72c6.63,0,12-5.37,12-12v-7.875
										C96,63.52,82.962,56.111,64.671,53.256z M32,36V24c0-8.836,7.164-16,16-16c8.837,0,16,7.164,16,16v12c0,8.836-7.163,16-16,16
										C39.164,52,32,44.836,32,36z M88,80c0,2.206-1.794,4-4,4H12c-2.206,0-4-1.794-4-4v-7.906c0-0.932,2.305-3.941,9.152-6.812
										C25.156,61.925,36.4,60,48,60c11.594,0,22.835,1.93,30.842,5.294C85.693,68.174,88,71.189,88,72.125V80z"></path>
									</svg>

									<div class="author">
										<?php
									global $post;
									$author_id=$post->post_author;
									the_author_meta( 'user_nicename', $author_id );
									?>
									</div>
								</div>	
							</li>
							<li>
								<svg x="0px" y="0px" width="14" viewBox="0 0 96 96">
									<path d="M48,4C23.699,4,4,23.7,4,48c0,24.301,19.699,44,44,44s44-19.699,44-44C92,23.7,72.301,4,48,4z M48,84
									c-19.882,0-36-16.117-36-36c0-19.882,16.118-36,36-36s36,16.118,36,36C84,67.883,67.882,84,48,84z M62.828,57.172
									c1.562,1.562,1.562,4.095,0,5.657C62.048,63.609,61.023,64,60,64c-1.023,0.001-2.047-0.39-2.828-1.171l-12-12
									C44.422,50.079,44,49.062,44,48V24c0-2.209,1.791-4,4-4s4,1.791,4,4v22.344L62.828,57.172z"></path>
								</svg>
								<div class="author">
									<?php 
										$posts = get_posts(array('numberposts'=>1)); //Get all published posts
										foreach ($posts as $post){
										    echo get_the_time('Y-m-d', $post->ID); //Echos date in Y-m-d format.
										}	
									 ?>
								</div>
							</li>
						</ul>	
				</div>
	 	<p><?php the_content(); ?></p>
	</div>
	 
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>