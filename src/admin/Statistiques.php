<?php
    session_start();
require_once('../auth/connexion.php');
$ac = new Connexion();
$con = $ac->connection();



$req11=$con->prepare("SELECT COUNT(Mention1) FROM `evaluer` WHERE Mention1='Tres Satisfait'   ");
     $req11->execute();
     $data11 = $req11->fetch();

      $data11[0];

 

$req12=$con->prepare("SELECT COUNT(Mention1) FROM `evaluer` WHERE Mention1='Satisfait'   ");
     $req12->execute();
     $data12 = $req12->fetch();

      $data12[0];

 

$req13=$con->prepare("SELECT COUNT(Mention1) FROM `evaluer` WHERE Mention1='Peu Satisfait'   ");
     $req13->execute();
     $data13 = $req13->fetch();

      $data13[0];

 

$req14=$con->prepare("SELECT COUNT(Mention1) FROM `evaluer` WHERE Mention1='Insatisfait'   ");
     $req14->execute();
     $data14 = $req14->fetch();

      $data14[0];

 



$req21=$con->prepare("SELECT COUNT(Mention2) FROM `evaluer` WHERE Mention2='Tres Satisfait'   ");
     $req21->execute();
     $data21 = $req21->fetch();

      $data21[0];

 


$req22=$con->prepare("SELECT COUNT(Mention2) FROM `evaluer` WHERE Mention2='Satisfait'   ");
     $req22->execute();
     $data22 = $req22->fetch();

      $data22[0];

 

$req23=$con->prepare("SELECT COUNT(Mention2) FROM `evaluer` WHERE Mention2='Peu Satisfait'   ");
     $req23->execute();
     $data23 = $req23->fetch();

      $data23[0];

 

$req24=$con->prepare("SELECT COUNT(Mention2) FROM `evaluer` WHERE Mention2='Insatisfait'   ");
     $req24->execute();
     $data24 = $req24->fetch();

      $data24[0];

 





$req31=$con->prepare("SELECT COUNT(Mention3) FROM `evaluer` WHERE Mention3='Tres Satisfait'   ");
     $req31->execute();
     $data31 = $req31->fetch();

      $data31[0];

 


$req32=$con->prepare("SELECT COUNT(Mention3) FROM `evaluer` WHERE Mention3='Satisfait'   ");
     $req32->execute();
     $data32 = $req32->fetch();

      $data32[0];

 

$req33=$con->prepare("SELECT COUNT(Mention3) FROM `evaluer` WHERE Mention3='Peu Satisfait'   ");
     $req33->execute();
     $data33 = $req33->fetch();

      $data33[0];

 

$req34=$con->prepare("SELECT COUNT(Mention3) FROM `evaluer` WHERE Mention3='Insatisfait'   ");
     $req34->execute();
     $data34 = $req34->fetch();

      $data34[0];

 




$req41=$con->prepare("SELECT COUNT(Mention4) FROM `evaluer` WHERE Mention4='Tres Satisfait'   ");
     $req41->execute();
     $data41 = $req41->fetch();

      $data41[0];

 


$req42=$con->prepare("SELECT COUNT(Mention4) FROM `evaluer` WHERE Mention4='Satisfait'   ");
     $req42->execute();
     $data42 = $req42->fetch();

      $data42[0];

 

$req43=$con->prepare("SELECT COUNT(Mention4) FROM `evaluer` WHERE Mention4='Peu Satisfait'   ");
     $req43->execute();
     $data43 = $req43->fetch();

      $data43[0];

 

$req44=$con->prepare("SELECT COUNT(Mention4) FROM `evaluer` WHERE Mention4='Insatisfait'   ");
     $req44->execute();
     $data44 = $req44->fetch();

      $data44[0];
 




$req51=$con->prepare("SELECT COUNT(Mention5) FROM `evaluer` WHERE Mention5='Tres Satisfait'   ");
     $req51->execute();
     $data51 = $req51->fetch();

      $data51[0];

 


$req52=$con->prepare("SELECT COUNT(Mention5) FROM `evaluer` WHERE Mention5='Satisfait'   ");
     $req52->execute();
     $data52 = $req52->fetch();

      $data52[0];

 

$req53=$con->prepare("SELECT COUNT(Mention5) FROM `evaluer` WHERE Mention5='Peu Satisfait'   ");
     $req53->execute();
     $data53 = $req53->fetch();

      $data53[0];

 

$req54=$con->prepare("SELECT COUNT(Mention5) FROM `evaluer` WHERE Mention5='Insatisfait'   ");
     $req54->execute();
     $data54 = $req54->fetch();

      $data54[0];
 



$req61=$con->prepare("SELECT COUNT(Mention6) FROM `evaluer` WHERE Mention6='Tres Satisfait'   ");
     $req61->execute();
     $data61 = $req61->fetch();

      $data61[0];

 


$req62=$con->prepare("SELECT COUNT(Mention6) FROM `evaluer` WHERE Mention6='Satisfait'   ");
     $req62->execute();
     $data62 = $req62->fetch();

      $data62[0];

 

$req63=$con->prepare("SELECT COUNT(Mention6) FROM `evaluer` WHERE Mention6='Peu Satisfait'   ");
     $req63->execute();
     $data63 = $req63->fetch();

      $data63[0];

 

$req64=$con->prepare("SELECT COUNT(Mention6) FROM `evaluer` WHERE Mention6='Insatisfait'   ");
     $req64->execute();
     $data64 = $req64->fetch();

      $data64[0];
 


$req71=$con->prepare("SELECT COUNT(Mention7) FROM `evaluer` WHERE Mention7='Tres Satisfait'   ");
     $req71->execute();
     $data71 = $req71->fetch();

      $data71[0];

 


$req72=$con->prepare("SELECT COUNT(Mention7) FROM `evaluer` WHERE Mention7='Satisfait'   ");
     $req72->execute();
     $data72 = $req72->fetch();

      $data72[0];

 

$req73=$con->prepare("SELECT COUNT(Mention7) FROM `evaluer` WHERE Mention7='Peu Satisfait'   ");
     $req73->execute();
     $data73 = $req73->fetch();

      $data73[0];

 

$req74=$con->prepare("SELECT COUNT(Mention7) FROM `evaluer` WHERE Mention7='Insatisfait'   ");
     $req74->execute();
     $data74 = $req74->fetch();

      $data74[0];
 


$req81=$con->prepare("SELECT COUNT(Mention8) FROM `evaluer` WHERE Mention8='Tres Satisfait'   ");
     $req81->execute();
     $data81 = $req81->fetch();

      $data81[0];

 


$req82=$con->prepare("SELECT COUNT(Mention8) FROM `evaluer` WHERE Mention8='Satisfait'   ");
     $req82->execute();
     $data82 = $req82->fetch();

      $data82[0];

 

$req83=$con->prepare("SELECT COUNT(Mention8) FROM `evaluer` WHERE Mention8='Peu Satisfait'   ");
     $req83->execute();
     $data83 = $req83->fetch();

      $data83[0];

 

$req84=$con->prepare("SELECT COUNT(Mention8) FROM `evaluer` WHERE Mention8='Insatisfait'   ");
     $req84->execute();
     $data84 = $req84->fetch();

      $data84[0];
 


$req91=$con->prepare("SELECT COUNT(Mention9) FROM `evaluer` WHERE Mention9='Tres Satisfait'   ");
     $req91->execute();
     $data91 = $req91->fetch();

      $data91[0];

 


$req92=$con->prepare("SELECT COUNT(Mention9) FROM `evaluer` WHERE Mention9='Satisfait'   ");
     $req92->execute();
     $data92 = $req92->fetch();

      $data92[0];

 

$req93=$con->prepare("SELECT COUNT(Mention9) FROM `evaluer` WHERE Mention9='Peu Satisfait'   ");
     $req93->execute();
     $data93 = $req93->fetch();

      $data93[0];

 

$req94=$con->prepare("SELECT COUNT(Mention9) FROM `evaluer` WHERE Mention9='Insatisfait'   ");
     $req94->execute();
     $data94 = $req94->fetch();

      $data94[0];
 



$req101=$con->prepare("SELECT COUNT(Mention10) FROM `evaluer` WHERE Mention10='Tres Satisfait'   ");
     $req101->execute();
     $data101 = $req101->fetch();

      $data101[0];

 

$req102=$con->prepare("SELECT COUNT(Mention10) FROM `evaluer` WHERE Mention10='Satisfait'   ");
     $req102->execute();
     $data102 = $req102->fetch();

      $data102[0];

 

$req103=$con->prepare("SELECT COUNT(Mention10) FROM `evaluer` WHERE Mention10='Peu Satisfait'   ");
     $req103->execute();
     $data103 = $req103->fetch();

      $data103[0];

 

$req104=$con->prepare("SELECT COUNT(Mention10) FROM `evaluer` WHERE Mention10='Insatisfait'   ");
     $req104->execute();
     $data104 = $req104->fetch();

      $data104[0];

 



$req111=$con->prepare("SELECT COUNT(Mention11) FROM `evaluer` WHERE Mention11='Tres Satisfait'   ");
     $req111->execute();
     $data111 = $req111->fetch();

      $data111[0];

 

$req112=$con->prepare("SELECT COUNT(Mention11) FROM `evaluer` WHERE Mention11='Satisfait'   ");
     $req112->execute();
     $data112 = $req112->fetch();

      $data112[0];

 

$req113=$con->prepare("SELECT COUNT(Mention11) FROM `evaluer` WHERE Mention11='Peu Satisfait'   ");
     $req113->execute();
     $data113 = $req113->fetch();

      $data113[0];

 

$req114=$con->prepare("SELECT COUNT(Mention11) FROM `evaluer` WHERE Mention11='Insatisfait'   ");
     $req114->execute();
     $data114 = $req114->fetch();

      $data114[0];

 




$req121=$con->prepare("SELECT COUNT(Mention12) FROM `evaluer` WHERE Mention12='Tres Satisfait'   ");
     $req121->execute();
     $data121 = $req121->fetch();

      $data121[0];

 

$req122=$con->prepare("SELECT COUNT(Mention12) FROM `evaluer` WHERE Mention12='Satisfait'   ");
     $req122->execute();
     $data122 = $req122->fetch();

      $data122[0];

 

$req123=$con->prepare("SELECT COUNT(Mention12) FROM `evaluer` WHERE Mention12='Peu Satisfait'   ");
     $req123->execute();
     $data123 = $req123->fetch();

      $data123[0];

 

$req124=$con->prepare("SELECT COUNT(Mention12) FROM `evaluer` WHERE Mention12='Insatisfait'   ");
     $req124->execute();
     $data124 = $req124->fetch();

      $data124[0];

 




$req131=$con->prepare("SELECT COUNT(Mention13) FROM `evaluer` WHERE Mention13='Tres Satisfait'   ");
     $req131->execute();
     $data131 = $req131->fetch();

      $data131[0];

 

$req132=$con->prepare("SELECT COUNT(Mention13) FROM `evaluer` WHERE Mention13='Satisfait'   ");
     $req132->execute();
     $data132 = $req132->fetch();

      $data132[0];

 

$req133=$con->prepare("SELECT COUNT(Mention13) FROM `evaluer` WHERE Mention13='Peu Satisfait'   ");
     $req133->execute();
     $data133 = $req133->fetch();

      $data133[0];

 

$req134=$con->prepare("SELECT COUNT(Mention13) FROM `evaluer` WHERE Mention13='Insatisfait'   ");
     $req134->execute();
     $data134 = $req134->fetch();

      $data134[0];

 




$req141=$con->prepare("SELECT COUNT(Mention14) FROM `evaluer` WHERE Mention14='Tres Satisfait'   ");
     $req141->execute();
     $data141 = $req141->fetch();

      $data141[0];

 

$req142=$con->prepare("SELECT COUNT(Mention14) FROM `evaluer` WHERE Mention14='Satisfait'   ");
     $req142->execute();
     $data142 = $req142->fetch();

      $data142[0];

 

$req143=$con->prepare("SELECT COUNT(Mention14) FROM `evaluer` WHERE Mention14='Peu Satisfait'   ");
     $req143->execute();
     $data143 = $req143->fetch();

      $data143[0];

 

$req144=$con->prepare("SELECT COUNT(Mention14) FROM `evaluer` WHERE Mention14='Insatisfait'   ");
     $req144->execute();
     $data144 = $req144->fetch();

      $data144[0];

 




$req151=$con->prepare("SELECT COUNT(Mention15) FROM `evaluer` WHERE Mention15='Tres Satisfait'   ");
     $req151->execute();
     $data151 = $req151->fetch();

      $data151[0];

 

$req152=$con->prepare("SELECT COUNT(Mention15) FROM `evaluer` WHERE Mention15='Satisfait'   ");
     $req152->execute();
     $data152 = $req152->fetch();

      $data152[0];

 

$req153=$con->prepare("SELECT COUNT(Mention15) FROM `evaluer` WHERE Mention15='Peu Satisfait'   ");
     $req153->execute();
     $data153 = $req153->fetch();

      $data153[0];

 

$req154=$con->prepare("SELECT COUNT(Mention15) FROM `evaluer` WHERE Mention15='Insatisfait'   ");
     $req154->execute();
     $data154 = $req154->fetch();

      $data154[0];

 




$req161=$con->prepare("SELECT COUNT(Mention16) FROM `evaluer` WHERE Mention16='Tres Satisfait'   ");
     $req161->execute();
     $data161 = $req161->fetch();

      $data161[0];

 

$req162=$con->prepare("SELECT COUNT(Mention16) FROM `evaluer` WHERE Mention16='Satisfait'   ");
     $req162->execute();
     $data162 = $req162->fetch();

      $data162[0];

 

$req163=$con->prepare("SELECT COUNT(Mention16) FROM `evaluer` WHERE Mention16='Peu Satisfait'   ");
     $req163->execute();
     $data163 = $req163->fetch();

      $data163[0];

 

$req164=$con->prepare("SELECT COUNT(Mention16) FROM `evaluer` WHERE Mention16='Insatisfait'   ");
     $req164->execute();
     $data164 = $req164->fetch();

      $data164[0];

 




$req171=$con->prepare("SELECT COUNT(Mention17) FROM `evaluer` WHERE Mention17='Tres Satisfait'   ");
     $req171->execute();
     $data171 = $req171->fetch();

      $data171[0];

 

$req172=$con->prepare("SELECT COUNT(Mention17) FROM `evaluer` WHERE Mention17='Satisfait'   ");
     $req172->execute();
     $data172 = $req172->fetch();

      $data172[0];

 

$req173=$con->prepare("SELECT COUNT(Mention17) FROM `evaluer` WHERE Mention17='Peu Satisfait'   ");
     $req173->execute();
     $data173 = $req173->fetch();

      $data173[0];

 

$req174=$con->prepare("SELECT COUNT(Mention17) FROM `evaluer` WHERE Mention17='Insatisfait'   ");
     $req174->execute();
     $data174 = $req174->fetch();

      $data174[0];

 




$req181=$con->prepare("SELECT COUNT(Mention18) FROM `evaluer` WHERE Mention18='Tres Satisfait'   ");
     $req181->execute();
     $data181 = $req181->fetch();

      $data181[0];

 

$req182=$con->prepare("SELECT COUNT(Mention18) FROM `evaluer` WHERE Mention18='Satisfait'   ");
     $req182->execute();
     $data182 = $req182->fetch();

      $data182[0];

 

$req183=$con->prepare("SELECT COUNT(Mention18) FROM `evaluer` WHERE Mention18='Peu Satisfait'   ");
     $req13->execute();
     $data183 = $req13->fetch();

      $data183[0];

 

$req184=$con->prepare("SELECT COUNT(Mention18) FROM `evaluer` WHERE Mention18='Insatisfait'   ");
     $req184->execute();
     $data184 = $req184->fetch();

      $data184[0];

 



$req191=$con->prepare("SELECT COUNT(Mention19) FROM `evaluer` WHERE Mention19='Tres Satisfait'   ");
     $req191->execute();
     $data191 = $req191->fetch();

      $data191[0];

 

$req192=$con->prepare("SELECT COUNT(Mention19) FROM `evaluer` WHERE Mention19='Satisfait'   ");
     $req192->execute();
     $data192 = $req192->fetch();

      $data192[0];

 

$req193=$con->prepare("SELECT COUNT(Mention19) FROM `evaluer` WHERE Mention19='Peu Satisfait'   ");
     $req193->execute();
     $data193 = $req193->fetch();

      $data13[0];

 

$req194=$con->prepare("SELECT COUNT(Mention19) FROM `evaluer` WHERE Mention19='Insatisfait'   ");
     $req194->execute();
     $data194 = $req194->fetch();

      $data194[0];

 



$req201=$con->prepare("SELECT COUNT(Mention20) FROM `evaluer` WHERE Mention20='Tres Satisfait'   ");
     $req201->execute();
     $data201 = $req201->fetch();

      $data201[0];

 


$req202=$con->prepare("SELECT COUNT(Mention20) FROM `evaluer` WHERE Mention20='Satisfait'   ");
     $req202->execute();
     $data202 = $req202->fetch();

      $data202[0];

 

$req203=$con->prepare("SELECT COUNT(Mention20) FROM `evaluer` WHERE Mention20='Peu Satisfait'   ");
     $req203->execute();
     $data203 = $req203->fetch();

      $data203[0];

 

$req204=$con->prepare("SELECT COUNT(Mention20) FROM `evaluer` WHERE Mention20='Insatisfait'   ");
     $req204->execute();
     $data204 = $req204->fetch();

      $data204[0];

 



$req211=$con->prepare("SELECT COUNT(Mention21) FROM `evaluer` WHERE Mention21='Tres Satisfait'   ");
     $req211->execute();
     $data211 = $req211->fetch();

      $data211[0];

 


$req212=$con->prepare("SELECT COUNT(Mention21) FROM `evaluer` WHERE Mention21='Satisfait'   ");
     $req212->execute();
     $data212 = $req212->fetch();

      $data212[0];

 

$req213=$con->prepare("SELECT COUNT(Mention21) FROM `evaluer` WHERE Mention21='Peu Satisfait'   ");
     $req213->execute();
     $data213 = $req213->fetch();

      $data213[0];

 

$req214=$con->prepare("SELECT COUNT(Mention21) FROM `evaluer` WHERE Mention21='Insatisfait'   ");
     $req214->execute();
     $data214 = $req214->fetch();

      $data214[0];

 



$req221=$con->prepare("SELECT COUNT(Mention22) FROM `evaluer` WHERE Mention22='Tres Satisfait'   ");
     $req221->execute();
     $data221 = $req221->fetch();

      $data221[0];

 


$req222=$con->prepare("SELECT COUNT(Mention22) FROM `evaluer` WHERE Mention22='Satisfait'   ");
     $req222->execute();
     $data222 = $req222->fetch();

      $data222[0];

 

$req223=$con->prepare("SELECT COUNT(Mention22) FROM `evaluer` WHERE Mention22='Peu Satisfait'   ");
     $req223->execute();
     $data223 = $req223->fetch();

      $data223[0];

 

$req224=$con->prepare("SELECT COUNT(Mention22) FROM `evaluer` WHERE Mention22='Insatisfait'   ");
     $req224->execute();
     $data224 = $req224->fetch();

      $data224[0];

 



$req231=$con->prepare("SELECT COUNT(Mention23) FROM `evaluer` WHERE Mention23='Tres Satisfait'   ");
     $req231->execute();
     $data231 = $req231->fetch();

      $data231[0];

 


$req232=$con->prepare("SELECT COUNT(Mention23) FROM `evaluer` WHERE Mention23='Satisfait'   ");
     $req232->execute();
     $data232 = $req232->fetch();

      $data232[0];

 

$req233=$con->prepare("SELECT COUNT(Mention23) FROM `evaluer` WHERE Mention23='Peu Satisfait'   ");
     $req233->execute();
     $data233 = $req233->fetch();

      $data233[0];

 

$req234=$con->prepare("SELECT COUNT(Mention23) FROM `evaluer` WHERE Mention23='Insatisfait'   ");
     $req234->execute();
     $data234 = $req234->fetch();

      $data234[0];

 



$req241=$con->prepare("SELECT COUNT(Mention24) FROM `evaluer` WHERE Mention24='Tres Satisfait'   ");
     $req241->execute();
     $data241 = $req241->fetch();

      $data241[0];

 


$req242=$con->prepare("SELECT COUNT(Mention24) FROM `evaluer` WHERE Mention24='Satisfait'   ");
     $req242->execute();
     $data242 = $req242->fetch();

      $data242[0];

 

$req243=$con->prepare("SELECT COUNT(Mention24) FROM `evaluer` WHERE Mention24='Peu Satisfait'   ");
     $req243->execute();
     $data243 = $req243->fetch();

      $data243[0];

 

$req244=$con->prepare("SELECT COUNT(Mention24) FROM `evaluer` WHERE Mention24='Insatisfait'   ");
     $req244->execute();
     $data244 = $req244->fetch();

      $data244[0];

 



$req251=$con->prepare("SELECT COUNT(Mention25) FROM `evaluer` WHERE Mention25='Tres Satisfait'   ");
     $req251->execute();
     $data251 = $req251->fetch();

      $data251[0];

 


$req252=$con->prepare("SELECT COUNT(Mention25) FROM `evaluer` WHERE Mention25='Satisfait'   ");
     $req252->execute();
     $data252 = $req252->fetch();

      $data252[0];

 

$req253=$con->prepare("SELECT COUNT(Mention25) FROM `evaluer` WHERE Mention25='Peu Satisfait'   ");
     $req253->execute();
     $data253 = $req253->fetch();

      $data253[0];

 

$req254=$con->prepare("SELECT COUNT(Mention25) FROM `evaluer` WHERE Mention25='Insatisfait'   ");
     $req254->execute();
     $data254 = $req254->fetch();

      $data254[0];

 



$req261=$con->prepare("SELECT COUNT(Mention26) FROM `evaluer` WHERE Mention26='Tres Satisfait'   ");
     $req261->execute();
     $data261 = $req261->fetch();

      $data261[0];

 


$req262=$con->prepare("SELECT COUNT(Mention26) FROM `evaluer` WHERE Mention26='Satisfait'   ");
     $req262->execute();
     $data262 = $req262->fetch();

      $data262[0];

 

$req263=$con->prepare("SELECT COUNT(Mention26) FROM `evaluer` WHERE Mention26='Peu Satisfait'   ");
     $req263->execute();
     $data263 = $req263->fetch();

      $data263[0];

 

$req264=$con->prepare("SELECT COUNT(Mention26) FROM `evaluer` WHERE Mention26='Insatisfait'   ");
     $req264->execute();
     $data264 = $req264->fetch();

      $data264[0];




$sta1=$data11[0]+$data21[0]+$data31[0]+$data41[0]+$data51[0]+$data61[0]+$data71[0]+$data81[0]+$data91[0]+$data101[0]+$data111[0]+$data121[0]+$data131[0]+$data141[0]+$data151[0]+$data161[0]+$data171[0]+$data181[0]+$data191[0]+$data201[0]+$data211[0]+$data221[0]+$data231[0]+$data241[0]+$data251[0]+$data261[0];

$sta2=$data12[0]+$data22[0]+$data32[0]+$data42[0]+$data52[0]+$data62[0]+$data72[0]+$data82[0]+$data92[0]+$data102[0]+$data112[0]+$data122[0]+$data132[0]+$data142[0]+$data152[0]+$data162[0]+$data172[0]+$data182[0]+$data192[0]+$data202[0]+$data212[0]+$data222[0]+$data232[0]+$data242[0]+$data252[0]+$data262[0];

$sta3=$data13[0]+$data23[0]+$data33[0]+$data43[0]+$data53[0]+$data63[0]+$data73[0]+$data83[0]+$data93[0]+$data103[0]+$data113[0]+$data123[0]+$data133[0]+$data143[0]+$data153[0]+$data163[0]+$data173[0]+$data183[0]+$data193[0]+$data203[0]+$data213[0]+$data223[0]+$data233[0]+$data243[0]+$data253[0]+$data263[0];

$sta4=$data14[0]+$data24[0]+$data34[0]+$data44[0]+$data54[0]+$data64[0]+$data74[0]+$data84[0]+$data94[0]+$data104[0]+$data114[0]+$data124[0]+$data134[0]+$data144[0]+$data154[0]+$data164[0]+$data174[0]+$data184[0]+$data194[0]+$data204[0]+$data214[0]+$data224[0]+$data234[0]+$data244[0]+$data254[0]+$data264[0];


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image" href="../../assets/img/iai.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Institut Africain d'informatique</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../../assets/img/sidebar.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
                    Menu
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="prof/AffichageProf.php">
                        <i class="pe-7s-user"></i>
                        <p>Professeurs</p>
                    </a>
                </li>
                <li>
                    <a href="ue/AffichageUE.php">
                        <i class="pe-7s-note2 "></i>
                        <p>Unités d'Enseignement</p>
                    </a>
                </li>
                <li>
                    <a href="ec/AffichageEC.php">
                        <i class="pe-7s-note2"></i>
                        <p>Eléments Constitutifs</p>
                    </a>
                </li>
                <li class="active">
                    <a href="Statistiques.php">
                        <i class="pe-7s-graph"></i>
                        <p>Statistiques</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="navbar-brand" href="#">Bienvenue <b><?php echo $_SESSION['login']; ?></b></a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../auth/deconnexion.php">
                                <p>Déconnexion</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Statistiques des évaluations</h4>
                                <p class="category">Représentation en tableau</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th></th>
                                      <th>Appréciation générale du cours </th>
                                      <th>Appréciation générale du contenu du cours </th>
                                      <th>Appréciation du déroulement du cours </th>
                                      <th>Appréciation de la documentation fournie </th>
                                      <th>Appréciation Travaux Dirigés ou Travaux Pratiques </th>
                                      <th>appréciation du cadre de l'enseignement </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>Insatisfait</td>
                                          <td> 
                                            <?php echo $data14[0]+$data24[0]+$data34[0]+$data44[0]+$data54[0]+$data64[0]?>
                                          </td> 
                                          <td>
                                            <?php echo $data74[0]+$data84[0]+$data94[0]+$data104[0]?>
                                          </td>
                                          <td> 
                                            <?php echo $data114[0]+$data124[0]+$data134[0]?>
                                              
                                          </td>
                                          <td>
                                            <?php echo $data144[0]+$data154[0]+$data164[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data174[0]+$data184[0]+$data194[0]+$data204[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data214[0]+$data224[0]+$data234[0]+$data244[0]+$data254[0]+$data264[0]?>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Peu Satisfait</td>
                                          <td> 
                                            <?php echo $data13[0]+$data23[0]+$data33[0]+$data43[0]+$data53[0]+$data63[0]?>
                                          </td> 
                                          <td>
                                            <?php echo $data73[0]+$data83[0]+$data93[0]+$data103[0]?>
                                          </td>
                                          <td> 
                                            <?php echo $data113[0]+$data123[0]+$data133[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data143[0]+$data153[0]+$data163[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data173[0]+$data183[0]+$data193[0]+$data203[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data213[0]+$data223[0]+$data233[0]+$data243[0]+$data253[0]+$data263[0]?>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Satisfait</td>
                                          <td> 
                                            <?php echo $data12[0]+$data22[0]+$data32[0]+$data42[0]+$data52[0]+$data62[0]?>
                                          </td>
                                          <td> 
                                            <?php echo $data72[0]+$data82[0]+$data92[0]+$data102[0]?>
                                          </td>
                                          <td> 
                                            <?php echo $data112[0]+$data122[0]+$data132[0]?>
                                              
                                          </td>
                                          <td>
                                            <?php echo $data142[0]+$data152[0]+$data162[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data172[0]+$data182[0]+$data192[0]+$data202[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data212[0]+$data222[0]+$data232[0]+$data242[0]+$data252[0]+$data262[0]?>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Très Satisfait</td>
                                          <td> 
                                            <?php echo $data11[0]+$data21[0]+$data31[0]+$data41[0]+$data51[0]+$data61[0]?>
                                          </td> 
                                          <td>
                                            <?php echo $data71[0]+$data81[0]+$data91[0]+$data101[0]?>
                                          </td>
                                          <td> 
                                            <?php echo $data111[0]+$data121[0]+$data131[0]?>
                                              
                                          </td>
                                          <td>
                                            <?php echo $data141[0]+$data151[0]+$data161[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data171[0]+$data181[0]+$data191[0]+$data201[0]?>
                                          </td>
                                          <td>
                                            <?php echo $data211[0]+$data221[0]+$data231[0]+$data241[0]+$data251[0]+$data261[0]?>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td>Totaux</td>
                                          <td> 
                                            <?php 
                                              echo $rub1=$data14[0]+$data24[0]+$data34[0]+$data44[0]+$data54[0]+$data64[0]+$data13[0]+$data23[0]+$data33[0]+$data43[0]+$data53[0]+$data63[0]+$data12[0]+$data22[0]+$data32[0]+$data42[0]+$data52[0]+$data62[0]+$data11[0]+$data21[0]+$data31[0]+$data41[0]+$data51[0]+$data61[0]
                                            ?>
                                          </td> 
                                          <td>
                                            <?php 
                                              echo $rub2=$data74[0]+$data84[0]+$data94[0]+$data104[0]+$data73[0]+$data83[0]+$data93[0]+$data103[0]+$data72[0]+$data82[0]+$data92[0]+$data102[0]+$data71[0]+$data81[0]+$data91[0]+$data101[0]
                                            ?>
                                          </td>
                                          <td> 
                                            <?php 
                                              echo $rub3=$data114[0]+$data124[0]+$data134[0]+$data113[0]+$data123[0]+$data133[0]+$data112[0]+$data122[0]+$data132[0]+$data111[0]+$data121[0]+$data131[0]
                                            ?>
                                          </td>
                                          <td>
                                            <?php 
                                              echo $rub4=$data144[0]+$data154[0]+$data164[0]+$data143[0]+$data153[0]+$data163[0]+$data142[0]+$data152[0]+$data162[0]+$data141[0]+$data151[0]+$data161[0]
                                            ?>
                                          </td>
                                          <td>
                                            <?php 
                                              echo $rub5=$data174[0]+$data184[0]+$data194[0]+$data204[0]+$data173[0]+$data183[0]+$data193[0]+$data203[0]+$data172[0]+$data182[0]+$data192[0]+$data202[0]+$data171[0]+$data181[0]+$data191[0]+$data201[0]
                                            ?>
                                          </td>
                                          <td>
                                            <?php 
                                              echo $rub6=$data214[0]+$data224[0]+$data234[0]+$data244[0]+$data254[0]+$data264[0]+$data213[0]+$data223[0]+$data233[0]+$data243[0]+$data253[0]+$data263[0]+$data212[0]+$data222[0]+$data232[0]+$data242[0]+$data252[0]+$data262[0]+$data211[0]+$data221[0]+$data231[0]+$data241[0]+$data251[0]+$data261[0]
                                            ?>
                                          </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Statistiques des évaluations</h4>
                                <p class="category">Représentation en ligne</p>
                            </div>
                            <div class="content" >
                                <canvas id="lineChart"></canvas>
                                <br>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-" style="color: orange"></i> Insatisfait
                                        <i class="fa fa-circle text-" style="color: gray"></i> Peu Satisfait
                                        <i class="fa fa-circle text-" style="color: lightblue"></i> Satisfait
                                        <i class="fa fa-circle text-" style="color: palegoldenrod"></i> Très Satisfait
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Statistiques des évaluations</h4>
                                <p class="category">Représentation en bâtonnets</p>
                            </div>
                           
                                <canvas id="myChart" ></canvas>
                                 <div class="content" >
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-dark"></i> Valeurs
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Statistiques des évaluations</h4>
                                <p class="category">Représentation en disque</p>
                            </div>
                            <div class="content" >
                                <canvas id="Chart"></canvas>
                                <br>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-" style="color: orange"></i> Insatisfait
                                        <i class="fa fa-circle text-" style="color: gray"></i> Peu Satisfait
                                        <i class="fa fa-circle text-" style="color: lightblue"></i> Satisfait
                                        <i class="fa fa-circle text-" style="color: palegoldenrod"></i> Très Satisfait
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        
        <footer class="footer">
            <div class="container-fluid">
               <div class="copyright" style="text-align: center;">
                    <h5>&copy; 2020 Copyright:
                        <a href="http://iai-togo.tg" target="_blank">iai-togo.tg</a> 
                         |  All rights reserved
                    </h5>
        </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <script src="../../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/chartist.min.js"></script>
    <script src="../../assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="../../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="../../assets/js/demo.js"></script>
	
    <script src="../../assets/dist/Chart.bundle.js"></script>

    

    <script >
        var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
    type: 'bar',

    data: {
        labels: ['Insatisfait', 'Peu Satisfait', 'Satisfait', 'Tres Satisfait'],
        datasets: [{
            label: 'Valeurs',
            backgroundColor: 'black',
            borderColor: 'rgb(0, 0, 0)',
            barPercentage: 0.5,
            maxBarThickness: 8,
            minBarLength: 2,
            data: [ <?php echo$sta4?>, <?php echo$sta3 ?>,<?php echo$sta2?> ,<?php echo$sta1 ?>]
        }]
    },
    options: {
      legend:{
        display: false
      }
        
    }
});
    </script>

    <script >
        var ct2x = document.getElementById('Chart').getContext('2d');
        var myLineChart = new Chart(ct2x, {
    type: 'pie',
    data: {
        labels: ['Insatisfait', 'Peu Satisfait', 'Satisfait', 'Tres Satisfait'],
        datasets: [{
            label: 'Valeurs',
            backgroundColor: ['orange','gray','lightblue','palegoldenrod'],
            borderColor: 'rgb(0, 0, 0)',
            data: [ <?php echo$sta4?>, <?php echo$sta3 ?>,<?php echo$sta2?> ,<?php echo$sta1 ?>]
        }]
    },
    options: {
        title:{
            text: "Statistiques des évaluations"
        }

    }
});
    </script>

    <script >
      Chart.defaults.global.backgroundColor = 'transparent';
    </script>

    <script >
        var cyex = document.getElementById('lineChart').getContext('2d');
        var myLineChart = new Chart(cyex, {
    type: 'line',
    data: {
        labels: ['','Appréciation générale du cours ','Appréciation générale du contenu du cours ','Appréciation du déroulement du cours ','Appréciation de la documentation fournie ','Appréciation Travaux Dirigés ou Travaux Pratiques','Appréciation du cadre de l\'enseignement '],
        datasets: [{
            label: 'Valeurs',
            
            borderColor: '',
            data: [ 0,<?php echo$rub1?>, <?php echo$rub2 ?>,<?php echo$rub3?> ,<?php echo$rub4 ?>,<?php echo$rub5?> ,<?php echo$rub6 ?>]
        }]
    },
    options: {
        title:{
            text: "Statistiques des évaluations"
        },
        elements:{
          point:{
            radius:10,
            backgroundColor:['','orange','gray','lightblue','palegoldenrod','green','yellow']
          }
        },
        legend:{
        display: false
      }

    }
});
    </script>

</html>
