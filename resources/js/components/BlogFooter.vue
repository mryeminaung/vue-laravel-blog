<script setup>
  import { Link } from '@inertiajs/vue3'
</script>

<template>
  <footer class="bg-[#111827] shadow-2xl text-gray-800 ">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 py-16">
      <!-- Branding -->
      <div class="md:col-span-2">
        <h3 class="text-xl font-semibold mb-4 text-white">Creative Dev, Myanmar</h3>
        <p class="max-w-md text-gray-600">
          Empowering Myanmar's creative coding community with quality tutorials, tips, and insights for modern web
          development.
        </p>
      </div>

      <!-- Quick Links -->
      <div>
        <h3 class="text-xl font-semibold mb-4 text-white">Quick Links</h3>
        <ul class="space-y-2 text-gray-600">
          <li>
            <Link href="/" class="hover:text-blue-600 transition">Home</Link>
          </li>
          <li>
            <Link :href="route('blogs.index')" class="hover:text-blue-600 transition">Blogs</Link>
          </li>
          <li>
            <Link href="/" class="hover:text-blue-600 transition">About</Link>
          </li>
        </ul>
      </div>

      <!-- Categories -->
      <div>
        <h3 class="text-xl font-semibold mb-4 text-white">Categories</h3>
        <ul class="space-y-2 text-gray-600">
          <li>HTML & CSS</li>
          <li>JavaScript</li>
          <li>Python</li>
          <li>React</li>
        </ul>
      </div>
    </div>

    <hr class="border-t max-w-6xl mx-auto" />

    <!-- Copyright -->
    <div class="text-center py-6 text-sm text-gray-500">
      © 2025 Creative Dev, Myanmar. All rights reserved.
    </div>
  </footer>
</template>
