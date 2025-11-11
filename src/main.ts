import { createApp } from 'vue'
import App from './App.vue'

const el = document.getElementById('app') as HTMLElement | null

if (el) {
  const { enabled, title, text } = el.dataset as {
    enabled?: string
    title?: string
    text?: string
  }

  createApp(App, {
    enabled: enabled === '1' || enabled === 'true',
    title: title ?? '',
    text: text ?? '',
  }).mount(el)
}