const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'theme-dark',
    theme: {
        themeVariants: ['dark'],
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        backgroundColor: [
          'hover',
          'focus',
          'active',
          'odd',
          'dark',
          'dark:hover',
          'dark:focus',
          'dark:active',
          'dark:odd',
        ],
        display: ['responsive', 'dark'],
        textColor: [
          'focus-within',
          'hover',
          'active',
          'dark',
          'dark:focus-within',
          'dark:hover',
          'dark:active',
        ],
        placeholderColor: ['focus', 'dark', 'dark:focus'],
        borderColor: ['focus', 'hover', 'dark', 'dark:focus', 'dark:hover'],
        divideColor: ['dark'],
        boxShadow: ['focus', 'dark:focus'],
        scrollbar: ['dark', 'rounded']
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-multi-theme'),
        require('tailwind-scrollbar'),
        require('@tailwindcss/typography'),
    ]
};
