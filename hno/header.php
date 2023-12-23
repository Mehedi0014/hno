<!doctype html>

<?php
    //$cookie_name = "hno_name";
    //$cookie_value = "hno_value";
    //setcookie($cookie_name, $cookie_value, time() + (10 * 1), "/"); // 86400 = 1 day and 3600 = 1 hour
?>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HNO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font link -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:400,500,600,700" rel="stylesheet">

    <!-- Bootstrap css cdn ......................................  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- For Multilevel Navbar -->
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/stellarnav.css">

    <!-- Font Awesome css cdn ......................................  -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--load all styles -->
    <!-- src: url("../webfonts/fa-brands-400.eot"); -->

    <!-- Custom and Boilerplat css link ...................................... -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body>

    <!-- [if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif] -->

    <!-- Add your site or application content here -->



    <!-- Cookies Section place here .................................... -->    
    <section id="cookies_part" class="cookies">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <p>This website uses cookies to ensure you get the best experience on our website.</p>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary">Got it !</button>
                </div>
            </div>
        </div>
    </section>






    <!-- Sub Menu Place Header ............ -->
    <section id="sub_menu">
        <div class="container">
            <div class="row">
                <div class="d_block_991 col-lg-4 col-md-6 col-sm-6 col-xs-12">Kontaktiere uns</div>

                <div class="d_block_991 col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <table>
                        <thead>
                            <tr>
                                <td>
                                    <i class="fas fa-map-marker-alt"></i>
                                </td>
                                <td>
                                    <span>Beethovenstr.2 in 68165 Mannheim/ Oststadt Nähe Wasserturm </span>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="text_align d_block_991 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <i class="fas fa-phone-volume"></i><span> Tel: 0621-417541</span>
                </div>

            </div>
            <!--Class : row -->
        </div>
        <!--Class : container -->
    </section>
    <!--Id : sub_menu -->






    <!-- Main Menu Place Header ......................................  -->
    <header id="main_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="stellarnav">
                        <ul style="list-style-type: none;">
                            <li><a class="nav-link" href="index.php">Home</a></li>

                            <!-- Allgemeines Droupdown Start Here ....... -->
                            <li><a href="#">Allgemeines</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="eingang.php">Aktuelles</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="rauchen.php">Rauchen/E-Zigarette</a></li>
                                            <li><a href="cola.php">Cola oder Diät-Cola</a></li>
                                            <li><a href="#">EBM-Infos für Ärzte</a>
                                                <ul style="list-style-type: none;">
                                                    <li><a href="hausarztinfo.php">Hausärzte</a></li>
                                                    <li><a href="facharztinfo.php">Fachärzte</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="kontakt.php">Kontakt</a></li>
                                    <li><a href="stadtplan.php">Stadtplan</a></li>
                                </ul>
                            </li>

                            <!-- Schwerpunkte Droupdown Start Here ....... -->
                            <li><a href="#">Schwerpunkte</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="schwerpunkte.php">Übersicht</a></li>
                                    <li><a href="#">stationäre OPs</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="operativ.php">Zusammenfassung</a></li>
                                            <li><a href="vor_op.php">OP-Vorbereitung</a></li>
                                            <li><a href="#">Mandeloperation</a>
                                                <ul style="list-style-type: none;">
                                                    <li><a href="mandel_op.php">Gaumenmandeln</a></li>
                                                    <li><a href="rachenmandel_op.php">Rachenmandeln</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="rachenmandel_op.php">"Polypen" OPs</a></li>
                                            <li><a href="scheidewand.php">Scheidewand-OP</a></li>
                                            <li><a href="schnarch_op.php">Schnarch-OP</a></li>
                                            <li><a href="nnh.php">Nasennebenhöhlen-OP</a></li>
                                            <li><a href="operative_nachsorge.php">operative Nachsorge</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ambulanteOPs.php">ambulante OPs</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="warum_eigentlich_ambulant_.php">Warum ambulant?</a></li>
                                            <li><a href="vor_op.php">OP-Vorbereitung</a></li>
                                            <li><a href="ambulante_ops.php">Für Kinder</a></li>
                                            <li><a href="rachenmandel_op.php">Rachenmandel-OP</a></li>
                                            <li><a href="lc.php">Für Erwachsene</a></li>
                                            <li><a href="operative_nachsorge.php">operative Nachsorge</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="stimm_sprach.php">Stimm- u. Sprachstörungen</a></li>
                                    <li><a href="gleichgewichtsstoerungen.php">Schwindeldiagnostik</a></li>
                                    <li><a href="#">Hördiagnostik</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="hoerstoerungen.php">Hörstörungen</a></li>
                                            <li><a href="tinnitus.php">Tinnitus</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Halswirbelsäule</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="mt.php">Manuelle Therapie</a></li>
                                            <li><a href="srt.php">SRT</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="schnarchen.php">Schnarch- u. Schlafmedizin</a></li>
                                    <li><a href="allergie.php">Allergie</a></li>
                                    <li><a href="#">Tauchmedizin</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="tauchen.php">Tauchen und HNO</a></li>
                                            <li><a href="http://www.tauchen.hno-wasserturm.de/index.html">Tauchimpressionen</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- Erkrankungen Droupdown Start Here ....... -->
                            <li><a href="#">Erkrankungen</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="#">Ohren</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="audiologie.php">Einteilung</a></li>
                                            <li><a href="kinder_hno.php">Kinder</a></li>
                                            <li><a href="hoerstoerungen.php">Hörstörungen</a></li>
                                            <li><a href="tinnitus.php">Tinnitus</a></li>
                                            <li><a href="cerumen.php">Ohrenschmalz</a></li>
                                            <li><a href="paukenerguss.php">Tauchen</a></li>
                                            <li><a href="paukenerguss.php">Flugreisen</a></li>
                                            <li><a href="gleichgewichtsstoerungen.php">Schwindel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Nase</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="nasenatmungsbehinderung.php">Nasenatmungsbehinderung</a></li>
                                            <li><a href="nasenscheidewand.php">Nasenscheidewand</a></li>
                                            <li><a href="Nasenmuschelvergrößerung.php">Nasemuschel-Vergrößerung</a></li>
                                            <li><a href="nasenpolypen.php">Nasenpolypen</a></li>
                                            <li><a href="allergie.php">Allergischer Schnupfen</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Nasennebenhöhlen</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="nnh.php">Kiefer-/ Stirn- u.a. Nebenhöhlen</a></li>
                                            <li><a href="nebenhoehlenpolypen.php">Nasennebenhöhlen-Polypen</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mund/ Rachen</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="kinder_hno.php">Kinder</a></li>
                                            <li><a href="mandelentzuendungen.php">Chron. Mandelentzündung</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Schlaf/ Schnarchen u.a.</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="schnarchen.php">Schnarchen</a></li>
                                            <li><a href="schnarchen.php">Schlaf-Apnoe-Syndrom</a></li>
                                            <li><a href="nasenatmungsbehinderung.php">Nasenatmungsbehinderung</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- Spezielle Therapie Droupdown Start Here ....... -->
                            <li><a href="">Spezielle Therapie</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="#">Tinnitus</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="tinnitus.php">Medikamente</a></li>
                                            <li><a href="tinnitus.php">Counceling</a></li>
                                            <li><a href="magnetfeld.php">Magnetfeldtherapie</a></li>
                                            <li><a href="sauerstoff.php">Sauerstofftherapie</a></li>
                                            <li><a href="tinnitus.php">Tinnitusmasker</a></li>
                                            <li><a href="desynchra.php">Desynchra (neu)</a></li>
                                            <li><a href="srt.php">SRT </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Schwindel</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="liegen.php">Übungen im Liegen</a></li>
                                            <li><a href="sitzen.php">Übungen im Sitzen</a></li>
                                            <li><a href="stehen.php">Übungen im Stehen</a></li>
                                            <li><a href="gehen.php">Übungen im Gehen</a></li>
                                            <li><a href="mt.php">SRT</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Schnarchen</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="schnarchen.php">Konservativ</a></li>
                                            <li><a href="schnarch_op.php">Operativ</a></li>
                                            <li><a href="allergie.php">Allergischer Schnupfen</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- Operative Therapie ....... -->
                            <li class="drop-left"><a href="#">Operative Therapie</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="vor_op.php">OP-Vorbereitung</a></li>
                                    <li><a href="#">stationäre OPs</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="operativ.php">Zusammenfassung</a></li>
                                            <li><a href="#">Mandeloperation</a>
                                                <ul style="list-style-type: none;">
                                                    <li><a href="mandel_op.php">Gaumenmandeln</a></li>
                                                    <li><a href="rachenmandel_op.php">Rachenmandeln</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="rachenmandel_op.php">"Polypen" OPs</a></li>
                                            <li><a href="scheidewand.php">Scheidewand-OP</a></li>
                                            <li><a href="nnh.php">Nasennebenhöhlen-OP</a></li>
                                            <li><a href="schnarchen.php">Schnarchen</a></li>
                                            <li><a href="schnarch_op.php">Schnarch-OP</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">ambulante OPs</a>
                                        <ul style="list-style-type: none;">
                                            <li><a href="warum_eigentlich_ambulant_.php">Warum ambulant?</a></li>
                                            <li><a href="ambulante_ops.php">Für Kinder</a></li>
                                            <li><a href="rachenmandel_op.php">Rachenmandel-OP</a></li>
                                            <li><a href="lc.php">Für Erwachsene</a></li>
                                            <li><a href="schnarchen.php">Schnarchen</a></li>
                                            <li><a href="schnarch_op.php">Schnarch-OP</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="operative_nachsorge.php">operative Nachsorge</a></li>
                                </ul>
                            </li>

                            <!-- Histore Droupdown Start Here ....... -->
                            <li><a href="#">Historie</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="historie.php">Geschichte der Praxis</a></li>
                                    <li><a href="latichte.php">Stirnreflektor</a></li>
                                    <li><a href="humor.php">Heiteres</a></li>
                                    <li><a href="lebensgrundsatz.php">Lebensweisheit</a></li>
                                </ul>
                            </li>

                            <!-- Impressum Droupdown Start Here ....... -->
                            <li class="drop-left"><a href="#">Impressum</a>
                                <ul style="list-style-type: none;">
                                    <li><a href="impressum.php">Gesetzliches</a></li>
                                    <li><a href="datenschutz.php">Datenschutz</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- .stellarnav -->

                </div> <!-- Class : col-12 -->
            </div> <!-- Class : row -->
        </div> <!-- Class : container -->
    </header> <!-- Id : main_menu --> 