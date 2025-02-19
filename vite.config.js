import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    optimizeDeps: {
        include: [
          '@primevue/themes/aura',       // Your Aura theme
          '@primevue/themes/lara',       // Your Lara theme (add others if necessary)
          '@primevue/themes/material',
          '@primevue/themes/nora'
        ]
      }
});
