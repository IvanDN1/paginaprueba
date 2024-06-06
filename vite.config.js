import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import 'bootstrap/scss/bootstrap';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
