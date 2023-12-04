<template>
    <div class="container mx-auto p-4">
        <div class="font-bold text-2xl text-gray-500 text-center my-4">
            {{post.title}}
        </div>
        <div class="text-lg text-gray-700">
            {{post.content}}
        </div>
        <div class="mt-4">
            <Link class="btn" :href="route('post.index')">Back</Link>
        </div>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    post: Array
})
</script>

<style scoped>

</style>
