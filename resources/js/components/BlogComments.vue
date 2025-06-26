<script setup>
  import { getInitials } from '@/lib/utils';
  import CommentCard from './CommentCard.vue';
  import { MessageCircle, Send } from 'lucide-vue-next';

  const props = defineProps({
    comments_count: Number,
    comments: Array
  });

  // Simulated logged-in user name for initials (replace as needed)
  const currentUserName = 'John Doe';
</script>

<template>
  <div class="mb-16">
    <h3 class="text-2xl font-bold flex items-center gap-2">
      <MessageCircle />
      Comments ({{ comments_count }})
    </h3>

    <!-- Comment Form -->
    <div class="flex gap-3 justify-start border p-7 border-gray-300 my-5 rounded-md">
      <div class="h-fit p-2 px-3 rounded-full text-center bg-blue-600 text-white">
        {{ getInitials(currentUserName) }}
      </div>

      <form @submit.prevent="console.log('comments section')" class="flex flex-col w-full">
        <textarea class="w-full p-2 border rounded-lg resize-none border-gray-300" rows="4"
          placeholder="Share your thoughts..."></textarea>
        <button type="submit"
          class="mt-4 bg-gray-400 w-max hover:cursor-pointer ms-auto text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition-colors gap-x-2 flex items-center">
          <Send :size="18" />
          Post Comment
        </button>
      </form>
    </div>

    <!-- Comment List -->
    <CommentCard v-for="comment in comments" :key="comment.id" :comment="comment" :getInitials="getInitials" />
  </div>
</template>
