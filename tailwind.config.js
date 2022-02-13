module.exports = {
    mode: "jit",
    content: ["./*.{php,html,js,shtml}", "./js/*.js", "./library/projects/package/*.{php,html}", "./library/website/overview.php"],
    theme: {
        colors: {
            slate: "#111121",

            // Trying

            // Real options

            // black: "#222323",
            // white: "#f0f0f6",
            // vibrant: " #ff5730",

            // black: "#7b4255",
            // white: "#e6d3b9",
            // vibrant: "#ea9971",

            // black: "#253657",
            // white: "#e6d3b9",
            // vibrant: "#e76d8a",

            // black: "#131324",
            // white: "#f5fff3",
            // vibrant: "#5ab9a8",

            // black: "#314e52",
            // white: "#f3f3f3",
            // vibrant: "#f2a154",

            black: "#0d2b45",
            white: "#ffecd6",
            vibrant: "#ffaa5e",

            // HMMM

            // very good on light mode, but dark mode meh
            // white: "#ffffd9",
            // black: "#00334d",
            // vibrant: "#bf0a0d",

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
