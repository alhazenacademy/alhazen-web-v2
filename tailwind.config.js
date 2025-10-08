import preset from '../../vendor/filament/support/tailwind.config.preset.js';

export default {
    presets: [preset],
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
};