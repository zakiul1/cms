// tailwind.config.mjs
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        fontFamily: {
            sans: ['Rubik', 'sans-serif'], // override default sans
        },
        extend: {
            fontFamily: {
                rubik: ['Rubik', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
