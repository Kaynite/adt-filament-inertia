<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import { Splide, SplideSlide, SplideTrack } from '@splidejs/vue-splide';

defineProps<{
    project: Project,
    testimonials: Testimonial[],
}>()
</script>


<template>
    <Head :title="project.name" />

    <PageLayout title="Portfolio Details">
        <!--PotfolioDetails Section-->
        <section class="PortfolioDetails pt-40 pb-80 position-relative">
            <div class="container">
                <div class="page-locat mb-24">
                    <Breadcrumb :items="[{ title: 'Portfolio', url: route('portfolio.index') }, { title: project.name }]" />
                </div>

                <h4>{{ project.name }}</h4>
                <h2>{{ project.name }}</h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12 ERP Systems">
                        <div class="card w-100">
                            <div class="bg-color">
                                <img :src="project.thumbnail" class="card-img-top badge-area" :alt="project.name"
                                    v-if="project.thumbnail" />
                                <div class="badge-work">
                                    <span class="ERP Systems">{{ project.category?.name }}</span>
                                </div>
                            </div>

                            <div class="card-body" v-html="project.content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonials Section-->
        <section class="Testimonials bg-VeryLight">
            <div class="container">
                <h4>Testimonials</h4>
                <div class="d-flex justify-content-between">
                    <h2>What Our <span class="colored">Clients </span>Say About <span class="colored">ArabDT </span></h2>
                </div>

                <div class="row d-flex justify-content-around">
                    <Splide :options="{ rewind: true, perPage: 2, type: 'slide', pagination: false, padding: '5rem' }"
                        :has-track="false" class="my-5">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev"
                                style="width: 40px; height: 40px; top: -8%; right: 42px; left: unset; z-index: 2;">
                                <img src="@images/Icons-Light-left.svg" class="img-fluid" id="bck-btn" />
                            </button>
                            <button class="splide__arrow splide__arrow--next"
                                style="width: 40px; height: 40px; top: -8%; right: -8px; z-index: 2;">
                                <img src="@images/Icons-Light-right.svg" class="img-fluid" id="nxt-btn" />
                            </button>
                        </div>
                        <SplideTrack>
                            <SplideSlide v-for="testimonial in testimonials" :key="testimonial.id">
                                <div class="card w-10 h-100 mx-4">

                                    <div class="card-body ">
                                        <p class="portfolio-text mt-2">{{ testimonial.testimonial }}</p>
                                        <div class="d-flex mt-3 ">
                                            <div class="portfolio-text ">
                                                <img v-if="testimonial.image" :src="testimonial.image" />
                                            </div>
                                            <div class="mx-2 mt-2">
                                                <p class="portfolio-title m-0">{{ testimonial.name }}</p>
                                                <p class="portfolio-text m-0">{{ testimonial.position }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </SplideSlide>
                        </SplideTrack>
                    </Splide>
                </div>
            </div>
        </section>
    </PageLayout>
</template>
