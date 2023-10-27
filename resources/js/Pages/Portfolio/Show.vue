<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';

defineProps<{
    project: Project
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
                <div class="row slick-slider d-flex justify-content-around">
                    <div class="card w-10 h-100 mx-4">
                        <div class="card-body ">
                            <p class="portfolio-text mt-2">
                                What I saw from the ArabDT/Patexs follow-up, improvement and response to its users were
                                exceptional in the organization of follow-up
                            </p>
                            <div class="d-flex mt-3 ">
                                <div class="portfolio-text "><img src="@images/profileone.svg" /></div>
                                <div class="mx-2 mt-2">
                                    <p class="portfolio-title m-0">Hossam Salem</p>
                                    <p class="portfolio-text m-0">CTO At ElMakttaba ElShamlah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </PageLayout>
</template>
