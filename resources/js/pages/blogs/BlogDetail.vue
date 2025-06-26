<script setup>
  import { Link } from '@inertiajs/vue3'
  import { Facebook, Linkedin, Share2, Twitter } from 'lucide-vue-next'
  import BlogLayout from '@/layouts/BlogLayout.vue'
  import BlogYouMayLike from '@/components/BlogYouMayLike.vue'
  import BlogComments from '@/components/BlogComments.vue';
  import BlogHeader from '@/components/BlogHeader.vue';

  defineProps({ blog: Object, relatedBlogs: Object });
</script>

<template>
  <BlogLayout>
    <!-- Back Navigation -->
    <section class="bg-[#F9FAFB] py-5">
      <div class="max-w-4xl mx-auto flex items-center">
        <div class="flex items-center gap-1 group">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 group-hover:text-blue-600 transition"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
          <Link :href="route('blogs.index')"
            class="font-medium text-sm text-gray-700 group-hover:text-blue-600 transition">
          Back to Blogs
          </Link>
        </div>
      </div>
    </section>

    <!-- Blog Content -->
    <article class="max-w-4xl mx-auto px-4">
      <!-- Meta Info -->
      <BlogHeader :blog="blog" />

      <!-- Cover Image -->
      <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&h=250&fit=crop" alt="Blog Cover"
        class="w-full h-[450px] object-cover rounded-md shadow-lg mb-7" />

      <!-- Content -->
      <div class="text-gray-700 text-lg leading-relaxed space-y-6">
        <p>{{ blog.content }}</p>
      </div>

      <!-- Divider -->
      <hr class="mb-5 mt-10 border-gray-300" />

      <!-- Share Section -->
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <p class="font-medium flex items-center gap-2">
          <Share2 :size="18" />
          Share this article:
        </p>
        <div class="flex flex-wrap gap-3">
          <Link :href="route('blogs.index')"
            class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition flex items-center gap-x-2">
          <Twitter :size="18" />
          Twitter</Link>
          <Link :href="route('blogs.index')"
            class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition flex items-center gap-x-2">
          <Facebook :size="18" />
          Facebook</Link>
          <Link :href="route('blogs.index')"
            class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 transition flex items-center gap-x-2">
          <Linkedin :size="18" />
          LinkedIn</Link>
        </div>
      </div>

      <!-- Divider -->
      <hr class="mt-5 mb-10 border-gray-300" />

      <!-- Comments Section -->
      <BlogComments :comments_count="blog.comments_count" :comments="blog.comments" />
    </article>

    <!-- Related Blogs -->
    <BlogYouMayLike :relatedBlogs="relatedBlogs" />
  </BlogLayout>
</template>
