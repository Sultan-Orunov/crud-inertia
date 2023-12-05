<template>
    <div class="w-1/2 mx-auto pt-8">
        <h1 class="font-semibold text-indigo-600 text-4xl text-center mb-4">Add new post</h1>
        <form>
            <div class="pb-4">
                <input class="w-full border-gray-300 rounded-full p-4 text-lg placeholder:text-gray-400" type="text" placeholder="Post title..."/>
            </div>
            <div>
                <textarea class="w-full border-gray-300 rounded-full p-4 text-lg placeholder:text-gray-400 h-32" placeholder="Post content"></textarea>
            </div>
        </form>
        <div class="mt-4 flex justify-between">
            <Link class="btn" method="post">Create</Link>
            <Link class="btn" :href="route('post.index')">Back</Link>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Create",
    components: {Link}
}
</script>

<style scoped>

</style>
