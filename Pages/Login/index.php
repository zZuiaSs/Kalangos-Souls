<!DOCTYPE html>
<html lang="Pt - Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <div class="fundo">
                        <h1>Login</h1>
            <form method = "post">
                <input type="text" name = "inp1" placeholder = "Nome">
                <input type="text" name = "inp2" placeholder = "Senha"> 

                <div class = "bt">
                    <input type="submit">
                </div>
            </form>
        </div>

    <style>
       style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;   
        }

        .fundo {
            display: flex;
            background-color: black;
            justify-content: center;
            align-items: center;    
            flex-direction: column;
            height: 350px;
            width: 250px;
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            display: flex;
            color: white;
            margin-bottom: 15px;
        }

        input {
            display: flex;
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        .bt input {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .bt input:hover {
            background-color: #45a049;
        }

    </style>


</body>
</html>


                    <!-- Cadastro -->
<!-- Email, Nome de usuário, Senha (confirmar senh), Telefone -->
                    
     <!-- Login -->
<!-- Nome de usuário, Senha -->

