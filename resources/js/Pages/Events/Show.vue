<script setup lang="ts">
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
    event: Event
}>()
</script>

<template>
    <Head :title="event.title" />

    <PageLayout title="News & Events">
        <section class="third_anni pt-40 pb-80 position-relative">
            <div class="container">
                <div class="page-locat mb-24">
                    <a href="index.html" class="colored">Home</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>Life At ArabDT</span>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <a href="news-events-list.html" class="colored">News & Events</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>ArabDT Job Fair</span>
                </div>
                <div class="card">
                    <img :src="event.thumbnail" class="card-img-top" :alt="event.title" v-if="event.thumbnail" />
                    <div class="card-body">
                        <h2 class="card-title title-color mb-16">{{ event.title }}</h2>
                        <div class="d-flex datetime align-items-center mb-24 w-100">
                            <div class="date d-flex align-items-center w-50 justify-content-start">
                                <img src="@images/Date-Time1.svg" alt="" />
                                <h6>
                                    {{ event.event_date }}
                                    <span class="fw-normal">({{ event.from }} - {{ event.to }})</span>
                                </h6>
                            </div>
                            <div class="locate d-flex align-items-center w-50">
                                <img src="@images/Location (1).svg" alt="" />
                                <h6 class="secondary-color">{{ event.location }}</h6>
                            </div>
                        </div>
                        <div class="title-color fz-22" v-html="event.content"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Event-Gallery Section-->


        <section class="center slider">
            <div v-for="image in event.gallery">
                <img :src="image">
            </div>
        </section>
    </PageLayout>
</template>