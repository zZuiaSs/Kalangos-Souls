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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 300px;
            width: 220px;
        }

        h1 {
            display: flex;
            color: white;
            margin-bottom: 15px;
            justify-content: baseline;
            align-items: center;
            flex-direction: column;
        }

        input {
            display: flex;
            padding: 2px;
            margin-bottom: 13px;
        }

        .bt {
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>


</body>
</html>
