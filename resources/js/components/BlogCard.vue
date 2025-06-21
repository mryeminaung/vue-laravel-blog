<script setup>
  import { Link } from '@inertiajs/vue3';

  defineProps({ blog: Object });
</script>

<template>
  <div
    class="rounded-xl group overflow-hidden bg-white w-full shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 ease-in-out transform">
    <!-- Image -->
    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&h=250&fit=crop" alt="Blog Cover"
      class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300 ease-in-out" />

    <!-- Content -->
    <div class="px-5 pt-4 pb-6">
      <h3 class="text-xl font-bold group-hover:text-blue-600 transition-colors duration-200">
        {{ blog?.title }}
      </h3>
      <p class="my-3.5 text-sm text-gray-500">
        {{ blog?.author.name }} · 2 days ago
      </p>
      <p class="text-gray-700 text-sm line-clamp-3">
        {{ blog?.content }}
      </p>

      <!-- Tags -->
      <div class="space-x-2 mt-3 mb-5">
        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">React</span>
        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">TS</span>
        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Tutorial</span>
      </div>

      <!-- CTA Button -->
      <Link :href="route('blogs.show', blog)"
        class="block text-center bg-gray-100 py-2 rounded-lg text-gray-700 font-semibold hover:bg-blue-500 hover:text-white transition-colors duration-200">
      Read More
      </Link>
    </div>
  </div>
</template>
