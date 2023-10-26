<script setup lang="ts">
defineProps<{
    jobFair: JobFair
}>()
</script>


<template>
    <div class="card">
        <img :src="jobFair.thumbnail" class="card-img-top img-fluid" :alt="jobFair.title" v-if="jobFair.thumbnail" />
        <div class="card-body">
            <h5 class="card-title colored mb-16">{{ jobFair.title }}</h5>
            <div class="d-flex datetime align-items-center mb-16 w-100">
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
            <p class="fz-20 text-gray normal-lineheight mb-16">{{ jobFair.excerpt }}</p>
            <Link :href="route('job-fairs.show', jobFair.slug)" class="d-flex align-items-center">
            <h6>Find More</h6>
            <img src="@images/Arrow-Bold.svg" />
            </Link>
        </div>
    </div>
</template>