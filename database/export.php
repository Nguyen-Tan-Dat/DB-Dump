<?php
include("setup.php");
include("dumper.php");
$database = DB_NAME;
if (isset($_POST["database"])) {
    $database = $_POST["database"];
}
try {
    $dumper = Shuttle_Dumper::create(array(
        'host' => DB_HOST,
        'username' => DB_USER,
        'password' => DB_PASS,
        'db_name' => $database,
    ));
    $filename = $database . "_" . date("Y-m-d_H-i-s") . ".sql";
    $dumper->dump($filename);
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($filename));
    readfile($filename);
    unlink($filename);
//    echo '<p style="color:green">Database export to ' . $filename . ' completed.</p>';
} catch (Shuttle_Exception $e) {
    echo "Couldn't export database: " . $e->getMessage();
}