module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        moonliteSolid: ["Moonlite Solid", "sans-serif"],
        moonliteOutline: ["Moonlite Outline", "sans-serif"],
      },
      animation: {
        "bounce-slow": "bounce 3s ease-in-out infinite",
      },
    },
    gap: {
      8: "2rem",
    },
    container: {
      center: true,
      padding: "1rem",
      screens: {
        lg: "1124px",
        xl: "1124px",
        "2xl": "1124px",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
