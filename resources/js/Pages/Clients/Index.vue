<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';
import RequestQuotation from "@/Components/RequestQuotation.vue";
import ClientTestimonial from "@/Components/ClientTestimonial.vue";
import Breadcrumb from '@/Components/Breadcrumb.vue';
defineProps<{
    clients: Client[],
    testimonials: Testimonial[]
}>()

</script>

<template>
    <Head title="Clients" />
    <PageLayout title="Clients">
        <!--About-Partners Section-->
        <section class="about-partners pt-40 pb-80 position-relative">
            <img src="@images/Vector5.svg" class="position-absolute blog-circles" />
            <div class="container">
                <div class="page-locat mb-24">
                    <Breadcrumb :items="[{ title: 'About' }, { title: 'Clients' }]" />
                </div>
                <div class="section-header text-center mb-40">
                    <h4>Highlights</h4>
                    <h2>
                        Providing <span class="colored">Personalized</span> Care For Every Client
                    </h2>
                </div>
                <div class="about-clients">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 mb-40" v-for="client in clients" :key="client.id">
                            <img :src="client.logo" class="img-fluid" :alt="client.name" v-if="client.logo" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--About-Testimonials Section-->
        <section class="about-testimonial py-80 bg-sec position-relative">
            <img src="@images/Group 18.svg" class="position-absolute ab-testi-img1" />
            <img src="@images/Group 18.svg" class="position-absolute ab-testi-img2" />
            <div class="container position-relative z-1">
                <div class="section-title mb-40">
                    <h4>Testimonials</h4>
                    <h2>
                        What Our <span class="colored">Clients</span> Say About
                        <span class="colored">ArabDT</span>
                    </h2>
                </div>
                <div class="about-testi-body">
                    <div class="row">
                        <ClientTestimonial :testimonial="testimonial" v-for="testimonial in testimonials"
                            :key="testimonial.id" />
                    </div>
                </div>
            </div>
        </section>

        <RequestQuotation />
    </PageLayout>
</template>
