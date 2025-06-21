<script setup>
</script>

<template>
  <div class="py-16 bg-white max-w-6xl mx-auto">
    <form @submit.prevent="console.log('blog filter')" class="flex items-center gap-x-4 w-full">
      <input type="text" placeholder="Search blogs..." class="border border-gray-300 rounded-md w-full px-3 py-2">
      <select name="" id="" class="border border-gray-300 px-3 py-2 rounded-md w-full">
        <option value="">All Categories</option>
        <option value="tech">Tech</option>
        <option value="lifestyle">Lifestyle</option>
        <option value="travel">Travel</option>
      </select>
      <select name="" id="" class="border border-gray-300 px-3 py-2 rounded-md w-full">
        <option value="">All Tags</option>
        <option value="latest">Latest</option>
        <option value="popular">Popular</option>
        <option value="oldest">Oldest</option>
      </select>
      <button type="submit"
        class="text-white px-5 py-2 rounded-lg bg-blue-600 transition-colors ease-in-out hover:cursor-pointer">
        Search
      </button>
    </form>
  </div>
</template>
