/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./about.php",
    "./contact.php",
    "./schedule.php",
    "./header.php",
    "./footer.php",
    "./privacy-policy.php",
    "./terms-and-conditions.php",
    "./disclaimer.php",
    "./send-lead.php",
    "./services/*.php",
    "./forms/*.php",
    "./locations/*.php",
    "./landing-pages/*.php",
    "./html_backup/*.html"
  ],
  theme: {
    extend: {
      colors: {
        brandBlue: '#0F4C81',
        brandDarkBlue: '#0A2E52',
        brandNavy: '#071D36',
        brandOrange: '#FF6B00',
        brandOrangeHover: '#E05D00',
        brandGreen: '#16A34A',
        brandLightBg: '#F4F7FB',
        brandBorder: '#E2E8F0',
        primary: '#0A2E52',
        secondary: '#334155',
        accent: '#FF6B00',
        'accent-hover': '#E05D00',
        lightbg: '#F4F7FB',
        bordercolor: '#E2E8F0'
      },
      fontFamily: {
        heading: ['Montserrat', 'sans-serif'],
        sans: ['Inter', 'sans-serif']
      }
    }
  },
  plugins: [],
}
