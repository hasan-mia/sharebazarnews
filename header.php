<!DOCTYPE html>
<html <?php language_attributes();?> lang="en" dir="ltr">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
   <?php if(is_front_page() || is_home()){
         echo get_bloginfo('name');
     } else{
         echo wp_title('');
     }?>
 </title>
<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58163380-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-58163380-1');
</script>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- =======================
             Header Section
    ======================== -->
  <section class="header_wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-12">
          <div class="main-logo">
            <!-- Dynamic Custom Logo-->
            <?php
            if ( has_custom_logo() ) {
                 the_custom_logo();
                }
              else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
              }
            ?>
          </div>
          <div class="head-date">
            <p>
            <?php
          // $somoy = the_time( 'j F Y, l' );
          // echo $somoy;
         echo 'আজ: '. bn_date(date('l, d M Y')). 'ইং,'. do_shortcode(' [bangla_date]'). ','. do_shortcode(' [hijri_date]');
        //   $time = time();
        //   $Bdate = BDdate($time);
        //   echo ", " .$Bdate. ' বঙ্গাব্দ';
          
          ?>
          </p>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-6 col-sm-12 col-12">
          <!-- <div class="header-ads float-right"> -->
              <?php dynamic_sidebar('main-header-ads');?>
          <!-- </div> -->
        </div>
        <!-- End column -->
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
    <!-- End Logo -->
  </section>
<header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars fa-2x"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
          wp_nav_menu( array(
              'theme_location'  => 'primary',
              'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'ul',
              'container_class' => 'navbar-nav mr-auto',
              'container_id'    => 'navbarSupportedContent',
              'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
          <!-- Search Form -->
          <?php get_search_form(); ?>
        </div>

      </nav>
  </header>
    <!-- End Main Menu -->
    
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
             'type' => 'মেনুবার',
           ));
           ?>
          <?php if ( $the_category->have_posts()) : ?>
          <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <!-- Get Custom Field Meta Value -->
          <?php $url= get_post_meta($post->ID, 'custom-link', true); ?>
          <div class="col-md-4 col-sm-12 col-12" id="mbl-left">
            <div class="header-down-ads">
              <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
            </div>
          </div>
          <?php endwhile; endif; wp_reset_postdata();?>
        </div>
      </div>
    </div>
  <!-- End Header Section -->