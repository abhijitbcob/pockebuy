module.exports = {
  content: [
    "*.html",
    "*.php",
    "./admin/*.php",
    "./admin/*.html",
    "./src/js/*.js"
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          light: "#fbaf85",
          DEFAULT: "#D87D4A",
        },
        black: {
          DEFAULT: "hsl(0,0%,0%)",
          l6: "hsl(0,0%,6%)",
          l30: "hsl(0,0%,30%)",
        },
        "light-grey": {
          DEFAULT: "#F1F1F1",
          2: "#FAFAFA",
          3: "#CFCFCF",
        },
      },
      maxWidth: {
        327: "20.4375rem",
        445: "27.8125rem",
        573: "35.8125rem",
        635: "39.6875rem",
      },
      spacing: {
        3.33: "0.8325rem",
        3.75: "0.9375rem",
        4.25: "1.0625rem",
        7.5: "1.875rem",
        8.5: "2.125rem",
        17: "4.25rem",
      },
      backgroundImage: {
        "mobile-hero": "url('../assets/home/mobile/image-header.jpg')",
        "tablet-hero": "url('../assets/home/tablet/image-header.jpg')",
        "desktop-hero": "url('../assets/home/desktop/image-hero.jpg')",
        "pattern-circles": "url('../assets/home/desktop/pattern-circles.svg')",
        "speaker-zx7-desktop": "url('../assets/home/desktop/image-speaker-zx7.jpg')",
        "speaker-zx7-tablet": "url('../assets/home/tablet/image-speaker-zx7.jpg')",
        "speaker-zx7-mobile": "url('../assets/home/mobile/image-speaker-zx7.jpg')",
      },
      backgroundSize: {
        "100%": "100%",
      },
      backgroundPosition: {},
      lineHeight: {
        25: "1.5625rem",
        44: "2.75rem",
      },
      borderRadius: {
        DEFAULT: "0.8rem",
      },
      outline: {
        "light-grey": ["1px solid #cfcfcf", "5px"],
      },
    },
    fontFamily: {
      primary: "Manrope, sans-serif",
    },
    fontSize: {
      xtiny: "0.75rem",
      tiny: "0.8125rem",
      xs: "0.875rem",
      sm: "0.9375rem",
      base: "0.9375rem",
      lg: "1.125rem",
      xl: "1.5rem",
      "2xl": "1.75rem",
      "3xl": "2rem",
      "4xl": "2.5rem",
      "5xl": ["3.5rem", {
        lineHeight: "3.625rem"
      }],
      36: ["2.25rem", {
        lineHeight: "2.5rem"
      }],
    },
    letterSpacing: {
      0.86: "0.86px",
      0.93: "0.93px",
      1: "1px",
      1.15: "1.15px",
      1.03: "1.03px",
      1.07: "1.07px",
      1.3: "1.29px",
      1.5: "1.5px",
      1.7: "1.7px",
      wide: "2px",
      widest: "10px",
    },
    container: {
      center: true,
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],

  corePlugins: {
    container: false,
  },
};