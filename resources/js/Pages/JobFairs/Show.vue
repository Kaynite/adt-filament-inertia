<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';
defineProps<{
    jobFair: JobFair
}>()
</script>

<template>
    <Head :title="jobFair.title" />

    <PageLayout title="Job Fairs">
        <section class="third_anni pt-40 pb-80 position-relative">
            <div class="container">
                <div class="page-locat mb-24">
                    <Breadcrumb :items="[
                        { title: 'Careers' },
                        { title: 'Job Fairs', url: route('job-fairs.index') },
                        { title: jobFair.title }
                    ]" />
                </div>
                <div class="card">
                    <img :src="jobFair.thumbnail" class="card-img-top" :alt="jobFair.title" v-if="jobFair.thumbnail" />
                    <div class="card-body">
                        <h2 class="card-title title-color mb-16">{{ jobFair.title }}</h2>
                        <div class="d-flex datetime align-items-center mb-24 w-100">
                            <div class="date d-flex align-items-center w-50 justify-content-start">
                                <img src="@images/Date-Time1.svg" />
                                <h6>
                                    {{ jobFair.event_date }}
                                    <span class="fw-normal">({{ jobFair.from }} - {{ jobFair.to }})</span>
                                </h6>
                            </div>
                            <div class="locate d-flex align-items-center w-50">
                                <img src="@images/Location (1).svg" />
                                <h6 class="secondary-color">{{ jobFair.location }}</h6>
                            </div>
                        </div>
                        <div class="title-color fz-22" v-html="jobFair.content"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Event-Gallery Section-->

        <section class="center slider">
            <div v-for="image in jobFair.gallery" :key="image.id">
                <img :src="image">
            </div>
        </section>
    </PageLayout>
</template>
