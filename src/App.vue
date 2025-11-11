<script setup lang="ts">
import { ref, watch } from 'vue'

const props = defineProps<{
  enabled?: boolean
  title?: string
  text?: string
}>()

const isVisible = ref<boolean>(!!props.enabled)

watch(() => props.enabled, (val) => {
  isVisible.value = !!val
})
</script>

<template>
  <section
    v-if="isVisible && (title || text)"
    class="announcement"
  >
    <div class="announcement-inner">
      <h2 v-if="title" class="announcement-title">
        {{ title }}
      </h2>

      <p v-if="text" class="announcement-text">
        {{ text }}
      </p>
    </div>

    <button
      type="button"
      class="announcement-close"
      @click="isVisible = false"
    >
      ×
    </button>
  </section>
</template>

<style scoped>
.announcement {
  margin: 2rem auto 0;
  max-width: 800px;
  padding: 1.25rem 1.5rem;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.1);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  backdrop-filter: blur(12px);
}

.announcement-inner {
  flex: 1;
}

.announcement-title {
  font-size: 1rem;
  font-weight: 600;
  margin: 0 0 0.25rem;
}

.announcement-text {
  margin: 0;
  font-size: 0.875rem;
  opacity: 0.8;
}

.announcement-close {
  border: none;
  background: transparent;
  cursor: pointer;
  font-size: 1.2rem;
  line-height: 1;
  padding: 0 0.25rem;
  opacity: 0.6;
}
</style>