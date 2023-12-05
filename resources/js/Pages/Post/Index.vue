<template>
    <div class="w-1/2 mx-auto py-4">
        <div>
            <Link class="btn" :href="route('post.create')">+New Post</Link>
        </div>
        <div class="mt-4 py-4 border-t border-gray-300" v-for="post in posts" :key="post.id">
            <Link class="font-medium text-gray-800 text-lg" :href="route('post.show', post.id)">{{post.title}}</Link>
            <div class="font-sm text-gray-500 mt-2">
                {{post.content}}
            </div>
        </div>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps(['posts'])
</script>

<style scoped>

</style>
