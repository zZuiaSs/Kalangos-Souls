<!-- D E S C R I Ç Ã O -->

<!-- Listar espaços públicos -->
<!-- Menu de opções -->
<!-- Listar usuários (com opções administrativas (editar, excluir)) -->

<?php

    require_once __DIR__ . "../../../Backend/Controller/spaceController.php";
    $spaceController = new spaceController();
    $espacos = $spaceController->getAllSpaces();

?>

<!-- H T M L -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="./home.css">
</head>
<body>
<div class="container">
        <h2>Lista de Espaços</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome do espaço</th>
                    <th>Capacidade</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($espacos as $espacos) {
                ?>
                    <tr>
                        <td><?php echo $espaco['nome']; ?></td>
                        <td><?php echo $espaco['descricao']; ?></td>

                        <td class="action-buttons">
                            <!-- Link para editar o espaço -->
                            <a href= "../../Backend/Router/spaceRouter.php?acao=update" <?php echo $espaco['id']; ?> class="button">Editar</a>

                            <!-- Formulário para deletar o espaço -->
                            <form action="../../backend/router/spaceRouter.php?acao=delete" method="POST">
                                <input type="hidden" name="idEspaco" value="<?php echo $espaco['id']; ?>">
                                <button type="submit" name="deletar" class="button deletar-button">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<!-- BREAKPOINT -->
 
    --- LISTA DE TAREFAS DO GARENA ---
             | Visualizar Agenda
    <Home>   | Cadastro de Espaços (Josefino)
             | Lista de Espaços <feito>

             |
    <Feitos> | Cadastro de Usuários <Feito> 
             | Login <Feito>
    
             | Listar usuários (Lukeee fazendo
             )
    <Perfil> | Página de Reservas (Josefino faz dps)
             |

<!-- BREAKPOINT -->