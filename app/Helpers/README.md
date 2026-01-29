# Laravel Helper Functions

This directory contains custom helper functions used throughout the application. These helpers are automatically loaded by Laravel's autoloader.

## Table of Contents
- [Available Helpers](#available-helpers)
- [Installation](#installation)
- [Usage Examples](#usage-examples)
- [How It Works](#how-it-works)
- [Troubleshooting](#troubleshooting)

## Available Helpers

### `active_class($patterns, $activeClass = 'active', $inactiveClass = '')`
Adds an active class to navigation items based on the current route.

### `is_active_route($patterns, $output = 'active')`
Checks if the current route matches any of the given patterns.

### `show_class($patterns, $output = 'show')`
Controls the visibility of dropdown menus by adding the 'show' class.

## Installation

1. The helpers are automatically loaded via `composer.json`:
   ```json
   "autoload": {
       "files": [
           "app/Helpers/helpers.php"
       ]
   }
   ```

2. After making changes, run:
   ```bash
   composer dump-autoload
   php artisan view:clear
   ```

## Usage Examples

### Basic Navigation Item
```php
<li class="nav-item {{ active_class(['dashboard']) }}">
    <a href="/dashboard">Dashboard</a>
</li>
```

### Dropdown Menu
```php
<a class="nav-link" data-toggle="collapse" href="#ui-basic" 
   aria-expanded="{{ is_active_route(['ui-basic/*']) }}" 
   aria-controls="ui-basic">
   <i class="menu-icon mdi mdi-content-copy"></i>
   <span class="menu-title">UI Elements</span>
   <i class="menu-arrow"></i>
</a>
<div class="collapse {{ show_class(['ui-basic/*']) }}" id="ui-basic">
    <ul class="nav flex-column sub-menu">
        <li class="nav-item {{ active_class(['ui-basic/buttons']) }}">
            <a class="nav-link" href="/ui-basic/buttons">Buttons</a>
        </li>
    </ul>
</div>
```

## How It Works

### Pattern Matching
- Supports exact matches (`'dashboard'`)
- Supports wildcards (`'admin/*'`)
- Handles leading/trailing slashes automatically

### Route Detection
- Uses `request()->path()` to get current route
- Normalizes paths for comparison

## Troubleshooting

### Helpers Not Working
1. Run `composer dump-autoload`
2. Clear view cache: `php artisan view:clear`
3. Verify file permissions

### Menu Not Highlighting
- Check route patterns match exactly
- Verify no trailing slashes in routes
- Check for case sensitivity

### Dropdown Not Expanding
- Ensure `show_class()` is used on collapse div
- Verify ID matches href in toggle button
- Check Bootstrap JS is loaded

---
Last Updated: January 2025
