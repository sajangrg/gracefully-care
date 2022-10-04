<?php 
/* Template Name: Stories Template */ 
get_header(); ?>
<section class="common-inner-heading">
  <img src="<?php bloginfo('template_directory');?>/assets/images/lady-making-bed.png" class="img-fluid" alt="Inner Banner Image"/>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="header-content">
          <h1>Stories</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Stories</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="service-intro">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 py-5">
        <div class="service-text-content">
          <h1>Stories</h1>
          <strong class="d-block mb-3">Latest Story: Andrina and Donna</strong>
          <p>Do you enjoy sharing in moments of human experience? Are you empathetic, caring and good at building relationships? Would you love a job where you can choose your own hours with competitive pay and consistent shifts?</p>
          <p>If so, we think you might make the perfect Support Star, and we’re hiring now!</p>
          <p>We’re looking for stars with great people skills, who are patient, compassionate, and have a smile on their face. People who want to make a difference in the life of others and are part of their local community. We are an organisation that embraces diversity and individuality and likes to have fun!</p>
          <p>We understand that everyone has different needs, abilities, and aspirations. We are committed to delivering our support with a flexible approach that focuses on your unique needs and empowers you to take control of your life.</p>
          <a href="#" class="btn btn-primary text-white">See The Story</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section home-stories py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="owl-carousel stories-carousel">
          <div class="item">
            <div class="row align-items-center story-block d-flex w-100">
              <div class="col-lg-6">
                <div class="stories-content-wrapper">
                  <span>Stores #1</span>
                  <a href="#" class="story-heading">
                    <h1>Chloe &amp; Catherine</h1>
                  </a>
                  <p>Chloe and Catherine are the perfect match! After a skiing accident in 2017, Chloe was left paralysed. Catherine has been there through the ups and the downs of Chloe’s journey, supporting her with her daily routine, household cleaning and as a new found friend.</p>
                  <a href="#" class="btn btn-primary text-white">Watch</a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="video-thumbnail-stories-wrapper">
                  <img src="<?php bloginfo('template_directory');?>/assets/images/Nurse_and_client_smiling_together_banner_large.jpg" alt="High Level Support" class="img-fluid">
                  <a href="javascript:void(0)" data-href="https://vimeo.com/539344382" class="venobox video-icon" data-autoplay="true" data-vbtype="video">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/icons/play-icon.svg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row align-items-center story-block d-flex w-100">
              <div class="col-lg-6">
                <div class="stories-content-wrapper">
                  <span>Stores #2</span>
                  <a href="#" class="story-heading">
                    <h1>Chloe &amp; Catherine</h1>
                  </a>
                  <p>Chloe and Catherine are the perfect match! After a skiing accident in 2017, Chloe was left paralysed. Catherine has been there through the ups and the downs of Chloe’s journey, supporting her with her daily routine, household cleaning and as a new found friend.</p>
                  <a href="#" class="btn btn-primary text-white">Watch</a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="video-thumbnail-stories-wrapper">
                  <img src="<?php bloginfo('template_directory');?>/assets/images/Nurse_and_client_smiling_together_banner_large.jpg" alt="High Level Support" class="img-fluid">
                  <a href="javascript:void(0)" data-href="https://vimeo.com/539344382" class="venobox video-icon" data-autoplay="true" data-vbtype="video">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/icons/play-icon.svg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- GET STARTED -->
<section class="section home-get-started py-5">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="common-heading text-center mb-5">
          <h1>Get Started</h1>
          <p>If you would like more information about booking a Support Star, or would like to register for work with us, please get in touch!</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="get-started-block text-center">
          <div class="get-started-image">
            <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="Thumbnail" class="img-fluid">
          </div>
          <div class="get-started-info">
            <h1>Book a Support Star</h1>
            <p>If you would like more information about booking a Support Star, let’s have a chat about your needs.</p>
          </div>
          <a href="#" class="btn btn-primary text-white px-4 py-2">Find out more</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="get-started-block text-center">
          <div class="get-started-image">
            <img src="<?php bloginfo('template_directory');?>/assets/images/join-our-team-alliance-community.jpg" alt="Thumbnail" class="img-fluid">
          </div>
          <div class="get-started-info">
            <h1>Join our team</h1>
            <p>Have you got what it takes? Become a Support Star with Alliance Community to make a difference in your community.</p>
          </div>
          <a href="#" class="btn btn-secondary px-4 py-2">Become a Support Star</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>