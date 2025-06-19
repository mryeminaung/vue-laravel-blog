<script setup>
  import { ref } from 'vue'

  const email = ref('')
  const handleSubscribe = () => {
    console.log('Email:', email.value)
  }
</script>

<template>
  <section id="subscribe" class="bg-blue-600 py-16 px-4 flex items-center justify-center">
    <div class="text-white text-center space-y-6 max-w-2xl w-full">
      <h2 class="text-4xl font-bold">Subscribe For New Blogs</h2>
      <p class="text-lg">
        Stay updated with our latest programming tutorials, tips, and insights.<br />
        Join our community of creative coders!
      </p>

      <form @submit.prevent="handleSubscribe" class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
        <input v-model="email" type="email" required placeholder="Enter your email address"
          class="py-3 px-4 w-full sm:w-[300px] rounded-md text-black focus:outline-none bg-white" />
        <button type="submit"
          class="py-3 px-6 font-semibold bg-white text-blue-600 rounded-md hover:bg-gray-100 transition">
          Subscribe Now
        </button>
      </form>
    </div>
  </section>
</template>
