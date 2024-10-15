import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                averia: ['Averia Gruesa Libre'],
                annie: ['Annie Use Your Telescope'],
            },
            colors: {
                primary: '#98CBAA', // Vert clair
                secondary: '#3A786b', // Vert foncé
                accent: '#752B48', // Violet
            },
        },
    },

    plugins: [forms, typography],
};
