<script setup>
  import BlogCard from '@/components/BlogCard.vue';
  import BlogFilter from '@/components/BlogFilter.vue';
  import BlogLayout from '@/layouts/BlogLayout.vue';

  const props = defineProps({
    blogs: Object
  });
</script>

<template>
  <BlogLayout>
    <!-- Hero Section -->
    <section class="bg-[#F9FAFB] py-16">
      <div class="max-w-6xl mx-auto text-center space-y-5">
        <h2 class="text-5xl font-bold">All Blogs</h2>
        <p class="text-xl max-w-2xl mx-auto">
          Explore our collection of tutorials, tips, and insights from the creative coding community.
        </p>
      </div>
    </section>

    <!-- Filter Section -->
    <BlogFilter />

    <!-- Blog Grid -->
    <section class="bg-[#F9FAFB] py-16">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4 lg:px-0">
        <BlogCard v-for="blog in blogs?.data" :key="blog.id" :blog="blog" />
      </div>
    </section>
  </BlogLayout>
</template>
