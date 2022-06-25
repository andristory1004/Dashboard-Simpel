const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                aa: ['Lobster']
            },
            colors: {
                'blue1': '#00518F',
                'blue2': '#00CBFF'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
