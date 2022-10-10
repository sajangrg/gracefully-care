<?php 
/* Template Name: Feedback, Compliments, Complaints Template */ 
get_header(); ?>
<section class="common-inner-heading">
  <img src="<?php bloginfo('template_directory');?>/assets/images/lady-making-bed.png" class="img-fluid" alt="Inner Banner Image"/>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="header-content">
          <h1>Feedback, Compliments and Complaints</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo home_url('/contact-us'); ?>">Contact</a></li>
              <li class="breadcrumb-item active" aria-current="page">Feedback, Compliments and Complaints</li>
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
          <h3 class="fw-bolder mt-4 mb-3">Feedback, Compliments and Complaints</h3>
          <p>Alliance Community is dedicated to a continuous improvement of the way we work and the quality of support we provide to our clients. A crucial part in achieving that is your honest throughts and feedback. We encourage you to share your opinion and welcome all feedback (big and small), as it helps us improve our processes and, at the end, how we support you.</p>
          <p>To share your feedback, compliment or complaint with us, please use the form below. If you prefer to speak to someone about your feedback, compliment or complaint, please call us during business hours on <a href="tel:1300 769 155">1300 769 155</a>.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="enquiry-type" placeholder="enquiry">
          <label for="enquiry-type">Enquiry Type</label>
        </div>
      </div>
      <div class="col-lg-12 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="location" placeholder="Location">
          <label for="location">Location</label>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="first_name" placeholder="First Name">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="last_name" placeholder="Last Name">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="col-lg-12 mb-4">
        <div class="form-floating">
          <input type="email" class="form-control" id="email" placeholder="Email Address">
          <label for="Email Address">Email Address</label>
        </div>
      </div>
      <div class="col-lg-12 mb-4">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
          <label for="message">Message</label>
        </div>
      </div>
      <div class="offset-4 col-lg-4 mb-4">
        <input type="submit" class="btn btn-secondary w-100 py-2 fs-6" value="Submit"/>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>