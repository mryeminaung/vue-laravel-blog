<script setup>
  import { Link } from '@inertiajs/vue3'
</script>

<template>
  <section class="bg-[#EEF5FF] rounded-b-4xl flex items-center justify-center py-32 px-4 mt-10">
    <div class="text-center max-w-4xl">
      <div
        className="w-20 h-16 mx-auto bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
        <span className="text-white font-bold text-2xl">CD</span>
      </div>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold my-3 leading-tight">
        Creative Dev
      </h1>
      <p class="text-lg max-w-prose mx-auto text-gray-700">
        Explore programming languages, web development, and online courses. Discover tips, tricks, and insights from
        Myanmar's creative coding community.
      </p>

      <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">
        <Link :href="route('blogs.create')"
          class="font-medium text-xl px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">
        Create Now
        </Link>
        <Link :href="route('blogs.index')"
          class="font-medium text-xl px-4 py-2 border border-gray-400 rounded-lg hover:bg-gray-100 transition">
        Read Blogs
        </Link>
      </div>
    </div>
  </section>
</template>
