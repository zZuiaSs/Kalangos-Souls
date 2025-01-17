<!DOCTYPE html>
<html lang="Pt - Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
        <div class="fundo">
                        <h1>Cadastro</h1>
            <form method = "post">
                <input type="text" name = "inp1" placeholder = "Nome">
                <input type="text" name = "inp2" placeholder = "E-mail"> 
                <div class = "bt">
                    <input type="submit">
                </div>
            </form>
        </div>

        
        <style>
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
                height: 350px;
                width: 250px;
            }

            h1 {
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
            }

            input {
                display: flex;
                padding: 2px;
                margin-bottom: 5px;
            }

            .bt {
                display: flex;
                justify-content: center;
                align-items: center;
            }

        </style>

</body>
</html>