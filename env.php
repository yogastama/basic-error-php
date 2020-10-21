<?php
$env = file_get_contents('.env');
$env = explode(',', $env);
// putenv()
foreach ($env as $key => $value) {
    $newvalue = explode(' = ', $value);
    $setting = $newvalue[0] . '=' . $newvalue[1];
    putenv(strval($setting));
}
switch (getenv('DEVELOPMENT_MODE')) {
    case 'development':
        // untuk setting error dii file php ininya
        ini_set('display_errors', 'On');
        // apa aja error yang ditampilkan
        // E_ALL => menampilkan semua error
        // E_WARNING => menampilkan error yang sifatnya warning
        // E_NOTICE => menampilkan error yang sifatnya notice atau pemberitahuan
        // E_PARSE => belum tahu
        error_reporting(E_ALL);
        break;
    case 'production':
        ini_set('display_errors', 'Off');
        error_reporting(0);
        break;
    default:
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);
        break;
}
