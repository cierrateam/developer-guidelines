const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
    purge: {
        content: [
            'source/**/*.html',
            'source/**/*.md',
            'source/**/*.js',
            'source/**/*.php',
            'source/**/*.vue',
        ],
        options: {
            whitelist: [/language/, /hljs/, /algolia/],
        },
    },
    theme: {
        extend: {
            boxShadow: {
                lg: '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
            },
            colors: {
                orange: colors.orange,
                white: '#FFFEFD',
                primary: {
                    // blue
                    // 100: '#F0F4F8',
                    // 200: '#D9E2EC',
                    // 300: '#BCCCDC',
                    400: '#9FB3C8',
                    500: '#829AB1',
                    600: '#486581',
                    700: '#334E68',
                    800: '#243B53',
                    900: '#01182F',
                },
                secondary: {
                    // orange
                    // 100: '#FFE8D9',
                    // 200: '#FFD0B5',
                    // 300: '#FFB088',
                    // 400: '#FF9466',
                    // 500: '#F9703E',
                    900: '#F35627',
                },
            },
            fontFamily: {
                sans: ['Gilroy', 'sans-serif'],
                mono: ['monospace'],
            },
            fontSize: {
                '2xl': '1.5rem',
                '3xl': '1.75rem',
                '4xl': '2.125rem',
                '5xl': '2.625rem',
                '6xl': '10rem',
            },
            letterSpacing: {
                wide: '0.02em',
                wider: '0.03em',
            },
            lineHeight: {
                normal: '1.6',
                loose: '1.75',
            },
            maxWidth: {
                none: 'none',
                '7xl': '80rem',
                '8xl': '74.5rem', //  1192px
            },
            spacing: {
                7: '1.75rem',
                9: '2.25rem',
            },
        },
    },
    variants: {
        borderRadius: ['responsive', 'focus'],
        borderWidth: ['responsive', 'active', 'focus'],
        width: ['responsive', 'focus'],
    },
    plugins: [
        function ({ addUtilities }) {
            const newUtilities = {
                '.transition-fast': {
                    transition: 'all .2s ease-out',
                },
                '.transition': {
                    transition: 'all .5s ease-out',
                },
            }
            addUtilities(newUtilities)
        },
    ],
}
