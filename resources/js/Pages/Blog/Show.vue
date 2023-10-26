<script setup lang="ts">
import PageLayout from '@/Layouts/PageLayout.vue';

defineProps<{
    post: Post
}>()
</script>

<template>
    <Head :title="post.title" />

    <PageLayout title="Blog">
        <section class="articles pt-40 pb-80 position-relative">
            <img src="@images/Vector5.svg" class="position-absolute branch-circles" alt="" />
            <div class="container">
                <!--BreadCrumb-->
                <div class="page-locat mb-24">
                    <a href="index.html" class="colored">Home</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <a href="blog.html" class="colored">Blog</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>How UI/UX Add A Great Value</span>
                </div>
                <!--End BreadCrumb-->
                <div class="section-title mb-40">
                    <h4>Highlights</h4>
                </div>

                <div class="main-blog">
                    <div class="img-container mb-5">
                        <img :src="post.thumbnail" class="img-fluid w-100" alt="" v-if="post.thumbnail" />
                    </div>
                    <h2 class="title mb-8">{{ post.title }}</h2>
                    <div class="blog-date mb-16 secondary-color">
                        <img src="@images/Date-Time1.svg" class="img-fluid" alt="" />
                        <span>{{ post.created_at }}</span>
                    </div>
                    <div class="regular-parag mb-24" v-html="post.content"></div>
                    <h3 class="title"> Share Article:</h3>
                    <div class="socials gap-8 mt-4 d-flex align-items-center">
                        <a href="#"><img src="@images/blog-fb.svg" alt=""></a>
                        <a href="#"><img src="@images/blog-linked.svg" alt=""></a>
                        <a href="#"><img src="@images/blog-twitter.svg" alt=""></a>
                        <a href="#"><img src="@images/blog-insta.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </section>

        <!--Explore Section-->
        <section class="blog  explore py-80 bg-sec">
            <div class="container">
                <div class="section-title mb-24">
                    <h4>You Might Also Like</h4>
                    <h2>Explore More From <span class="colored">ArabDT</span> Blog</h2>
                </div>

                <div class="row mt-40">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card Dev mb-24">
                            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                                <img src="@images/Dev1.svg" class="card-img-top" alt="..." />
                                <h2>Development</h2>
                            </div>
                            <div class="card-body">
                                <h5 class="colored mb-8">Angular Trends</h5>
                                <div class="blog-date mb-16 secondary-color">
                                    <img src="@images/Date-Time1.svg" class="img-fluid" alt="" />
                                    <span>22 March 2023</span>
                                </div>
                                <p class="regular-parag mb-16">
                                    Angular has been rising everyday, with new trends day by day,
                                    let me introduce the newest trends ...
                                </p>
                                <a href="#" class="d-flex align-items-center">
                                    <h6>Read More</h6>
                                    <img src="@images/Arrow-Bold.svg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card Quality mb-24">
                            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                                <img src="@images/Quality1-2.svg" class="card-img-top" alt="..." />
                                <h2>QA & QC</h2>
                            </div>
                            <div class="card-body">
                                <h5 class="colored mb-8">QC Process</h5>
                                <div class="blog-date mb-16 secondary-color">
                                    <img src="@images/Date-Time1.svg" class="img-fluid" alt="" />
                                    <span>22 March 2023</span>
                                </div>
                                <p class="regular-parag mb-16">
                                    The QC process is getting more deeper yet valuable, it is
                                    consists of several activities and phases...
                                </p>
                                <a href="#" class="d-flex align-items-center">
                                    <h6>Read More</h6>
                                    <img src="@images/Arrow-Bold.svg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card IT mb-24">
                            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                                <img src="@images/IT 1 (1).svg" class="card-img-top" alt="..." />
                                <h2>IT</h2>
                            </div>
                            <div class="card-body">
                                <h5 class="colored mb-8">IT Updates</h5>
                                <div class="blog-date mb-16 secondary-color">
                                    <img src="@images/Date-Time1.svg" class="img-fluid" alt="" />
                                    <span>22 March 2023</span>
                                </div>
                                <p class="regular-parag mb-16">
                                    IT is getting more and more modern than it used to be before,
                                    therefore staying alert and knowing what has...
                                </p>
                                <a href="#" class="d-flex align-items-center">
                                    <h6>Read More</h6>
                                    <img src="@images/Arrow-Bold.svg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

    </PageLayout>
</template>