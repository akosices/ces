<?php
/**
 * Get URL from relative path
 *
 * @param string $path
 * @return string
 */
function base_url($path = null)
{
    $domain = $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
    $domain = preg_replace('/index.php.*/', '', $domain);
    $protocol = (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') || (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https' : 'http';
    return "{$protocol}://{$domain}" . (!empty($path) ? (trim($path, '/')) : null);
}
?>