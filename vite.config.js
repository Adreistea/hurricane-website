import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        vue(),
    ],
    css: {
        postcss: './postcss.config.js',
    },
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js',
            '@': path.resolve(__dirname, 'resources/js')
        }
    },
    optimizeDeps: {
        exclude: ['vue-router', 'axios', 'vue']
    },
    build: {
        commonjsOptions: {
            include: /node_modules/
        }
    },
    server: {
        hmr: {
            overlay: false
        }
    }
});
