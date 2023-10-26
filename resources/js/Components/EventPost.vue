<script setup lang="ts">

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
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card mb-24">
            <div class="img-container d-flex flex-column justify-content-center align-items-center gap-8">
                <img :src="event.thumbnail" class="img-fluid w-100 card-img-top" :alt="event.title"
                    v-if="event.thumbnail" />
            </div>

            <div class="card-body">
                <h5 class="colored mb-8">{{ event.title }}</h5>
                <div class="blog-date mb-16 secondary-color">
                    <img src="@images/calender.svg" class="img-fluid" />
                    <span>{{ event.event_date }}</span>
                </div>
                <p class="regular-parag mb-16">{{ event.excerpt }}</p>
                <Link :href="route('events.show', event.slug)" class="d-flex align-items-center">
                <h6>Find More</h6>
                <img src="@images/Arrow-Bold.svg" />
                </Link>
            </div>
        </div>
    </div>
</template>