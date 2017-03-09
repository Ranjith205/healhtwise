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
    <title>Foodwise Indian</title>

    <!-- Division for Basic Diet DropDown -->


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
            <div class="col-lg-8 col-lg-offset-2">


                <center><h3>Foodwise Indian</h3></center>
                <?php
                //session_start();
                /** Error reporting     **/
                error_reporting(E_ALL);

                /** Include path        **/
                set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/../Classes/');
                ini_set('memory_limit', '1024M');
                //set exectuion time
                ini_set('max_execution_time', '600');
                include 'PHPExcel/IOFactory.php';

                //get session variables and set to excel

                $age = $_SESSION['age'];
                $mnths = $_SESSION['mnths'];
                $ft = $_SESSION['ft'];
                $inc = $_SESSION['inc'];
                $wt = $_SESSION['wt'];
                $gender = $_SESSION['gender'];


                /*echo "<table border='1' align='center' width='50%'>";
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
                echo "</td></tr>";
                echo "</table>";*/

                /** Load the quadratic equation solver worksheet into memory **/
                $objPHPExcel = PHPExcel_IOFactory::load('./diet_plan-December.xlsx');

                $objPHPExcel->getSheetByName("I&O")->setCellValue('C3', 'Child');
                //get session variables
                $ter_value = $_SESSION['ter_value'];
                //echo "ter_value===".$ter_value;
                //set the values to Excel file
                //$objPHPExcel->getSheetByName("I&O")->setCellValue('C27', $ter_value);

                //  echo ($objPHPExcel->getSheetByName("I&O")->getCell('C25')->getCalculatedValue())	;//Retrieves particular cell
                //	echo ($objPHPExcel->getSheetByName("I&O")->getCell('C27')->getCalculatedValue())	;
                /** If the user has submitted the form, then we need to execute a calculation **/
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


                $objPHPExcel->getSheetByName("I&O")->setCellValue('C49', $veg);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('C71', $veg);
                //How many major meals do you take in a day?
                if ($meal == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D77', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D78', '');
                }
                if ($meal == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D78', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D77', '');
                }
                //What do you eat in breakfast?
                if ($bf == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', '');
                }
                if ($bf == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', '');
                }
                if ($bf == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', '');
                }
                if ($bf == 4) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', '');
                }
                if ($bf == 5) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', '');
                }
                if ($bf == 6) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', '');
                }
                if ($bf == 7) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D82', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D83', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D84', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D85', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D86', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D87', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D88', 'yes');
                }
                //What grains do you eat in lunch and dinner?
                if ($grains == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D90', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D91', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D92', '');
                }
                if ($grains == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D90', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D91', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D92', '');
                }
                if ($grains == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D90', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D91', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D92', 'yes');
                }
                //What type of rice, do you eat?
                if ($rice == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                }
                if ($rice == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                }
                if ($rice == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                }
                if ($rice == 4) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', 'yes');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', '');
                }
                if ($rice == 5) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D96', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D97', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D98', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D99', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D100', 'yes');
                }
                //for non veg how many meals
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D103', $nveg);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D111', $chicken);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D112', $fish);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D113', $beef);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D114', $mutton);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D115', $lamb);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('D116', $pork);
                //What type of milk?
                if ($milk == 1) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D121', '100%');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D122', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D123', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D124', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D125', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', '');
                }
                if ($milk == 2) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D121', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D122', '100%');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D123', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D124', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D125', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', '');
                }
                if ($milk == 3) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D121', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D122', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D123', '100%');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D124', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D125', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', '');
                }
                if ($milk == 4) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D121', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D122', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D123', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D124', '100%');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D125', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', '');
                }
                if ($milk == 5) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D121', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D122', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D123', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D124', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D125', '100%');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', '');
                }
                if ($milk == 6) {
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D121', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D122', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D123', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D124', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D125', '');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D126', '100%');
                }

                /** If the user has submitted the form, then we need to execute a calculation **/
                if (isset($_GET['submit'])) {

                    //Cereals
                    if ($_GET['cereals'] == 1) {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C166', 'yes');
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C167', '');
                    }
                    if ($_GET['cereals'] == 2) {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C166', '');
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C167', 'yes');
                    }
                    //Milk
                    if ($_GET['milk'] == 1) {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C170', 'yes');
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C170', '');
                    }
                    if ($_GET['milk'] == 2) {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C170', '');
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C170', 'yes');
                    }
                    //Vegetables
                    if ($_GET['vegetables'] == 1) {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C173', 'yes');
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C173', '');
                    }
                    if ($_GET['vegetables'] == 2) {
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C173', '');
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C173', 'yes');
                    }
                }
                echo '<center><h2>Meal Plan For the Day</h2></center>';
                ?>

                <!--////////////////////////////////////////////////////////////////////////////////////////-->
                <?php
                if ($meal == 1) { //For Breakfast,lunch and dinner

                    ?>
<div class="table-responsive"> 
                    <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2" class="table">
                        <tr valign="top" class="tab-hed2">
                            <td align="center">MEAL</td>
                            <td align="center">Standard Servings Size</td>
                            <td align="center" colspan="3">Number of Servings</td>
                        </tr>
                        <tr valign="top" class="tab-hed">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="12%"><a href="http://www.foodwiseindian.co.in" target="_blank">Basic Indian
                                    Diet</a>
                            </td>
                            <td width="9%"><a href="http://www.foodwiseindian.co.in" target="_blank">Optimized Indian
                                    diet</a></td>
                            <td width="15%"><a href="http://www.foodwiseindian.co.in" target="_blank">Ideal Diet For
                                    People
                                    With Health Risks</a></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong>Breakfast</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Cereal/ will be picked up</td>
                            <td>will be picked up</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D182')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E182')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F182')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/curd</td>
                            <td> 1 cup= 200 ml</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D183')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E183')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F183')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Fruits</td>
                            <td>1 medium size fruit or 1/2 cup cut fruit OR 1/2 cup fruit juice</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D184')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E184')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F184')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>vegetables</td>
                            <td>1/2 cup cooked, 1 cup salad</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D185')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E185')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F185')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Eggs/week</td>
                            <td>1 egg</td>
                            <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D186')->getCalculatedValue(); ?></td>
                            <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E186')->getCalculatedValue(); ?></td>
                            <td><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('F186')->getCalculatedValue(); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong>Lunch</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Rice</td>
                            <td>1/2 cup cooked</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D188')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E188')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F188')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Roti</td>
                            <td>1 roti</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D189')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E189')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F189')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>daal/meat/fish</td>
                            <td>1/2 cup cooked dal OR 2 pieces of boneless meat each of matchbox size</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D190')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E190')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F190')->getCalculatedValue()); ?></td>
                        </tr>

                        <tr valign="top" class="bg-white">
                            <td>Vegetables</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D191')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E191')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F191')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/curd</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D192')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E192')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F192')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong>Evening snack</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Nuts</td>
                            <td>1 Oz : 22 almonds/30 peanuts/16-20 kajus/10-12 macadonia nuts/28 pecan nuts/14 walnut
                                halfs
                            </td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D194')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E194')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F194')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Fruits</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D195')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E195')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F195')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/Curd</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D196')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E196')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F196')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong>Dinner</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Rice</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D198')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E198')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F198')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Roti</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D199')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E199')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F199')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>daal/meat/fish</td>
                            <td>(Number of servings per week of individual protiens Ex: Fish, Tofu etc as per the
                                customized
                                diet plan )
                            </td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D200')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E200')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F200')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Vegetables</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D201')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E201')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F201')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/Curd</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('D202')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('E202')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('F202')->getCalculatedValue()); ?></td>
                        </tr>

                    </table></div>
                    <?php
                } //End of Breakfast,lunch and dinner
                ?>

                <?php
                if ($meal == 2) { //Forlunch and dinner only

                    ?>
<div class="table-responsive"> 
                    <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2" class="table">
                        <tr valign="top" class="tab-hed2">
                            <td align="center">MEAL</td>
                            <td align="center">Standard Servings Size</td>
                            <td align="center" colspan="3">Number of Servings</td>
                        </tr>
                        <tr valign="top" class="tab-hed">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="12%"><a href="http://www.foodwiseindian.co.in" target="_blank">Basic Indian
                                    Diet</a>
                            </td>
                            <td width="9%"><a href="http://www.foodwiseindian.co.in" target="_blank">Optimized Indian
                                    diet</a></td>
                            <td width="15%"><a href="http://www.foodwiseindian.co.in" target="_blank">Ideal Diet For
                                    People
                                    With Health Risks</a></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong> Morning snack</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr valign="top" class="bg-white">
                            <td>Milk/curd</td>
                            <td> 1 cup= 200 ml</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G183')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H183')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I183')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Fruits</td>
                            <td>1 medium size fruit or 1/2 cup cut fruit OR 1/2 cup fruit juice</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G184')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H184')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I184')->getCalculatedValue()); ?></td>
                        </tr>

                        <tr valign="top" class="bg-white">
                            <td><strong>Lunch</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Rice</td>
                            <td>1/2 cup cooked</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G188')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H188')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I188')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Roti</td>
                            <td>1 roti</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G189')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H189')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I189')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>daal/meat/fish</td>
                            <td>1/2 cup cooked dal OR 2 pieces of boneless meat each of matchbox size</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G190')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H190')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I190')->getCalculatedValue()); ?></td>
                        </tr>

                        <tr valign="top" class="bg-white">
                            <td>Vegetables</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G191')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H191')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I191')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/curd</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G192')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H192')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I192')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong>Evening snack</strong></td>
                            <td>1 Oz : 22 almonds/30 peanuts/16-20 kajus/10-12 macadonia nuts/28 pecan nuts/14 walnut
                                halfs
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Nuts</td>
                            <td>1 Oz : 22 almonds/30 peanuts/16-20 kajus/10-12 macadonia nuts/28 pecan nuts/14 walnut
                                halfs
                            </td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G194')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H194')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I194')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Fruits</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G195')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H195')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I195')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/Curd</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G196')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H196')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I196')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td><strong>Dinner</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Rice</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G198')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H198')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I198')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Roti</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G199')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H199')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I199')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>daal/meat/fish</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G200')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H200')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I200')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Vegetables</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G201')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H201')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I201')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top" class="bg-white">
                            <td>Milk/Curd</td>
                            <td>&nbsp;</td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('G202')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('H202')->getCalculatedValue()); ?></td>
                            <td><?php echo sprintf("%0.2f", $objPHPExcel->getSheetByName("I&O")->getCell('I202')->getCalculatedValue()); ?></td>
                        </tr>

                    </table></div>
                    <?php
                } //End of lunch and dinner only
                ?>
                <!--////////////////////////////////////////////////////////////////////////////////////////-->
                <br/>

                <form action="nutrition_child.php" class="form-basic" method="get">
                    <center>
                        <button type="submit">Get Nutrition Dash Board</button>
                        <br>
                    </center>
                </form>

            </div>
        </div>
    </div>  <!-- End #content -->
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