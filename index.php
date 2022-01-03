<?php get_header(); ?>

<!-----top Section------>
<section id="top-three">
  <div class="container">
    <div class="row">
      <?php
         $related = new WP_Query(array(
           'category_name' => 'top-three',
           'posts_per_page' => 3,
           'offset' => 0,  
             ));
             ?>

      <?php if ( $related->have_posts() ) : ?>
      <?php while ( $related->have_posts() ) : $related->the_post(); ?>
      <div class="col-md-4 col-sm-12 col-12">
        <div class="box-style">
          <div class="box-left">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail();?>
            </a>
          </div>
          <div class="box-right">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
              </a></h2>

          </div>
        </div>
      </div>
      <!-- end column-->
      <?php  endwhile; else : endif;wp_reset_postdata(); ?>
    </div>
    <!--end row-->
  </div>
</section>
<!-- end top three -->
<div class="container">
  <!------Start Ads--------->
  <div class="home-page-ads my-2">
    <div class="row">
      <?php
           // the query
           $the_category = new WP_Query( array(
             'post_type' => 'ads',
             'post_status' => 'publish',
             'posts_per_page' => 3,
             'orderby' => 'post_date',
             'order' => 'DESC',
             'type' => 'top-three',
           ));
           ?>
      <?php if ( $the_category->have_posts()) : ?>
      <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
      <!-- Get Custom Field Meta Value -->
      <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
      <div class="col-md-4 col-sm-12 col-12">
        <div class="header-down-ads">
          <a href="<?php echo esc_url($url) ?>" target="_blank">
            <?php the_post_thumbnail();?>
          </a>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata();?>
    </div>
  </div>
</div>
<!-- =======================
        Main Body Section
    ======================== -->
<div class="container">
  <div class="row my-2">
    <!-- ========Body Part======= -->
    <div class="col-md-9 col-sm-12 col-12">
      <!-- Lead Section -->
      <section class="lead-sec">
        <div class="row">
          <div class="col-md-8 col-sm-12 col-12" id="pc-pd-5">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'highlights',
                      'posts_per_page' => 1,
                      'offset' => 0,
                   ));
                   ?>
                  <?php if ( $the_category->have_posts()) : ?>
                  <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                  <?php  $lead[] = $post->ID; ?>
                  <div class="first-content" id="lead-img">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <h2><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a></h2>
                    <p>
                      <?php echo wp_trim_words( get_the_content(), 15, '...' );?>
                    </p>
                  </div>

                  <?php endwhile; endif; wp_reset_postdata();?>
                  <!-- end main content -->
                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
            <!-- End Main lead News -->

            <div class="row">

              <div class="col-md-6 col-sm-12 col-12">
                <!-- Start One-Bottom-Box -->
                <div class="one-bottom-box">
                  <!-- Start Cat First Content -->
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'highlights',
                            'posts_per_page' => 3,
                            'offset' => 0,
                            'post__not_in'  =>  $lead,
                         ));
                         ?>

                      <?php if ( $the_category->have_posts()) : ?>
                      <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                      <?php  $lead[] = $post->ID; ?>
                      <div class="box-style">
                        <div class="box-left">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail();?>
                          </a>
                        </div>
                        <div class="box-right">
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                              <?php the_title(); ?>
                            </a></h2>
                        </div>
                        <div>

                        </div>
                      </div>
                      <?php endwhile;  endif; wp_reset_postdata(); ?>
                      <!-- End box style -->
                    </div>
                    <!-- End column -->
                  </div>
                  <!-- End row -->
                </div>
                <!-- end 2nd col -->
              </div>
              <!-- end column -->

              <div class="col-md-6 col-sm-12 col-12">
                <!-- Start One-Bottom-Box -->
                <div class="one-bottom-box">
                  <!-- Start Cat First Content -->
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'highlights',
                            'posts_per_page' => 3,
                            'offset' => 0,
                            'post__not_in'  =>  $lead,
                         ));
                         ?>

                      <?php if ( $the_category->have_posts()) : ?>
                      <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                      <?php  $lead[] = $post->ID; ?>
                      <div class="box-style">
                        <div class="box-left">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail();?>
                          </a>
                        </div>
                        <div class="box-right">
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                              <?php the_title(); ?>
                            </a></h2>
                        </div>
                        <div>

                        </div>
                      </div>
                      <?php endwhile;  endif; wp_reset_postdata(); ?>
                      <!-- End box style -->
                    </div>
                    <!-- End column -->
                  </div>
                  <!-- End row -->
                </div>
                <!-- end 2nd col -->
              </div>
              <!-- end column -->

            </div>

          </div>
          <!-- end lead 1st col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-0">
            <!-- Satrt Category Title -->
            <div class="cat-title-down">
              <?php
              // the query
              $the_category = new WP_Query( array(
              'category_name' => 'পুজিবাজারের-সব-সংবাদ',
              'posts_per_page' => 1,
              ));
	            if($the_category->have_posts()):
              while ($the_category->have_posts() ):$the_category->the_post();
              $cats = wp_get_post_categories($post->ID);
              if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
              $cat_lik = get_category_link($category->cat_ID);
              //  category lin & name
              $the_cat = get_the_category();
              $category_name = $the_cat[0]->cat_name;
              $category_link = get_category_link( $the_cat[0]->cat_ID );
              ?>
              <h1><a href="<?php echo $category_link ?>">
                  <?php echo $category_name ?>
                </a></h1>
              <?php
              endif;
              endwhile;
              endif;
              ?>
            </div>
            <!-- End cat title -->
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'পুজিবাজারের-সব-সংবাদ',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                      </a></h2>
                    <p>
                      <?php echo wp_trim_words( get_the_content(), 10, '...' );?>
                    </p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'পুজিবাজারের-সব-সংবাদ',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>

                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 3rd col -->
        </div>
        <!-- end row -->
      </section>
      <!-- End section -->

      <!-- =====================
            highlights Ads
      ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'হাইলাইটস',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->

      <!--==== ======================
            কোম্পানি সংবাদ
      ==============================-->
      <section id="company-news">
        <div class="cat-title-down">
          <?php
          // the query
          $the_category = new WP_Query( array(
          'category_name' => 'কোম্পানি-সংবাদ',
          'posts_per_page' => 1,
          ));
          if($the_category->have_posts()):
          while ($the_category->have_posts() ):$the_category->the_post();
          $cats = wp_get_post_categories($post->ID);
          if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
          $cat_lik = get_category_link($category->cat_ID);
          //  category lin & name
          $the_cat = get_the_category();
          $category_name = $the_cat[0]->cat_name;
		      $category_link = get_category_link( $the_cat[0]->cat_ID );
          ?>
          <h1><a href="<?php echo $category_link ?>">
              <?php echo $category_name ?>
            </a></h1>
          <?php
          endif;
          endwhile;
          endif;
          ?>
        </div>

        <div class="row">
          <?php
               // the query
               $the_category = new WP_Query( array(
                  'category_name' => 'কোম্পানি-সংবাদ',
                  'posts_per_page' => 1,
                   'offset' => 0,
                   'post__not_in'  => $lead,
               ));
              if($the_category->have_posts()):
               while ($the_category->have_posts() ):$the_category->the_post();
               ?>

          <div class="col-lg-5 col-md-5 col-12" id="pc-pd-0">
            <a class="thumbnail first" href="<?php the_permalink(); ?>">
              <span class="first-thumb">
                <?php the_post_thumbnail();?>
                <span>
            </a>
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
          <?php endwhile;  endif; wp_reset_postdata();?>
          <!-- end 1st column -->

          <div class="col-lg-7 col-md-7 col-12">
            <div class="row">
              <?php
                     // the query
                     $the_category = new WP_Query( array(
                        'category_name' => 'কোম্পানি-সংবাদ',
                        'posts_per_page' => 6,
                        'offset' => 1,
						            'post__not_in'  => $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
             
                     ?>
              <div class="col-lg-4 col-md-4 col-12" id="pc-pd-0">
                <a class="thumbnail second" href="<?php the_permalink(); ?>">
                  <span class="second-thumb">
                    <?php the_post_thumbnail();?>
                    <span>
                </a>
                <h3><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a></h3>
              </div>
              <?php endwhile;  endif; wp_reset_postdata();?>
              <!-- end 2nd column -->

            </div>
            <!-- end row -->
          </div>
          <!-- end 2nd column -->

        </div>
      </section>
      <!-- End Gallery -->

      <!-- =====================
          Company section Ads
      ========================= -->
      <section class="my-2">
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'কোম্পানি-সংবাদ',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <!-- Custom Post Value -->
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->

      <!-- ==================
        Box Category Section
      =========================-->
      <section id="second-sec">
        <div class="row">

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-0">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <?php
                // the query
                $the_category = new WP_Query( array(
                'category_name' => 'আজকের-সংবাদ',
                'posts_per_page' => 1,
                ));
                if($the_category->have_posts()):
                while ($the_category->have_posts() ):$the_category->the_post();
                $cats = wp_get_post_categories($post->ID);
                if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                $cat_lik = get_category_link($category->cat_ID);
                //  category lin & name
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
                <h1><a href="<?php echo $category_link ?>">
                    <?php echo $category_name ?>
                  </a></h1>
                <?php
                endif;
                endwhile;
                endif;
                ?>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'আজকের-সংবাদ',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,

                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'আজকের-সংবাদ',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 1st col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-0">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <div class="cat-title-down">


                <?php
                // the query
                $the_category = new WP_Query( array(
                'category_name' => 'বাজার-বিশ্লেষণ',
                'posts_per_page' => 1,
                ));
                if($the_category->have_posts()):
                while ($the_category->have_posts() ):$the_category->the_post();
                $cats = wp_get_post_categories($post->ID);
                if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                $cat_lik = get_category_link($category->cat_ID);
                //  category lin & name
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
                <h1><a href="<?php echo $category_link ?>">
                    <?php echo $category_name ?>
                  </a></h1>
                <?php
                endif;
                endwhile;
                endif;
                ?>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'বাজার-বিশ্লেষণ',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'বাজার-বিশ্লেষণ',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 2nd col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'সাক্ষাতকার'))); ?>">সাক্ষাৎকার</a>
                </h1>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'সাক্ষাতকার',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'সাক্ষাতকার',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 3rd col -->
        </div>
        <!-- end row -->
      </section>
      <!-- end section -->

      <!-- =====================
           Ajker News Ads
      ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'আজকের-সংবাদ',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->

      <!-- ==========Exclussive Category============ -->
      <section id="exclussive" class="my-2">
        <!-- Satrt Category Title -->
        <div class="cat-title-down">
          <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'এক্সক্লুসিভ'))); ?>">এক্সক্লুসিভ</a> </h1>
        </div>

        <div class="one-right-two">
          <!-- End cat title -->
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" id="pc-pd-5">
              <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'এক্সক্লুসিভ',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
              <div class="first-content">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail();?>
                </a>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                  </a></h2>
                <p>
                  <?php echo wp_trim_words( get_the_content(), 25, '...' );?>
                </p>
              </div>
              <?php endwhile;  endif; wp_reset_postdata();?>
            </div>
            <!-- End Column -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" id="pc-pd-5">
              <div class="row">
                <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'এক্সক্লুসিভ',
                        'posts_per_page' => 4,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                <div class="col-md-6 col-sm-12 col-12">
                  <div class="secound-content">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                      </a></h3>
                  </div>
                </div>
                <?php endwhile;  endif; wp_reset_postdata();?>
                <!-- End Column -->
              </div>
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End one right two category -->

      </section>
      <!-- section -->

      <!-- =====================
            Exclussive section Ads
      ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'এক্সক্লুসিভ',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->

      <!-- ==================
        Box Category Section
      =========================-->
      <section id="second-sec">
        <div class="row">
          <!-- জাতীয় ক্যাটাগরি -->
          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-0">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'জাতীয়'))); ?>">জাতীয়</a> </h1>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'জাতীয়',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,

                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'জাতীয়',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 1st col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'অর্থনীতি'))); ?>">অর্থনীতি</a> </h1>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'অর্থনীতি',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'অর্থনীতি',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 2nd col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'আন্তজার্তিক'))); ?>">আন্তর্জাতিক</a>
                </h1>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'আন্তজার্তিক',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'আন্তজার্তিক',
                      'posts_per_page' => 4,
                      'offset' => 1,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 3rd col -->
        </div>
        <!-- end row -->
      </section>
      <!-- end section -->

      <!-- =====================
         Bangladesh section Ads
      ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'জাতীয়',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->

      <!-- ==========sports Category============ -->
      <section id="sports" class="my-2">
        <!-- Satrt Category Title -->
        <div class="cat-title-down">
          <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'খেলা-ধুলা'))); ?>">খেলাধুলা</a> </h1>
        </div>
        <!-- End cat title -->
        <div class="one-right-two">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" id="pc-pd-5">
              <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'খেলা-ধুলা',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
              <div class="first-content">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail();?>
                </a>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                  </a></h2>
                <p>
                  <?php echo wp_trim_words( get_the_content(), 25, '...' );?>
                </p>
              </div>
              <?php endwhile;  endif; wp_reset_postdata();?>
            </div>
            <!-- End Column -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" id="pc-pd-5">
              <div class="row">
                <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'খেলা-ধুলা',
                        'posts_per_page' => 4,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                <div class="col-md-6 col-sm-12 col-12">
                  <div class="secound-content">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                      </a></h3>
                  </div>
                </div>
                <?php endwhile;  endif; wp_reset_postdata();?>
                <!-- End Column -->
              </div>
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End one right two category -->
      </section>
      <!-- section -->

      <!-- =====================
            Sports section Ads
      ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'খেলাধুলা',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->



      <!-- ========================
                 বিনোদন
      ========================== -->

      <section id="entertainment" class="my-2">
        <!-- Satrt Category Title -->
        <div class="cat-title-down">
          <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'বিনোদন'))); ?>"> বিনোদন </a> </h1>
        </div>
        <div class="entertainment">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-12" id="pc-pd-5">
              <?php
                // the query
                $the_category = new WP_Query( array(
                  'category_name' => 'বিনোদন',
                   'posts_per_page' => 1,
                   'offset' => 0,
                   'post__not_in'  => $lead,
                ));
                  ?>
              <?php if ( $the_category->have_posts() ) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <div class="overlay first">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail()?>
                </a>
                <div class="overlay-title">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_title(); ?>
                    </a></h2>
                  <!-- <p><?php echo wp_trim_words( get_the_content(), 25, '...' );?></p> -->
                </div>
              </div>
              <?php  endwhile; else : endif;wp_reset_postdata(); ?>
              <!-- end overlay -->
            </div>
            <!-- end column -->

            <div class="col-md-5 col-sm-12 col-12" id="pc-pd-5">
              <?php
                // the query
                $the_category = new WP_Query( array(
                  'category_name' => 'বিনোদন',
                   'posts_per_page' => 4,
                   'offset' => 1,
                   'post__not_in'  =>  $lead,
                ));
                  ?>
              <?php if ( $the_category->have_posts() ) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <div class="box-style">
                <div class="box-left">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail()?>
                  </a>
                </div>
                <div class="box-right">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_title(); ?>
                    </a></h2>
                </div>
              </div>
              <?php  endwhile; else : endif;wp_reset_postdata(); ?>
              <!-- End box style -->
            </div>
            <!-- End column -->

          </div>
        </div>
        <!-- End Left row row -->

      </section>
      <!-- end entertainment -->

      <!-- =====================
        Entertainment Section Ads
      ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'বিনোদন',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->


      <!-- ==================
              Box Category Section
            =========================-->
      <section id="second-sec">
        <div class="row">
          <!-- জাতীয় ক্যাটাগরি -->
          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-0">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <?php
                // the query
                $the_category = new WP_Query( array(
                'category_name' => 'corporate',
                'posts_per_page' => 1,
                ));
                if($the_category->have_posts()):
                while ($the_category->have_posts() ):$the_category->the_post();
                $cats = wp_get_post_categories($post->ID);
                if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                $cat_lik = get_category_link($category->cat_ID);
                 //  category lin & name
                 $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
                <h1><a href="<?php echo $category_link ?>">
                    <?php echo $category_name ?>
                  </a></h1>
                <?php
                endif;
                endwhile;
                endif;
                ?>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'corporate',
                            'posts_per_page' => 1,
                            'offset' => 0,
                            'post__not_in'  =>  $lead,

                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'corporate',
                            'posts_per_page' => 4,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 1st col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <?php
                // the query
                $the_category = new WP_Query( array(
                'category_name' => 'বিজ্ঞান-ও-প্রযুক্তি',
                'posts_per_page' => 1,
                ));
                if($the_category->have_posts()):
                while ($the_category->have_posts() ):$the_category->the_post();
                $cats = wp_get_post_categories($post->ID);
                if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                $cat_lik = get_category_link($category->cat_ID);
                //  category lin & name
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
                <h1><a href="<?php echo $category_link ?>">
                    <?php echo $category_name ?>
                  </a></h1>
                <?php
                endif;
                endwhile;
                endif;
                ?>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'বিজ্ঞান-ও-প্রযুক্তি',
                            'posts_per_page' => 1,
                            'offset' => 0,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'বিজ্ঞান-ও-প্রযুক্তি',
                            'posts_per_page' => 4,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 2nd col -->

          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <!-- Start One-Bottom-Box -->
            <div class="one-bottom-box">
              <!-- Satrt Category Title -->
              <div class="cat-title-down">
                <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID('স্বাস্থ্য',))); ?>"> স্বাস্থ্য </a>
                </h1>
              </div>
              <!-- End cat title -->

              <!-- Start Cat First Content -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'স্বাস্থ্য',
                            'posts_per_page' => 1,
                            'offset' => 0,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
                  <div class="overlay-small">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="overlay-small-title">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end main content -->

                  <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'স্বাস্থ্য',
                            'posts_per_page' => 4,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
                  <div class="box-style">
                    <div class="box-left">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                      </a>
                    </div>
                    <div class="box-right">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a></h2>
                    </div>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- End box style -->

                </div>
                <!-- End column -->
              </div>
              <!-- End row -->
            </div>
          </div>
          <!-- end 3rd col -->
        </div>
        <!-- end row -->
      </section>
      <!-- end section -->

      <!-- =====================
               Bangladesh section Ads
            ========================= -->
      <section>
        <div class="home-page-ads">
          <div class="row">
            <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'post_type' => 'ads',
                     'post_status' => 'publish',
                     'posts_per_page' => 3,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     'type' => 'কর্পোরেট',
                   ));
                   ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->

      <!-- ========================
                       চাকরির খবর
            ========================== -->

      <section id="entertainment">
        <!-- Satrt Category Title -->
        <div class="cat-title-down">
          <?php
          // the query
          $the_category = new WP_Query( array(
          'category_name' => 'চাকরির-খবর',
          'posts_per_page' => 1,
          ));
          if($the_category->have_posts()):
          while ($the_category->have_posts() ):$the_category->the_post();
          $cats = wp_get_post_categories($post->ID);
          if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
          $cat_lik = get_category_link($category->cat_ID);
                //  category lin & name
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
          <h1><a href="<?php echo $category_link ?>">
              <?php echo $category_name ?>
            </a></h1>
          <?php
          endif;
          endwhile;
          endif;
          ?>
        </div>
        <div class="entertainment">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-12" id="pc-pd-5">
              <?php
                // the query
                $the_category = new WP_Query( array(
                  'category_name' => 'চাকরির-খবর',
                   'posts_per_page' => 1,
                   'offset' => 0,
                   'post__not_in'  => $lead,
                ));
                  ?>
              <?php if ( $the_category->have_posts() ) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <div class="overlay first">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail()?>
                </a>
                <div class="overlay-title">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_title(); ?>
                    </a></h2>
                  <!-- <p><?php echo wp_trim_words( get_the_content(), 25, '...' );?></p> -->
                </div>
              </div>
              <?php  endwhile; else : endif;wp_reset_postdata(); ?>
              <!-- end overlay -->
            </div>
            <!-- end column -->

            <div class="col-md-5 col-sm-12 col-12" id="pc-pd-5">
              <?php
                // the query
                $the_category = new WP_Query( array(
                  'category_name' => 'চাকরির-খবর',
                   'posts_per_page' => 4,
                   'offset' => 1,
                   'post__not_in'  =>  $lead,
                ));
                  ?>
              <?php if ( $the_category->have_posts() ) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <div class="box-style">
                <div class="box-left">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail()?>
                  </a>
                </div>
                <div class="box-right">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_title(); ?>
                    </a></h2>
                </div>
              </div>
              <?php  endwhile; else : endif;wp_reset_postdata(); ?>
              <!-- End box style -->
            </div>
            <!-- End column -->

          </div>
        </div>
        <!-- End Left row row -->

      </section>
      <!-- end Job -->


      <!-- =====================
              Job Section Ads
            ========================= -->
      <section>
        <div class="home-page-ads my-2">
          <div class="row">
            <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'post_type' => 'ads',
                     'post_status' => 'publish',
                     'posts_per_page' => 3,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     'type' => 'চাকরির-খবর',
                   ));
                   ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end ads -->


      <!-- =====================
       Simple Category Section
      ====================== -->
      <section id="simple-cat" class="my-2">
        <div class="row">
          <!-- =====শিক্ষা-ও-শিল্প-সাহিত্য ক্যাটাগরি===== -->
          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <div class="cat-title-down">
              <?php
              // the query
              $the_category = new WP_Query( array(
              'category_name' => 'শিক্ষা-ও-শিল্প-সাহিত্য',
              'posts_per_page' => 1,
              ));
              if($the_category->have_posts()):
              while ($the_category->have_posts() ):$the_category->the_post();
              $cats = wp_get_post_categories($post->ID);
              if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
              $cat_lik = get_category_link($category->cat_ID);
                //  category lin & name
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
              <h1><a href="<?php echo $category_link ?>">
                  <?php echo $category_name ?>
                </a></h1>
              <?php
              endif;
              endwhile;
              endif;
              ?>
            </div>
            <!-- End cat title -->
            <?php
                 // the query
                 $the_category = new WP_Query( array(
                   'category_name' => 'শিক্ষা-ও-শিল্প-সাহিত্য',
                    'posts_per_page' => 1,
                    'offset' => 0,
                    'post__not_in'  =>  $lead,
                 ));
                if($the_category->have_posts()):
                 while ($the_category->have_posts() ):$the_category->the_post();
                 ?>
            <div class="first-content">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail();?>
              </a>
              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h2>

            </div>
            <?php endwhile;  endif; wp_reset_postdata();?>
            <!-- end main content -->
            <?php
                 // the query
                 $the_category = new WP_Query( array(
                   'category_name' => 'শিক্ষা-ও-শিল্প-সাহিত্য',
                    'posts_per_page' => 4,
                    'offset' => 1,
                    'post__not_in'  =>  $lead,
                 ));
                if($the_category->have_posts()):
                 while ($the_category->have_posts() ):$the_category->the_post();
                 ?>
            <div class="simple-style">
              <h2><span class="fas fa-angle-right"></span> <a href="<?php the_permalink(); ?>"
                  title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h2>
            </div>
            <?php endwhile;  endif; wp_reset_postdata();?>
            <!-- End box style -->
          </div>
          <!-- End column -->

          <!-- =====budget===== -->
          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <div class="cat-title-down">
              <?php
              // the query
              $the_category = new WP_Query( array(
              'category_name' => 'budget',
              'posts_per_page' => 1,
              ));
              if($the_category->have_posts()):
              while ($the_category->have_posts() ):$the_category->the_post();
              $cats = wp_get_post_categories($post->ID);
              if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
              $cat_lik = get_category_link($category->cat_ID);
                //  category lin & name
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>
              <h1><a href="<?php echo $category_link ?>">
                  <?php echo $category_name ?>
                </a></h1>
              <?php
              endif;
              endwhile;
              endif;
              ?>
            </div>
            <!-- End cat title -->
            <?php
                       // the query
                       $the_category = new WP_Query( array(
                         'category_name' => 'budget',
                          'posts_per_page' => 1,
                          'offset' => 0,
                          'post__not_in'  =>  $lead,
                       ));
                      if($the_category->have_posts()):
                       while ($the_category->have_posts() ):$the_category->the_post();
                       ?>
            <div class="first-content">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail();?>
              </a>
              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h2>

            </div>
            <?php endwhile;  endif; wp_reset_postdata();?>
            <!-- end main content -->
            <?php
                       // the query
                       $the_category = new WP_Query( array(
                         'category_name' => 'budget',
                          'posts_per_page' => 4,
                          'offset' => 1,
                          'post__not_in'  =>  $lead,
                       ));
                      if($the_category->have_posts()):
                       while ($the_category->have_posts() ):$the_category->the_post();
                       ?>
            <div class="simple-style">
              <h2> <span class="fas fa-angle-right"></span> <a href="<?php the_permalink(); ?>"
                  title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h2>
            </div>
            <?php endwhile;  endif; wp_reset_postdata();?>
            <!-- End box style -->
          </div>
          <!-- End column -->

          <!-- =====স্বাস্থ্য ক্যাটাগরি===== -->
          <div class="col-md-4 col-sm-12 col-12" id="pc-pd-5">
            <div class="cat-title-down">
              <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID('অন্যান্য'))); ?>"> অন্যান্য </a> </h1>
            </div>
            <!-- End cat title -->
            <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'অন্যান্য',
                            'posts_per_page' => 1,
                            'offset' => 0,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
            <div class="first-content">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail();?>
              </a>
              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h2>

            </div>
            <?php endwhile;  endif; wp_reset_postdata();?>
            <!-- end main content -->
            <?php
                         // the query
                         $the_category = new WP_Query( array(
                           'category_name' => 'অন্যান্য',
                            'posts_per_page' => 4,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                         ));
                        if($the_category->have_posts()):
                         while ($the_category->have_posts() ):$the_category->the_post();
                         ?>
            <div class="simple-style">
              <h2> <span class="fas fa-angle-right"></span> <a href="<?php the_permalink(); ?>"
                  title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h2>
            </div>
            <?php endwhile;  endif; wp_reset_postdata();?>
            <!-- End box style -->
          </div>
          <!-- End column -->
        </div>
        <!-- end row -->
      </section>
      <!-- end section -->

      <!--==== ======================
            Start Gallery Section
      ==============================-->
      <section id="gallery">
        <div class="cat-title-down">
          <h1> <a href="<?php echo esc_url(get_category_link( get_cat_ID( 'ছবি-গ্যালারি'))); ?>"> ফটো গ্যালারি </a>
          </h1>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
              <?php
               // the query
               $the_category = new WP_Query( array(
                 'category_name' => 'ছবি-গ্যালারি',
                  'posts_per_page' => 1,

               ));
              if($the_category->have_posts()):
               while ($the_category->have_posts() ):$the_category->the_post();
               // $gallery[] = $post->ID;
               // ===========Get Image Link===========
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

               ?>

              <div class="col-lg-5 col-md-5 col-12" id="pc-pd-3">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php the_title();?>"
                  data-image="<?php echo esc_url($featured_img_url) ?>" data-target="#image-gallery">
                  <img class="img-thumbnail first-thumb" src="<?php echo esc_url($featured_img_url) ?>"
                    alt="<?php the_title();?>">
                  <i class="fa fa-camera" aria-hidden=""></i>

                </a>
              </div>
              <?php endwhile;  endif; wp_reset_postdata();?>
              <!-- end 1st column -->

              <div class="col-lg-7 col-md-7 col-12">
                <div class="row">
                  <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'ছবি-গ্যালারি',
                        'posts_per_page' => 6,
                        'offset' => 1,

                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     // $gallery[] = $post->ID;
                     // ===========Get Image Link===========
                      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'400x100');

                     ?>
                  <div class="col-lg-4 col-md-4 col-12" id="pc-pd-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php the_title();?>"
                      data-image="<?php echo esc_url($featured_img_url) ?>" data-target="#image-gallery">
                      <img class="img-thumbnail" src="<?php echo esc_url($featured_img_url) ?>"
                        alt="<?php the_title();?>">
                      <i class="fa fa-camera" aria-hidden=""></i>
                    </a>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                  <!-- end 2nd column -->

                </div>
                <!-- end row -->
              </div>
              <!-- end 2nd column -->

            </div>

            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="image-gallery-title"></h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                        class="fas fa-angle-left"></i>
                    </button>

                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                        class="fas fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->

    </div>
    <!-- End Body Part Col -->


    <!-- ===============================
              Sidebar Part
    =============================== -->
    <div class="col-md-3 col-sm-12 col-12">
      <!-- ==========Company Ads=========== -->
      <section>
        <div class="company-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 6,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'company-ads',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
            <div class="col-md-12 col-sm-12 col-12">
              <div class="company-ads">
                <a href="<?php echo esc_url($url) ?>" target="_blank">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
        </div>
      </section>
      <!-- end company sensitive ads -->

      <!-- =========================
                Start Tabbar Part
          ============================ -->
      <section>
        <div class="tab-bar my-2">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latest" role="tab"
                aria-controls="home" aria-selected="true"> সর্বশেষ সংবাদ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="profile"
                aria-selected="false">সর্বাধিক পঠিত</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- !st Tab Content -->
            <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="home-tab">
              <div class="tab-news">
                <ul>
                  <?php
                  $latest = new WP_Query( array(
                    'posts_per_page' => 10, /* how many post you need to display */
                    'offset' => 0,
                    'category__not_in' => array(31337),
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post', /* your post type name */
                    'post_status' => 'publish'

                  ) );
                    ?>
                  <?php if ( $latest->have_posts() ) : ?>
                  <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
                  <li>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail();?>
                        </a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                          </a></h2>
                      </div>
                    </div>
                  </li>
                  <?php endwhile; wp_reset_postdata(); else : endif; ?>
                </ul>
              </div>
            </div>
            <!-- end content -->
            <!-- 2nd tab Content -->
            <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="profile-tab">
              <div class="tab-news">
                <ul>
                  <?php
                  $popular = new WP_Query( array(
                    'meta_key' => 'my_post_viewed',
                    'orderby' => 'meta_value_num',
                    'posts_per_page' => 10,
                    'offset' => 0,
                    'category__not_in' => array(31337),
                  ) );
                    ?>
                  <?php if ( $popular->have_posts() ) : ?>
                  <?php while ( $popular->have_posts() ) : $popular->the_post(); ?>
                  <li>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail();?>
                        </a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                          </a></h2>
                      </div>
                    </div>
                  </li>
                  <?php endwhile; else :  endif; wp_reset_postdata();?>
                </ul>

              </div>
            </div>

          </div>
          <!-- End content -->
        </div>
        <!-- End TabBar -->


        <!-- =====================
          Price sensitive Ads
      ========================= -->
        <section>
          <div class="price-sensitive-ads">
            <div class="sidebar-title">
              <h1>প্রাইস সেন্সিটিভ</h1>
            </div>
            <div class="row">
              <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 30,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'price-sensitive-ads',
             ));
             ?>
              <?php if ( $the_category->have_posts()) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
              <div class="col-md-12 col-sm-12 col-12">
                <div class="price-sensitive-ads">
                  <a href="<?php echo esc_url($url) ?>" target="_blank">
                    <?php the_post_thumbnail();?>
                  </a>
                </div>
              </div>
              <?php endwhile; endif; wp_reset_postdata();?>

            </div>

            <!-- button -->

            <button type="button" id="price-sensitive" name="button"> <a
                href="https://www.sharebazarnews.com/archives/type/price-sensitive-ads"> আরও দেখুন</a> </button>

          </div>
        </section>
        <!-- end price sensitive ads -->



        <!-- ========== Home Sidebar Ads  ==========-->
        <aside>
          <?php dynamic_sidebar('home-sidebar');?>
        </aside>
        <!-- End Main Sidebar -->

        <div class="today-news">
          <button type="button" id="more-btn" name="button"> <a
              href="https://www.sharebazarnews.com/archives/category/আজকের-সংবাদ"> আজকের সব সংবাদ </a> </button>
        </div>

        <!-- Main Sidebar Ads -->
        <aside>
          <?php get_sidebar();?>
        </aside>

      </section>
    </div>
    <!-- End Sidebar Part -->
  </div>
</div>
<!-- End Main Body Section -->
<?php get_footer(); ?>