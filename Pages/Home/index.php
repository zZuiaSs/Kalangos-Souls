<?php

  session_start();
  require_once __DIR__ . "../../../Backend/Controller/loginController.php";

  if (isset($_POST['logout'])) {
    $loginController = new loginController();
    $loginController->logout();
  }

  

  $usuario = $_SESSION['nome'];

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

  <!-- S C R I P T -->

  <div class="fundo-editar-perfil">
    <div class="editar-perfil">
      <input type="text">Nome
      <button>Salvar</button>
    </div>
  </div>

  <!-- C O N T E Ú D O -->

  <div class="container">
    <!-- M E N U -->
    <aside class="container-menu">
      <div class="sidebar">
        <div class="desprofile">
          <div class="profile-section">
            <div class="profile-img">
              <h1 style="font-size: 50px; color: greenyellow;" id="primeira-letra"></h1>
            </div>
            <h1 class="profile-name">Pedro Macio</h1>
          </div>

          <div class="menu">
            <button class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/></svg>Minhas reservas</button>
            <button class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M480-240Zm-320 80v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q37 0 73 4.5t72 14.5l-67 68q-20-3-39-5t-39-2q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32h240v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19ZM480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Z"/></svg>Editar perfil</button>
            <button class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M444-200h70v-50q50-9 86-39t36-89q0-42-24-77t-96-61q-60-20-83-35t-23-41q0-26 18.5-41t53.5-15q32 0 50 15.5t26 38.5l64-26q-11-35-40.5-61T516-710v-50h-70v50q-50 11-78 44t-28 74q0 47 27.5 76t86.5 50q63 23 87.5 41t24.5 47q0 33-23.5 48.5T486-314q-33 0-58.5-20.5T390-396l-66 26q14 48 43.5 77.5T444-252v52Zm36 120q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>Métodos de pagamento</button>
          </div>
        </div>

        <form class="logout-container" method="POST">
          <button type="submit" name="logout" class="logout"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FF0000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>Sair</button>
        </form>
      </div>
    </aside>

    <!--  -->

    <div class="principal">
      <header class="topbar">
        <button class="topbar-btn green">
          <div style="display: flex; align-items:center; justify-content:center; background-color: #1A1A1A; padding: 10px; border-radius: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
          </div>
          Cadastrar espaço
        </button>
        <button class="topbar-btn blue">
          <div style="display: flex; align-items:center; justify-content:center; background-color: #1A1A1A; padding: 10px; border-radius: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
          </div>
          Reserva
        </button>
        <button class="topbar-btn orange">
          <div style="opacity: 0.25; display: flex; align-items:center; justify-content:center; background-color: #1A1A1A; padding: 10px; border-radius: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
          </div>
          Convidados
        </button>
      </header>

      <div class="main-content">
        <h2 class="content-title">Espaços disponíveis</h2>

        <main class="content">

          <div class="card-grid">
            <!--  -->
          </div>     
          <div class="card-grid">
            <!--  -->
          </div>     
          <div class="card-grid">
            <!--  -->
          </div>     
          <div class="card-grid">
            <!--  -->
          </div>     
          <div class="card-grid">
            <!--  -->
          </div>     
        </main>
      </div>
    </div>
  </div>

  <script src="./script.js" defer></script>
</body>
</html>