<?php
/**
 * Dynamic Automated XML Sitemap
 * Appliance Repair Knights Ltd.
 *
 * Automatically detects file modification times (filemtime) for every page.
 * Whenever any page is updated on the server, its <lastmod> date updates
 * dynamically to ensure accurate, Google-compliant crawl signals.
 */

// Set proper XML Content-Type header
header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex, follow');

$domain = 'https://www.appliancerepairknights.com';
$rootDir = __DIR__;

// Helper to safely get the last modified date (YYYY-MM-DD)
function getFileModDate($filepath) {
    if (file_exists($filepath)) {
        return date('Y-m-d', filemtime($filepath));
    }
    return date('Y-m-d');
}

// 1. Core Pages Definition
$pages = [
    [
        'loc' => $domain . '/',
        'file' => $rootDir . '/index.php',
        'changefreq' => 'daily',
        'priority' => '1.00'
    ],
    [
        'loc' => $domain . '/about',
        'file' => $rootDir . '/about.php',
        'changefreq' => 'monthly',
        'priority' => '0.80'
    ],
    [
        'loc' => $domain . '/contact',
        'file' => $rootDir . '/contact.php',
        'changefreq' => 'monthly',
        'priority' => '0.80'
    ],
    [
        'loc' => $domain . '/schedule',
        'file' => $rootDir . '/schedule.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],

    // 2. Service Pages
    [
        'loc' => $domain . '/services/fridge-repair',
        'file' => $rootDir . '/services/fridge-repair.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],
    [
        'loc' => $domain . '/services/washer-repair',
        'file' => $rootDir . '/services/washer-repair.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],
    [
        'loc' => $domain . '/services/dryer-repair',
        'file' => $rootDir . '/services/dryer-repair.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],
    [
        'loc' => $domain . '/services/dishwasher-repair',
        'file' => $rootDir . '/services/dishwasher-repair.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],
    [
        'loc' => $domain . '/services/stove-repair',
        'file' => $rootDir . '/services/stove-repair.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],
    [
        'loc' => $domain . '/services/microwave-repair',
        'file' => $rootDir . '/services/microwave-repair.php',
        'changefreq' => 'weekly',
        'priority' => '0.90'
    ],
];

// 3. Location Pages (20 GTA / Ontario Cities)
$locations = [
    'toronto-appliance-repair',
    'mississauga-appliance-repair',
    'brampton-appliance-repair',
    'vaughan-appliance-repair',
    'markham-appliance-repair',
    'oakville-appliance-repair',
    'scarborough-appliance-repair',
    'richmond-hill-appliance-repair',
    'burlington-appliance-repair',
    'hamilton-appliance-repair',
    'kitchener-appliance-repair',
    'waterloo-appliance-repair',
    'cambridge-appliance-repair',
    'guelph-appliance-repair',
    'pickering-appliance-repair',
    'caledon-appliance-repair',
    'oshawa-appliance-repair',
    'milton-appliance-repair',
    'barrie-appliance-repair',
    'ajax-appliance-repair',
];

$locTemplate = $rootDir . '/locations/location.php';
$locData = $rootDir . '/locations/location-data.php';
$locBaseMod = max(
    file_exists($locTemplate) ? filemtime($locTemplate) : 0,
    file_exists($locData) ? filemtime($locData) : 0
);

foreach ($locations as $slug) {
    $specificFile = $rootDir . '/locations/' . $slug . '.php';
    $modTime = $locBaseMod;
    if (file_exists($specificFile)) {
        $modTime = max($modTime, filemtime($specificFile));
    }
    $pages[] = [
        'loc' => $domain . '/locations/' . $slug,
        'lastmod' => date('Y-m-d', $modTime > 0 ? $modTime : time()),
        'changefreq' => 'weekly',
        'priority' => '0.95'
    ];
}

// 4. Legal Pages
$legalPages = [
    [
        'loc' => $domain . '/privacy-policy',
        'file' => $rootDir . '/privacy-policy.php',
        'changefreq' => 'yearly',
        'priority' => '0.30'
    ],
    [
        'loc' => $domain . '/terms-and-conditions',
        'file' => $rootDir . '/terms-and-conditions.php',
        'changefreq' => 'yearly',
        'priority' => '0.30'
    ],
    [
        'loc' => $domain . '/disclaimer',
        'file' => $rootDir . '/disclaimer.php',
        'changefreq' => 'yearly',
        'priority' => '0.30'
    ],
];

foreach ($legalPages as $lp) {
    $pages[] = $lp;
}

// Support HTTP 304 Not Modified for optimal Googlebot crawl efficiency
$allModTimes = [];
foreach ($pages as $p) {
    if (isset($p['file'])) {
        $allModTimes[] = file_exists($p['file']) ? filemtime($p['file']) : time();
    } elseif (isset($p['lastmod'])) {
        $allModTimes[] = strtotime($p['lastmod']);
    }
}
$latestMod = !empty($allModTimes) ? max($allModTimes) : time();
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $latestMod) . ' GMT');

if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
    $ifModifiedSince = strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']);
    if ($ifModifiedSince !== false && $ifModifiedSince >= $latestMod) {
        http_response_code(304);
        exit;
    }
}

// Output and Auto-Save XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
$xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
$xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
$xml .= '                            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n\n";

foreach ($pages as $p) {
    $lastmod = $p['lastmod'] ?? getFileModDate($p['file']);
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($p['loc'], ENT_XML1, 'UTF-8') . "</loc>\n";
    $xml .= "    <lastmod>" . $lastmod . "</lastmod>\n";
    $xml .= "    <changefreq>" . $p['changefreq'] . "</changefreq>\n";
    $xml .= "    <priority>" . $p['priority'] . "</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= "</urlset>\n";

// Automatically maintain physical sitemap.xml file on disk for offline inspection
$staticXmlFile = $rootDir . '/sitemap.xml';
if (!file_exists($staticXmlFile) || @file_get_contents($staticXmlFile) !== $xml) {
    @file_put_contents($staticXmlFile, $xml, LOCK_EX);
}

echo $xml;
