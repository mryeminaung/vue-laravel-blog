<script setup>
  import { Pagination, PaginationContent, PaginationItem, PaginationPrevious, PaginationNext } from '@/components/ui/pagination'
  import { Link } from '@inertiajs/vue3'
  import { ChevronLeft, ChevronRight } from 'lucide-vue-next'

  const props = defineProps({
    links: {
      type: Object,
      required: true,
      default: () => ({
        first: null,
        last: null,
        prev: null,
        next: null
      })
    },
    meta: {
      type: Object,
      required: true
    }
  })

  const isPageNumber = (label) => {
    return !['&laquo; Previous', 'Next &raquo;'].includes(label)
  }

  const getPageNumber = (label) => {
    return parseInt(label)
  }
</script>

<template>
  <Pagination class="mt-10" v-slot="{ page }" :total="meta.total" :items-per-page="meta.per_page"
    :default-page="meta.current_page">
    <PaginationContent v-slot="{ items }">
      <!-- Previous Button -->
      <PaginationPrevious>
        <Link preserve-scroll :href="links.prev || ''" class="flex items-center gap-1"
          :class="{ 'pointer-events-none opacity-50': !links.prev }">
        <ChevronLeft />
        Previous
        </Link>
      </PaginationPrevious>

      <!-- Page Numbers -->
      <template v-for="(link, index) in meta.links">
        <PaginationItem as-child v-if="isPageNumber(link.label)" :key="index" :value="getPageNumber(link.label)"
          :is-active="link.active">
          <Link preserve-scroll :href="link.url || ''">
          {{ link.label }}
          </Link>
        </PaginationItem>
      </template>

      <!-- Next Button -->
      <PaginationNext>
        <Link preserve-scroll :href="links.next || ''" class="flex items-center gap-1"
          :class="{ 'pointer-events-none opacity-50': !links.next }">
        Next
        <ChevronRight />
        </Link>
      </PaginationNext>

    </PaginationContent>
  </Pagination>
</template>
