<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab IF</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
        <script>
            var youtubeFunc = '';
            var outerDiv = document.getElementById("introVideo");
            var youtubeIframe = outerDiv.getElementsByTagName("iframe")[0].contentWindow;
            $('#introVideo').on('hidden.bs.modal', function (e) {
                youtubeFunc = 'pauseVideo';
                youtubeIframe.postMessage('{"event":"command","func":"' + youtubeFunc + '","args":""}', '*');
            });
            $('#introVideo').on('shown.bs.modal', function (e) {
                youtubeFunc = 'playVideo';
                youtubeIframe.postMessage('{"event":"command","func":"' + youtubeFunc + '","args":""}', '*');
            });
        </script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <?php
                if (empty($_SESSION['username'])) {
                    include './components/navbar1.php';
                } else {
                    include './components/navbar2.php';
                }
                ?>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php
                        if (empty($_SESSION['keterangan'])) {
                            include './components/sidebar1.php';
                        } else if ($_SESSION['keterangan'] == "Admin") {
                            include './components/sidebar4.php';
                        } else if ($_SESSION['keterangan'] == "Dosen") {
                            include './components/sidebar2.php';
                        } else if ($_SESSION['keterangan'] == "Mahasiswa") {
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module-head" style="text-align: center">
                                <h3>Camera List</h3>
                            </div>
                            <div class="module">
                                <div class="module-body table">
                                    <div style="margin-left: 2%; margin-right: 2%; width: 96%; height: 36vh;">
                                        <div style="width: 40%; float: left; height: 32vh; margin-top: 2vh;">
                                            <img src="img/lab_daskom.png" style="height: 100%; width: 100%;">
                                        </div>
                                        <div style="width: 59%; float: right; height: 22vh;margin-top: 2vh; margin-left: 1%;">
                                            <h4>Laboratorium Dasar Komputer</h4>
                                            <p>
                                                - Praktikum Pemrograman Dasar <br>
                                                - Praktikum Organisasi & Arsitektur Komputer
                                            </p>
                                        </div>
                                        <div style="padding-top: 3vh; width: 59%; float: right; height: 5vh; margin-top: 2vh; margin-left: 1%;">
                                            <button class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal" style="width: 40%">
                                                <i class='menu-icon icon-play'></i> Mulai Streaming
                                            </button>
                                        </div>
                                    </div>  
                                    <hr>
                                    <div style="margin-left: 2%; margin-right: 2%; width: 96%; height: 36vh;">
                                        <div style="width: 40%; float: left; height: 32vh; margin-top: 2vh;">
                                            <img src="img/lab_multimedia.png" style="height: 100%; width: 100%;">
                                        </div>
                                        <div style="width: 59%; float: right; height: 22vh;margin-top: 2vh; margin-left: 1%;">
                                            <h4>Laboratorium Multimedia</h4>
                                            <p>
                                                - Praktikum Jaringan Syaraf Tiruan <br>
                                                - Praktikum Pemrograman Robot Cerdas
                                            </p>
                                        </div>
                                        <div style="padding-top: 3vh; width: 59%; float: right; height: 5vh; margin-top: 2vh; margin-left: 1%;">
                                            <button class="btn btn-success btn-large" data-toggle="modal" data-target="#introVideo" style="width: 40%">
                                                <i class='menu-icon icon-play'></i> Mulai Streaming
                                            </button>
                                        </div>
                                    </div> 
                                    <hr>
                                    <div style="margin-left: 2%; margin-right: 2%; width: 96%; height: 36vh;">
                                        <div style="width: 40%; float: left; height: 32vh; margin-top: 2vh;">
                                            <img src="img/lab_jarkom.png" style="height: 100%; width: 100%;">
                                        </div>
                                        <div style="width: 59%; float: right; height: 22vh;margin-top: 2vh; margin-left: 1%;">
                                            <h4>Laboratorium Jaringan Komputer</h4>
                                            <p>
                                                - Praktikum Jaringan Komputer <br>
                                                - Praktikum Rekayasa Web
                                            </p>
                                        </div>
                                        <div style="padding-top: 3vh; width: 59%; float: right; height: 5vh; margin-top: 2vh; margin-left: 1%;">
                                            <button class="btn btn-success btn-large" data-toggle="modal" data-target="#introVideo" style="width: 40%">
                                                <i class='menu-icon icon-play'></i> Mulai Streaming
                                            </button>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Camera 01</h4>
                </div>
                <div class="modal-body">
                    <video width="100%" height="100%" controls>
                        <source src="vid/movie1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <p>Laboratorium Pemrograman Dasar</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="introVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/<videoid>?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>