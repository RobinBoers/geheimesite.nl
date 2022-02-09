module.exports = {
    mode: "jit",
    content: ["./*.{php,html,js,shtml}", "./js/*.js", "./library/projects/package/*.{php,html}", "./library/website/overview.php"],
    theme: {
        colors: {
            slate: "#111121",

            // Trying

            // black: "#1d0f44",
            // white: "#f44e38",

            // vibrant: "#00ffae",

            // Real options

            // black: "#222323",
            // white: "#f0f0f6",
            // vibrant: " #ff5730",

            // very good on light mode
            // white: "#ffffd9",
            // black: "#00334d",
            // vibrant: "#bf0a0d",

            // black: "#314e52",
            // white: "#f3f3f3",
            // vibrant: "#f2a154",

            // black: "#272946",
            // white: "#e7ffee",
            // vibrant: "#eda031",
            black: "#0d2b45", // better version
            white: "#ffecd6",
            vibrant: "#ffaa5e",

            // TO BLAND!!

            // black: "#191818",
            // white: "#d4c8bb",
            // vibrant: "#7b60a6",

            // black: "#262420",
            // white: "#fcfffb",
            // vibrant: "#215fa3",

            // black: "#372a51",
            // white: "#f5f6df",
            // vibrant: "#5a8f78",

            transparent: "transparent",
            current: "currentColor",
        },
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                fira: ["Fira Sans Condensed", "sans-serif"],
                serif: ["Merriweather", "Georgia", "serif"],
                display: ["Bungee Shade", "sans-serif"],
                mono: ['ui-monospace', 'DejaVu LGC Sans Code', 'DejaVu Sans Code', 'DejaVu Sans Mono', 'SFMono-Regular', 'monospace'],
            },
            backgroundImage: {        
                'md-mark': "url('../images/md-mark.svg')",        
            },
        }
    },
    plugins: [],
    corePlugins: {
        preflight: false,
    },
};
