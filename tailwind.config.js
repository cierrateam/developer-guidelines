const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
    content: require('fast-glob').sync(
        [
            'source/**/*.{blade.php,md,html,vue}',
            '!source/**/_tmp/*', // exclude temporary files
        ],
        { dot: true }
    ),
    options: {
        whitelist: [/language/, /hljs/, /algolia/],
    },
    theme: {
        extend: {
            boxShadow: {
                lg: '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
            },
            colors: {
                white: '#FFFEFD',
                primary: {
                    // blue
                    // 100: '#F0F4F8',
                    // 200: '#D9E2EC',
                    300: '#BCCCDC',
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
                18: '1.125rem',
                20: '1.25rem',
                22: '1.375rem',
                28: '1.75rem',
                32: '2rem',
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
                26: '1.625rem',
                30: '1.875rem',
                38: '2.375rem',
                41: '2.5625rem',
            },
            maxWidth: {
                none: 'none',
                '8xl': '74.5rem', //  1192px
                '9xl': '90rem', // 1440px
            },
            spacing: {
                7: '1.75rem',
                7.5: '1.875rem',
                9: '2.25rem',
                180: '45rem',
            },
        },
    },
}
