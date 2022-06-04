function withOpacityValue(variable) {
    return ({ opacityValue }) => {
        if (opacityValue === undefined) {
            return `rgb(var(${variable}))`;
        }
        return `rgba(var(${variable}), ${opacityValue})`;
    };
}

module.exports = {
    mode: "jit",
    content: ["./*.{php,html,js,shtml}", "./en/*.{php,html,js,shtml}", "./js/*.js", "./library/projects/package/*.{php,html}", "./library/website/overview.php"],
    theme: {
        colors: {
            slate: "#111121",
            black: withOpacityValue("--black"),
            white: withOpacityValue("--white"),
            vibrant: withOpacityValue("--vibrant"),
            transparent: "transparent",
            current: "currentColor",
        },
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                fira: ["Fira Sans Condensed", "sans-serif"],
                serif: ["Merriweather", "Georgia", "serif"],
                display: ["Bungee Shade", "sans-serif"],
                mono: ["ui-monospace", "DejaVu LGC Sans Code", "DejaVu Sans Code", "DejaVu Sans Mono", "SFMono-Regular", "monospace"],
            },
            backgroundImage: {
                "md-mark": "url('../images/md-mark.svg')",
            },
            boxShadow: {
                "hyper-light": "18px 10px 0px 0px rgba(33, 144, 255, 1)",
                "hyper-dark": "18px 10px 0px 0px #cee3f8",
            },
        },
    },
    plugins: [
        require('tailwindcss-opentype')
    ],
    corePlugins: {
        preflight: false,
    },
};
//#24b9c4
