<?php
    require('dividedHTML/head-section.php');
    require('dividedHTML/header.php');
    require('dividedHTML/left-sidebar.php');
?>

        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Grupy do których należysz</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Twoje grupy</li>
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
                                <h2>Twoje grupy </h2>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nazwa</th>
                                                <th>Użytkownicy</th>
                                                <th><center>Akcje</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href="group.php">
                                                            <img src="images/avatar/4.jpg" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="group.php">IP20</a>
                                                </td>
                                                <td>
                                                    <span>21/37</span>
                                                </td>
                                                <td>
                                                <center>
                                                            <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Opuść grupę</button>
                                                            <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Skasuj grupę</button>
                                                        </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href="group.php">
                                                            <img src="images/avatar/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="group.php">Grupa 2</a>
                                                </td>
                                                
                                                <td>
                                                    <span>21/37</span>
                                                </td>
                                                <td>
                                                <center>
                                                            <button type="button" class="btn btn-warning btn-xs m-b-10 m-l-5">Opuść grupę</button>
                                                            <button type="button" class="btn btn-danger btn-xs m-b-10 m-l-5">Skasuj grupę</button>
                                                        </center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

<?php
    require('dividedHTML/footer.php');
?>
 