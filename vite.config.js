import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/sb-admin-2.min.css',
                'resources/assets/js/sb-admin-2.min.js'
            ],
            refresh: true,
        }),
    ],
});