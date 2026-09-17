<?php
/**
 * Router script for PHP built-in development server (php -S)
 * Enables clean URLs (e.g. /services/fridge-repair, /about, /locations/caledon-appliance-repair)
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 0. Legacy 301 Redirects
if (preg_match('#^/post/your-go-to-appliance-repair-tips-blog/?$#i', $path)) {
    header('Location: /blog/appliance-repair-tips', true, 301);
    exit;
}
if (preg_match('#^/home-1/?$#i', $path)) {
    header('Location: /', true, 301);
    exit;
}
if (preg_match('#^/service-page/washing-machine-diagnostic-repair/?$#i', $path)) {
    header('Location: /services/washer-repair', true, 301);
    exit;
}
if (preg_match('#^/(service-page|induction-cooktop-repair-service|oven-repair-service|stove-range-repair-service)/?$#i', $path)) {
    header('Location: /services/stove-repair', true, 301);
    exit;
}
if (preg_match('#^/(burlington|kitchener|brampton|waterloo|cambridge|hamilton|caledon|pickering|vaughan|richmond-hill|mississauga|toronto|guelph|markham|oakville|scarborough|oshawa|milton|barrie|ajax)-appliance-repair([0-9\-_]*)/?$#i', $path, $m)) {
    header('Location: /locations/' . strtolower($m[1]) . '-appliance-repair', true, 301);
    exit;
}

// 1. Direct file or directory match
if ($path !== '/' && file_exists(__DIR__ . $path)) {
    return false; // serve requested resource as-is
}

// 2. Append .php if the target file exists
if (file_exists(__DIR__ . $path . '.php')) {
    require __DIR__ . $path . '.php';
    return true;
}

// 3. Match location routes (/locations/{slug})
if (preg_match('#^/locations/([a-z0-9-]+)$#i', $path, $matches)) {
    $slug = $matches[1];
    
    // If a static .php file exists in /locations/ (e.g. caledon-appliance-repair.php)
    if (file_exists(__DIR__ . '/locations/' . $slug . '.php')) {
        require __DIR__ . '/locations/' . $slug . '.php';
        return true;
    }
    
    // Otherwise fallback to dynamic master template locations/location.php
    $_GET['slug'] = $slug;
    require __DIR__ . '/locations/location.php';
    return true;
}

// 3B. Match blog routes (/blog/{slug})
if (preg_match('#^/blog/([a-z0-9-]+)$#i', $path, $matches)) {
    $slug = $matches[1];
    
    if (file_exists(__DIR__ . '/blog/' . $slug . '.php')) {
        require __DIR__ . '/blog/' . $slug . '.php';
        return true;
    }
    
    $_GET['slug'] = $slug;
    require __DIR__ . '/blog/post.php';
    return true;
}

// 4. Fallback to 404 or index
if (file_exists(__DIR__ . '/404.php')) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    return true;
}

return false;
