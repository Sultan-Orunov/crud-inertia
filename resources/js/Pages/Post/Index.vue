<template>
    <div class="w-96 mx-auto">

        <div class="mt-4 border-t border-gray-300" v-for="post in posts" :key="post.id">
            <Link class="font-medium text-gray-500" :href="route('post.show', post.id)">{{post.title}}</Link>
            <div class="font-sm text-gray-800">
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
