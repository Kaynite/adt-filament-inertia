<script setup lang="ts">
import Navbar from '@/Components/Navbar.vue';
import MainLayout from '@/Layouts/MainLayout.vue';

defineOptions({
  layout: MainLayout
})
</script>

<template>
  <Head title="ArabDT" />

  <!--Hero Section-->
  <section class="hero home position-relative" id="hero-sec">
    <div class="hero-socials position-absolute h-lg-100">
      <a href="https://www.facebook.com/arabdtco">
        <img src="@images/Facebook.svg" alt="Facebook"></a>
      <a href="https://www.linkedin.com/company/arabdt/mycompany/">
        <img src="@images/LinkedIn.svg" alt="LinkedIn"></a>
      <a href="#"> <img src="@images/insta.svg" alt="Instagram"></a>
      <a href="#"><img src="@images/twitter.svg" alt="Twitter"></a>
    </div>

    <div class="container">
      <Navbar />

      <div class="row position-absolute hero-text-container">
        <div class="col-12 col-md-7 hero-text text-center text-lg-start d-flex flex-column justify-content-center gap-24">
          <h1>
            The <span class="colored">Right</span> Professional Partner
            <span class="colored">Choice</span>
          </h1>
          <p class="regular-parag mr-5">
            Unleash your potential with <span class="colored">ArabDT</span> unmatched software solutions. Partner with
            the best in the industry for Cutting-Edge <span class="colored">innovation</span> and seamless integration
          </p>
          <Link :href="route('clients.index')" class="main-btn">Discover More</Link>
        </div>
        <div class="col-12 col-md-5">
          <div class="imgs-container position-relative">
            <img src="@images/Bg-Img.svg" class="img-fluid d-none d-lg-block" alt="">
            <img class="position-absolute hero-img img-fluid d-none d-lg-block" src="@images/Img.svg " alt="">
            <img src="@images/Asset11.svg" class="img-fluid position-absolute Asset d-none d-lg-block" alt="">
            <img src="@images/Rocket.svg" class="img-fluid position-absolute Rocket d-none d-lg-block" alt="">
          </div>
        </div>
      </div>
    </div>

    <img src="@images/Vector2.svg" class="position-absolute Vector2 img-fluid d-none d-lg-block" alt="">
    <img src="@images/OBJECTS.svg" class="position-absolute Vector3 img-fluid d-none d-lg-block" alt="">
  </section>

  <!--About Section-->
  <section class="about position-relative py-80">
    <img src="@images/Vector5.svg" class="position-absolute img-fluid d-none d-lg-block about-circles" alt="">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7 mb-24 about-text d-flex flex-column gap-40">
          <div class="section-title">
            <h4>About Us</h4>
            <h2>Arab <span class="colored">Digital</span><br> Transformation</h2>
          </div>
          <p class="regular-parag">
            Arab Digital Transformation journey started in early 2019, with one principal core value <span
              class="colored">"We care"</span> At ArabDT, we aspire to help our clients grow and make the most of
            digital technologies to innovate for their growth
          </p>
          <Link :href="route('pages.history')" class="main-btn">Know More</Link>
        </div>
        <div class="col-12 col-lg-5">
          <div class="img-container position-relative">
            <img src="@images/mask-group2.png" class="img-fluid" alt="" />
            <div class="highlighted-box radius-8 trans-3 hight-vision position-absolute">
              <div class="position-relative mb-8">
                <h6 class="mb-8">Our Vision</h6>
                <span class="high-line position-absolute trans-3"></span>
              </div>
              <div class="d-flex align-items-center">
                <img src="@images/Vision.svg" class="img-fluid trans-3" alt="" />
                <p>Being the first strategic
                  partners to our clients</p>
              </div>
            </div>
            <div class="highlighted-box radius-8 trans-3 hight-mission position-absolute">
              <div class="position-relative mb-8">
                <h6 class="mb-8">Our Mission</h6>
                <span class="high-line position-absolute trans-3"></span>
              </div>
              <div class="d-flex align-items-center">
                <img src="@images/Icons-Light4.svg" class="img-fluid trans-3" alt="" />
                <p>Best Software quality
                  with minimum effort</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
