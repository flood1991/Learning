<?php get_header();?>

                    <div class="col span_12 light center">
                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-t-w-inherits="small_desktop" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none"
                            data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                            <div class="column-bg-overlay"></div>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                        <div class="wpb_wrapper">
                                            <canvas id="canvas">
											</canvas>
                                            <h2 id="home-title">
                                                <?php the_field('title_top');?>
                                            </h2>
                                            <h2 id="home-subtitle">
                                                <?php the_field('subtitle_top');?>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="wpb_raw_code wpb_raw_js">
                                        <div class="wpb_wrapper">
                                            <script type="text/javascript">
                                                var canvas = document.getElementById("canvas"),
                                                    ctx = canvas.getContext('2d');
                                                
                                                canvas.width = window.innerWidth;
                                                canvas.height = window.innerHeight;
                                                
                                                var stars = [], // Array that contains the stars
                                                    FPS = 30, // Frames per second
                                                    x = (window.innerWidth < 1280) ? 20 : 80, // Number of stars
                                                    mouse = {
                                                      x: 0,
                                                      y: 0
                                                    };  // mouse location
                                                
                                                // Push stars to array
                                                for (var i = 0; i < x; i++) {
                                                  stars.push({
                                                    x: Math.random() * canvas.width,
                                                    y: Math.random() * canvas.height,
                                                    radius: Math.random() + 3,
                                                    vx: Math.floor(Math.random() * 50) - 20,
                                                    vy: Math.floor(Math.random() * 50) - 20
                                                  });
                                                }
                                                
                                                // Draw the scene
                                                function draw() {
                                                  ctx.clearRect(0,0,canvas.width,canvas.height);
                                                
                                                  ctx.globalCompositeOperation = "lighter";
                                                
                                                  for (var i = 0, x = stars.length; i < x; i++) {
                                                    var s = stars[i];
                                                
                                                    ctx.fillStyle = "#fff";
                                                    ctx.beginPath();
                                                    ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
                                                    ctx.fill();
                                                    ctx.fillStyle = 'black';
                                                    ctx.stroke();
                                                  }
                                                
                                                  ctx.beginPath();
                                                  for (var i = 0, x = stars.length; i < x; i++) {
                                                    var starI = stars[i];
                                                    ctx.moveTo(starI.x,starI.y);
                                                    if(distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
                                                    for (var j = 0, x = stars.length; j < x; j++) {
                                                      var starII = stars[j];
                                                      if(distance(starI, starII) < 175) {
                                                        ctx.lineTo(starII.x,starII.y);
                                                      }
                                                    }
                                                  }
                                                  ctx.lineWidth = 0.30;
                                                  ctx.strokeStyle = 'white';
                                                  ctx.stroke();
                                                }
                                                
                                                function distance( point1, point2 ){
                                                  var xs = 0;
                                                  var ys = 0;
                                                
                                                  xs = point2.x - point1.x;
                                                  xs = xs * xs;
                                                
                                                  ys = point2.y - point1.y;
                                                  ys = ys * ys;
                                                
                                                  return Math.sqrt( xs + ys );
                                                }
                                                
                                                // Update star locations
                                                function update() {
                                                  for (var i = 0, x = stars.length; i < x; i++) {
                                                    var s = stars[i];
                                                
                                                    s.x += s.vx / FPS;
                                                    s.y += s.vy / FPS;
                                                
                                                    if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
                                                    if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
                                                  }
                                                }
                                                
                                                // Update and draw
                                                
                                                function tick() {
                                                  draw();
                                                  update();
                                                  requestAnimationFrame(tick);
                                                }
                                                
                                                // update canvas when screen resized
                                                window.addEventListener('resize', () => {
                                                  canvas.width = window.innerWidth
                                                  canvas.height = window.innerHeight
                                                  x = (window.innerWidth < 1280) ? 1 : 70,
                                                  console.log(x)
                                                })
                                                
                                                tick();
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="home" data-midnight="dark" data-top-percent="5%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section   " style="padding-top: calc(100vw * 0.05); padding-bottom: 0px; ">
                    <div class="row-bg-wrap">
                        <div class="inner-wrap">
                            <div class="row-bg  using-bg-color  " style="background-color: #ffffff; "></div>
                        </div>
                        <div class="row-bg-overlay"></div>
                    </div>
                    <div class="col span_12 dark left">
                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                            data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                            <div class="column-bg-overlay"></div>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>
                                                <?php the_field('about_subtitle');?>
                                            </h6>
                                            <h2>
                                                <?php the_field('about_title');?>
                                            </h2>
                                        </div>
                                    </div>
                                    <div id="fws_5c86b6b1e09bb" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row  vc_row-o-content-middle standard_section  vc_custom_1545112590511   " style="padding-top: 0px; padding-bottom: 5%; ">
                                        <div class="row-bg-wrap">
                                            <div class="row-bg   " style=""></div>
                                        </div>
                                        <div class="col span_12  center">
                                            <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                                                data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="column-bg-overlay"></div>
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p class="intro">
                                                                    <?php the_field('about_text');?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="fws_5c86b6b1e0c4a" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 5%; padding-bottom: 0px; ">

                                        <div class="row-bg-wrap">
                                            <div class="row-bg   " style=""></div>
                                        </div>

                                        <div class="col span_12  left">
                                            <?php if( have_rows('about_repeat') ): ?>

                                            <?php while( have_rows('about_repeat') ): the_row()?>
                                            <div class="vc_col-sm-2 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                                                data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="column-bg-overlay"></div>
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="img-with-aniamtion-wrap center" data-max-width="100%" data-border-radius="none">
                                                            <div class="inner">
                                                            	<img data-shadow="none" data-shadow-direction="middle" class="img-with-animation skip-lazy " data-delay="0" height="100" width="100" data-animation="fade-in" src=
                                                            	<?php the_sub_field('image_about_repeat');?> alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_col-sm-4 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                                                data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="column-bg-overlay"></div>
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h3>
                                                                    <?php the_sub_field('title_about_repeat');?>
                                                                </h3>
                                                                <p>
                                                                    <?php the_sub_field('text_about_repeat');?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile;
												  endif; 
											?>
                                        </div>
                                    </div>




                                    <div id="fws_5c86b6b1e17ec" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section " style="padding-top: 5%; padding-bottom: 5%; ">
                                        <div class="row-bg-wrap">
                                            <div class="row-bg " style=""></div>
                                        </div>

                                        <div class="col span_12  left">
                                            <?php if( have_rows('about_repeat2') ):
                                           		while( have_rows('about_repeat2') ): the_row();?>
                                            <div class="vc_col-sm-2 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                                                data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="column-bg-overlay"></div>
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="img-with-aniamtion-wrap center" data-max-width="100%" data-border-radius="none">
                                                            <div class="inner">
                                                            	<img data-shadow="none" data-shadow-direction="middle" class="img-with-animation skip-lazy " data-delay="0" height="100" width="100" data-animation="fade-in" src=
                                                            	<?php the_sub_field('image_about_repeat');?> alt="" />
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_col-sm-4 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                                                data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="column-bg-overlay"></div>
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h3>
                                                                    <?php the_sub_field('title_about_repeat');?>
                                                                </h3>
                                                                <p>
                                                                    <?php the_sub_field('text_about_repeat');?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile;
												  endif; 
											?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="fws_5c86b6b1e2342" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section   " style="padding-top: 0px; padding-bottom: 0px; ">
                    <div class="row-bg-wrap">
                        <div class="inner-wrap">
                            <div class="row-bg    " style=""></div>
                        </div>
                        <div class="row-bg-overlay"></div>
                    </div>
                    <div class="col span_12 dark left">
                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid"
                            data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                            <div class="column-bg-overlay"></div>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="img-with-aniamtion-wrap center" data-max-width="100%" data-border-radius="none">
                                        <div class="inner"><img data-shadow="none" data-shadow-direction="middle" class="img-with-animation skip-lazy " data-delay="0" height="300" width="384" data-animation="fade-in" src="<?php the_field('animate');?>" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="fws_5c86b6b1e27e3" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section   " style="padding-top: 0px; padding-bottom: 0px; ">
                    <div class="row-bg-wrap">
                        <div class="inner-wrap">
                            <div class="row-bg  using-bg-color  " style="background-color: #ffffff; "></div>
                        </div>
                        <div class="row-bg-overlay"></div>
                    </div>
                    <div class="nectar-shape-divider-wrap " style=" height:100px;" data-front="" data-style="mountains" data-position="bottom"><svg class="nectar-shape-divider" fill="#3583f6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">
<path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path> <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>
<path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>
<path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>
<path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path> </svg></div>
                    <div class="col span_12 dark center">
                        <div style="margin-top: 1%; " class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none"
                            data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                            <div class="column-bg-overlay"></div>



                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1545686829267">
                                        <div class="wpb_wrapper">
                                            <h2>
                                                <?php the_field('news');?>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="post-area col  span_12 col_last masonry auto_meta_overlaid_spaced  " data-ams="8px">
                                            <div class="posts-container" data-load-animation="perspective">


                                                <?php $news= get_posts(array(
														'numberposts' => 6,
														'order' => 'asc',
														'suppress_filters' => true));
												foreach( $news as $post ){
                            					setup_postdata($post);?>
                                                <article id="post-6856" class="regular masonry-blog-item post-6856 post type-post status-publish format-standard has-post-thumbnail category-announcement category-event">
                                                    <div class="inner-wrap animated">
                                                        <div class="post-content">
                                                            <div class="content-inner">
                                                                <a href="<?php the_permalink()?>"></a><span class="post-featured-img" style="background-image: url(<?php the_post_thumbnail_url();?>);"></span>
                                                                <div class="article-content-wrap">
                                                                    <span class="meta-category"><a><?php the_category(',');?></a></span>
                                                                    <div class="post-header">
                                                                        <h3 class="title">
                                                                            <a href="<?php the_permalink()?>">
                                                                                <?php the_title();?>
                                                                            </a>
                                                                        </h3>
                                                                        <span class="meta-author"><span>By</span> <a href="author/keithyong/index.html" title="Posts by Keith Yong" rel="author">Keith Yong</a></span> <span class="meta-category">| <a href="category/announcement/index.html">Announcement</a>, <a href="category/event/index.html">Event</a></span>
                                                                        <span class="meta-comment-count">| <a href="litecoin-foundation-partners-with-cu-entertainment-to-bring-feel-the-k-pop-concert-to-george-mason-university/index.html#respond">
                                                                        No Comments</a>
																		</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <?php
                    }
                     wp_reset_postdata();
                     ?>



                                            </div>
                                        </div>
                                    </div>
                                    <div id="fws_5c86b6b1e814f" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; ">
                                        <div class="row-bg-wrap">
                                            <div class="row-bg   " style=""></div>
                                        </div>
                                        <div class="col span_12  left">
                                            <div style="margin-bottom: 40px!important; " class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay=""
                                                data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1"
                                                data-animation="" data-delay="0">
                                                <div class="column-bg-overlay"></div>
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="nectar-cta " data-style="material" data-alignment="center" data-text-color="custom">
                                                            <h4> <span class="text"> </span><span class="link_wrap" style="color: #0667d0;"><a class="link_text" href="category/blog/index.html"><?php the_field('news_link');?>									<span class="circle" style="background-color: #0667d0;"></span><span class="arrow"></span></a>
                                                                </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer();?>