<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodwise Indian</title>
    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/footer-distributed.css">
    <link rel="stylesheet" href="assets/form-basic.css">
    <link rel="stylesheet" href="cssmenu/styles.css">

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body id="page-top" class="index">
<div class="container">
    <div style="padding:20px 10px;text-align:center;">
        <a href="http://foodwiseindian.co.in/"><img src="logo-foodwise-02.png" alt="home"></a>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top1">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-center">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="http://fwitools.foodwiseindian.co.in/ideal_diet_plan/">Ideal Diet Plan</a>
                </li>
                <li class="page-scroll">
                <a href="http://fwitools.foodwiseindian.co.in/weight_loss_calculator">BMI/Weight Loss calculator</a>
                    
                </li>
                <li class="page-scroll">
                    <a href="http://fwitools.foodwiseindian.co.in/heartrisk">Heart risk calculator</a>
                </li>
                <li class="page-scroll">
                    <a href="http://fwitools.foodwiseindian.co.in/oil_calculator">Family oil use calculator</a>
                </li>
                  <li class="page-scroll">
                   <a href="http://fwitools.foodwiseindian.co.in/fw_checkup/">Health check-up </a> 
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section id="contact">
    <div class="container" style="background-color: #ffffff;">
        <div class="row">
            <div class="col-lg-12">

                
                <?php

                /** Error reporting     **/
                error_reporting(E_ALL);

                /** Include path        **/
                set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/../Classes/');
                ini_set('memory_limit', '1024M');
                //set exectuion time
                ini_set('max_execution_time', '600');
                include 'PHPExcel/IOFactory.php';

                //get session variables and set to excel
                //$adult = $_SESSION['adult'];
                $age = $_SESSION['age'];
                $mnths = $_SESSION['mnths'];
                $ft = $_SESSION['ft'];
                $inc = $_SESSION['inc'];
                $wt = $_SESSION['wt'];
                $gender = $_SESSION['gender'];
                $pregnant = $_SESSION['pregnant'];
                $breast_feed = $_SESSION['breast_feed'];

                /* echo "<table border='1' align='center' width='50%'>";
                 echo "<tr><th colspan = '2' align='center'> Your Inputs </th></tr>";
                 echo "<tr>";echo "<td>";
                 echo '<b>Category </b>';
                 echo "</td>";echo "<td>";
                 echo $adult;
                 echo "</td></tr>";
                 echo "<tr>";echo "<td>";
                 echo '<b>Gender </b>';
                 echo "</td>";echo "<td>";
                 echo $gender;
                 echo "</td></tr>";
                 echo "<tr>";echo "<td>";
                 echo '<b>Age </b>';
                 echo "</td>";   echo "<td>";
                 echo $age." Years ".$mnths." Months";
                 echo "</td></tr>";
                 echo "<tr>";    echo "<td>";
                 echo '<b>Height </b>';
                 echo "</td>";
                 echo "<td>";
                 echo $ft.".".$inc."\"";
                 echo "</td></tr>";
                 echo "<tr>";    echo "<td>";
                 echo '<b>Weight </b>';
                 echo "</td>";
                 echo "<td>";
                 echo $wt." Kgs";
                 echo "</td></tr>";*/
                if ($pregnant == 'yes') {

                    // echo "This is for Pregnant Women";

                    $objPHPExcel = PHPExcel_IOFactory::load('./nutrition-December-pregnant.xlsx');//load seperate excel for pregnant

                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C14', $age);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C16', $ft);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C17', $inc);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C18', $wt);

                    $diff_date = $_SESSION['diff_date'];
                    $trimester = $_SESSION['trimester'];
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C22', $trimester);
                    $prePreg_wt = $_SESSION['prePreg_wt'];
                    //echo "Pre Pregnant---".$prePreg_wt;
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C23', $prePreg_wt);

                    /*echo "<tr>";echo "<td>";
                        echo '<b>Pregnancy </b>';
                        echo "</td>";echo "<td>";
                        echo $pregnant;
                        echo "</td></tr>";
                        echo "<tr>";echo "<td>";
                        echo '<b>Trimester </b>';
                        echo "</td>";echo "<td>";
                        echo $trimester;echo "</td></tr>";
                        echo "<tr>";echo "<td>";
                        echo '<b>Pre Pregnancy Weight </b>';
                        echo "</td>";echo "<td>";
                        echo $prePreg_wt." Kgs";
                        echo "</td></tr>";*/
                } else if ($breast_feed == 'yes') {

                    //echo "This is for Breast Feeding Women";

                    $objPHPExcel = PHPExcel_IOFactory::load('./nutrition-December-breast feeding.xlsx');

                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C14', $age);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C16', $ft);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C17', $inc);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C18', $wt);

                    $child_age = $_SESSION['child_age'];
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C18', $child_age);

                    $objPHPExcel->getSheetByName("I&O")->setCellValue('E24', $wt);

                    if ($_SESSION['wt_loss'] == 'wt_yes') {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'yes');
                    } else {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'no');
                    }

                    /* echo "<tr>";echo "<td>";
                         echo '<b>Breast Feeding </b>';
                         echo "</td>";echo "<td>";
                         echo $breast_feed;
                         echo "</td></tr>";
                         echo "<tr>";echo "<td>";
                         echo '<b>Child Age </b>';
                         echo "</td>";echo "<td>";
                         echo $child_age;
                         echo "</td></tr>";
                         echo "<tr>";echo "<td>";
                         echo '<b>Pre Pregnancy Weight </b>';
                         echo "</td>";echo "<td>";
                         echo $wt." Kgs";
                         echo "</td></tr>";*/

                } else {

                    //echo "This is for Normal Men and Women";

                    $objPHPExcel = PHPExcel_IOFactory::load('./nutrition-December-revised.xlsx');

                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C13', $gender);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C14', $age);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C16', $ft);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C17', $inc);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C18', $wt);

                    if ($_SESSION['wt_loss'] == 'wt_yes') {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'yes');
                    } else {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'no');
                    }
                }
                // echo "</table>";

                $objPHPExcel->getSheetByName("I&O")->setCellValue('C10', 'Adult');
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D36', $_SESSION['activity_exer']);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D37', $_SESSION['activity_occ']);

                /*echo "<h3><center>Your BMI and weight category</center></h3>";
                echo "<table border='1' align='center' width='50%'>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Your healthy weight range (in Kgs):</b>';
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("I&O")->getCell('C26')->getCalculatedValue();
                echo "</td></tr>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Your BMI is:</b>';
                echo "</td>";
                echo "<td>";
                $bmi=$objPHPExcel->getSheetByName("I&O")->getCell('C27')->getCalculatedValue();
                echo sprintf("%0.2f",$bmi);
                echo "</td></tr>";*/
                /*echo "<tr>";
                echo "<td>";
                //Choosing wight Cateogry based on BMI Value
                echo '<b>Your Weight Category is:</b>';
                echo "</td>";
                echo "<td>";
                if($bmi<18){
                    echo "Under Weight";
                }
                if($bmi>=18 && $bmi<=22.99){
                    echo "Normal";
                }
                if($bmi>=23 && $bmi<=24.9){
                    echo "Over Weight";
                }
                if($bmi>=25){
                    echo "Obesity";
                }
                echo "</td></tr>";*/
                /*echo "<tr>";
                echo "<td width='70%'>";

                echo '<b>Your Activity Level is:</b>';
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("I&O")->getCell('C38')->getCalculatedValue();
                echo "</td></tr>";*/
                /*echo "<tr>";
                echo "<td>";
                echo "Your RDCA (Recommended Daily Calorie Allowance)";
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("I&O")->getCell('C41')->getCalculatedValue();
                echo "</td>";
                echo "</tr>";*/
                /*echo "<tr><td>";
                echo "Your RDCA (Recommended Daily Calorie Allowance) rounded to nearest 200 cal multiple";
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("I&O")->getCell('C41')->getCalculatedValue();
                echo "</td></tr>";
                echo "</table>";*/

                //echo $objPHPExcel->getSheetByName("I&O")->getCell('C38')->getCalculatedValue();//Retrieves particular cell
                //echo $objPHPExcel->getSheetByName("I&O")->getCell('C40')->getCalculatedValue();

                $veg = $_SESSION['veg'];
                $meal = $_SESSION['meal'];
                $bf = $_SESSION['bf'];
                $grains = $_SESSION['grains'];
                $rice = $_SESSION['rice'];
                $nveg = $_SESSION['nveg'];
                $chicken = $_SESSION['chicken'];
                $fish = $_SESSION['fish'];
                $beef = $_SESSION['beef'];
                $mutton = $_SESSION['mutton'];
                $lamb = $_SESSION['lamb'];
                $pork = $_SESSION['pork'];
                $milk = $_SESSION['milk'];
                $oil_combo = $_SESSION['oil_combo'];

                $oil1a = $_SESSION['oil1a'];
                $oil1b = $_SESSION['oil1b'];
                $oil2a = $_SESSION['oil2a'];
                $oil2b = $_SESSION['oil2b'];
                $oil2c = $_SESSION['oil2c'];
                $oil4a = $_SESSION['oil4a'];
                $oil4b = $_SESSION['oil4b'];
                $oil5a = $_SESSION['oil5a'];
                $oil5b = $_SESSION['oil5b'];

                /*echo "Oil Combinatoin is ".$oil_combo;
                echo "Oil Combination 1 types 1a ".$oil1a." type 1b ".$oil1b;
                echo "Oil Combination 2 types 2a ".$oil2a." type 2b ".$oil2b." type 2c ".$oil2c;
                echo "Oil Combination 4 types 4a ".$oil4a." type 4b ".$oil4b;
                echo "Oil Combination 5 types 5a ".$oil5a." type 5b ".$oil5b;*/

                $objPHPExcel->getSheetByName("I&O")->setCellValue('C62', $veg);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('C85', $veg);
                //How many major meals do you take in a day?
                if ($meal == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D91', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D92', '');
                }
                if ($meal == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D92', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D91', '');
                }
                //What do you eat in breakfast?
                if ($bf == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D101', '');
                }
                if ($bf == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D101', '');
                }
                if ($bf == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D101', '');
                }
                if ($bf == 4) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D101', '');
                }
                if ($bf == 5) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D101', '');
                }
                if ($bf == 6) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D101', 'yes');

                }

                //What grains do you eat in lunch and dinner?
                if ($grains == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D104', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D105', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D106', '');
                }
                if ($grains == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D104', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D105', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D106', '');
                }
                if ($grains == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D104', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D105', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D106', 'yes');
                }
                //What type of rice, do you eat?
                if ($rice == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D110', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D111', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D112', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D113', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D114', '');
                }
                if ($rice == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D110', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D111', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D112', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D113', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D114', '');
                }
                if ($rice == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D110', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D111', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D112', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D113', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D114', '');
                }
                if ($rice == 4) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D110', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D111', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D112', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D113', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D114', '');
                }
                if ($rice == 5) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D110', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D111', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D112', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D113', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D114', 'yes');
                }
                //for non veg how many meals
                $objPHPExcel->getSheetByName("I&O")->setCellValue('F118', $nveg);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', $chicken);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D127', $fish);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D128', $beef);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D129', $mutton);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D130', $lamb);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D131', $pork);
                //What type of milk?
                if ($milk == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C136', 'yes');

                }
                if ($milk == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C137', 'yes');
                }
                if ($milk == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C138', 'yes');
                }
                if ($milk == 4) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C139', 'yes');
                }
                if ($milk == 5) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C140', 'yes');
                }
                if ($milk == 6) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C141', 'yes');
                }
                //what oil is cooked?
                if ($oil_combo == 'combo1') {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D148', 'yes');
                    if ($oil1a == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D4', 'yes');
                    }
                    if ($oil1a == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D5', 'yes');

                    }
                    if ($oil1a == 3) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D6', 'yes');
                    }
                    if ($oil1b == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F4', 'yes');
                    }
                    if ($oil1b == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F5', 'yes');
                    }
                    if ($oil1b == 3) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F6', 'yes');

                    }
                }
                if ($oil_combo == 'combo2') {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D149', 'yes');
                    if ($oil2a == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D9', 'yes');
                    }
                    if ($oil2a == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D10', 'yes');
                    }

                    if ($oil2b == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F9', 'yes');
                    }
                    if ($oil2b == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F10', 'yes');
                    }
                    if ($oil2c == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('H9', 'yes');
                    }
                    if ($oil2c == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('H10', 'yes');
                    }
                    if ($oil2c == 3) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('H11', 'yes');
                    }
                }
                if ($oil_combo == 'combo3') {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D150', 'yes');
                }
                if ($oil_combo == 'combo4') {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D151', 'yes');
                    if ($oil4a == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D15', 'yes');
                    }
                    if ($oil4a == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D16', 'yes');
                    }
                    if ($oil4b == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F15', 'yes');
                    }
                    if ($oil4b == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F16', 'yes');
                    }
                    if ($oil4b == 3) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F17', 'yes');
                    }
                }
                if ($oil_combo == 'combo5') {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D152', 'yes');
                    if ($oil5a == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D19', 'yes');
                    }
                    if ($oil5a == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('D20', 'yes');
                    }
                    if ($oil5b == 1) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F19', 'yes');
                    }
                    if ($oil5b == 2) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F20', 'yes');
                    }
                    if ($oil5b == 3) {
                        $objPHPExcel->getSheetByName("Oils")->setCellValue('F21', 'yes');
                    }
                }
                /*$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save("user.xlsx");*/
                /** If the user has submitted the form, then we need to execute a calculation **/

                echo "<center><h2>Nutrition Dashboard</h2></center>";
                ?>
                <br>
                <div class="table-responsive"> 
                <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2" class="table bg-white">
                    <tr class="tab-hed">
                        <TD><strong>&nbsp;</strong></TD>
                        <TD><strong><a href="http://www.foodwiseindian.co.in" target="_blank">Basic Indian
                                    Diet</a></strong></TD>
                        <TD><strong><a href="http://www.foodwiseindian.co.in" target="_blank">Optimized Indian diet</a></strong>
                        </TD>
                        <TD><strong><a href="http://www.foodwiseindian.co.in" target="_blank">Ideal Diet For People With
                                    Health Risks</a></strong></TD>
                        <TD><strong>Recommended range</strong></TD>
                    </TR>
                    <tr valign="top" class="bg-white">
                        <td><strong>Surplus calories available, for indulgence </strong></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D220')->getCalculatedValue(); ?></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E220')->getCalculatedValue(); ?></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('F220')->getCalculatedValue(); ?></td>
                        <td>You can use these calories fir indulgence ,provided you take care that</td>
                    </tr>
                    <tr valign="top" class="bg-white">
                        <td><strong>Maximum number of teaspoons of sugar </strong></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D221')->getCalculatedValue(); ?></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E221')->getCalculatedValue(); ?></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('F221')->getCalculatedValue(); ?></td>
                        <td>Either in tea/coffee etc. or in sweets (1 tsp=5 gms)</td>
                    </tr>
                    <tr valign="top" class="bg-white">
                        <td>no more SFA than</td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D223')->getCalculatedValue(); ?></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E223')->getCalculatedValue(); ?></td>
                        <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('F223')->getCalculatedValue(); ?></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr valign="top" class="bg-white">
                        <td>Surplus cholesterol</td>
                        <td><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('D224')->getCalculatedValue()); ?></td>
                        <td><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('E224')->getCalculatedValue()); ?></td>
                        <td><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('F224')->getCalculatedValue()); ?></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr valign="top" class="bg-white">
                        <td>no more sodium than</td>
                        <td><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('D225')->getCalculatedValue()); ?></td>
                        <td><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('E225')->getCalculatedValue()); ?></td>
                        <td><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('F225')->getCalculatedValue()); ?></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="tab-hed">
                        <TD><strong>Macronutrients</strong></TD>
                        <TD><strong><a href="http://www.foodwiseindian.co.in" target="_blank">Basic Indian
                                    Diet</a></strong></TD>
                        <TD><strong><a href="http://www.foodwiseindian.co.in" target="_blank">Optimized Indian diet</a></strong>
                        </TD>
                        <TD><strong><a href="http://www.foodwiseindian.co.in" target="_blank">Ideal Diet For People With
                                    Health Risks</a></strong></TD>
                        <TD><strong>Recommended range</strong></TD>
                    </TR>
                    <TR>
                        <TD>% of calories coming from carbohydrates</TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D239')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E239')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F239')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD>50-60% ideal, 45-65% tolerable if no heart disease/risks and no diabetes/pre diabetes</TD>
                    </TR>
                    <TR>
                        <TD>% of calories coming from proteins</TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D241')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E241')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F241')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD>10-35%</TD>
                    </TR>
                    <TR>
                        <TD>% of calories coming from fats</TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D242')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E242')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F242')->getCalculatedValue() * 100)) . "%"; ?></TD>
                        <TD>20-35%</TD>
                    </TR>

                </TABLE></div>


                <br>

                <div class="table-responsive">
                    <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2"
                           class="table bg-white">

                        <TR class="tab-hed">
                            <TD><strong>Heart health panel</strong></TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Basic Indian Diet</a></strong>
                            </TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Optimized Indian
                                        diet</a></strong></TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Ideal Diet For People
                                        With Health Risks</a></strong></TD>
                            <TD><strong>Recommended range</strong></TD>
                        </TR>
                        <TR>
                            <TD>% of calories coming from SFAs</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D245')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E245')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F245')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD>&lt; 10% for norml people, &lt;6-7% for people with high blood cholesterol/BP</TD>
                        </TR>
                        <TR>
                            <TD>Cholesterol (mg)</TD>
                            <TD><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('D246')->getCalculatedValue()); ?></TD>
                            <TD><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('E246')->getCalculatedValue()); ?></TD>
                            <TD><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('F246')->getCalculatedValue()); ?></TD>
                            <TD>&lt;300 for normal people, &lt;200 for people with high blood cholesterol/BP</TD>
                        </TR>
                        <TR>
                            <TD>% of calories coming from omega 3 PUFAs</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D247')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E247')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F247')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD>.5-2%</TD>
                        </TR>
                        <TR>
                            <TD>% of calories coming from omega6 PUFAs</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D248')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E248')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F248')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD>2.5-9%</TD>
                        </TR>
                        <TR>
                            <TD>% of calories coming from MUFAs</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D249')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E249')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F249')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD>up to 15-20% is OK</TD>
                        </TR>
                        <TR>
                            <TD>% of calories coming from PUFAs</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D250')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E250')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F250')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD ALIGN="LEFT" VALIGN="TOP">6-11%</TD>
                        </TR>

                        <TR>
                            <TD>Dietary Fibre (gms)</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D270')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E270')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F270')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD>25-40 gms/day or 14 gms/1000 calories</TD>
                        </TR>
                        <TR>
                            <TD>Sodium (mg)</TD>
                            <TD><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('D272')->getCalculatedValue()); ?></TD>
                            <TD><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('E272')->getCalculatedValue()); ?></TD>
                            <TD><?php echo round($objPHPExcel->getSheetByName("I&O")->getCell('F272')->getCalculatedValue()); ?></TD>
                            <TD>< 2300 mg , for people with high BP< 1500 is ideal</TD>
                        </TR>
                        </TBODY>
                    </TABLE>
                </div>
                <br>

                <div class="table-responsive">
                    <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2"
                           class="table bg-white">

                        <TR class="tab-hed2">
                            <TD><strong>Vitamins </strong></TD>
                            <TD><strong>% of Indian RDA</strong></TD>
                            <TD><strong><BR>
                                </strong></TD>
                            <TD><strong><BR>
                                </strong></TD>

                        </TR>
                        <TR class="tab-hed">
                            <TD><strong><BR>
                                </strong></TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Basic Indian Diet</a></strong>
                            </TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Optimized Indian
                                        diet</a></strong></TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Ideal Diet For People
                                        With Health Risks</a></strong></TD>

                        </TR>
                        <TR>
                            <TD>Vit A</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D252')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E252')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F252')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit C</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D253')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E253')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F253')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit D</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D254')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E254')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F254')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit E</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D255')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E255')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F255')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit B1</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D256')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E256')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F256')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit B2</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D257')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E257')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F257')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit B3</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D258')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E258')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F258')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit B6</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D259')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E259')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F259')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Vit B12</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D260')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E260')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F260')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Folate</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D261')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E261')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F261')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                    </TABLE>
                </div>

                <div class="table-responsive">
                    <br>
                    <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2"
                           class="table bg-white">
                        <TR class="tab-hed2">
                            <TD><strong>Minerals </strong></TD>
                            <TD><strong>% of Indian RDA</strong></TD>
                            <TD><strong><BR>
                                </strong></TD>
                            <TD><strong><BR>
                                </strong></TD>
                        </TR>
                        <TR class="tab-hed">
                            <TD><strong><BR>
                                </strong></TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Basic Indian Diet</a></strong>
                            </TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Optimized Indian
                                        diet</a></strong></TD>
                            <TD><strong><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Ideal Diet For People
                                        With Health Risks</a></strong></TD>

                        </TR>
                        <TR>
                            <TD>Iron</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D263')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E263')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F263')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Calcium</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D264')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E264')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F264')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Potassium</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D265')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E265')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F265')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Magnesium</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D266')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E266')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F266')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Selenium</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D267')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E267')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F267')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Zinc</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D268')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E268')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F268')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>
                        <TR>
                            <TD>Copper</TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('D269')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('E269')->getCalculatedValue() * 100)) . "%"; ?></TD>
                            <TD><?php echo (round($objPHPExcel->getSheetByName("I&O")->getCell('F269')->getCalculatedValue() * 100)) . "%"; ?></TD>

                        </TR>

                    </TABLE>

                </div>
            </div>
        </div>  <!-- End #content -->
    </div>
</section>
<!-- Footer -->
<footer class="text-center">

    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; HealthWise Indian 2016
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>


</body>
</html>