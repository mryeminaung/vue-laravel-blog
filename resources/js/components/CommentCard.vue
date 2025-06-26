<script setup>
  defineProps({
    comment: Object, getInitials: Function
  });
</script>

<template>
  <div class="border-gray-300 border rounded-md p-7 mb-5">
    <div class="flex items-center gap-x-3">
      <div class="h-fit py-2 w-10 bg-blue-600 text-white rounded-full text-center">{{ getInitials(comment.author.name)
      }}</div>
      <div class="flex flex-col -space-y-0.5">
        <h3>{{ comment.author.name }}</h3>
        <p class="text-sm">2 hours ago</p>
      </div>
    </div>
    <p class="my-3">
      {{ comment.content }}
    </p>
    <p>Likes : 5</p>
  </div>
</template>
