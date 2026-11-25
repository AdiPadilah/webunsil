<?php

namespace App\Models\Concerns;

trait ResolvesPublicImage
{
    /**
     * Resolve relative paths under public/images, storage/app/public, or external URLs.
     */
    public static function resolvePublicUrl(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'images/')) {
            return asset($path);
        }

        return asset('storage/' . $path);
    }

    /**
     * Normalize state value for Filament ImageColumn configured with disk('public').
     */
    public static function resolveFilamentColumnState(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        if (str_starts_with($path, 'images/') || str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return static::resolvePublicUrl($path);
        }

        return $path;
    }
}
