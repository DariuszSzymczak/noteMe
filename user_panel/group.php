<?php
    require('dividedHTML/head-section.php');
    require('dividedHTML/header.php');
    require('dividedHTML/left-sidebar.php');
?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Profil użytkownika</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                        </div>
                                    </header>

                                    <h3>przykladowyUser1</h3>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit et cupiditate deleniti.
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#members" role="tab">Członkowie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Zadania</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Ustawienia</a>
                            </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="members" role="tabpanel">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nazwa</th>
                                                    <th>Ilość zadań</th>
                                                    <th>
                                                        <center>Akcje</center>
                                                    </th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href="">
                                                                <img src="images/avatar/4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>John Abraham</td>
                                                    <td>
                                                        <span>456 </span>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Wiadomość</button>
                                                            <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Dodaj zadanie</button>
                                                            <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń z grupy</button>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">ADMIN</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href="">
                                                                <img src="images/avatar/4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>John Abraham</td>
                                                    <td>
                                                        <span>456 </span>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Wiadomość</button>
                                                            <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Dodaj zadanie</button>
                                                            <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń z grupy</button>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href="">
                                                                <img src="images/avatar/4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>John Abraham</td>
                                                    <td>
                                                        <span>456 </span>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Wiadomość</button>
                                                            <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Dodaj zadanie</button>
                                                            <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń z grupy</button>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger"></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>
                                    <a href="javascript:;" data-toggle="modal" data-target="#changePassModal">
                                        <button type="button" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5">
                                            <i class="ti-plus"></i>Dodaj użytkownika</button>
                                    </a>
                                </div>

                            </div>
                            <div class="tab-pane" id="tasks" role="tabpanel">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nazwa</th>
                                                    <th>Grupa</th>
                                                    <th>Deadline</th>
                                                    <th>
                                                        <center>Akcje</center>
                                                    </th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="task.php">Przykładowe zadanie z bazy</a>
                                                    </td>
                                                    <td>
                                                        <a href="group.php">
                                                            <span>IP20</span>
                                                    </td>
                                                    <td>
                                                        <a href="date.php">
                                                            <span>2018-05-30</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń</button>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Skończone</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="task.php">Przykładowe zadanie z bazy</a>
                                                    </td>
                                                    <td>
                                                        <a href="group.php">
                                                            <span>IP20</span>
                                                    </td>
                                                    <td>
                                                        <a href="date.php">
                                                            <span>2018-05-30</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń</button>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Skończone</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="task.php">Przykładowe zadanie z bazy</a>
                                                    </td>
                                                    <td>
                                                        <a href="group.php">
                                                            <span>IP20</span>
                                                    </td>
                                                    <td>
                                                        <a href="date.php">
                                                            <span>2018-05-30</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń</button>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Skończone</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="task.php">Przykładowe zadanie z bazy</a>
                                                    </td>
                                                    <td>
                                                        <a href="group.php">
                                                            <span>IP20</span>
                                                    </td>
                                                    <td>
                                                        <a href="date.php">
                                                            <span>2018-05-30</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Usuń</button>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Skończone</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card-body">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12">Nazwa grupy</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="IP20" class="form-control form-control-line">
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Opis</label>
                                    <div class="col-md-12">
                                        <textarea rows="20" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Avatar</label>
                                    <div class="col-md-12">
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Zapisz</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
 <?php
    require('dividedHTML/addUserToTask.php');
    require('dividedHTML/footer.php');
?>
 