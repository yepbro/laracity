/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                serif: ['Playfair Display', 'serif'],
            },
            colors: {
                background: '#ffffff',
                foreground: '#1a1a1a',
                'muted-foreground': '#6b6b6b',
                primary: '#1a73e8',
                'primary-foreground': '#ffffff',
                secondary: '#f7f7f7',
                'secondary-foreground': '#1a1a1a',
            },
        },
    },
    plugins: [],
}
