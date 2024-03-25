import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject';


export default defineConfig({
    plugins: [
        // inject({
        //     $: 'jquery',
        // }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/bootstrap.js'],
            refresh: true,
        }),
    ],
});
