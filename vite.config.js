import { defineConfig } from "vite";
import { resolve } from "node:path";

export default defineConfig({
  root: ".",
  publicDir: false,

  css: {
    transformer: "lightningcss",
    lightningcss: {
      browsers: ["defaults"],
      drafts: {
        nesting: true,
        customMedia: true,
      },
    },
  },

  build: {
    outDir: "public/build",
    manifest: true,
    rollupOptions: {
      input: [
        "assets/css/index.css",
        "assets/css/lightbox.css",
        "assets/css/prism.css",
        "assets/css/templates/note.css",
        "assets/css/templates/album.css",
        "assets/css/templates/about.css",
        "assets/css/templates/home.css",
        "assets/css/panel.css",
        "assets/js/index.js",
        "assets/js/lightbox.js",
        "assets/js/prism.js",
      ].map((p) => resolve(__dirname, p)),
    },
  },
});
