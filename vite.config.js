import { defineConfig } from "vite";
import { resolve } from "path";
import php from "vite-plugin-php"; 

export default defineConfig({
  plugins: [php()],
  root: ".", // jangan pakai "src"
  publicDir: false, // larang Vite membaca folder src/public
  resolve: {
    alias: {
      "@": resolve(__dirname, "assets"), // optional, untuk import
    },
  },
  build: {
    outDir: "public",
    emptyOutDir: false,
    rollupOptions: {
      input: resolve(__dirname, "assets/js/main.js"), // pastikan cuma ini
      output: {
        entryFileNames: "js/[name].js",
        assetFileNames: "css/[name].[ext]",
      },
    },
  },
  server: {
    host: true,
    port: 5173,
    strictPort: true,
    watch: {
      ignored:[],
    },
  },
});
