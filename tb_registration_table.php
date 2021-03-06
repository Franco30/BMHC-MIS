<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#E91E63" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />

</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top-fixed">
        <!-- START PAGE SIDEBAR -->
        <?php require 'require/adminsidebar.php' ?>
        <!-- END PAGE SIDEBAR -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <?php require 'require/adminheader.php' ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>Transactions</li>
                <li><mark><strong>Tuberculosis</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <!-- START TABS -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">DSSM</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Xpert MTB/RIF Results</a></li>
                                <li><a href="#tab-third" role="tab" data-toggle="tab">TB Culture</a></li>
                                <li><a href="#tab-fourth" role="tab" data-toggle="tab">DST Results</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="col-md-12">
                                        <div id="alert" class="alert alert-info" style="display:none;">
                                            <center><span id="alerttext"></span></center>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="btn-group pull-right">
                                                    <div class="pull-left">
                                                        <button class="btn btn-primary btn-md" data-toggle="modal"
                                                            data-target="#newdssm">Add New Result</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="dssmTable"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-second">
                                    <div class="col-md-12">
                                        <div id="alert" class="alert alert-info" style="display:none;">
                                            <center><span id="alerttext"></span></center>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="btn-group pull-right">
                                                    <div class="pull-left">
                                                        <button class="btn btn-primary btn-md" data-toggle="modal"
                                                            data-target="#newxpert">Add New Result</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="xpertTable"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-third">
                                    <div class="col-md-12">
                                        <div id="alert" class="alert alert-info" style="display:none;">
                                            <center><span id="alerttext"></span></center>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="btn-group pull-right">
                                                    <div class="pull-left">
                                                        <button class="btn btn-primary btn-md" data-toggle="modal"
                                                            data-target="#newtbculture">Add New Result</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="tbcultureTable"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-fourth">
                                <div class="col-md-12">
                                        <div id="alert" class="alert alert-info" style="display:none;">
                                            <center><span id="alerttext"></span></center>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="btn-group pull-right">
                                                    <div class="pull-left">
                                                        <button class="btn btn-primary btn-md" data-toggle="modal"
                                                            data-target="#newdst">Add New Result</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="dstTable"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TABS -->
                    </div>
                </div>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <?php require 'modals/newdssm.php'?>
    <?php require 'modals/newxpert.php'?>
    <?php require 'modals/newtbculture.php'?>
    <?php require 'modals/newdst.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/cruddssm.js"></script>
    <script type="text/javascript" src="functions/crudxpert.js"></script>
    <script type="text/javascript" src="functions/crudtbculture.js"></script>
    <script type="text/javascript" src="functions/cruddst.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>


    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script>
        $("#birthdate").change(function () {
            var birthdate = new Date($(this).val());
            var today = new Date();
            var age = Math.floor((today - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age').val(age);
        });
    </script>
</body>

</html>