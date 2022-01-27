const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    corePlugins: {
        container: false
    },
    theme: {
        extend: {
            fontFamily: {
                heading: ['"Caveat Brush"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                tegners: {
                    blue: '#11509c', // blue-500: '#3b82f6',
                    red: '#fc3a43',
                },
            },
        },
    },
    variants: {},
    plugins: [],
    future: {
        purgeLayersByDefault: true,
    },
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
}
