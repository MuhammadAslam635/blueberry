import preset from './vendor/filament/support/tailwind.config.preset'
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
        './app/Filament/**/*.php',
        './vendor/filament/**/*.blade.php',
        './resources/**/*.js',
        './app/Livewire/**/*Table.php',
        './app/Helpers/PowerGridThemes/*.php',
        './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
        './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
    ],
    presets: [

        require('./vendor/power-components/livewire-powergrid/tailwind.config.js'),
      ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
		typography,
		require("daisyui")
	],
    daisyui: {
        themes: ["emerald"],
      },
}
