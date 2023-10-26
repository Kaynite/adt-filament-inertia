<script setup lang="ts">

defineProps<{
    testimonial: Testimonial
}>()

</script>

<template>
    <div class="col-12 col-md-6">
        <div class="test-box mb-24">
            <p class="mb-24">
                {{ testimonial.testimonial }}
            </p>
            <div class="person d-flex align-items-center gap-8">
                <img :src="testimonial.image" alt="" v-if="testimonial.image" />
                <div class="person-detl">
                    <h6>{{ testimonial.name }}</h6>
                    <span>{{ testimonial.position }}</span>
                </div>
            </div>
        </div>
    </div>
</template>