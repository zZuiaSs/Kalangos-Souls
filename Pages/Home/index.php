<?php

  session_start();
  require_once __DIR__ . "../../../Backend/Controller/loginController.php";

  if (isset($_POST['logout'])) {
    $loginController = new loginController();
    $loginController->logout();
    header("Location: ../../Pages/Login/index.php");
    exit();
  }

  $usuario = htmlspecialchars($_SESSION['nome'] ?? 'Usuário');

?>

<!--  -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./home.css">
</head>

<body>

<<<<<<< Updated upstream
=======
  <!-- S C R I P T -->

  <div class="fundo">
    <form action="../../Backend/Router/userRouter.php">
      <div class="profile-img2">
        <h1 style="font-size: 50px; color: greenyellow;" id="primeira-letra2"><?php echo $usuario[0] ?></h1>
      </div>

      <input name="nome" type="text" value="<?php  ?>">
      <input name="email" type="text" value="<?php  ?>">
      <input name="senha" type="text" value="<?php  ?>">
      <input name="telefone" type="text" value="<?php  ?>">

      <button ></button>
    </form>
  </div>

>>>>>>> Stashed changes
  <!-- C O N T E Ú D O -->

  <div class="container">
    <!-- M E N U -->
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
            <button class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/></svg>Minhas reservas</button>
            <button class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M480-240Zm-320 80v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q37 0 73 4.5t72 14.5l-67 68q-20-3-39-5t-39-2q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32h240v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19ZM480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Z"/></svg>Editar perfil</button>
          </div>
        </div>

        <form class="logout-container" method="POST">
          <button type="submit" name="logout" class="logout"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FF0000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>Sair</button>
        </form>
      </div>
    </aside>

    <div class="principal">
      <header class="topbar">
        <button class="topbar-btn green">
          <div style="display: flex; align-items:center; justify-content:center; background-color: #1A1A1A; padding: 10px; border-radius: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
          </div>
          Cadastrar espaço
        </button>
<<<<<<< Updated upstream
=======
        <button class="topbar-btn blue">
          <div style="display: flex; align-items:center; justify-content:center; background-color: #1A1A1A; padding: 10px; border-radius: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
          </div>
          Meus espaços
        </button>
>>>>>>> Stashed changes
        <button class="topbar-btn orange">
          <div style="display: flex; align-items:center; justify-content:center; background-color: #1A1A1A; padding: 10px; border-radius: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
          </div>
<<<<<<< Updated upstream
          Listar Usuários
=======
          Usuários
>>>>>>> Stashed changes
        </button>
      </header>

      <div class="main-content">
        <h2 class="content-title">Espaços disponíveis</h2>

        <main class="content">

          <div class="card">
            <img class="card-img" src="https://cdn0.casamentos.com.br/vendor/7952/3_2/960/jpg/16125676385173_13_307952-161290249528500.jpeg" alt="img do card">
            <h3 class="card-title">Espaço Canto Belo</h3>
             <p class="card-subtitle">Espaço de festas com piscina e churrasqueira</p>
            <p class = "card-subtitle">Capacidade: 50</p>
            <button id="reservar">Reservar</button>
          </div>  
          <div class="card">
            <img class="card-img" src="https://cdn0.casamentos.com.br/vendor/7952/3_2/960/jpg/16125676385173_13_307952-161290249528500.jpeg" alt="img do card">
            <h3 class="card-title">Espaço Canto Belo</h3>
             <p class="card-subtitle">Espaço de festas com piscina e churrasqueira</p>
            <p class = "card-subtitle">Capacidade: 50</p>
            <button id="reservar">Reservar</button>
          </div>  
          <div class="card">
            <img class="card-img" src="https://cdn0.casamentos.com.br/vendor/7952/3_2/960/jpg/16125676385173_13_307952-161290249528500.jpeg" alt="img do card">
            <h3 class="card-title">Espaço Canto Belo</h3>
             <p class="card-subtitle">Espaço de festas com piscina e churrasqueira</p>
<<<<<<< Updated upstream
            <p class = "card-subtitle">Capacidade: 50</p>
            <button id="reservar">Reservar</button>
          </div>  
            

=======
            <p class = "capacidade">Capacidade: 50></p>
          </div>
>>>>>>> Stashed changes
        </main>
      </div>
    </div>
  </div>

  <script src="./script.js"></script>
</body>
</html>