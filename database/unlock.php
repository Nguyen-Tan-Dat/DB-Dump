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
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq8Beo6DDvB7Riehrt0DuzuV8LPHtuqiRxDP7gjl68OHYq45nynpwrb01T46Qhf6xLatE&usqp=CAU">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

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
    <h1>Database tools unlock</h1>
    <label for="lock">
        <input type="password" name="lock" required placeholder="Enter Lock">
    </label>
    <label for="key">
        <input type="password" name="key" required placeholder="Enter Key"></label>
    <button type="submit">Unlock</button>

</form>

</body>
</html>
