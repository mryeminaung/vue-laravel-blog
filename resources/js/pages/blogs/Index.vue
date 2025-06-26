<script setup>
  import BlogCard from '@/components/BlogCard.vue';
  import BlogFilter from '@/components/BlogFilter.vue';
  import BlogPagination from '@/components/BlogPagination.vue';
  import BlogLayout from '@/layouts/BlogLayout.vue';
  import { Link } from '@inertiajs/vue3'
  import { Plus, Search } from 'lucide-vue-next';

  const props = defineProps({
    blogs: Object,
    categories: Object,
    tags: Object,
  });
</script>

<template>
  <BlogLayout>
    <!-- Hero Section -->
    <section class="bg-[#EEF5FF] py-20">
      <div
        class="max-w-6xl mx-auto px-4 lg:px-0 flex flex-col md:flex-row items-start md:items-center justify-between gap-y-6">
        <div>
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900">All Blogs</h1>
          <p class="mt-2 text-base md:text-lg text-gray-600 max-w-xl">
            Explore our collection of tutorials, tips, and insights from the creative coding community
          </p>
        </div>
        <Link :href="route('blogs.create')"
          class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">
        <Plus />
        Write a Blog
        </Link>
      </div>
    </section>

    <!-- Filter Section -->
    <BlogFilter :tags="tags" :categories="categories" />

    <!-- Blog Grid -->
    <section v-if="blogs?.data.length > 0" class="bg-[#F9FAFB] py-16">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 max-w-6xl mx-auto px-4 lg:px-0">
        <BlogCard v-for="blog in blogs?.data" :key="blog.id" :blog="blog" />
      </div>
      <BlogPagination :links="blogs.links" :meta="blogs.meta" />
    </section>
    <div v-else className="text-center py-16">
      <div className="flex justify-center mb-4">
        <div className="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
          <Search className="w-8 h-8 text-gray-400" />
        </div>
      </div>
      <h3 className="text-xl font-semibold text-gray-900 mb-2">No blogs found</h3>
      <p className="text-gray-600 mb-6">
        We couldn't find any blogs matching your current filters. Try adjusting your search criteria or clearing the
        filters.
      </p>
    </div>

  </BlogLayout>
</template>
