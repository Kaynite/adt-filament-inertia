<script setup lang="ts">
import EventPost from '@/Components/EventPost.vue';
import PageLayout from '@/Layouts/PageLayout.vue';

type Event = {
    id: number;
    title: string;
    slug: string;
    excerpt: string | null;
    content: string;
    event_date: string /* Date */ | null;
    from: string /* Date */ | null;
    to: string /* Date */ | null;
    location: string | null;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
    thumbnail: string | null;
    gallery: string[];
}

defineProps<{
    events: Event[]
}>()
</script>

<template>
    <Head title="News & Events" />

    <PageLayout title="News & Events">
        <!--Articles Section-->
        <section class="news-events pt-40 pb-80 position-relative">
            <img src="@images/Vector5.svg" class="position-absolute branch-circles" alt="" />
            <div class="container">
                <div class="page-locat mb-24">
                    <a href="index.html" class="colored">Home</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>Life At ArabDT</span>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>News & Events</span>
                </div>
                <div class="section-title mb-40">
                    <h4>Highlights</h4>
                    <h2>The <span class="colored">Latest</span> News & Events</h2>
                </div>
                <div class="main-blog">
                    <div class="img-container mb-16">
                        <img src="@images/news-events-banner.png" class="img-fluid w-100" alt="" />
                    </div>
                    <h3 class="title colored mb-8">ArabDT Fourth Anniversary</h3>
                    <div class="blog-date mb-16 secondary-color">
                        <img src="@images/calender.svg" class="img-fluid" alt="" />
                        <span>22 March 2023</span>
                    </div>
                    <p class="regular-parag mb-24">
                        ArabDT is proud to celebrate its 4th anniversary with a special event on Mar 22, 2023 at The Nile
                        hotel.
                        The event will be a night of celebration, networking,
                        and inspiration, as we look back on our accomplishments and look forward to the future.
                        The evening will begin with a cocktail reception, followed by a sit-down dinner.
                        There will be live music, dancing, and a special presentation about ArabDT's history and future
                        plans.
                        We will also be honoring our employees and partners who have made ArabDT a success...
                    </p>
                    <a href="Third Anniversary.html" class="main-btn">Find More</a>
                </div>
                <div class="row mt-40">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                                <img src="@images/new-app-launch.png" class="img-fluid w-100 card-img-top" alt="..." />

                            </div>
                            <div class="card-body">
                                <h3 class="title colored mb-8">New App Launch</h3>
                                <div class="blog-date mb-16 secondary-color">
                                    <img src="@images/calender.svg" class="img-fluid" alt="" />
                                    <span>22 March 2023</span>
                                </div>
                                <p class="regular-parag mb-24">
                                    Last week ArabDT has launched a new app to the market, the app is going Last week ArabDT
                                    has launched a new app to the market, the app is going Last week ArabDT has launched a
                                    new app to the market, the app is going...
                                </p>
                                <a href="#" class="main-btn">Find More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card ">
                            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                                <img src="@images/project-celebration.png" class="card-img-top" alt="..." />

                            </div>
                            <div class="card-body">
                                <h3 class="title colored mb-8">Project Celebration</h3>
                                <div class="blog-date mb-16 secondary-color">
                                    <img src="@images/calender.svg" class="img-fluid" alt="" />
                                    <span>22 March 2023</span>
                                </div>
                                <p class="regular-parag mb-24">
                                    We are excited to celebrate the launch of our new project, we have different features in
                                    it that will be introduced to the market, and we will celebrate the project being
                                    launched finally soon
                                </p>
                                <a href="#" class="main-btn">Find More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Explore Section-->
        <section class="explore py-80 bg-sec">
            <div class="container">
                <div class="section-title mb-24">
                    <h4>All Events & News</h4>
                    <h2>What The Media Says About <span class="colored">ArabDT</span> </h2>
                </div>

                <div class="row mt-40">
                    <EventPost :event="event" v-for="event in events" />
                </div>
            </div>
        </section>
    </PageLayout>
</template>