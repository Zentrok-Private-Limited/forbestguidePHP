
<?php

$projectRoot = dirname(__DIR__);
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestPath = rawurldecode($requestPath ?? '/');

// Normalize the requested path.
$requestPath = '/' . ltrim($requestPath, '/');

// Map the homepage to index.php.
if ($requestPath === '/') {
    $requestPath = '/index.php';
}

$filePath = realpath($projectRoot . $requestPath);
$rootPath = realpath($projectRoot);

// Only serve PHP files located inside the project root.
if (
    $filePath !== false &&
    $rootPath !== false &&
    str_starts_with($filePath, $rootPath . DIRECTORY_SEPARATOR) &&
    is_file($filePath) &&
    strtolower(pathinfo($filePath, PATHINFO_EXTENSION)) === 'php'
) {
    chdir($projectRoot);
    require $filePath;
    exit;
}

http_response_code(404);
echo '404 - Page not found';
