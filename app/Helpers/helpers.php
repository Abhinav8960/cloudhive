<?php

use Illuminate\Support\Str;

if (!function_exists('active_class')) {
    /**
     * Get the active class if the current route matches the given patterns
     */
    function active_class($patterns, $activeClass = 'active', $inactiveClass = '')
    {
        $currentRoute = request()->path();
        
        if (!is_array($patterns)) {
            $patterns = [$patterns];
        }
        
        foreach ($patterns as $pattern) {
            // Remove leading/trailing slashes for comparison
            $pattern = trim($pattern, '/');
            $current = trim($currentRoute, '/');
            
            if ($pattern === $current || 
                ($pattern === '' && $current === '') ||
                (Str::is($pattern, $current))) {
                return $activeClass;
            }
        }
        
        return $inactiveClass;
    }
}

if (!function_exists('is_active_route')) {
    /**
     * Check if the current route matches any of the given patterns
     */
    function is_active_route($patterns, $output = 'active')
    {
        $currentRoute = request()->path();
        
        if (!is_array($patterns)) {
            $patterns = [$patterns];
        }
        
        foreach ($patterns as $pattern) {
            // Remove leading/trailing slashes for comparison
            $pattern = trim($pattern, '/');
            $current = trim($currentRoute, '/');
            
            if ($pattern === $current || 
                ($pattern === '' && $current === '') ||
                (Str::is($pattern, $current))) {
                return $output;
            }
        }
        
        return '';
    }
}

if (!function_exists('show_class')) {
    /**
     * Return 'show' if the current route matches any of the given patterns
     * Used for showing dropdown menus
     */
    function show_class($patterns, $output = 'show')
    {
        $currentRoute = request()->path();
        
        if (!is_array($patterns)) {
            $patterns = [$patterns];
        }
        
        foreach ($patterns as $pattern) {
            $pattern = trim($pattern, '/');
            $current = trim($currentRoute, '/');
            
            if ($pattern === $current || 
                ($pattern === '' && $current === '') ||
                Str::is($pattern, $current) ||
                Str::is($pattern . '/*', $current)) {
                return $output;
            }
        }
        
        return '';
    }
}
