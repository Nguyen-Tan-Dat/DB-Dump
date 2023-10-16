<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["LOCK"] = $_POST["lock"];
    $_SESSION["KEY"] = $_POST["key"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Open the database tools lock</title>
    <style>
        body {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 100%;
            max-width: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background: #ccd3d9;
            color: #3b82d2;
            border-radius: 8px;
        }

        label, h1 {
            align-items: center;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        input {
            height: 30px;
            width: 100%;
            margin: 5px 10px;
        }

        button {
            height: 40px;
            width: 100px;
            background: #3b82d2;
            color: #ccd3d9;
            border-radius: 4px;
            border: none;
            margin: 5px 0 20px 0;
            outline: none;
        }
    </style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"><h1>Open the database tools lock</h1>
    <label for="lock">
        <input type="password" name="lock" required placeholder="Enter Lock">
    </label>
    <label for="key">
        <input type="password" name="key" required placeholder="Enter Key"></label>
    <button type="submit">Unlock</button>
    <table style="width: 100%;padding: 4px 10px;">
        <tbody>
        <?php
        $phpVersion = phpversion();
        $clientIP = $_SERVER['REMOTE_ADDR'];
        echo "<tr><td>PHP version</td><td>" . $phpVersion . "</td></tr>";
        echo "<tr><td>Client IP</td><td>" . $clientIP . "</td></tr>";
        ?>
        </tbody>
    </table>
</form>

</body>
</html>
