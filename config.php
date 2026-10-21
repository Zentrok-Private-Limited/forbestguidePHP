<?php
/**
 * Global Configuration for For Best Guide PHP Application
 */

// Determine base URL dynamically regardless of whether current file is in root or subfolder
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
$protocol = $isHttps ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

$appDir = str_replace('\\', '/', realpath(__DIR__));
$docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])) : '';

$subPath = '';
if (!empty($docRoot) && strpos($appDir, $docRoot) === 0) {
    $subPath = substr($appDir, strlen($docRoot));
} else {
    // Fallback: check SCRIPT_NAME and remove known subdirectories
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $subPath = preg_replace('#/(repair-guides|includes)/.*$#', '', $script);
    $subPath = rtrim(dirname($subPath . 'x'), '/\\');
}

$subPath = trim($subPath, '/');
$baseUrl = rtrim($protocol . $host . ($subPath ? '/' . $subPath : ''), '/');

// Site Meta
$siteName = "For Best Guide";
$siteTagline = "Clear advice for everyday decisions";
$siteDescription = "100% Free unbiased consumer checklists, repair guides, and pre-service advice before you hire local technicians.";

/**
 * Helper to resolve internal links cleanly and reliably from any page
 */
function url($path = '') {
    global $baseUrl;
    $cleanPath = ltrim($path, '/');
    if (empty($cleanPath)) {
        return $baseUrl ? $baseUrl . '/' : '/';
    }
    // If it's an anchor on the homepage (e.g. '#choose'), point to index.php#choose
    if ($cleanPath[0] === '#') {
        return $baseUrl . '/index.php' . $cleanPath;
    }
    return $baseUrl . '/' . $cleanPath;
}

/**
 * Helper to resolve asset paths (images, css, js)
 */


function asset($path = '') {
    global $baseUrl;

    $cleanPath = ltrim(str_replace('\\', '/', $path), '/');

    if ($cleanPath === '' || preg_match('#(^|/)\.\.(/|$)#', $cleanPath)) {
        return $baseUrl . '/public/';
    }

    return $baseUrl . '/public/' . $cleanPath;
}



// Category Guides Master Data
$guidesList = [
    [
        'id' => '01',
        'slug' => 'pc-laptop',
        'url' => 'repair-guides/pc-laptop.php',
        'category' => 'COMPUTERS & LAPTOPS',
        'name' => 'PC & Laptop',
        'title' => 'How to Choose a Local PC & Laptop Technician',
        'description' => 'Review hardware intake, data protection, diagnosis details and replacement claims before leaving your device with a local technician.',
        'bullets' => [
            'Record RAM, storage and device condition before handover.',
            'Ask what was tested before approving major replacement.'
        ],
        'overlayText' => 'Protect your device & personal data',
        'image' => 'laptoppc.webp',
        'heroImage' => 'laptopguide.jpg',
        'icon' => 'laptop'
    ],
    [
        'id' => '02',
        'slug' => 'washing-machine',
        'url' => 'repair-guides/washing-machine.php',
        'category' => 'WASHING MACHINE',
        'name' => 'Washing Machine',
        'title' => 'How to Find a Washing Machine Repairman',
        'description' => 'Check whether the issue can be inspected at home and understand the diagnosis before agreeing to motor, pump, PCB or other replacement work.',
        'bullets' => [
            'Ask for doorstep inspection before workshop removal.',
            'Confirm replacement parts and written service terms.'
        ],
        'overlayText' => 'Start with an on-site diagnosis',
        'image' => 'WM.jpg',
        'heroImage' => 'WMguide.jpg',
        'icon' => 'zap'
    ],
    [
        'id' => '03',
        'slug' => 'refrigerator',
        'url' => 'repair-guides/refrigerator.php',
        'category' => 'REFRIGERATOR',
        'name' => 'Refrigerator',
        'title' => 'When You Need a Refrigerator Repair Mechanic',
        'description' => 'Learn which checks to ask for before accepting compressor, relay, cooling-system or refrigerant-related repair recommendations.',
        'bullets' => [
            'Ask how the cooling issue was verified.',
            'Get gas work and warranty terms in writing.'
        ],
        'overlayText' => 'Verify cooling and gas-related claims',
        'image' => 'fridge.jpg',
        'heroImage' => 'fridgeguide.jpg',
        'icon' => 'refrigerator'
    ],
    [
        'id' => '04',
        'slug' => 'smart-tv',
        'url' => 'repair-guides/smart-tv.php',
        'category' => 'SMART TV & DISPLAY',
        'name' => 'Smart TV',
        'title' => 'What to Check Before Hiring a TV Mechanic',
        'description' => 'Understand basic display and backlight checks before agreeing to expensive panel or internal board replacement.',
        'bullets' => [
            'Confirm whether the fault is panel, backlight or board-related.',
            'Ask for parts and labor to be listed separately.'
        ],
        'overlayText' => 'Check display claims before replacement',
        'image' => 'tv.jpg',
        'heroImage' => 'tvguide.jpg',
        'icon' => 'tv'
    ],
    [
        'id' => '05',
        'slug' => 'smart-home',
        'url' => 'repair-guides/smart-home.php',
        'category' => 'SMART HOME & WIFI',
        'name' => 'Smart Home',
        'title' => 'Hiring Local Smart Home & WiFi Service Providers',
        'description' => 'Review account ownership, access permissions and final handover details before allowing someone to configure connected home devices.',
        'bullets' => [
            'Keep admin accounts registered to your own email.',
            'Change access details after service completion.'
        ],
        'overlayText' => 'Keep account and network access under your control',
        'image' => 'wifi.jpg',
        'heroImage' => 'homeiotguide.jpg',
        'icon' => 'home'
    ],
    [
        'id' => '06',
        'slug' => 'gaming-audio',
        'url' => 'repair-guides/gaming-audio.php',
        'category' => 'GAMING & AUDIO',
        'name' => 'Gaming & Audio',
        'title' => 'Finding Gaming Console & Audio Repair Specialists',
        'description' => 'Check specialist experience, diagnosis methods, replacement parts and testing procedures before handing over gaming or audio equipment.',
        'bullets' => [
            'Ask what testing will be done before repair approval.',
            'Confirm final functionality testing before collection.'
        ],
        'overlayText' => 'Confirm specialist testing before handover',
        'image' => 'game.jpg',
        'heroImage' => 'gameguide.jpg',
        'icon' => 'gamepad-2'
    ]
];
