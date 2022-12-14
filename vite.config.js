import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/components/assets/css/style.css',
                'resources/js/app.js',
                // 'resources/js/components/admin/home/file/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
});
