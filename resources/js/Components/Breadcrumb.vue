<script lang="ts" setup>
type BreadcrumbItem = {
    title: string,
    url?: string | null | undefined
};

defineProps<{
    items: BreadcrumbItem[]
}>()
</script>

<template>
    <Link :href="route('home')" class="colored">Home</Link>

    <template v-for="(item, index) in items" :key="index">
        <span class="mx-1"><img src="@images/Icons-Outlined.svg" /></span>
        <Link v-if="item.url" :href="item.url" class="colored">{{ item.title }}</Link>
        <span v-else>{{ item.title }}</span>
    </template>
</template>
