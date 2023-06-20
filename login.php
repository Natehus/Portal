<?php
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        $message = "Bem-Vindo";
        header("Location: tela_principal.php");
        exit(); 
    } else {
        $message = "Não autorizado";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .window {
            width: 300px;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="window">
        <h1><?php echo $message; ?></h1>
    </div>
</body>
</html>
