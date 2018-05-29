<?php
    require('dividedHTML/head-section.php');
    require('dividedHTML/header.php');
    require('dividedHTML/left-sidebar.php');
?>
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Panel użytkownika</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Panel użytkownika</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img src="images/list.png" />
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php $pane->countAllTasks($pdo, $_SESSION['userID']) ?></h2>
                                <p class="m-b-0">Twoje zadania</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img src="images/hourglass.png" />
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php $pane->countWaitingTasks($pdo, $_SESSION['userID']) ?></h2>
                                <p class="m-b-0">Oczekujące</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img src="images/goal.png" />
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php $pane->countFinishedTasks($pdo, $_SESSION['userID']) ?></h2>
                                <p class="m-b-0">Zakończone</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img src="images/notepad.png" />
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php $pane->countUserPrivateNotes($pdo, $_SESSION['userID']) ?></h2>
                                <p class="m-b-0">Notatki</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Twoje ostatnie zadania </h4>
                    </div>
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
                                            <span>
                                                <a href="group.php">IP20</a>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="date.php">2018-05-30</a>
                                            </span>
                                        </td>
                                        <td>
                                            <center>
                                                <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                            </center>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Skończone</span>
                                        </td>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <a href="task.php">Przykładowe zadanie z bazy</a>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="group.php">IP20</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="date.php">2018-05-30</a>
                                                </span>
                                            </td>
                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                    <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                </center>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Skończone</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <a href="task.php">Przykładowe zadanie z bazy</a>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="group.php">IP20</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="date.php">2018-05-30</a>
                                                </span>
                                            </td>
                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                    <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                </center>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Skończone</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <a href="task.php">Przykładowe zadanie z bazy</a>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="group.php">IP20</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="date.php">2018-05-30</a>
                                                </span>
                                            </td>
                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                    <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                </center>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Skończone</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <a href="task.php">Przykładowe zadanie z bazy</a>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="group.php">IP20</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="date.php">2018-05-30</a>
                                                </span>
                                            </td>
                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-info btn-xs m-b-10 m-l-5">Zakończ</button>
                                                    <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Edytuj</button>
                                                </center>
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
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="card" >
                            <div class="card-title">
                                <h4>Zadania na dany dzień</h4>
                            </div>
                            <div class="recent-comment" id="calendarTable">                               
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>

        <?php
    require('dividedHTML/footer.php');
?>