<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';
import JobFairPost from '@/Components/JobFairPost.vue';

defineProps<{
    jobFairs: JobFair[]
}>()
</script>

<template>
    <Head title="Openings" />

    <PageLayout title="Openings">
        <!--Latest-Job-Fair Section-->
        <section class="latest-jobfair">
            <div class="container">
                <div class="page-locat mb-24 mt-5">
                    <a href="index.html" class="colored">Home</a>
                    <span><img src="@images/Icons-Outlined.svg" /></span>
                    <span>Careers</span>
                    <span><img src="@images/Icons-Outlined.svg" /></span>
                    <span>Job Fairs</span>
                </div>
                <div class="section-title mb-40">
                    <h4>Highlights</h4>
                    <h2>Latest <span class="colored">Job Fairs</span></h2>
                </div>
                <div class="card" v-if="jobFairs.length">
                    <img src="@images/pexels-shoeb-khan-2973323 1.jpg" class="card-img-top img-fluid" />
                    <div class="card-body">
                        <h3 class="card-title colored title mb-16">{{ jobFairs[0].title }}</h3>
                        <div class="d-flex datetime align-items-center mb-16 w-100">
                            <div class="date d-flex align-items-center w-50 justify-content-start">
                                <img src="@images/Date-Time1.svg" />
                                <h6>
                                    {{ jobFairs[0].event_date }}<span class="fw-normal">({{ jobFairs[0].from }} - {{
                                        jobFairs[0].to }})</span>
                                </h6>
                            </div>
                            <div class="locate d-flex align-items-center w-50">
                                <img src="@images/Location (1).svg" />
                                <h6 class="secondary-color">{{ jobFairs[0].location }}</h6>
                            </div>
                        </div>
                        <p class="regular-parag mb-24">
                            {{ jobFairs[0].excerpt }}
                        </p>
                        <Link :href="route('job-fairs.show', jobFairs[0].slug)" class="branch-main-btn">Find More</Link>
                    </div>
                </div>
            </div>
        </section>

        <!--Explore-Job-Fair Section-->
        <section class="explore-jobfair py-80 bg-sec position-relative">
            <div class="container">
                <div class="section-title mb-40">
                    <h4>All Job Fairs</h4>
                    <h2>Explore <span class="colored">ArabDT</span> Job Fairs</h2>
                </div>
                <JobFairPost :job-fair="fair" v-for="fair in jobFairs" :key="fair.id" />
            </div>
        </section>
    </PageLayout>
</template>
