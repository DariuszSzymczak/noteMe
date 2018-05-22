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
                <h3 class="text-primary">Twoje wszystkie zadania</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Zadania</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h2>Twoje prywatne notatki </h2>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tytuł</th>
                                            <th>Data dodania</th>
                                            <th>
                                                <center>Akcje</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="userPrivateNote.php">Notatka 1</a>
                                            </td>
                                            <td>
                                                <a href="date.php">
                                                    <span>2018-05-30</span>
                                                </a>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#editTaskModal">
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">
                                                            Edytuj</button>
                                                    </a>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteTaskConfirmModal">
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">
                                                            Usuń</button>
                                                    </a>
                                                </center>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <a href="userPrivateNote.php">Zakupy</a>
                                            </td>
                                            <td>
                                                <a href="date.php">
                                                    <span>2018-05-30</span>
                                                </a>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#editTaskModal">
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">
                                                            Edytuj</button>
                                                    </a>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteTaskConfirmModal">
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">
                                                            Usuń</button>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                <a href="userPrivateNote.php">Notatka 2</a>
                                            </td>
                                            <td>
                                                <a href="date.php">
                                                    <span>2018-05-30</span>
                                                </a>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#editTaskModal">
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">
                                                            Edytuj</button>
                                                    </a>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteTaskConfirmModal">
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">
                                                            Usuń</button>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                <a href="userPrivateNote.php">Przepis na ciasto</a>
                                            </td>
                                            <td>
                                                <a href="date.php">
                                                    <span>2018-05-30</span>
                                                </a>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#editTaskModal">
                                                        <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">
                                                            Edytuj</button>
                                                    </a>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteTaskConfirmModal">
                                                        <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">
                                                            Usuń</button>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br/>
                        <a href="javascript:;" data-toggle="modal" data-target="#addTaskModal">
                            <button type="button" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5">
                                <i class="ti-plus"></i>Dodaj notatkę</button>
                        </a>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <!-- End PAge Content -->
        </div>
        <?php
    require('dividedHTML/deleteTaskConfirmModal.php');
    require('dividedHTML/editTaskModal.php');
    require('dividedHTML/addTaskModal.php');
    require('dividedHTML/footer.php');
?>