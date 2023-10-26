<script setup lang="ts">
import PageLayout from "@/Layouts/PageLayout.vue";

defineProps<{
    images: Image[]
}>()

const getClass = (index: number): string => {
    return {
        0: "col-lg-12",
        1: "col-lg-6",
        2: "col-lg-4"
    }[index] ?? "col-lg-3"
}
</script>

<template>
    <Head title="Gallery" />

    <PageLayout title="Gallery">
        <section class="moments pt-40 pb-80 position-relative">
            <div class="container">
                <div class="page-locat mb-24">
                    <a href="index.html" class="colored">Home</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>Life At ArabDT</span>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>Gallery</span>
                </div>
                <div class="section-title mb-40">
                    <h4>Photo Album</h4>
                    <h2>Our Memorable <span class="colored">Moments</span></h2>
                </div>
                <div class="moments-gallery d-flex gap-24 mb-40 text-gray">
                    <button class="btn btn-default filter-button active" data-filter="all">
                        <div class="d-flex align-items-center gap-8 ">
                            <img src="@images/All.svg" class="img-fluid" alt="" />
                            <span>All</span>
                        </div>
                    </button>
                    <button class="btn btn-default filter-button text-gray" data-filter="Anniversaries">
                        <div class="d-flex align-items-center gap-8 ">
                            <img src="@images/Anniversary.svg" class="img-fluid" alt="" />
                            <span>Anniversaries</span>
                        </div>
                    </button>
                    <button class="btn btn-default filter-button text-gray" data-filter="Celebrations">
                        <div class="d-flex align-items-center gap-8  ">
                            <img src="@images/Celebration (1) 1.svg" class="img-fluid" alt="" />
                            <span>Celebrations</span>
                        </div>
                    </button>
                    <button class="btn btn-default filter-button text-gray" data-filter="Trips">
                        <div class="d-flex align-items-center gap-8">
                            <img src="@images/Trips (2) 1.svg" class="img-fluid" alt="" />
                            <span>Trips</span>
                        </div>
                    </button>
                    <button class="btn btn-default filter-button text-gray" data-filter="Intranets">
                        <div class="d-flex align-items-center gap-8 ">
                            <img src="@images/JobFair (1) 1.svg" class="img-fluid" alt="" />
                            <span>Job Fairs</span>
                        </div>
                    </button>
                    <button class="btn btn-default filter-button text-gray" data-filter="Intranets">
                        <div class="d-flex align-items-center gap-8 ">
                            <img src="@images/Fun-Outing 1.svg" class="img-fluid" alt="" />
                            <span>Outings</span>
                        </div>
                    </button>

                </div>
                <div class="row popup-gallery">
                    <div class="col-12 filter Anniversaries" :class="getClass(index)" v-for="(image, index) in images">
                        <a :href="image.image ?? '#'">
                            <img :src="image.image" class="img-fluid w-100" alt="" v-if="image.image" />
                            <h5 class="colored mb-24">{{ image.caption }}</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </PageLayout>
</template>
