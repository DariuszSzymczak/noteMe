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
                                    <h2>568120</h2>
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
                                    <h2>1178</h2>
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
                                    <h2>25</h2>
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
                                    <h2>847</h2>
                                    <p class="m-b-0">Notatki</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

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
                                            <td><a href="task.php">Przykładowe zadanie z bazy</a></td>
                                            <td>
                                                <span><a href="group.php">IP20</a></span>
                                            </td>
                                            <td>
                                                <span><a href="date.php">2018-05-30</a></span>
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
                                            <td><a href="task.php">Przykładowe zadanie z bazy</a></td>
                                            <td>
                                                <span><a href="group.php">IP20</a></span>
                                            </td>
                                            <td>
                                                <span><a href="date.php">2018-05-30</a></span>
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
                                            <td><a href="task.php">Przykładowe zadanie z bazy</a></td>
                                            <td>
                                                <span><a href="group.php">IP20</a></span>
                                            </td>
                                            <td>
                                                <span><a href="date.php">2018-05-30</a></span>
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
                                            <td><a href="task.php">Przykładowe zadanie z bazy</a></td>
                                            <td>
                                                <span><a href="group.php">IP20</a></span>
                                            </td>
                                            <td>
                                                <span><a href="date.php">2018-05-30</a></span>
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
                                            <td><a href="task.php">Przykładowe zadanie z bazy</a></td>
                                            <td>
                                                <span><a href="group.php">IP20</a></span>
                                            </td>
                                            <td>
                                                <span><a href="date.php">2018-05-30</a></span>
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
                            <div class="card">
                                <div class="card-title">
                                    <h4>Message </h4>
                                </div>
                                <div class="recent-comment">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img alt="..." src="images/avatar/1.jpg" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">john doe</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                            <p class="comment-date">October 21, 2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img alt="..." src="images/avatar/1.jpg" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">john doe</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                            <p class="comment-date">October 21, 2018</p>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img alt="..." src="images/avatar/1.jpg" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">john doe</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                            <p class="comment-date">October 21, 2018</p>
                                        </div>
                                    </div>

                                    <div class="media no-border">
                                        <div class="media-left">
                                            <a href="#">
                                                <img alt="..." src="images/avatar/1.jpg" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Mr. Michael</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                            <div class="comment-date">October 21, 2018</div>
                                        </div>
                                    </div>
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
<<<<<<< HEAD
 

            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018 All rights reserved. Template designed by
            <a href="https://colorlib.com">Colorlib</a>
            <div>Icons made by
                <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by
                <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
            </div>
            <div>Icons made by
                <a href="https://www.flaticon.com/authors/dinosoftlabs" title="DinosoftLabs">DinosoftLabs</a> from
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by
                <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
            </div>
            <div>Icons made by
                <a href="http://www.freepik.com" title="Freepik">Freepik</a> from
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by
                <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
            </div>
        </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/lib/jquery.nicescroll/jquery.nicescroll.min.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->

    <script src="js/lib/jquery.nicescroll/jquery.nicescroll.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Amchart -->



    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->

    <script src="js/custom.min.js"></script>

    <!-- calendar functions with AJAX -->
    <script src="controllers/calendar/calendar.js"></script>
</body>

</html>
=======
 
>>>>>>> dedd5ac08d521e9c0abe5c8354054b9bea86a5f1
