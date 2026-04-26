<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$timeout_duration = 86400; // 24 hours

if (!isset($_SESSION['last_activity'])) {
    session_regenerate_id(true);
} elseif ((time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
}

$_SESSION['last_activity'] = time();

$allowlist = [
  'index.php', 
  'shopify.php', 
  'goodsir.php', 
  'bcit.php', 
  'human.php', 
  'vancity.php'
];
$current_page = basename($_SERVER['PHP_SELF']);

if (!isset($_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'] = [];
}

if (in_array($current_page, $allowlist) && !in_array($current_page, $_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'][] = $current_page;
}

if (!function_exists('getPipStatus')) {
    function getPipStatus($page) {
        $visited = $_SESSION['visited_pages'] ?? [];
        return in_array($page, $visited) ? 'inactive' : 'active';
    }
}
?>