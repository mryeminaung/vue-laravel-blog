<script setup>
  import BlogNavbar from "@/components/BlogNavbar.vue";
</script>

<template>
  <BlogNavbar />
  <main class="flex-1">
    <slot />
  </main>
</template>
