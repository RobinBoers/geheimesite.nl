function withOpacityValue(variable) {
    return ({opacityValue}) => {
        if (opacityValue === undefined) {
            return `rgb(var(${variable}))`;
        }
        return `rgba(var(${variable}), ${opacityValue})`;
    };
}

module.exports = {
    mode: "jit",
    content: [
        "src/**/*.html",
        "src/content/**/*.md",
        "src/static/**/*.{php,html,js}",
    ],
    theme: {
        colors: {
            slate: "#111121",
            foreground: withOpacityValue("--foreground"),
            background: withOpacityValue("--background"),
            primary: withOpacityValue("--primary"),
            transparent: "transparent",
            current: "currentColor",
        },
        extend: {
            fontFamily: {
                poppins: ["Poppins", "var(--font-sans)"],
                fira: ["Fira Sans Condensed", "var(--font-sans)"],
                serif: ["Merriweather", "var(--font-sans)"],
                display: ["Bungee Shade", "var(--font-sans)"],
                mono: [
                    "ui-monospace",
                    "DejaVu LGC Sans Code",
                    "DejaVu Sans Code",
                    "DejaVu Sans Mono",
                    "Cascadia Code",
                    "Droid Sans Mono",
                    "SFMono-Regular",
                    "monospace",
                ],
            },
            backgroundImage: {
                "md-mark": "url('../assets/images/md-mark.svg')",
            },
            boxShadow: {
                "hyper-light": "18px 10px 0px 0px rgba(33, 144, 255, 1)",
                "hyper-dark": "18px 10px 0px 0px #cee3f8",
            },
        },
    },
    plugins: [require("tailwindcss-opentype")],
    corePlugins: {
        preflight: false,
    },
};
