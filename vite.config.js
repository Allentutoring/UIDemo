import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = 'ui-demo.test';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            valetTls: host,
        }),
    ],
    server: {
        host,
        hmr: { host },
    },
});
