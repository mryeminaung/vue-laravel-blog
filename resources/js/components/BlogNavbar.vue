<script setup>
  import { Link } from '@inertiajs/vue3'
</script>

<template>
  <nav class="fixed top-0 inset-x-0 bg-white shadow z-50 py-2 px-4">
    <div class="max-w-6xl mx-auto flex items-center justify-between">
      <!-- Logo / Title -->
      <Link href="/" class="-space-y-1">
      <h1 class="text-xl font-bold">Creative Ninja</h1>
      <span class="text-sm text-gray-600">Myanmar</span>
      </Link>

      <!-- Navigation Links -->
      <div class="hidden md:flex items-center space-x-6 font-medium">
        <Link href="/" class="hover:text-blue-600 transition">Home</Link>
        <Link :href="route('blogs.index')" class="hover:text-blue-600 transition">Blogs</Link>
        <Link href="#" class="hover:text-blue-600 transition">About</Link>
        <Link :href="route('auth.login')" class="hover:text-blue-600 transition">Login</Link>
        <Link :href="route('auth.register')"
          class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition">
        Register
        </Link>
      </div>
    </div>
  </nav>
</template>
