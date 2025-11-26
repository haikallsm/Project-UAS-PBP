import { defineConfig } from "vite";
import tailwindcss from "tailwindcss";

export default defineConfig({
  css: {
    transformers: {
      lightningcss: {
        drafts: {
          nesting: true,
          customMedia: true,
        },
        minify: false,
      },
    },
    postcss: {
      plugins: [tailwindcss()],
    },
  },
  build: {
    outDir: "public",
    rollupOptions: {
      input: "assets/css/input.css",
    },
  },
});
