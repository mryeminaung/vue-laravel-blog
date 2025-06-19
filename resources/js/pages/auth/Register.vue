<script setup>
  import GuestLayout from '@/layouts/GuestLayout.vue';
  import { Link } from '@inertiajs/vue3';
</script>

<template>
  <GuestLayout>
    <div class="min-h-screen pt-28 pb-10 flex flex-col items-center justify-center bg-gray-50 px-4">
      <!-- Welcome Text -->
      <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-3xl font-bold">Create Account</h1>
        <p class="text-gray-600 mt-2">Join us today and start your journey</p>
      </div>
      <div class="max-w-md w-full bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-semibold text-center text-gray-900">Sign Up</h2>
        <p class="text-center text-gray-500 mb-6">Create your account to get started</p>

        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" placeholder="Enter your full name"
              class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" placeholder="Choose a username"
              class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" placeholder="Enter your email"
              class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" placeholder="Create a password"
              class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" placeholder="Confirm your password"
              class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div class="flex items-center">
            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label class="ml-2 block text-sm text-gray-900">
              I agree to the
              <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and
              <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
            </label>
          </div>

          <button type="submit"
            class="w-full py-2 px-4 bg-gray-900 text-white rounded-md hover:bg-gray-800 focus:outline-none">
            Create Account
          </button>
        </form>

        <p class="mt-4 text-center text-sm text-gray-600">
          Already have an account?
          <Link :href="route('auth.login')" class="text-blue-600 hover:underline">Sign in</Link>
        </p>
      </div>
    </div>
  </GuestLayout>
</template>
