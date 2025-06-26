<script setup>
  import { getCategoryColor, getInitials } from '@/lib/utils';
  import { Clock, Eye, Heart } from 'lucide-vue-next';
  import { Badge } from '@/components/ui/badge'

  defineProps({
    blog: Object
  });
</script>

<template>
  <div class="max-w-4xl mx-auto py-10">
    <!-- Categories -->
    <div class="flex flex-wrap gap-2 mb-4">
      <Badge v-for="category in blog.categories" :key="category.id"
        :class="`${getCategoryColor(category.name)} text-[11px] font-semibold px-3 py-1 rounded-full`">
        {{ category.name }}
      </Badge>
    </div>

    <!-- Title -->
    <h1 class="text-5xl font-extrabold text-gray-900 mb-4">{{ blog.title }}</h1>

    <hr class="mt-5 mb-5 border-gray-300" />
    <!-- Author and Meta -->
    <div class="flex items-center justify-between text-gray-500 text-sm">
      <div class="flex items-start gap-2">
        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
          {{ getInitials(blog.author.name) }}
        </div>
        <div>
          <p class="font-semibold text-gray-900">{{ blog.author.name }}</p>
          <p class="text-xs">December 15, 2024</p>
        </div>
      </div>

      <div class="flex items-center gap-4">
        <div class="flex items-center gap-1">
          <Clock :size="18" />
          <span>{{ blog.estimated_read_time }} min read</span>
        </div>
        <div class="flex items-center gap-1">
          <Eye :size="18" />
          <span>2.3K</span>
        </div>

        <div class="flex items-center gap-1">
          <Heart :size="18" />
          <span>156</span>
        </div>
      </div>
    </div>
    <hr class="mt-5 border-gray-300" />
  </div>
</template>
