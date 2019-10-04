<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                <li><a href="#">Home</a></li>
                <li>Data Entry</li>
                <li><mark><strong>Patient Registration</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient Registration</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Child Patient Registration</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="btn-group pull-right">
                                                        <div class="pull-left">
                                                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#new_patient">New Patient</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel-body">
                                                    <div id="patientTable"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-second">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="btn-group pull-right">
                                                        <div class="pull-left">
                                                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#new_child_patient">New Patient</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body list-group list-group-contacts scroll" style="height: 380px;">
                                                    <div class="panel-body">
                                                        <div id="childpatientTable"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <?php require 'modals/addpatient.php'?>
    <?php require 'modals/addchildpatient.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudpatient.js"></script>
    <script type="text/javascript" src="functions/crudchildpatient.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>


    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script>
        $("#birthdate").change(function() {
            var birthdate = new Date($(this).val());
            var today = new Date();
            var age = Math.floor((today - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age').val(age);
        });

    </script>
    <script>
        var date = new Date();
        $('#birthdate').datepicker({
            format: 'MM dd, yyyy',
            language: 'en',
            startDate: new Date('1900-01-01'),
            endDate: date
        });

    </script>
    <script>
        function myFunction(textboxid) {

            var input = document.getElementById(textboxid);
            var word = input.value.split(" ");
            for (var i = 0; i < word.length; i++) {
                word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
            }
            input.value = word.join(" ");
        }

    </script>
    <script type="text/javascript">
        $("#patientform").validate({
            ignore: [],
            rules: {
                heights: {
                    number: true,
                    maxlength: 3
                },
                weights: {
                    number: true,
                    maxlength: 3
                },
                contact_nos: {
                    number: true,
                    minlength: 11
                },
                philhealth_nos: {
                    number: true,
                    maxlength: 12
                },
                emergency_nos: {
                    number: true,
                    minlength: 11
                }

            }
        });

    </script>
</body>

</html>
