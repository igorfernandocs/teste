import type { Config } from 'tailwindcss'

const config: Config = {
  content: [
    './src/pages/**/*.{js,ts,jsx,tsx,mdx}',
    './src/components/**/*.{js,ts,jsx,tsx,mdx}',
    './src/app/**/*.{js,ts,jsx,tsx,mdx}',
  ],
  theme: {
    extend: {
      colors: {
        'neon-green': '#cbff33',
        'light-green': '#009B62',
        'neon-orange': '#FCA903',
        green: '#076d37',
        'dark-green': '#003317',
        yellow: '#FFDC00',
      },
      boxShadow: {
        '3xl': '10px 10px 13px 6px rgba(0, 0, 0, 0.38)',
      },
      backgroundImage: {
        footer: 'linear-gradient(185deg,#1CB575 20%,#166C67 110%)',
      },
    },
  },
  plugins: [],
}
export default config
