<template>
    <div class="w-1/2 mx-auto py-4">
        <div class="text-green-600 p-4 rounded-full border border-green-600 bg-green-400 font-medium mt-4 mb-4" v-if="page.props.flash">{{page.props.flash}}</div>

        <div>
            <Link class="btn" :href="route('post.create')">+New Post</Link>
        </div>
        <div class="mt-4 py-4 border-t border-gray-300" v-for="post in posts" :key="post.id">
            <Link class="font-medium text-gray-800 text-lg" :href="route('post.show', post.id)">{{post.title}}</Link>
            <div class="font-sm text-gray-500 mt-2">
                {{post.content}}
            </div>
            <div class="mt-4">
                <Link class="btn" :href="route('post.edit', post.id)">Edit</Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Link, usePage} from "@inertiajs/vue3";

const page = usePage();

defineProps(['posts'])
</script>

<style scoped>

</style>
