<script setup>
  import BlogCard from "@/components/BlogCard.vue"
</script>

<template>
  <section class="bg-[#F9FAFB] py-16">
    <div class="mx-auto max-w-6xl px-4">
      <h2 class="text-4xl font-bold text-center mb-12">
        Blogs You May Like
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <BlogCard />
        <BlogCard />
        <BlogCard />
      </div>
    </div>
  </section>
</template>
