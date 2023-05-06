<nav class="sidebar close">
        <header>

            <div>
                <a href="homeView.php">
                    <button class="text_senai">
                        <img src="../Public/Imagens/senai_logo.png">
                    </button>
                </a>
            </div>

        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link" title="Cadastro de Carro">
                        <a href="cadCarroView.php">
                            <i class='bx bxs-car-mechanic icon'></i>
                            <span class="text nav-text">Cadastro de Carro</span>
                        </a>
                    </li>

                    <li class="nav-link" title="Consulta de Carro">
                        <a href="consCarroView.php">
                            <i class='bx bx-search-alt-2 icon'></i>
                            <span class="text nav-text">Consulta de Carro</span>
                        </a>
                    </li>

                    <li class="nav-link" title="Cadastro de Motor">
                        <a href="cadMotorView.php" title="Cadastro de motor">
                            <i class='bx bxs-wrench icon'></i>
                            <span class="text nav-text">Cadastro de Motor</span>
                        </a>
                    </li>

                    <li class="nav-link" title="Consulta de Motor">
                        <a href="consMotorView.php">
                            <i class='bx bx-search-alt-2 icon'></i>
                            <span class="text nav-text">Consulta de Motor</span>
                        </a>
                    </li>


                    <li class="nav-link" title="Cadastro de Serviço">
                        <a href="cadServicoView.php">
                            <i class='bx bx-id-card icon '></i>
                            <span class="text nav-text">Manutenção</span>
                        </a>
                    </li>

                    <li class="nav-link" title="Consulta de Serviço">
                        <a href="consServicoView.php">
                            <i class='bx bx-search-alt-2 icon'></i>
                            <span class="text nav-text">Consultar Manutenção</span>
                        </a>
                    </li>

                    <?php if(isset($_SESSION['is_dev']) && $_SESSION['is_dev'] != 0): ?>    
                    <li class="nav-link" title="Cadastro Acesso">
                        <a href="consAcessoView.php">
                            <i class='fas fa-key' style='color: red'></i>
                            <span class="text nav-text">Acessos</span>
                        </a>
                    </li>
                    <?php endif; ?>

                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' onclick="deslogar();"> <span><?=$_SESSION['nome']?> </span></i>
                    </a>
                </li>
            </div>
        </div>
    </nav>
<script>
    function deslogar() {
        var end = '../View/loginView.php';
        window.location.href = end;
    }

    const body = document.querySelector('body');
    const sidebar = body.querySelector('nav');
    const toggle = body.querySelector(".toggle");
    const procurar = body.querySelector(".search-box");
    const modeSwitch = body.querySelector(".toggle-switch");
    const modeText = body.querySelector(".mode-text");

    sidebar.addEventListener("mouseenter", () => {
    sidebar.classList.remove("close");
    });

    sidebar.addEventListener("mouseleave", () => {
    sidebar.classList.add("close");
    });

</script>