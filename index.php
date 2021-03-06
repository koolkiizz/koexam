<?php

include 'header.php';
?>
    <section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">

      <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
          <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
            <div class="container clearfix">
              <div class="slider-caption slider-caption-center">
                <h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide dark">
            <div class="container clearfix">
              <div class="slider-caption slider-caption-center">
                <h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
              </div>
            </div>
            <div class="video-wrap">
              <video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
                <source src='images/videos/explore.mp4' type='video/mp4' />
                <source src='images/videos/explore.webm' type='video/webm' />
              </video>
              <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
            <div class="container clearfix">
              <div class="slider-caption">
                <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
      </div>

    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <a href="#" class="button button-full button-purple center tright header-stick bottommargin-lg">
          <div class="container clearfix">
            Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
          </div>
        </a>

        <div class="container clearfix">

          <div class="heading-block center">
            <h1>Recent Articles</h1>
            <span>We almost blog regularly about this &amp; that.</span>
          </div>

          <!-- Posts
          ============================================= -->
          <div id="posts">

            <div class="entry clearfix">
              <div class="entry-image">
                <a href="images/portfolio/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/standard/17.jpg" alt="Standard Post with Image"></a>
              </div>
              <div class="entry-title">
                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 10th February 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
              </ul>
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
                <a href="blog-single.html"class="more-link">Read More</a>
              </div>
            </div>

             <div class="entry clearfix">
              <div class="entry-image">
                <iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>
              <div class="entry-title">
                <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 16th February 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
                <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19 Comments</a></li>
                <li><a href="#"><i class="icon-film"></i></a></li>
              </ul>
              <div class="entry-content">
                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis placeat quo unde reprehenderit eum facilis vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, reprehenderit!</p>
                <a href="blog-single-full.html"class="more-link">Read More</a>
              </div>
            </div>

            <div class="entry clearfix">
              <div class="entry-image">
                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                  <div class="flexslider">
                    <div class="slider-wrap">
                      <div class="slide"><a href="images/portfolio/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/standard/10.jpg" alt="Standard Post with Gallery"></a></div>
                      <div class="slide"><a href="images/portfolio/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/standard/20.jpg" alt="Standard Post with Gallery"></a></div>
                      <div class="slide"><a href="images/portfolio/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/standard/21.jpg" alt="Standard Post with Gallery"></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-title">
                <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 24th February 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
                <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21 Comments</a></li>
                <li><a href="#"><i class="icon-picture"></i></a></li>
              </ul>
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident deserunt. Saepe!</p>
                <a href="blog-single-small.html"class="more-link">Read More</a>
              </div>
            </div>

            <div class="entry clearfix">
              <div class="entry-image">
                <blockquote>
                  <p>"When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity."</p>
                  <footer>Albert Einstein</footer>
                </blockquote>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 3rd March 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Quotes</a>, <a href="#">People</a></li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23 Comments</a></li>
                <li><a href="#"><i class="icon-quote-left"></i></a></li>
              </ul>
            </div>

            <div class="entry clearfix">
              <div class="entry-image clearfix">
                <div class="portfolio-single-image masonry-thumbs grid-6" data-big="3" data-lightbox="gallery">
                  <a href="images/portfolio/full/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/2.jpg" alt=""></a>
                  <a href="images/portfolio/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/3.jpg" alt=""></a>
                  <a href="images/portfolio/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-1.jpg" alt=""></a>
                  <a href="images/portfolio/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-2.jpg" alt=""></a>
                  <a href="images/portfolio/full/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12.jpg" alt=""></a>
                  <a href="images/portfolio/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12-1.jpg" alt=""></a>
                  <a href="images/portfolio/full/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/13.jpg" alt=""></a>
                  <a href="images/portfolio/full/18.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/18.jpg" alt=""></a>
                  <a href="images/portfolio/full/19.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/19.jpg" alt=""></a>
                </div>
              </div>
              <div class="entry-title">
                <h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 3rd March 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
                <li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21 Comments</a></li>
                <li><a href="#"><i class="icon-picture"></i></a></li>
              </ul>
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident deserunt. Saepe!</p>
                <a href="blog-single-thumbs.html"class="more-link">Read More</a>
              </div>
            </div>

            <div class="entry clearfix">
              <div class="entry-image">
                <a href="http://themeforest.net" class="entry-link" target="_blank">
                  Themeforest.net
                  <span>- http://themeforest.net</span>
                </a>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 17th March 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Links</a>, <a href="#">Suggestions</a></li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26 Comments</a></li>
                <li><a href="#"><i class="icon-link"></i></a></li>
              </ul>
            </div>

            <div class="entry clearfix">
              <div class="entry-image">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, fuga optio voluptatibus saepe tenetur aliquam debitis eos accusantium! Vitae, hic, atque aliquid repellendus accusantium laudantium minus eaque quibusdam ratione sapiente.
                  </div>
                </div>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 21st March 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Status</a>, <a href="#">News</a></li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11 Comments</a></li>
                <li><a href="#"><i class="icon-align-justify2"></i></a></li>
              </ul>
            </div>

            <div class="entry clearfix">
              <div class="entry-image clearfix">
                <iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
              </div>
              <div class="entry-title">
                <h2><a href="blog-single.html">This is an Embedded Audio Post</a></h2>
              </div>
              <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 28th April 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a href="#">General</a></li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 16 Comments</a></li>
                <li><a href="#"><i class="icon-music2"></i></a></li>
              </ul>
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident deserunt. Saepe!</p>
                <a href="blog-single.html"class="more-link">Read More</a>
              </div>
            </div>

          </div><!-- #posts end -->

          <!-- Pagination
          ============================================= -->
          <div class="row mb-3">
            <div class="col-12">
              <a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
              <a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
            </div>
          </div>
          <!-- .pager end -->

        </div>

      </div>

    </section><!-- #content end -->
<?php
include 'footer.php';
?>