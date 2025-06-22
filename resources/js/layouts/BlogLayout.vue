<script setup>
  import BlogNavbar from "@/components/BlogNavbar.vue"
  import BlogFooter from "@/components/BlogFooter.vue"
</script>

<template>
  <div class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <BlogNavbar />

    <!-- Main Content -->
    <main class="flex-1 mt-16">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-[#111827] text-white">
      <BlogFooter />
    </footer>
  </div>
</template>
