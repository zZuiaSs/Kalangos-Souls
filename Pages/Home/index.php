<?php
session_start();
require_once __DIR__ . "../../../Backend/Controller/loginController.php";

// Configurações do banco de dados
$host = "localhost";
$user = "root";
$password = "";
$dbname = "reservas";

// Conectar ao MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Buscar os espaços cadastrados
$sql = "SELECT * FROM espaco";
$result = $conn->query($sql);

// Verificar se o usuário está logado
if (isset($_POST['logout'])) {
  $loginController = new loginController();
  $loginController->logout();
  header("Location: ../../Pages/Login/index.php");
  exit();
}

$usuario = htmlspecialchars($_SESSION['nome'] ?? 'Usuário');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="home.css">
</head>

<body>
  <div class="container">
    <aside class="container-menu">
      <div class="sidebar">
        <div class="desprofile">
          <div class="profile-section">
            <div class="profile-img">
              <h1 style="font-size: 50px; color: greenyellow;" id="primeira-letra"><?php echo $usuario[0] ?></h1>
            </div>
            <h1 class="profile-name"><?php echo $usuario; ?></h1>
          </div>

          <div class="menu">
            <button class="menu-item" onclick="window.location.href='../Reservas/index.php'">Minhas reservas</button>
            <button class="menu-item" onclick="window.location.href='../Perfil/index.php'">Editar perfil</button>
          </div>
        </div>

        <form class="logout-container" method="POST">
          <button type="submit" name="logout" class="logout">Sair</button>
        </form>
      </div>
    </aside>

    <div class="principal">
      <header class="topbar">
        <button class="topbar-btn green" onclick="window.location.href='../Espaços/CadastroEspaço.php'">Cadastrar espaço</button>
        <button class="topbar-btn blue" onclick="window.location.href='../Espaços/index.php'">Meus espaços</button>
        <button class="topbar-btn orange" onclick="window.location.href='../Usuarios/index.php'">Listar usuários</button>
      </header>

      <div class="main-content">
        <h2 class="content-title">Espaços disponíveis</h2>

        <main class="content">
          <?php
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<div class='card'>
                      <img class='card-img' src='https://cdn0.casamentos.com.br/vendor/7952/3_2/960/jpg/16125676385173_13_307952-161290249528500.jpeg' alt='img do card'>
                      <h3 class='card-title'>{$row['nome']}</h3>
                      <p class='card-subtitle'>{$row['descricao']}</p>
                      <p class='card-subtitle'>Capacidade: {$row['capacidade']}</p>
                      <button class='reservar-btn' data-id='{$row['id_espaco']}'>Reservar</button>
                  </div>";
              }
          } else {
              echo "<p>Nenhum espaço disponível.</p>";
          }
          ?>
        </main>
      </div>
    </div>
  </div>

  <!-- Modal Popup -->
  <div id="reservationModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Reservar Espaço</h2>
      <div id="calendar"></div>
      <button id="confirmReservation">Confirmar Reserva</button>
    </div>
  </div>

  <script src="./script.js"></script>
</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>
