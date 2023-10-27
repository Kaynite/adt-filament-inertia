<script setup lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue';
import Navbar from '@/Components/Navbar.vue';

defineProps<{
    title: string
}>()
</script>

<template>
    <MainLayout>
        <section class="hero branch position-relative" id="hero-sec">
            <img src="@images/Group 844.svg" class="position-absolute branch-hero-bg img-fluid" />
            <img src="@images/Rocket-Sub.svg" class="position-absolute branch-rocket" />
            <img src="@images/Asset11.svg" class="img-fluid position-absolute cirls" />
            <div class="container">
                <Navbar />
                <h1>{{ title }}</h1>
            </div>
        </section>
        <slot />
    </MainLayout>
</template>
