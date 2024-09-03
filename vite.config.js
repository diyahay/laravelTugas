import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js',
                'node_modules/admin-lte/dist/css/adminlte.css',
                'node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css',
                'node_modules/admin-lte/plugins/jquery/jquery.min.js',
                'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
                'node_modules/admin-lte/dist/js/adminlte.min.js'
            ],
            refresh: true,
        }),
    ],
});
