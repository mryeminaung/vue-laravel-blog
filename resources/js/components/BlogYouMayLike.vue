<script setup>
  import BlogCard from "@/components/BlogCard.vue"

  defineProps({ relatedBlogs: Object })
</script>

<template>
  <section class="bg-[#F9FAFB] py-16">
    <div class="mx-auto max-w-6xl px-4">
      <div class="mb-12 space-y-5 text-center max-w-2xl mx-auto">
        <h2 class="text-4xl font-bold ">
          Blogs You May Like
        </h2>
        <p class="text-xl">
          Here are some trending tech blogs you might want to check out.
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <BlogCard v-for="blog in relatedBlogs" :blog="blog"/>
      </div>
    </div>
  </section>
</template>
