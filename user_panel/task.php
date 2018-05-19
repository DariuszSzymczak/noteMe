<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib/dropzone/dropzone.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="userpanel.php">
                        <a class="navbar-brand" href="userpanel.php">
                            <!-- Logo icon -->
                            <span>
                                <img src="../assets/header-logo-text.png" alt="homepage" class="dark-logo" />
                            </span>
                            <b>
                                <img src="../assets/header-logo.png" alt="homepage" class="dark-logo" />
                            </b>
                        </a>
                        <!--End Logo icon -->
                        <!-- Logo text -->

                    </a>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item m-l-10">
                            <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)">
                                <i class="ti-search"></i>
                            </a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        <!-- Language -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu animated zoomIn">
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-ca"></i> Canada</a>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-cn"></i> China</a>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-de"></i> Dutch</a>
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-th-large"></i>
                            </a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> This Is Another Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10">
                                                    <i class="ti-settings"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5>
                                                    <span class="mail-desc">You can customize this template as you want</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10">
                                                    <i class="ti-user"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="images/users/5.jpg" alt="user" class="img-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="images/users/2.jpg" alt="user" class="img-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5>
                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="images/users/3.jpg" alt="user" class="img-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="images/users/4.jpg" alt="user" class="img-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);">
                                            <strong>See all e-Mails</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/users/5.jpg" alt="user" class="profile-pic" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li>
                                        <a href="javascript:;" data-toggle="modal" data-target="#changePassModal">
                                            <i class="ti-user"></i> Change Password</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-wallet"></i> Balance</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> Inbox</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-settings"></i> Setting</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-power-off"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Menu główne</li>
                        <li>
                            <a href="userpanel.php">
                                <i class="fa fa-tachometer"></i>
                                <span class="hide-menu">Strona główna </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="hide-menu">Wiadomości</span>
                            </a>
                            <li>
                                <a href="app-profile.php" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    <span class="hide-menu">Twój profil</span>
                                </a>
                            </li>
                            <li>
                                <a href="groups.php" aria-expanded="false">
                                    <i class="fa fa-table"></i>
                                    <span class="hide-menu">Grupy</span>
                                </a>
                            </li>
                            <li>
                                <a href="tasks.php" aria-expanded="false">
                                    <i class="fa fa-wpforms"></i>
                                    <span class="hide-menu">Zadania</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-expanded="false">
                                    <i class="fa fa-book"></i>
                                    <span class="hide-menu">Notatki</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-expanded="false">
                                    <i class="fa fa-level-down"></i>
                                    <span class="hide-menu">Wyloguj</span>
                                </a>
                            </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Nazwa zadania .. . . </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Zadania</a>
                        </li>
                        <li class="breadcrumb-item active">Nazwa zadania . .. . </li>
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Zadanie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#users" role="tab">Przypisani użytkownicy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#edit" role="tab">Edycja</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--second tab-->
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r">
                                                <strong>Nazwa zadania</strong>
                                                <br>
                                                <p class="text-muted">Jakieś tam zadanie</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r">
                                                <strong>Grupa</strong>
                                                <br>
                                                <p class="text-muted">Zebra Theme@gmail.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <strong>Deadline</strong>
                                                <br>
                                                <p class="text-muted">2018-05-30</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                            rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                            mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi.
                                            Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                            vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                            Ipsum passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including versions of Lorem Ipsum.
                                        </p>

                                    </div>
                                    <button type="button" class="btn btn-success m-b-10 m-l-5">Zakończ zadanie</button>
                                </div>

                                <div class="tab-pane" id="users" role="tabpanel">
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
                                                    <th>Status zadania</th>
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
                                                        <span class="badge badge-info">W trakcie</span>
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
                                                        <span class="badge badge-success">Zakończone</span>
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
                                                        <span class="badge badge-info">W trakcie</span>
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

                                <div class="tab-pane" id="edit" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Nazwa zadania</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Zadanie jakieś" class="form-control form-control-line" name="taskName">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Opis</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Opis zadania..." class="form-control form-control-line" name="taskDescription" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Deadline</label>
                                                <div class="col-md-12">
                                                    <input type="date" class="form-control" placeholder="yyyy/mm/dd"> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" value="Zapisz" class="btn btn-success" />
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
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018 All rights reserved. Template designed by
            <a href="https://colorlib.com">Colorlib</a>
        </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    </div>

    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true" id="changePassModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="addUserHandler.php" method="POST" novalidate="novalidate">
                    <div class="modal-header">
                        <h3 class="modal-title">Przypisz użytkownika do zadania</h3>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="oldPass">
                                    Nazwa użytkownika </label>
                                <input type="text" data-val="true" data-val-required="Wpisz nazwę użytkownika" class="form-control" name="userName" id="userName"
                                />
                                <span class="field-validation-valid text-danger" data-valmsg-for="userName" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="js/lib/form-validation/jquery.validate.unobtrusive.min.js"></script>
    <script src="js/lib/jquery.nicescroll/jquery.nicescroll.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script>
        $(function () {
            $("html").niceScroll({
                cursorcolor: "#16385d",
                cursorwidth: "5px",
                background: "#fff",
                cursorborder: "1px solid #5c4ac7",
                cursorborderradius: 0
            }); // a world f
        });
    </script>
</body>

</html>