<script setup>
  import BlogCard from "@/components/BlogCard.vue"
</script>

<template>
  <section class="bg-[#F9FAFB] py-20">
    <!-- Section Header -->
    <div class="flex flex-col items-center text-center space-y-5 mb-12">
      <h2 class="text-4xl font-bold">Latest Blogs</h2>
      <p class="text-xl max-w-2xl">
        Discover the latest insights, tutorials, and tips from our creative coding community.
      </p>
    </div>
    <!-- Blog Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
      <BlogCard />
      <BlogCard />
      <BlogCard />
      <BlogCard />
      <BlogCard />
      <BlogCard />
    </div>
  </section>
</template>
