
<?php get_header(); ?>
<!-- first section -->
<div class="bk_blog_large-container">
	<div class="bk_blog-header">
		<div class="bk_blog-header_image">
			<div class="bk_blog-header_color bk_home_bg-color">
				<div class="bk_home_bg-text ">
					<h2>
						This is our blog
					</h2>
					<p>We use this blog to show our story.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="bk_blog_mini-container">
		<div class="bk_blog-first_section">
			<!-- <div class="bk_blog-first_sec-col-4">
				<div class="bk_blog-first_sec-thumbnail">
					<div class="bk_blog-first_sec-border_parent">
						<div class="bk_blog-first_sec-border">
							<h2>
								hh								
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="bk_blog-first_sec-col-4">
				<div class="bk_blog-first_sec-thumbnail">
					<div class="bk_blog-first_sec-border_parent">
						<div class="bk_blog-first_sec-border">					<h2>
								
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="bk_blog-first_sec-col-4 bk_blog-first_sec-col-12">
				<div class="bk_blog-first_sec-thumbnail">
					<div class="bk_blog-first_sec-border_parent">
						<div class="bk_blog-first_sec-border"></div>
					</div>
				</div>
			</div> -->
		</div>
		<!-- second section -->
		<div class="bk_blog-second_section">
			<div class="bk_blog-second_sec-col-9">
				<div class="blog_single_cat_name">
					<?php 
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						}
					?>
				</div>
				<div class="bk_blog-second_sec_title">
					<?php the_title('<h2>'.'<a href="' . esc_url( get_permalink() ) . '">', '</a>'.'</h2>'); ?>
				</div>
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
							<li>
								<svg class="ig_ico_svg" x="0px" y="0px" width="14" viewBox="0 0 96 96">
									<path d="M80,12c2.206,0,4,1.794,4,4v44c0,2.205-1.794,3.999-4,3.999H45.437L28,76.454V72v-8.001H16c-2.207,0-4-1.794-4-3.999V16
									c0-2.207,1.794-4,4-4H80 M80,4H16C9.373,4,4,9.373,4,16v44c0,6.627,5.373,12,12,12h4v20l28-20h32c6.627,0,12-5.373,12-12V16
									C92,9.373,86.627,4,80,4L80,4z"></path>
								</svg>
								<div class="author">
									4 comments
								</div>
							</li>
						</ul>	
				</div>
				<div class="bk_blog-second_sec-thumbnail">
					<?php echo get_the_post_thumbnail(); ?>		
				</div>
					<div class="bk_blog-second_sec-excerpt">
						<p><?php  get_excerpt(); ?></p>
					</div>
					<div class="bk_blog_continue">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Continue Reading</a>
					</div>
					<div class="bk_blog-second_sec_icon">
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

						<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
							c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
						<path <path="" class="icona" d="M214,348.8h41.8V244.1H285l3.1-35.1h-32.3v-20c0-8.2,1.6-11.5,9.7-11.5h22.6v-36.4h-29c-31.1,0-45.2,13.7-45.2,39.9v28
							h-21.7v35.5H214L214,348.8L214,348.8z"></path>
						</svg>
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

							<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
								c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
							<path class="icona" d="M335.4,196.2c-6.4,2.8-13.2,4.7-20.2,5.6c7.4-4.4,12.9-11.3,15.5-19.5c-6.9,4.1-14.5,7-22.4,8.6
								c-13.3-14.2-35.7-14.9-49.8-1.6c-9.2,8.6-13.1,21.5-10.2,33.7c-28.3-1.4-54.7-14.8-72.6-36.8c-9.4,16.1-4.6,36.7,10.9,47.1
								c-5.6-0.2-11.1-1.7-16-4.4c-0.2,16.9,11.7,31.6,28.3,35c-5.2,1.4-10.6,1.6-15.9,0.6c4.6,14.4,17.8,24.2,32.9,24.5
								c-14.8,11.6-33.5,16.8-52.2,14.6c16.1,10.4,34.9,15.9,54,15.8c65.4,0,102.4-55.3,100.2-104.8C324.7,209.5,330.7,203.3,335.4,196.2z"></path>
						</svg>
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

							<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
								c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
							<path class="icona" d="M254.7,146c-57.2,0-86,41-86,75.2c0,20.7,7.8,39.1,24.6,46c2.8,1.1,5.2,0,6-3c0.6-2.1,1.9-7.4,2.5-9.7
								c0.8-3,0.5-4.1-1.7-6.7c-4.8-5.7-7.9-13.1-7.9-23.6c0-30.4,22.8-57.6,59.3-57.6c32.3,0,50.1,19.7,50.1,46.1c0,34.7-15.4,64-38.2,64
							c-12.6,0-22-10.4-19-23.2c3.6-15.2,10.6-31.7,10.6-42.7c0-9.9-5.3-18.1-16.2-18.1c-12.9,0-23.2,13.3-23.2,31.2
							c-0.1,6.5,1.2,13,3.8,19c0,0-13.2,55.8-15.5,65.6c-4.6,19.5-0.7,43.3-0.4,45.7c0.1,0.9,1,1.5,1.8,1.3c0.4-0.1,0.8-0.3,1-0.6
							c1.2-1.5,16.5-20.5,21.7-39.4c1.5-5.3,8.5-33.1,8.5-33.1c4.2,8,16.4,15,29.4,15c38.7,0,64.9-35.3,64.9-82.5
							C330.9,179.2,300.7,146,254.7,146z"></path>
						</svg>
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

							<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
								c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
							<polygon class="icona" points="321.3,230.6 334.8,230.6 334.8,203.5 362,203.5 362,189.9 334.8,189.9 334.8,162.7 321.3,162.7 321.3,189.9
								294.1,189.9 294.1,203.5 321.3,203.5 "></polygon>
							<path class="icona" d="M219.9,360.9c46.8,0,65.4-24.8,65.4-45.1c0-16.6-6.2-27.4-24.9-41.5c-19-13.9-23.7-21.7-5.5-35.7
								c10.2-7.9,17.4-18.5,17.4-31.5c0-14.2-5.8-27-16.7-33.3h15.4l13.2-13.8h-58.9c-36.7,0-54.8,22-54.8,46.3c0,24.8,17,44.3,50.2,44.3
								c-5.1,10.4-3.1,20,5.3,26.9c-56.6,0-68.8,24.9-68.8,44C157.2,346.2,185.7,360.9,219.9,360.9z M192.6,205.9
								c-2.8-20.8,7.9-36.8,23.8-36.3c15.9,0.5,29.4,17.6,32.2,38.4c2.8,20.8-6.4,34.3-22.2,33.8C210.5,241.2,195.3,226.7,192.6,205.9z
								 M223,284.4c26.2,0,41.9,16.3,41.9,33.5c0,18-14.6,32-44.8,32c-23.6,0-40.7-15-40.7-32.9C179.3,299.4,199.4,284.1,223,284.4
								L223,284.4z"></path>
							</svg>
					</div>
					<hr>
				<?php $n = 0 ?>
					<?php 
						$query = New WP_Query(array('post_type'=>'post'));
						if($query->have_posts()): while($query->have_posts()) : $query->the_post();
						$n++; 
					?>
					
				<?php if ($n > 1): ?>
				<div class="bk_blog-third_sec_container">
							<div class="bk_blog-third_sec_col-5">
								<div class="bk_blog-third_sec_thumbnail" >
									<?php echo get_the_post_thumbnail(); ?>	

								</div>
						  	</div>
						  	<div class="bk_blog-third_sec_col-7">

								<div class="bk_blog-third_sec_text">
									<div class="blog_single_cat_name">
										<?php
	    
									        $categories = get_the_category();
									        $separator = " ";
									        $output = '';
									    
									    if($categories) {
									        foreach($categories as $category) {
									            $output .= '<a href="' . get_category_link($category->term_id) .'"> ' . $category->cat_name . '</a>' . $separator;
									        }
									        
									        echo $output;
									    } ?>
									</div>
									<div class="bk_blog-third_sec_title">
										<?php the_title('<h5>'.'<a href="' . esc_url( get_permalink() ) . '">', '</a>'.'</h5>'); 
										?>
										<div class="bk_blog-third_sec_content">
											<p><?php echo get_excerpt(); ?></p>
										</div>

									</div>
									<div class="bk_blog-second_sec_icon bk_blog-second_sec_icon1">
										<ul>
											<li>
												<div  >
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
											<li>
												<svg class="ig_ico_svg" x="0px" y="0px" width="14" viewBox="0 0 96 96">
													<path d="M80,12c2.206,0,4,1.794,4,4v44c0,2.205-1.794,3.999-4,3.999H45.437L28,76.454V72v-8.001H16c-2.207,0-4-1.794-4-3.999V16
													c0-2.207,1.794-4,4-4H80 M80,4H16C9.373,4,4,9.373,4,16v44c0,6.627,5.373,12,12,12h4v20l28-20h32c6.627,0,12-5.373,12-12V16
													C92,9.373,86.627,4,80,4L80,4z"></path>
												</svg>
												<div class="author">
													4 comments
												</div>
											</li>
										</ul>	
								</div>
								</div>
						  	</div>
						  	<hr>

				</div>

				<?php endif; ?>
				<?php  endwhile; ?>
				<?php endif; ?>
				<?php the_posts_pagination( array(
											    'mid_size' => 2,
											    'prev_text' => __( 'Back', 'textdomain' ),
											    'next_text' => __( 'NEXT', 'textdomain' )
											) ); ?>
			</div>
			<div class="bk_blog-second_sec-col-3">
				<div class="bk_sidebar_profile_background">
					<div class="bk_sidebar_profile">
						<img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg">
						<h4>Tes Bunkim</h4>
						<i class="material-icons">favorite <p>CAMBODIA</p></i>
						
						<p>
							Hello my name is Jane and this is my Odyssey! I use this awesome blog theme to tell people my story. Through all the places and things I see around the world, there isn't a best way to share my experience! Follow my daily updates and discover with me the essence of traveling!
						</p>
						<div class="bk_blog-second_sec_icon">
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

						<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
							c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
						<path <path="" class="icona" d="M214,348.8h41.8V244.1H285l3.1-35.1h-32.3v-20c0-8.2,1.6-11.5,9.7-11.5h22.6v-36.4h-29c-31.1,0-45.2,13.7-45.2,39.9v28
							h-21.7v35.5H214L214,348.8L214,348.8z"></path>
						</svg>
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

							<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
								c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
							<path class="icona" d="M335.4,196.2c-6.4,2.8-13.2,4.7-20.2,5.6c7.4-4.4,12.9-11.3,15.5-19.5c-6.9,4.1-14.5,7-22.4,8.6
								c-13.3-14.2-35.7-14.9-49.8-1.6c-9.2,8.6-13.1,21.5-10.2,33.7c-28.3-1.4-54.7-14.8-72.6-36.8c-9.4,16.1-4.6,36.7,10.9,47.1
								c-5.6-0.2-11.1-1.7-16-4.4c-0.2,16.9,11.7,31.6,28.3,35c-5.2,1.4-10.6,1.6-15.9,0.6c4.6,14.4,17.8,24.2,32.9,24.5
								c-14.8,11.6-33.5,16.8-52.2,14.6c16.1,10.4,34.9,15.9,54,15.8c65.4,0,102.4-55.3,100.2-104.8C324.7,209.5,330.7,203.3,335.4,196.2z"></path>
						</svg>
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

							<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
								c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
							<path class="icona" d="M254.7,146c-57.2,0-86,41-86,75.2c0,20.7,7.8,39.1,24.6,46c2.8,1.1,5.2,0,6-3c0.6-2.1,1.9-7.4,2.5-9.7
								c0.8-3,0.5-4.1-1.7-6.7c-4.8-5.7-7.9-13.1-7.9-23.6c0-30.4,22.8-57.6,59.3-57.6c32.3,0,50.1,19.7,50.1,46.1c0,34.7-15.4,64-38.2,64
							c-12.6,0-22-10.4-19-23.2c3.6-15.2,10.6-31.7,10.6-42.7c0-9.9-5.3-18.1-16.2-18.1c-12.9,0-23.2,13.3-23.2,31.2
							c-0.1,6.5,1.2,13,3.8,19c0,0-13.2,55.8-15.5,65.6c-4.6,19.5-0.7,43.3-0.4,45.7c0.1,0.9,1,1.5,1.8,1.3c0.4-0.1,0.8-0.3,1-0.6
							c1.2-1.5,16.5-20.5,21.7-39.4c1.5-5.3,8.5-33.1,8.5-33.1c4.2,8,16.4,15,29.4,15c38.7,0,64.9-35.3,64.9-82.5
							C330.9,179.2,300.7,146,254.7,146z"></path>
						</svg>
						<svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 499 499" xml:space="preserve">

							<path class="cerchio" d="M249.5,0C111.9,0,0,111.9,0,249.5S111.9,499,249.5,499S499,387.1,499,249.5S387.1,0,249.5,0z M249.5,478.4
								c-126.2,0-228.9-102.7-228.9-228.9S123.3,20.6,249.5,20.6s228.9,102.7,228.9,228.9S375.7,478.4,249.5,478.4z"></path>
							<polygon class="icona" points="321.3,230.6 334.8,230.6 334.8,203.5 362,203.5 362,189.9 334.8,189.9 334.8,162.7 321.3,162.7 321.3,189.9
								294.1,189.9 294.1,203.5 321.3,203.5 "></polygon>
							<path class="icona" d="M219.9,360.9c46.8,0,65.4-24.8,65.4-45.1c0-16.6-6.2-27.4-24.9-41.5c-19-13.9-23.7-21.7-5.5-35.7
								c10.2-7.9,17.4-18.5,17.4-31.5c0-14.2-5.8-27-16.7-33.3h15.4l13.2-13.8h-58.9c-36.7,0-54.8,22-54.8,46.3c0,24.8,17,44.3,50.2,44.3
								c-5.1,10.4-3.1,20,5.3,26.9c-56.6,0-68.8,24.9-68.8,44C157.2,346.2,185.7,360.9,219.9,360.9z M192.6,205.9
								c-2.8-20.8,7.9-36.8,23.8-36.3c15.9,0.5,29.4,17.6,32.2,38.4c2.8,20.8-6.4,34.3-22.2,33.8C210.5,241.2,195.3,226.7,192.6,205.9z
								 M223,284.4c26.2,0,41.9,16.3,41.9,33.5c0,18-14.6,32-44.8,32c-23.6,0-40.7-15-40.7-32.9C179.3,299.4,199.4,284.1,223,284.4
								L223,284.4z"></path>
							</svg>
					</div>
					</div>
					
				</div>
				<div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>