<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';
import BlogPost from '@/Components/BlogPost.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';
defineProps<{
    posts: Post[]
}>()
</script>

<template>
    <Head title="Blog" />

    <PageLayout title="Blog">
        <!--Articles Section-->
        <section class="articles pt-40 pb-80 position-relative">
            <img src="@images/Vector5.svg" class="position-absolute branch-circles" />
            <div class="container">
                <div class="page-locat mb-24">
                    <Breadcrumb :items="[{ title: 'Blog' }]" />
                </div>
                <div class="section-title mb-40">
                    <h4>Highlights</h4>
                    <h2>Recently Added <span class="colored">Articles</span></h2>
                </div>
                <div class="main-blog card Dev" v-if="posts.length">
                    <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8"
                        style="height: 550px;">
                        <img src="@images/Dev1.svg" class="card-img-top" />
                        <h2>{{ posts[0].category?.name }}</h2>
                    </div>
                    <h3 class="title colored mb-8">{{ posts[0].title }}</h3>
                    <div class="blog-date mb-16 secondary-color">
                        <img src="@images/Date-Time1.svg" class="img-fluid" />
                        <span>{{ posts[0].created_at }}</span>
                    </div>
                    <p class="regular-parag mb-24">
                        {{ posts[0].excerpt }}
                    </p>
                    <Link :href="route('blog.show', posts[0].slug)" class="main-btn">Read More</Link>
                </div>
                <div class="row mt-40">
                    <div class="col-12 col-md-6" v-for="post in posts.slice(1, 3)">
                        <div class="card Dev">
                            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                                <img src="@images/Dev1.svg" class="card-img-top" />
                                <h2>{{ post.category?.name }}</h2>
                            </div>
                            <div class="card-body">
                                <h3 class="title colored mb-8">{{ post.title }}</h3>
                                <div class="blog-date mb-16 secondary-color">
                                    <img src="@images/Date-Time1.svg" class="img-fluid" />
                                    <span>{{ post.created_at }}</span>
                                </div>
                                <p class="regular-parag mb-24">
                                    {{ post.excerpt }}
                                </p>
                                <Link :href="route('blog.show', post.slug)" class="main-btn">Read More</Link>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Explore Section-->
        <section class="blog explore py-80 bg-sec">
            <div class="container">
                <div class="section-title mb-24">
                    <h4>All Articles</h4>
                    <h2>Explore More From <span class="colored">ArabDT</span> Blog</h2>
                </div>

                <div class="articles-gallery blog d-flex gap-24 text-gray">
                    <div class="mb-4 portf-gallery d-flex gap-24 text-gray">
                        <button class="btn btn-default filter-button active" data-filter="all">
                            <img src="@images/All.svg" class="img-fluid" />
                            <span>All</span>
                        </button>
                        <button class="btn btn-default filter-button text-gray" data-filter="hr"><img
                                src="@images/HR (1) 1.svg" class="img-fluid" />
                            <span>HR</span>
                        </button>
                        <button class="btn btn-default filter-button text-gray" data-filter="it"><img src="@images/IT.svg"
                                class="img-fluid" />
                            <span>IT</span>
                        </button>
                        <button class="btn btn-default filter-button text-gray" data-filter="ui-ux"><img
                                src="@images/UI-UX.svg" class="img-fluid" />
                            <span>UI/UX</span>
                        </button>
                        <button class="btn btn-default filter-button text-gray" data-filter="development"><img
                                src="@images/Dev 1 (1).svg" class="img-fluid" />
                            <span>Development</span></button>
                        <button class="btn btn-default filter-button text-gray" data-filter="qc">
                            <img src="@images/Quality1-1.svg" class="img-fluid" />
                            <span>QA & QC</span>
                        </button>
                    </div>

                    <div class="row mt-40">
                        <BlogPost :post="post" v-for="post in posts" />
                    </div>
                </div>
            </div>
        </section>
    </PageLayout>
</template>
