const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/*.blade.php',
        './resources/views/**/**/*.blade.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Comfortaa', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ash: colors.trueGray,
                orange: colors.orange,
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled']
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
