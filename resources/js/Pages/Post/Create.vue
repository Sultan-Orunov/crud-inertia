<template>
    <div class="w-1/2 mx-auto pt-8">
        <h1 class="font-semibold text-indigo-600 text-4xl text-center mb-4">Add new post</h1>

        <form @submit.prevent="store">
            <div class="pb-4">
                <input v-model="form.title" class="w-full border-gray-300 rounded-full p-4 text-lg placeholder:text-gray-400" type="text" placeholder="Post title..."/>
                <div class="text-red-500" v-if="form.errors.title">{{form.errors.title}}</div>
            </div>
            <div>
                <textarea v-model="form.content" class="w-full border-gray-300 rounded-full p-4 text-lg placeholder:text-gray-400 h-32" placeholder="Post content"></textarea>
                <div class="text-red-500" v-if="form.errors.content">{{form.errors.content}}</div>
            </div>
            <div class="mt-4 flex justify-between">
                <button class="btn" type="submit">Create</button>
                <Link class="btn" :href="route('post.index')">Back</Link>
            </div>
        </form>

    </div>
</template>

<script setup>
import {Link, useForm} from "@inertiajs/vue3";

const form = useForm({
    title: '',
    content: ''
})

const store = () => form.post(route('post.store'))
</script>

<style scoped>

</style>
