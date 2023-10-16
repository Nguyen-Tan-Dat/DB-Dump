<?php
include_once("setup.php");
$host = DB_HOST;
$username = DB_USER;
$password = DB_PASS;

if (isset($_POST["database"])) {
    try {
        $databaseName = $_POST["database"];
        $pdo = new PDO("mysql:host=$host;dbname=$databaseName", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
        ?>
        <h3><?php echo $databaseName?></h3>
        <form method="post" action="export.php" style="width: 100%;max-width: 200px;display: flex;justify-content: space-between">
            <a href="info.php" style="text-decoration: none;border: #3b82d2 1px solid; padding: 4px 10px;border-radius: 4px">Back</a>
            <input type="hidden" name="database" value="<?= $databaseName ?>">
            <button type="submit" style="border: #3b82d2 1px solid; padding: 4px 10px;border-radius: 4px">Export</button>
        </form>
        <?php
        echo "<ul>";
        foreach ($tables as $table) {
            echo "<li>$table</li>";
        }
        echo "</ul>";

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    try {
        $pdo = new PDO("mysql:host=$host", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databases = $pdo->query("SHOW DATABASES")->fetchAll(PDO::FETCH_COLUMN);
        $result = $pdo->query("SELECT VERSION() as version");
        $row = $result->fetch();
        $mysqlVersion = $row["version"];
        echo "<h2>MySQL version: " . $mysqlVersion."</h2>";
        foreach ($databases as $db) { ?>
            <form method="post">
                <input type="hidden" name="database" value="<?= $db ?>">
                <button type="submit" style="width: 200px;text-align: left"><?= $db ?></button>
            </form>
        <?php } ?>
        <?php
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}