<?php

function is_development() {
    return ($_ENV['APP_ENV'] ?? 'production') === 'development';
}

function asset_url($path) {
    // Development mode - gunakan Vite dev server
    if (is_development()) {
        return "http://localhost:5173/assets/{$path}";
    }
    
    // Production mode - gunakan built assets
    return "/dist/{$path}";
}
