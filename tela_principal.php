<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            background: #DCDCDC;
            font-family: monospace;
        }

        .container {
            background-color: #4F4F4F;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button {
            background-color: gray;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        button:hover {
            background-color: dimgray;
            cursor: pointer;
        }

        .window {
            display: none;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Impede o envio do formulário

                const username = form.username.value;
                const password = form.password.value;

                if (username !== 'admin' || password !== '1234') {
                    const errorMessage = document.createElement('p');
                    errorMessage.classList.add('error-message');
                    errorMessage.textContent = 'Login incorreto.';

                    form.appendChild(errorMessage);
                } else {
                    window.location.href = 'buscar.php';
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="POST" id="loginForm">
            <input type="text" name="username" placeholder="Nome">
            <br><br>
            <input type="password" name="password" placeholder="Senha">
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <div class="window">
        <h1>Bem-Vindo</h1>
        <div id="buscarContent"></div>
    </div>
</body>

</html>
