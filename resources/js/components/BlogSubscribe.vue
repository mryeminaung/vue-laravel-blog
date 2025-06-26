<script setup>
  import { ref } from 'vue'

  const email = ref('')
  const handleSubscribe = () => {
    console.log('Email:', email.value)
  }
</script>

<template>
  <section id="subscribe" class="px-4 my-5 flex items-center justify-center">
    <div class="text-center py-12 space-y-6 shadow-md bg-[#EFF6FF] max-w-6xl rounded-xl w-full">
      <h2 class="text-4xl font-bold">Subscribe For New Blogs</h2>
      <p class="text-lg">
        Stay updated with our latest programming tutorials, tips, and insights.<br />
        Join our community of creative coders!
      </p>

      <form @submit.prevent="handleSubscribe" class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
        <input v-model="email" type="email" required placeholder="Enter your email address"
          class="py-3 px-4 w-full sm:w-[300px] rounded-md text-black focus:outline-none bg-white" />
        <button type="submit"
          class="py-3 px-6 font-semibold bg-blue-600 text-white rounded-md hover:bg-blue-700 hover:cursor-pointer transition-colors">
          Subscribe Now
        </button>
      </form>
    </div>
  </section>
</template>
