<script setup>
  defineProps({
    tags: Object,
    categories: Object,
  });
</script>

<template>
  <div class="py-16 bg-white max-w-6xl mx-auto">
    <form @submit.prevent="console.log('Blog Filter')" class="flex flex-col sm:flex-row gap-4 w-full px-3 lg:px-0">
      <!-- Search Input -->
      <input type="text" placeholder="Search blogs..." class="w-full px-4 py-2 border border-gray-300 rounded-md" />

      <!-- Category Select -->
      <select class="w-full px-4 py-2 border border-gray-300 rounded-md">
        <option value="" selected disabled>All Categories</option>
        <option v-for="category in categories" :key="category.id" :value="category.slug">{{ category.name }}</option>
      </select>

      <!-- Tag Select -->
      <select class="w-full px-4 py-2 border border-gray-300 rounded-md">
        <option value="" selected disabled>All Tags</option>
        <option v-for="tag in tags" :key="tag.id" :value="tag.name">{{ tag.name }}</option>
      </select>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full sm:w-auto px-5 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors">
        Search
      </button>
    </form>
  </div>
</template>
