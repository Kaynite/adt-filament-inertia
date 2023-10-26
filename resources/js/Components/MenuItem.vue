<script setup lang="ts">

defineProps<{
    url: string,
    src: string,
    label: string
}>()

</script>

<template>
    <li>
        <Link class="dropdown-item" :href="url"><img :src="src" class="m-2">{{ label }}</Link>
    </li>
</template>