<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Sistema Médico</title>
</head>
<body>
    
    <header class="header">
        <a href="#" class="header__logo">Rubens</a>

        <div class="header__toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">
                <a href="#" class="nav__perfil">
                    <div class="nav__img">
                        <img src="assets/img/user3.png" alt="">
                    </div>

                    <div>
                        <span class="nav__name">Rubens</span>
                        <span class="nav__name">Rodrigues</span>
                    </div>
                </a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="principal.html" class="nav__link">Início</a></li>

                        <li class="nav__item dropdown">
                            <a href="#" class="nav__link dropdown__link">Cadastrar<i class="bx bx-chevron-down dropdown__icon"></i></a>

                            <ul class="dropdown__menu">
                                <li class="dropdown__item"><a href="residentes.html" class="nav__link">Residentes</a></li>
                                <li class="dropdown__item"><a href="medicamentos.html" class="nav__link">Medicamentos</a></li>
                            </ul>
                        </li>

                        <li class="nav__item"><a href="historico.html" class="nav__link">Histórico</a></li>

                        <li class="nav__item dropdown">
                            <a href="#" class="nav__link dropdown__link">Relatório <i class="bx bx-chevron-down dropdown__icon"></i></a>

                            <ul class="dropdown__menu">
                                <li class="dropdown__item"><a href="#" class="nav__link">Residentes</a></li>
                                <li class="dropdown__item"><a href="#" class="nav__link">Medicamentos</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="table">
        <section class="table__header">
            <h2>Dados para Cadastro do Medicamento</h1>
        </section>
        <form action="" class="cadastro_medicamento">
            <section class="form_medicamentos">
            <div class="form-section">
                <div class="input-area">
                    <label id="nome" for="">Medicamento</label>
                    <input type="text" required placeholder="">
                </div>
                <div class="input-area">
                    <label id="nome" for="">Lote</label>
                    <input type="nome" required placeholder="">
                </div>
                <div class="input-area">
                    <label id="nome" for="">Quantidade</label>
                    <input type="nome" required placeholder="0">
                </div>
                <div class="input-area">
                    <label id="origem" for="">Origem</label>
                    <select name="origem" id="origem">
                        <option value="">Escolha uma opção</option>
                        <option value="Doacao">Doação</option>
                        <option value="Comprado">Comprado</option>
                        <option value="Governo">Governo</option>
                    </select>
                </div>
                <div class="input-area">
                    <label id="date" for="">Validade</label>
                    <input type="nome" required placeholder="00/00/0000">
                </div>
                <div class="input-area">
                    <label id="nome" for="">Custo</label>
                    <input type="nome" required placeholder="R$0,00">
                </div>
                <div class="btn-area">
                    <button id="btn-medicamento" type="submit">Cadastrar</button>
                </div>
            </div>
            
            </section>
        </form>
        
        <section class="table__header">
            <h2>Medicamentos Cadastrados</h1>
        </section>
        <section class="filter-content">
            
            <div class="input-area">
                <label id="nome" for="">Medicamento</label>
                <select name="nome" id="nome">
                    <option value="">Escolha um medicamento</option>
                    <option value="Omeprazol">Omeprazol</option>
                    <option value="Omeprazol">Omeprazol</option>
                    <option value="Omeprazol">Omeprazol</option>
                </select>
            </div>
            <div class="input-area">
                <label id="nome" for="">Validade</label>
                <input type="nome" required placeholder="00/00/0000">
            </div>
            <div class="input-area">
                <label id="nome" for="">Quantidade</label>
                <input type="nome" required placeholder="">
            </div>
            <div class="input-area">
                <label id="origem" for="">Origem</label>
                <select name="origem" id="origem">
                    <option value="Omeprazol">Doação</option>
                    <option value="Omeprazol">Comprado</option>
                    <option value="Omeprazol">Governo</option>
                </select>
            </div>
                <button id="btn-pesquisa">Pesquisar</button>
           
        </section>
        <section class="table__body">
            <table>
                <thead>
                     <th scope="col">ID</th>
                     <th scope="col">Usuário</th>
                     <th scope="col">Medicamento</th>
                     <th scope="col">Lote</th>
                     <th scope="col">Validade</th>
                     <th scope="col">Origem</th>
                     <th scope="col">Custo</th>
                     <th scope="col">Quantidade</th>
                     <th scope="col">Edição</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rubens</td>
                        <td>Dipirona</td>
                        <td>5</td>
                        <td>02/01/2024</td>
                        <td>Doação</td>
                        <td>0</td>
                        <td>9</td>
                        <td><i class='bx bxs-pencil btn-edicao'></i><i class='bx bx-message-square-x btn-exclusao'></i></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <script src="assets/js/menu.js"></script>
</body>
</html>