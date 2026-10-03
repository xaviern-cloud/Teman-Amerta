import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'amerta-navy': '#153373',
                'amerta-pink': '#D45990',
                'amerta-primary': '#153373',
                'amerta-surface': '#EBF2FA',
                'amerta-bg': '#F4F6F9',
                'amerta-muted': '#6B7280',
                'amerta-border': '#153373',
            },
            fontFamily: {
                sans: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
