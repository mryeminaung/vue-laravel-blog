<script setup>
  import { getCategoryColor } from '@/lib/utils';
  import { Link } from '@inertiajs/vue3';
  import { Badge } from '@/components/ui/badge'

  defineProps({ blog: Object });
</script>

<template>
  <div
    class="rounded-xl group overflow-hidden bg-white w-full shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 ease-in-out transform">
    <div class="relative">
      <!-- Image -->
      <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&h=250&fit=crop" alt="Blog Cover"
        class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300 ease-in-out" />
      <Badge class="text-[12px] rounded-full px-2 py-1 top-1 right-2 absolute" :class="{
        'bg-green-200 text-green-800': blog.tag.name === 'Beginner',
        'bg-yellow-200 text-yellow-800': blog.tag.name === 'Intermediate',
        'bg-red-200 text-red-800': blog.tag.name === 'Advanced'
      }">
        {{ blog.tag.name }}
      </Badge>

    </div>

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

      <!-- Categories -->
      <div class="gap-2 flex items-center flex-wrap mt-3 mb-5">
        <Badge v-for="category in blog.categories" :class="getCategoryColor(category.name)"
          class="text-[11px] rounded-full px-2 py-1">
          {{ category.name }}
        </Badge>
      </div>

      <!-- CTA Button -->
      <Link :href="route('blogs.show', blog)"
        class="block text-center bg-gray-100 py-2 rounded-lg text-gray-700 font-semibold hover:bg-blue-600 hover:text-white transition-colors duration-200">
      Read More
      </Link>
    </div>
  </div>
</template>
