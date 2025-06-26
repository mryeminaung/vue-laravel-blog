<script setup>
  import { router, useForm, usePage } from '@inertiajs/vue3'
  import { X, Search } from 'lucide-vue-next';
  import { Button } from '@/components/ui/button';
  import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectLabel,
    SelectTrigger,
    SelectValue,
  } from '@/components/ui/select'
  import { Input } from '@/components/ui/input';
  import { route } from 'ziggy-js';

  const props = defineProps({
    tags: Object,
    categories: Object,
  });

  const filterKeys = usePage().props.filters

  const form = useForm({
    search: filterKeys['search'] || '',
    category: filterKeys['category'] || '',
    tag: filterKeys['tag'] || '',
  });

  const clearFilter = () => {
    form.reset();
    router.get(route('blogs.index'))
  }

  const handleFilter = () => {
    const params = {};
    if (form.search) params.search = form.search;
    if (form.category) params.category = form.category;
    if (form.tag) params.tag = form.tag;

    form.get(route('blogs.index'), {
      preserveState: true,
      replace: true,
    });
  }

</script>

<template>
  <div class="shadow-sm border border-gray-200 py-10 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <form @submit.prevent="handleFilter" class="flex flex-col md:flex-row flex-wrap gap-4">
        <!-- Search Input -->
        <Input v-model="form.search" type="text" placeholder="Search blogs..."
          class="w-full md:max-w-md px-4 py-2 border border-gray-300 rounded-md" />

        <!-- Category Select -->
        <Select v-model="form.category">
          <SelectTrigger class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-md">
            <SelectValue class="text-black" placeholder="All Categories" />
          </SelectTrigger>
          <SelectContent>
            <SelectGroup>
              <SelectLabel>Categories</SelectLabel>
              <SelectItem v-for="category in categories" :key="category.id" :value="category.slug">
                {{ category.name }}
              </SelectItem>
            </SelectGroup>
          </SelectContent>
        </Select>

        <!-- Tag Select -->
        <Select v-model="form.tag">
          <SelectTrigger class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-md">
            <SelectValue class="text-black" placeholder="All Tags" />
          </SelectTrigger>
          <SelectContent>
            <SelectGroup>
              <SelectLabel>Tags</SelectLabel>
              <SelectItem v-for="tag in tags" :key="tag.id" :value="tag.name">
                {{ tag.name }}
              </SelectItem>
            </SelectGroup>
          </SelectContent>
        </Select>

        <div class="flex items-center flex-row gap-2">
          <!-- Search Button -->
          <Button type="submit" :disabled="!form.search && !form.category && !form.tag && !form.processing"
            class="w-auto items-center flex gap-x-1 px-10 bg-blue-600 text-white font-semibold hover:cursor-pointer rounded-md hover:bg-blue-700 transition disabled:opacity-50 disabled:cursor-not-allowed">
            <Search />
            Search
          </Button>
          <!-- Clear Button -->
          <Button v-if="form.search || form.category || form.tag" type="button" @click="clearFilter"
            class="w-auto items-center flex gap-x-1 px-10 bg-gray-400 text-white font-semibold hover:cursor-pointer rounded-md hover:bg-gray-700 transition">
            <X />
            Clear
          </Button>
        </div>
      </form>
    </div>
  </div>

</template>
