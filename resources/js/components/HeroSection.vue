<script setup>
  import { Link } from '@inertiajs/vue3'
</script>

<template>
  <section class="bg-[#EEF5FF] flex items-center justify-center py-32 px-4">
    <div class="text-center max-w-4xl">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 leading-tight">
        Creative Coder Myanmar
      </h1>
      <p class="text-lg max-w-prose mx-auto text-gray-700">
        Explore programming languages, web development, and online courses. Discover tips, tricks, and insights from
        Myanmar's creative coding community.
      </p>

      <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">
        <Link href="#subscribe"
          class="font-semibold text-xl px-6 py-4 rounded-lg bg-[#1D4ED8] text-white hover:bg-blue-700 transition">
        Subscribe Now
        </Link>
        <Link href="#blogs"
          class="font-semibold text-xl px-6 py-4 border border-gray-400 rounded-lg hover:bg-gray-100 transition">
        Read Blogs
        </Link>
      </div>
    </div>
  </section>
</template>
