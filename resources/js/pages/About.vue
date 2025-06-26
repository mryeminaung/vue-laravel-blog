<script setup>
  import BlogLayout from '@/layouts/BlogLayout.vue';

</script>

<template>
  <BlogLayout>
    <div class="text-gray-800">
      <!-- Hero Section -->
      <section class="bg-gradient-to-b from-blue-50 to-white text-center py-16">
        <h1 class="text-4xl font-bold">About Creative Dev Myanmar</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
          We're on a mission to empower Myanmar's developer community with quality content, practical tutorials, and a
          supportive environment for learning and growth.
        </p>
        <div class="mt-8 flex justify-center">
          <div class="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
            CD</div>
        </div>
      </section>

      <!-- Mission Section -->
      <section class="max-w-6xl mx-auto py-16 px-4">
        <h2 class="text-2xl font-semibold mb-6">Our Mission</h2>
        <p class="text-gray-600 leading-relaxed mb-4">
          Creative Dev Myanmar was founded with the vision of creating a thriving tech community in Myanmar. We
          believe that quality education and knowledge sharing are the keys to building a strong developer ecosystem.
          Through our comprehensive tutorials, practical guides, and community-driven content, we aim to bridge the
          gap between aspiring developers and industry requirements.
        </p>

        <!-- Tags -->
        <div class="flex flex-wrap gap-2 mb-8">
          <span class="bg-blue-100 text-blue-600 text-sm font-medium px-3 py-1 rounded-full">Education First</span>
          <span class="bg-green-100 text-green-600 text-sm font-medium px-3 py-1 rounded-full">Community Driven</span>
          <span class="bg-purple-100 text-purple-600 text-sm font-medium px-3 py-1 rounded-full">Practical
            Learning</span>
        </div>

        <!-- Offer Box -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white p-6 rounded-xl shadow-md max-w-md">
          <h3 class="text-lg font-semibold mb-4">What We Offer</h3>
          <ul class="list-disc list-inside space-y-1 text-sm">
            <li>Step-by-step coding tutorials</li>
            <li>Real-world project examples</li>
            <li>Industry best practices</li>
            <li>Career guidance and tips</li>
            <li>Active community support</li>
          </ul>
        </div>
      </section>

      <!-- Impact Section -->
      <section class="bg-gray-50 py-16">
        <h2 class="text-2xl font-semibold text-center mb-10">Our Impact</h2>
        <div class="flex flex-wrap justify-center gap-12">
          <div class="text-center">
            <div class="text-blue-600 text-3xl font-bold mb-1">5,000+</div>
            <p class="text-gray-600">Community Members</p>
          </div>
          <div class="text-center">
            <div class="text-blue-600 text-3xl font-bold mb-1">200+</div>
            <p class="text-gray-600">Code Tutorials</p>
          </div>
          <div class="text-center">
            <div class="text-blue-600 text-3xl font-bold mb-1">150+</div>
            <p class="text-gray-600">Articles Published</p>
          </div>
          <div class="text-center">
            <div class="text-blue-600 text-3xl font-bold mb-1">1,000+</div>
            <p class="text-gray-600">Happy Developers</p>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section class="py-16 max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-semibold text-center mb-10">Meet Our Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">
          <div>
            <div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-4"></div>
            <h3 class="font-semibold">Aung Kyaw</h3>
            <p class="text-sm text-blue-600">Founder & Lead Developer</p>
            <p class="text-gray-600 text-sm mt-2">Full-stack developer with 8+ years of experience in web development
              and passionate about teaching.</p>
          </div>
          <div>
            <div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-4"></div>
            <h3 class="font-semibold">Thant Zin</h3>
            <p class="text-sm text-blue-600">Content Creator</p>
            <p class="text-gray-600 text-sm mt-2">Frontend specialist and UI/UX enthusiast who loves creating
              beautiful and functional interfaces.</p>
          </div>
          <div>
            <div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-4"></div>
            <h3 class="font-semibold">May Thwe</h3>
            <p class="text-sm text-blue-600">Community Manager</p>
            <p class="text-gray-600 text-sm mt-2">Passionate about building communities and helping developers grow
              their skills together.</p>
          </div>
        </div>
      </section>

      <!-- Call to Action Section -->
      <section class="bg-blue-600 text-white text-center py-16">
        <h2 class="text-2xl font-semibold mb-4">Join Our Community</h2>
        <p class="max-w-2xl mx-auto text-sm mb-6">
          Ready to start your development journey? Join thousands of developers who are learning and growing with
          Creative Dev Myanmar.
        </p>
        <div class="flex justify-center gap-4">
          <button class="bg-white text-blue-600 font-medium px-6 py-2 rounded-md hover:bg-gray-100 transition">Get
            Started</button>
          <button class="border border-white px-6 py-2 rounded-md hover:bg-white hover:text-blue-600 transition">Explore
            Blogs</button>
        </div>
      </section>
    </div>
  </BlogLayout>
</template>