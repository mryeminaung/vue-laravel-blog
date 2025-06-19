<script setup>
  import { ref } from 'vue'
  import { Link, useForm } from '@inertiajs/vue3'
  import GuestLayout from '@/layouts/GuestLayout.vue'

  const form = useForm({
    email: '',
    password: '',
  })

  const showPassword = ref(false)

  const submit = () => {
  }
</script>

<template>
  <GuestLayout>
    <div class="min-h-screen pt-20 bg-gray-50 flex flex-col items-center justify-center px-4">
      <!-- Welcome Text -->
      <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-bold">Welcome Back</h1>
        <p class="text-gray-600 mt-2">Sign in to your account</p>
      </div>

      <!-- Login Card -->
      <div class="bg-white w-full max-w-md p-8 rounded-lg shadow">
        <h2 class="text-2xl font-semibold text-center mb-2">Sign In</h2>
        <p class="text-center text-gray-500 text-sm mb-6">Enter your credentials to access your account</p>

        <form @submit.prevent="submit" class="space-y-4">
          <!-- Email -->
          <div>
            <label class="block mb-1 font-medium">Email or Username</label>
            <input v-model="form.email" type="text"
              class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter your email or username" />
          </div>

          <!-- Password -->
          <div>
            <label class="block mb-1 font-medium">Password</label>
            <div class="relative">
              <input v-model="form.password" :type="showPassword ? 'text' : 'password'"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your password" />
              <button type="button" @click="showPassword = !showPassword"
                class="absolute right-3 top-2.5 text-gray-500">
                <span v-if="!showPassword">👁</span>
                <span v-else>🙈</span>
              </button>
            </div>
          </div>

          <!-- Forgot Password -->
          <div class="text-right">
            <a href="/forgot-password" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" :disabled="form.processing"
            class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-gray-900 text-white font-semibold rounded-md hover:bg-black transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
            </svg>
            Sign In
          </button>

          <!-- Sign up link -->
          <p class="text-center text-sm mt-4 text-gray-600">
            Don't have an account?
            <Link :href="route('auth.register')" class="text-blue-600 hover:underline font-medium">Sign up</Link>
          </p>
        </form>
      </div>
    </div>
  </GuestLayout>
</template>
