<script setup lang="ts">
defineProps<{
    member: TeamMember
}>()
</script>


<template>
    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
        <div class="card">
            <img :src="member.image" class="card-img-top" :alt="member.name" v-if="member.image" />
            <div class="card-body">
                <h5 class="card-title colored mb-8">{{ member.name }}</h5>
                <p class="card-text text-gray">{{ member.position }}</p>
            </div>
        </div>
    </div>
</template>