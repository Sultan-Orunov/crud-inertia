<template>
    <div v-for="post in posts" :key="post.id">
        {{post.title}}
    </div>
</template>

<script setup>
defineProps(['posts'])
</script>

<style scoped>

</style>
