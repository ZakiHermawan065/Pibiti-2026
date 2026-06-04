const menuButton = document.getElementById('menu-button');
const aside = document.getElementById('aside');

if (menuButton && aside) {
    menuButton.addEventListener('click', () => {
        aside.classList.toggle('hidden');
    });
}
/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Tambahkan baris ini
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
