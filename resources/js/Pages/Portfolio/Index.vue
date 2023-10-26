<script setup lang="ts">
import PortfolioProject from '@/Components/PortfolioProject.vue';
import PageLayout from '@/Layouts/PageLayout.vue';

defineProps<{
    projects: Project[]
}>()
</script>

<template>
    <Head title="Portfolio" />

    <PageLayout title="Portfolio">
        <section class="Portfolio position-relative pb-80">
            <div class="section-filter pt-40 pb-80 position-relative">
                <div class="container">
                    <div class="page-locat mb-24">
                        <a href="index.html" class="colored">Home</a>
                        <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                        <span>Portfolio</span>
                    </div>
                    <div class="section-title mb-40">
                        <h4>Our Portfolio</h4>
                        <h2>We Work With A <span class="colored">Goal</span></h2>
                    </div>

                    <div class="mb-4 portf-gallery d-flex gap-24 text-gray">
                        <button class="btn btn-default filter-button active" data-filter="all">All</button>
                        <button class="btn btn-default filter-button text-gray" data-filter="Websites">Websites</button>
                        <button class="btn btn-default filter-button text-gray" data-filter="MobileApps">Mobile
                            Apps</button>
                        <button class="btn btn-default filter-button text-gray" data-filter="ERPSystems">ERP
                            Systems</button>
                        <button class="btn btn-default filter-button text-gray" data-filte="Intranets">Intranets</button>
                    </div>

                    <div class="row">
                        <PortfolioProject :project="project" v-for="project in projects" />
                    </div>
                </div>
            </div>
        </section>
    </PageLayout>
</template>