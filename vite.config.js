import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/accueil.css',
                'resources/css/prof.css',
                'resources/css/formation.css',
                'resources/css/nav.css',
                'resources/css/footer.css',
                'resources/css/nav2.css',
                'resources/css/footer2.css',
                'resources/css/form.css',

                'resources/js/app.js',
                'resources/js/accueil.js',
                'resources/js/prof.js',
                'resources/js/formation.js',
                'resources/js/nav.js',
                'resources/js/form.js',

                'resources/css/admin/delib.css',
                'resources/css/admin/inscription.css',
                'resources/css/admin/gestion-notes.css',
                'resources/css/admin/side.css',
                'resources/css/admin/dashboard.css',
                'resources/css/admin/prof.css',

                'resources/js/admin/side.js',
            ],
            refresh: true,
        }),
    ],
});
