<script setup>
  import CommentCard from './CommentCard.vue';

  const props = defineProps({
    comments_count: Number,
    comments: Array
  });

  const getInitials = (name) => {
    const parts = name.trim().split(" ");
    return parts.length > 1
      ? parts[0][0] + parts[1][0]
      : name.slice(0, 2);
  };

  // Simulated logged-in user name for initials (replace as needed)
  const currentUserName = 'John Doe';
</script>

<template>
  <div class="mb-16">
    <h3 class="text-2xl font-bold">Comments ({{ comments_count }})</h3>

    <!-- Comment Form -->
    <div class="flex gap-3 justify-start border p-7 border-gray-300 my-5 rounded-md">
      <div class="h-fit p-2 px-3 bg-gray-200 rounded-full text-center">
        {{ getInitials(currentUserName) }}
      </div>

      <form @submit.prevent="console.log('comments section')" class="flex flex-col w-full">
        <textarea class="w-full p-2 border rounded-lg resize-none border-gray-300" rows="4"
          placeholder="Share your thoughts..."></textarea>
        <button type="submit"
          class="mt-4 bg-gray-400 w-max ms-auto text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition-colors">
          Post Comment
        </button>
      </form>
    </div>

    <!-- Comment List -->
    <CommentCard v-for="comment in comments" :key="comment.id" :comment="comment" :getInitials="getInitials" />
  </div>
</template>
