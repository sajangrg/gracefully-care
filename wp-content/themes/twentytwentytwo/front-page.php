<?php
/**
 * The template for displaying the front-page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gracefully_care
 */
  get_header(); ?>
<div class="home-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="banner-content">
          <h1 class="mb-3">Supporting you to live the life you want</h1>
          <a href="#" class="btn btn-primary text-white py-2 px-3">The latest COVID-19 information</a>
        </div>
      </div>
    </div>
  </div>
  <div class="ratio ratio-16x9 banner-videos">
    <iframe src="https://player.vimeo.com/video/229681278?h=cb47d00ad8&autoplay=1&title=0&byline=0&portrait=0&muted=1&loop=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<div class="services py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="common-heading">
          <h1>Our Services</h1>
          <p>Are you looking for disability support or aged care for you or a loved one? As a registered NDIS provider we deliver quality services, from a helping hand with daily living to around-the-clock, high needs support. Our clinical roots enable us to provide the highest standards of support. All our Support Stars are vetted in person and matched to your specific needs. In 2020 we won an award for our commitment to safety, so you and your loved ones can rest assured the services you receive are the best in the industry and are tailored specifically to you.</p>
        </div>
      </div>
    </div>
    <div class="row home-services justify-content-center mt-5">
      <div class="col-6 col-sm-3">
        <a href="/en/services/aged-care">
          <div class="icon">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-tree.svg" alt="Aged Care" class="default">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-tree-hover.svg" alt="Aged Care" class="hover">
          </div>
          <h4>Aged Care</h4>
        </a>
      </div><div class="col-6 col-sm-3">
        <a href="/en/services/disability-support">
          <div class="icon">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-hands.svg" alt="Disability Support" class="default">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-hands-hover.svg" alt="Disability Support" class="hover">
          </div>
          <h4>Disability Support</h4>
        </a>
      </div><div class="col-6 col-sm-3">
        <a href="/en/services/high-level-support">
          <div class="icon">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/high-level-support-small.png" alt="High Level Support" class="default">
            <img src="<?php bloginfo('template_directory');?>/assets/images/icons/high-level-support-hover_small.png" alt="High Level Support" class="hover">
          </div>
          <h4>High Level Support</h4>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="section home-support py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="offset-lg-1 col-lg-6">
        <img src="<?php bloginfo('template_directory');?>/assets/images/img-home-2.jpg" alt="Alliance Community Support Star Staff in Action" class="img-fluid">
      </div>
      <div class="col-lg-6 col-xl-5">
        <div class="section-header header-article">
          <div id="support-pro-content" class="common-heading">
            <strong class="font-title">Support Star</strong>
            <h1>Become a Support Star!</h1>
            <p>Do you have the right qualities? Become a Support Star with Alliance Community to make a difference in your community.</p>
          </div>                            
          <a href="#" class="btn btn-primary text-white">Become a Support Star</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section home-events-news py-5">
   <div class="container pb-5">
      <div class="common-heading text-center">
        <h1>Register for Events</h1>
      </div>
      <div class="row list-cards justify-content-center">
        <div class="col-lg-4">
          <div class="item">
            <a href="#">
              <div class="thumbnail">
                <div class="mask">
                    <div class="img" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg');">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <div class="card-text">
              <a href="#">
                <h4 class="card-title">Support Worker Open Day - Sydney</h4>
              </a>
              <div class="d-flex align-items-center justify-content-between">
                <dl class="card-info">
                  <dt><i class="bi bi-geo-alt"></i></dt>
                  <dd>107 Juliet Street...</dd>
                </dl>
                <dl class="card-info">
                  <dt><i class="bi bi-calendar2"></i></dt>
                  <dd>6 Oct 2022</dd>
                </dl>
              </div>
              <p>Are you interested in starting a career as a care professional or already have industry...</p>
            </div>
            <a href="#" class="btn-more">Learn More</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <a href="#">
              <div class="thumbnail">
                <div class="mask">
                    <div class="img" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg');">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <div class="card-text">
              <a href="#">
                <h4 class="card-title">Support Worker Open Day - Sydney</h4>
              </a>
              <div class="d-flex align-items-center justify-content-between">
                <dl class="card-info">
                  <dt><i class="bi bi-geo-alt"></i></dt>
                  <dd>107 Juliet Street...</dd>
                </dl>
                <dl class="card-info">
                  <dt><i class="bi bi-calendar2"></i></dt>
                  <dd>6 Oct 2022</dd>
                </dl>
              </div>
              <p>Are you interested in starting a career as a care professional or already have industry...</p>
            </div>
            <a href="#" class="btn-more">Learn More</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <a href="#">
              <div class="thumbnail">
                <div class="mask">
                    <div class="img" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg');">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <div class="card-text">
              <a href="#">
                <h4 class="card-title">Support Worker Open Day - Sydney</h4>
              </a>
              <div class="d-flex align-items-center justify-content-between">
                <dl class="card-info">
                  <dt><i class="bi bi-geo-alt"></i></dt>
                  <dd>107 Juliet Street...</dd>
                </dl>
                <dl class="card-info">
                  <dt><i class="bi bi-calendar2"></i></dt>
                  <dd>6 Oct 2022</dd>
                </dl>
              </div>
              <p>Are you interested in starting a career as a care professional or already have industry...</p>
            </div>
            <a href="#" class="btn-more">Learn More</a>
          </div>
        </div>
      </div>
      <div class="d-block text-center my-5">
        <a class="btn btn-primary text-white fw-bold px-5 py-3" href="#">
          <span>View Local Events</span>
        </a>
      </div>
      <hr class="events-news-spacing">
  </div>
  <div class="container">
    <div class="common-heading text-center">
      <h1>What’s New</h1>
    </div>
    <div class="row list-cards justify-content-center">
      <div class="col-lg-4">
        <div class="item">
          <a href="#">
            <div class="thumbnail">
              <div class="mask">
                  <div class="img" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg');">
                  <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="">
                </div>
              </div>
            </div>
          </a>
          <div class="card-text">
            <a href="#">
              <h4 class="card-title">Support Worker Open Day - Sydney</h4>
            </a>
            <div class="d-flex align-items-center justify-content-between">
              <dl class="card-info">
                <dt><i class="bi bi-geo-alt"></i></dt>
                <dd>107 Juliet Street...</dd>
              </dl>
              <dl class="card-info">
                <dt><i class="bi bi-calendar2"></i></dt>
                <dd>6 Oct 2022</dd>
              </dl>
            </div>
            <p>Are you interested in starting a career as a care professional or already have industry...</p>
          </div>
          <a href="#" class="btn-more">Learn More</a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="item">
          <a href="#">
            <div class="thumbnail">
              <div class="mask">
                  <div class="img" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg');">
                  <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="">
                </div>
              </div>
            </div>
          </a>
          <div class="card-text">
            <a href="#">
              <h4 class="card-title">Support Worker Open Day - Sydney</h4>
            </a>
            <div class="d-flex align-items-center justify-content-between">
              <dl class="card-info">
                <dt><i class="bi bi-geo-alt"></i></dt>
                <dd>107 Juliet Street...</dd>
              </dl>
              <dl class="card-info">
                <dt><i class="bi bi-calendar2"></i></dt>
                <dd>6 Oct 2022</dd>
              </dl>
            </div>
            <p>Are you interested in starting a career as a care professional or already have industry...</p>
          </div>
          <a href="#" class="btn-more">Learn More</a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="item">
          <a href="#">
            <div class="thumbnail">
              <div class="mask">
                  <div class="img" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg');">
                  <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="">
                </div>
              </div>
            </div>
          </a>
          <div class="card-text">
            <a href="#">
              <h4 class="card-title">Support Worker Open Day - Sydney</h4>
            </a>
            <div class="d-flex align-items-center justify-content-between">
              <dl class="card-info">
                <dt><i class="bi bi-geo-alt"></i></dt>
                <dd>107 Juliet Street...</dd>
              </dl>
              <dl class="card-info">
                <dt><i class="bi bi-calendar2"></i></dt>
                <dd>6 Oct 2022</dd>
              </dl>
            </div>
            <p>Are you interested in starting a career as a care professional or already have industry...</p>
          </div>
          <a href="#" class="btn-more">Learn More</a>
        </div>
      </div>
    </div>
    <div class="d-block text-center my-5">
      <a class="btn btn-primary text-white fw-bold px-5 py-3" href="#">
        <span>View Local Events</span>
      </a>
    </div>
  </div>
</div>
<!-- GET STARTED -->
<div class="section home-get-started py-5">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-12">
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
            <img src="<?php bloginfo('template_directory');?>/assets/images/AC_NSW-Open-Day-20225.jpg" alt="Thumbnail" class="img-fluid">
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
</div>
<?php get_footer();?>