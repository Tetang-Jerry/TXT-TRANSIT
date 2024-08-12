/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
  theme: {
    extend: {
        colors: {
            primary : "#25626c"
        }
    },
  },
    plugins: [
        require('flowbite/plugin')
    ],}

