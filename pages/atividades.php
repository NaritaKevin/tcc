<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pedagogy</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
    <link rel="stylesheet" href="../js/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../js/dataTables.checkboxes.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/logo-mini.svg" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a id="" class="navbar-brand brand-logo mr-5" href="../index.html"><img src="../images/logo-full.svg"
                        class="mr-4 filter-purple" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span>Perfil</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:../../partials/_sidebar.html -->
            <?php require_once '../partials/menu.php';?>
            <!-- Corpo da página-->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabela de atividades </h4>
                                    <p class="card-description">
                                        <button type="button" id="btn-nova-atividade"
                                            class="btn btn-primary btn-icon-text ">
                                            <i class="bi bi-plus-circle btn-icon-prepend "></i>
                                            Nova atividade
                                        </button>
                                    </p>
                                    <div id="cadastrarAtividade">
                                        <div class="stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Cadastro de atividades</h4>
                                                    <p class="card-description">Informe os dados da atividade a ser
                                                        cadastrada.</p>
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputUsername1">Nome</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputUsername1" placeholder="Nome">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Observações</label>
                                                            <input type="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Observações">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender">Tipo</label>
                                                            <select class="form-control" onfocus='this.size=5;'
                                                                onblur='this.size=1;'
                                                                onchange='this.size=1; this.blur();'>
                                                                <option selected>Tipo</option>
                                                                <option value="1">Trabalho</option>
                                                                <option value="2">Projeto</option>
                                                                <option value="3">Redação</option>
                                                                <option value="4">Fórum</option>
                                                                <option value="4">Fórum</option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-6 col-form-label">Data
                                                                            Inicial</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" id="data-inicial"
                                                                                class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-6 col-form-label">Data
                                                                            Final</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" id="data-final"
                                                                                class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Questões</h4>
                                                                            <p class="card-description">

                                                                                <button id="btn-modal-escolher"
                                                                                    type="button"
                                                                                    class="btn btn-inverse-primary btn-fw btn-icon-text">
                                                                                    <i class="bi bi-list-check "></i>
                                                                                    Escolher
                                                                                </button>
                                                                                <a href="../pages/questoes.html">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-rounded btn-icon">
                                                                                        <i class="bi bi-plus"></i>
                                                                                    </button></a>
                                                                            </p>

                                                                            <div id="tableQuestoesToggle"
                                                                                class="table-responsive">
                                                                                <table class=" table table-hover"
                                                                                    id="tableQuestoesAtividade">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th width="1%">Ordem</th>
                                                                                            <th width="22%">Enunciado
                                                                                            </th>
                                                                                            <th width="5%">Palavras
                                                                                                Chave</th>
                                                                                            <th width="5%">Subgrupo</th>
                                                                                            <th width="3%">Código BNCC
                                                                                            </th>
                                                                                            <th width="2%">Nível</th>

                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="tbodyQuestoesAtividade">
                                                                                        <tr>
                                                                                            <td class="index">1</td>
                                                                                            <td>De que forma os animais
                                                                                                participam do ciclo da
                                                                                                água?</td>
                                                                                            <td>Animais Ciclos Agua</td>
                                                                                            <td>Subgrupo teste</td>
                                                                                            <td>654633</td>
                                                                                            <td>Fácil</td>


                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="index">2</td>
                                                                                            <td>22dsds?</td>
                                                                                            <td>Animais Ciclos Agua</td>
                                                                                            <td>Subgrupo teste</td>
                                                                                            <td>654633</td>
                                                                                            <td>Fácil</td>


                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="index">3</td>
                                                                                            <td>33fdfdf</td>
                                                                                            <td>Animais Ciclos Agua</td>
                                                                                            <td>Subgrupo teste</td>
                                                                                            <td>654633</td>
                                                                                            <td>Fácil</td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="index">4</td>
                                                                                            <td>44adsads</td>
                                                                                            <td>Animais Ciclos Agua</td>
                                                                                            <td>Subgrupo teste</td>
                                                                                            <td>654633</td>
                                                                                            <td>Fácil</td>


                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <button id="cadastrarAtividade" type="submit"
                                                                    class="btn btn-primary mr-2">Cadastrar</button>
                                                                <button id="cancelarAtividade" type="button"
                                                                    class="btn btn-secondary">Cancelar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="tableAtividadesToggle" class="expandable-table table-responsive">
                                        <table id="tableAtividade" class="table table-striped table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Nº</th>
                                                    <th>Nome</th>
                                                    <th>Observação</th>
                                                    <th>Data Início</th>
                                                    <th>Data Final</th>
                                                    <th>Tipo</th>
                                                    <th>Status</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="index">1</td>
                                                    <td>T1 - Trabalho semestral</td>
                                                    <td>Programação para Dispositivos Móveis</td>
                                                    <td>26/10/2021</td>
                                                    <td>30/10/2021</td>
                                                    <td>Trabalho</td>
                                                    <td><label class="badge badge-success">Postado</label></td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-inverse-primary btn-rounded btn-icon btn-info-questao ">
                                                            <i class="bi bi-info-lg"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-success btn-rounded btn-icon">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger btn-rounded btn-icon">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="index">1</td>
                                                    <td>P1 - Divisão celular</td>
                                                    <td>Biologia</td>
                                                    <td>26/10/2021</td>
                                                    <td>30/10/2021</td>
                                                    <td>Trabalho</td>
                                                    <td><label class="badge badge-success">Postado</label></td>
                                                    <td>
                                                        <button id="btn" type="button"
                                                            class="btn btn-inverse-primary btn-rounded btn-icon btn-info-questao ">
                                                            <i class="bi bi-info-lg"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-success btn-rounded btn-icon">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger btn-rounded btn-icon">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="index">1</td>
                                                    <td>Conjunto numérico: naturais e inteiros</td>
                                                    <td>Matemática</td>
                                                    <td>26/10/2021</td>
                                                    <td>30/10/2021</td>
                                                    <td>Trabalho</td>
                                                    <td><label class="badge badge-success">Postado</label></td>
                                                    <td>
                                                        <button id="btn" type="button"
                                                            class="btn btn-inverse-primary btn-rounded btn-icon btn-info-questao ">
                                                            <i class="bi bi-info-lg"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-success btn-rounded btn-icon">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger btn-rounded btn-icon">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!--Modal Mais informação-->
                <div class="modal fade" id="modalInfoAtividade" tabindex="-1" aria-labelledby="modalInfoQuestao"
                    aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title">Informações Adicionais</p>
                                            <div class="table-responsive">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th>algo a mais</th>
                                                            <th>algo a mais</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>algo a mais</td>
                                                            <td>algo a mais</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="modalCancelar" type="button" class="btn btn-secondary">Cancelar</button>
                                <button id="modalConfirmar" type="button" class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Questão-->
                <div class="modal fade" id="modalQuestao" tabindex="-1" aria-labelledby="modalQuestao"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="escolherQuestoess" class="expandable-table table-responsive">
                                    <table class="table table-hover display" id="tableEscolherQuestoes">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Enunciado</th>
                                                <th>Palavras Chave</th>
                                                <th>Subgrupo</th>
                                                <th>Código BNCC</th>
                                                <th>Nível</th>
                                                <th>Ano</th>
                                                <th>Status Tipo</th>
                                                <th>Revisão</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody id="tbodyModalAtividade">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btn-modalCancelarQuestao" type="button"
                                    class="btn btn-secondary">Cancelar</button>
                                <button id="btn-modalConfirmarQuestao" type="button"
                                    class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
               
                <?php require_once '../partials/footer.php';?>
                
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->

    <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../js/dataTables.select.min.js"></script>
    <script src="../js/off-canvas.js"></script>

    <script src="../js/template.js"></script>
    <script src="../vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="../js/jquery.datetimepicker.full.min.js"></script>
    <script src="../js/dataTables.checkboxes.min.js"></script>
    <script src="../js/mainjs/atividades.js"></script>

    <!-- endinject -->
</body>

</html>