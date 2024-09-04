/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        // container: {
        //   center: true,
        //   screens: {
        //     sm: '600px',
        //     md: '728px',
        //     lg: '984px',
        //     xl: '1240px',
        //     '2xl': '1496px',
        //   },
        // },
        extend: {
            transitionProperty: {
                width: "width",
            },
            animation: {
                fade: "fadeIn 1.5s ease-in forwards .5s",
                line: "line 1s ease-out forwards 1s",
                fadeOut: "fadeOut 2s ease-out forwards 2s",
            },
            keyframes: {
                line: {
                    from: {
                        width: 0,
                    },
                    to: {
                        width: "100%",
                    },
                },
                fadeOut: {
                    from: {
                        opacity: 1,
                        visibility: "visible",
                    },
                    to: {
                        opacity: 0,
                        visibility: "hidden",
                    },
                },
                fadeIn: {
                    from: {
                        opacity: 0,
                        transform: "scale(.9)",
                    },
                    to: {
                        opacity: 1,
                        transform: "scale(1)",
                    },
                },
            },
        },
        letterSpacing: {
            tightest: "-.075em",
            tighter: "-.05em",
            tight: "-.025em",
            normal: "0",
            wide: ".025em",
            wider: ".1em",
            widest: ".25em",
        },
    },
    plugins: [],
};
