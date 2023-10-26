<script setup lang="ts">
defineProps<{
    project: Project
}>()
</script>

<template>
    <div class="card col-lg-6 filter ERPSystems">
        <div class="bg-color">
            <img :src="project.thumbnail" class="card-img-top badge-area" :alt="project.name" v-if="project.thumbnail" />
            <div class="badge-work">
                <span>{{ project.category?.name }}</span>
            </div>
        </div>

        <div class="card-body">
            <h5><span class="colored">{{ project.name }}</span></h5>

            <p class="text-paragraph mt-4">
                {{ project.excerpt }}
            </p>
            <button class="findMore-btn mt-3">
                <Link :href="route('portfolio.show', project.slug)">Find More</Link>
            </button>
        </div>
    </div>
</template>