/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./index.html", "./src//*.{js,ts,jsx,tsx,php}"],
  theme: {
    extend: {
      colors: {
        primary: "#569585",
        secondary: "#965585",
      },
      fontFamily: {
        sans: ["Poppins", "sans-serif"],
        heading: ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [],
};