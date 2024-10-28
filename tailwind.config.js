import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'orng':'#e44446',
                'creme':'#F3F7EC',
                'darkblue':'#005C78',
                'bleu':'#006989',
                'marron':'#9e9083',
                'chiffon':'#fafaf2',
                'gris':'#f2f2f4',
                'gris2':'#d9d9db',
              }
        },
    },
    plugins: [],
};
