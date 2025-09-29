/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#1B3C53',
                    50: '#E8F0F5',
                    100: '#D1E1EB',
                    200: '#A3C3D7',
                    300: '#75A5C3',
                    400: '#4787AF',
                    500: '#1B3C53',
                    600: '#163042',
                    700: '#102432',
                    800: '#0B1821',
                    900: '#050C11'
                },
                secondary: {
                    DEFAULT: '#234C6A',
                    50: '#E9F2F7',
                    100: '#D3E5EF',
                    200: '#A7CBDF',
                    300: '#7BB1CF',
                    400: '#4F97BF',
                    500: '#234C6A',
                    600: '#1C3D55',
                    700: '#152E40',
                    800: '#0E1F2B',
                    900: '#070F15'
                },
                third: {
                    DEFAULT: '#456882',
                    50: '#EDF4F7',
                    100: '#DBE9EF',
                    200: '#B7D3DF',
                    300: '#93BDCF',
                    400: '#6FA7BF',
                    500: '#456882',
                    600: '#375368',
                    700: '#293E4E',
                    800: '#1B2A34',
                    900: '#0D151A'
                },
                fourth: {
                    DEFAULT: '#D2C1B6',
                    50: '#FAF9F7',
                    100: '#F5F3EF',
                    200: '#EBE7DF',
                    300: '#E1DBCF',
                    400: '#D7CFBF',
                    500: '#D2C1B6',
                    600: '#C5B0A1',
                    700: '#B89E8C',
                    800: '#AB8D77',
                    900: '#9E7B62'
                }
            },
            fontFamily: {
                sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif']
            }
        },
    },
    plugins: [],
}