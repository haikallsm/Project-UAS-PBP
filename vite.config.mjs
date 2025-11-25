import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
  root: ".",
  build: {
    outDir: "public",
    emptyOutDir: false,
    rollupOptions: {
      input: resolve(__dirname, "assets/js/main.js"),
      output: {
        entryFileNames: "js/app.js",
        assetFileNames: ({ name }) => {
          if (name && name.endsWith(".css")) {
            return "css/style.css";
          }
          return "assets/[name].[ext]";
        },
      },
    },
  },
});
