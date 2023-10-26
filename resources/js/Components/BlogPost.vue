<script setup lang="ts">
defineProps<{
    post: Post
}>()
</script>

<template>
    <div class="col-12 col-md-6 col-lg-4 filter all">
        <div class="card Dev mb-24">
            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                <img src="@images/Dev1.svg" class="card-img-top" alt="..." />
                <h2>{{ post.category?.name }}</h2>
            </div>
            <div class="card-body">
                <h5 class="colored mb-8">{{ post.title }}</h5>
                <div class="blog-date mb-16 secondary-color">
                    <img src="@images/Date-Time1.svg" class="img-fluid" alt="" />
                    <span>{{ post.created_at }}</span>
                </div>
                <p class="regular-parag mb-16">
                    {{ post.excerpt }}
                </p>
                <Link :href="route('blog.show', post.slug)" class="d-flex align-items-center">
                <h6>Read More</h6>
                <img src="@images/Arrow-Bold.svg" alt="" />
                </Link>
            </div>
        </div>
    </div>
</template>
