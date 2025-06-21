<script setup>
  import { Link } from '@inertiajs/vue3'
  import BlogLayout from '@/layouts/BlogLayout.vue'
  import BlogYouMayLike from '@/components/BlogYouMayLike.vue'
  import BlogComments from '@/components/BlogComments.vue';

  defineProps({ blog: Object, relatedBlogs: Object });
</script>

<template>
  <BlogLayout>
    <!-- Back Navigation -->
    <section class="bg-[#F9FAFB] py-5">
      <div class="max-w-4xl mx-auto">
        <Link :href="route('blogs.index')" class="hover:text-blue-600 text-sm">&larr; Back to Blogs</Link>
      </div>
    </section>

    <!-- Blog Content -->
    <article class="max-w-4xl mx-auto px-4">
      <!-- Meta Info -->
      <div class="flex justify-center items-center gap-5 mt-8 text-sm text-gray-600">
        <p>{{ blog.author.name }}</p>
        <p>December 15, 2024</p>
        <p>{{ blog.estimated_read_time }} mins read</p>
      </div>

      <!-- Title -->
      <h1 class="text-5xl font-bold text-center my-7">
        {{ blog.title }}
      </h1>

      <!-- Tags -->
      <div class="flex justify-center gap-2 mt-3 mb-5">
        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">React</span>
        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">TS</span>
        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Tutorial</span>
      </div>

      <!-- Cover Image -->
      <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&h=250&fit=crop" alt="Blog Cover"
        class="w-full h-[450px] object-cover rounded-md shadow-lg my-7" />

      <!-- Content -->
      <div class="text-gray-700 text-lg leading-relaxed space-y-6">
        <p>{{ blog.content }}</p>
      </div>

      <!-- Divider -->
      <hr class="my-10 border-gray-300" />

      <!-- Share Section -->
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10">
        <p class="font-semibold">Share this article:</p>
        <div class="flex gap-3">
          <Link class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition">Twitter</Link>
          <Link class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition">Facebook</Link>
          <Link class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition">LinkedIn</Link>
        </div>
      </div>

      <!-- Divider -->
      <hr class="my-10 border-gray-300" />

      <!-- Comments Section -->
      <BlogComments :comments_count="blog.comments_count" :comments="blog.comments" />
    </article>

    <!-- Related Blogs -->
    <BlogYouMayLike :relatedBlogs="relatedBlogs" />
  </BlogLayout>
</template>
