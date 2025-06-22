<script setup>
  import { getCategoryColor } from '@/lib/utils';

  defineProps({
    blog: Object
  });
</script>

<template>
  <div class="max-w-4xl mx-auto py-10">
    <!-- Categories -->
    <div class="flex flex-wrap gap-2 mb-4">
      <span v-for="category in blog.categories" :key="category.id"
        :class="`${getCategoryColor(category.name)} text-sm font-semibold px-3 py-1 rounded-full`">
        {{ category.name }}
      </span>
    </div>

    <!-- Title -->
    <h1 class="text-5xl font-extrabold text-gray-900 mb-4">{{ blog.title }}</h1>

    <!-- Author and Meta -->
    <div class="flex items-center justify-between text-gray-500 text-sm">
      <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A9 9 0 1112 21a9.003 9.003 0 01-6.879-3.196z" />
          </svg>
        </div>
        <div>
          <p class="font-semibold text-gray-900">{{ blog.author.name }}</p>
          <p class="text-xs">December 15, 2024</p>
        </div>
      </div>

      <div class="flex items-center gap-4">
        <div class="flex items-center gap-1">
          <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ blog.estimated_read_time }} min read</span>
        </div>

        <div class="flex items-center gap-1">
          <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
          <span>2.3K</span>
        </div>

        <div class="flex items-center gap-1">
          <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
          <span>156</span>
        </div>
      </div>
    </div>
  </div>
</template>
