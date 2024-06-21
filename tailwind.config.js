/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "black": "#060606",
        "white": "rgb(224 224 224 / .9)"
      },
      fontFamily: {
        "hanken-grotesk" : ["Hanken Grotesk", "sans-serif"]
      },
      fontSize: {
        "2xs" : "0.63em"
      }
    },
  },
  plugins: [],
}

