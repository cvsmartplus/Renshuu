import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        react(),
        laravel({
            input: [
                'resources/css/App.css',
                'resources/js/app.jsx',
                'resources/js/Pages/Landing.jsx'
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', 
        emptyOutDir: true, 
        rollupOptions: {
            output: {
                publicPath: "/build/",
            },
        },
    },
});
