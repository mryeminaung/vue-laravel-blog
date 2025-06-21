<script setup>
  import { Link } from '@inertiajs/vue3'
  import BlogCard from "@/components/BlogCard.vue"

  defineProps({
    blogs: Object
  })
</script>

<template>
  <section class="bg-[#F9FAFB] pt-20">
    <!-- Section Header -->
    <div class="flex flex-col items-center text-center space-y-5 mb-12">
      <h2 class="text-4xl font-bold">Latest Blogs</h2>
      <p class="text-xl max-w-2xl">
        Discover the latest insights, tutorials, and tips from our creative coding community.
      </p>
    </div>
    <!-- Blog Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
      <BlogCard v-for="blog in blogs" :blog="blog" />
    </div>
    <div class="grid items-center justify-center py-16">
      <Link :href="route('blogs.index')"
        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition">
      Load More Blogs
      </Link>
    </div>
  </section>
</template>
