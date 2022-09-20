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
    <iframe src="https://player.vimeo.com/video/39346172?h=cb47d00ad8&autoplay=1&title=0&byline=0&portrait=0&muted=1&loop=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<div class="services py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="common-heading">
          <h1>Our Services</h1>
          <p>Are you looking for disability support or aged care for you or a loved one? As a registered NDIS provider we deliver quality services, from a helping hand with daily living to around-the-clock, high needs support. Our clinical roots enable us to provide the highest standards of support. All our Support Stars are vetted in person and matched to your specific needs. In 2020 we won an award for our commitment to safety, so you and your loved ones can rest assured the services you receive are the best in the industry and are tailored specifically to you.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>