<script setup>
  import BlogNavbar from "@/components/BlogNavbar.vue"
  import HeroSection from "@/components/HeroSection.vue"
  import BlogSection from "@/components/BlogSection.vue"
  import BlogSubscribe from "@/components/BlogSubscribe.vue"
  import BlogFooter from "@/components/BlogFooter.vue"

  defineProps({
    blogs: Object
  })
</script>

<template>
  <div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <BlogNavbar />

    <!-- Hero Section -->
    <HeroSection />

    <!-- Main Blog Section -->
    <main class="flex-1">
      <BlogSection :blogs="blogs" />
    </main>

    <!-- Subscribe Section -->
    <BlogSubscribe />

    <!-- Footer -->
    <footer class="bg-[#111827] text-white">
      <BlogFooter />
    </footer>
  </div>
</template>
