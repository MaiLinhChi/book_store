/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            primary: "#fdba74",
            white: "#ffff",
            gray: "#a1a1aa",
            heading: "#1e3a8a",
        },
        extend: {},
    },
    plugins: [],
};
