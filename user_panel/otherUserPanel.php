<?php
    require('dividedHTML/head-section.php');
    require('dividedHTML/header.php');
    require('dividedHTML/left-sidebar.php');
    $login= substr($_SESSION['userID'], 0, -5); 
    $pane->sendInvitation($pdo, $_GET['username'], $login);
    if(isset($_POST["acceptInvitation"]))
    $pane->acceptInvitation($pdo, $_POST["acceptInvitation"], $login);
?>
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Twój profil</h3>
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
                                        <?php
                                             $pane->getUserAvatar($pdo,$_GET['username']);
                                        ?>
                                    </div>
                                </header>

                                <h3>
                                    <?php echo $_GET['username'];?>
                                </h3>
                                <div class="desc">
                                    <?php $pane->getOtherUserData($pdo,$_GET['username'],'description');?>
                                </div>
                                <div class="desc">
                                    <?php $pane->inviteToFriendsButtons($pdo, $_GET['username'], $login);?>
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
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profil</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--second tab-->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>Nazwa użytkownika</strong>
                                        <br>
                                        <p class="text-muted">
                                            <?php $pane->getOtherUserData($pdo,$_GET['username'],'login');?>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">
                                            <?php  $pane->getOtherUserData($pdo,$_GET['username'],'email');?>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <strong>Miejscowość</strong>
                                        <br>
                                        <p class="text-muted">
                                            <?php $pane->getOtherUserData($pdo,$_GET['username'],'town');?>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="m-t-30">
                                    <?php  $pane->getOtherUserData($pdo,$_GET['username'],'description');?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>


        <?php
    require('dividedHTML/footer.php');
?>