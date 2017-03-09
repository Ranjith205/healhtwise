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

<!-- Contact Section -->
<section id="contact">
    <div class="container" style="background-color: #ffffff;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

                <center><h3>Foodwise Indian</h3></center>
                <?php

                $age = $_SESSION['age'];
                $mnths = $_SESSION['mnths'];
                $ft = $_SESSION['ft'];
                $inc = $_SESSION['inc'];
                $wt = $_SESSION['wt'];
                $gender = $_SESSION['gender'];
                $veg = $_SESSION['veg'];

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
                /** Error reporting     **/
                error_reporting(E_ALL);

                /** Include path        **/
                set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/../Classes/');
                ini_set('memory_limit', '1024M');
                //set exectuion time
                ini_set('max_execution_time', '600');
                include 'PHPExcel/IOFactory.php';

                /** Load the quadratic equation solver worksheet into memory **/
                $objPHPExcel = PHPExcel_IOFactory::load('./diet_plan-December.xlsx');
                $objPHPExcel->getSheetByName("I&O")->setCellValue('C3', 'Child');
                //get session variables
                $ter_value = $_SESSION['ter_value'];
                //echo "ter_value===".$ter_value;
                //set the values to Excel file
                //$objPHPExcel->getSheetByName("I&O")->setCellValue('C27', $ter_value);

                /** If the user has submitted the form, then we need to execute a calculation **/
                if (isset($_GET['submit'])) {
                    $meal = $_SESSION['meal'] = $_GET['meal'];
                    $bf = $_SESSION['bf'] = $_GET['bf'];
                    $grains = $_SESSION['grains'] = $_GET['grains'];
                    $rice = $_SESSION['rice'] = $_GET['rice'];
                    if($_SESSION['veg']==3){
                        $nveg = $_SESSION['nveg'] = $_GET['nveg'];
                        $chicken = $_SESSION['chicken'] = $_GET['chicken'];
                        $fish = $_SESSION['fish'] = $_GET['fish'];
                        $beef = $_SESSION['beef'] = $_GET['beef'];
                        $mutton = $_SESSION['mutton'] = $_GET['mutton'];
                        $lamb = $_SESSION['lamb'] = $_GET['lamb'];
                        $pork = $_SESSION['pork'] = $_GET['pork'];
                    }
                    else{
                        $nveg = $_SESSION['nveg'] = 0;
                        $chicken = $_SESSION['chicken'] = 0;
                        $fish = $_SESSION['fish'] = 0;
                        $beef = $_SESSION['beef'] = 0;
                        $mutton = $_SESSION['mutton'] = 0;
                        $lamb = $_SESSION['lamb'] = 0;
                        $pork = $_SESSION['pork'] = 0;
                    }
                    $milk = $_SESSION['milk'] = $_GET['milk'];
                    $oil_combo = $_SESSION['oil_combo'] = $_GET['oil_combo'];
                    //Declaring oil types

                    $oil1a = $_SESSION['oil1a'] = 0;
                    $oil1b = $_SESSION['oil1b'] = 0;
                    $oil2a = $_SESSION['oil2a'] = 0;
                    $oil2b = $_SESSION['oil2b'] = 0;
                    $oil2c = $_SESSION['oil2c'] = 0;
                    $oil4a = $_SESSION['oil4a'] = 0;
                    $oil4b = $_SESSION['oil4b'] = 0;
                    $oil5a = $_SESSION['oil5a'] = 0;
                    $oil5b = $_SESSION['oil5b'] = 0;


                    //Geeting oil values from browswe
                    if ($oil_combo == 'combo1') {
                        $oil1a = $_SESSION['oil1a'] = $_GET['oil1a'];
                        $oil1b = $_SESSION['oil1b'] = $_GET['oil1b'];
                        //echo "Oil Combination 1 types 1a ".$oil1a." type 1b ".$oil1b;
                    }
                    if ($oil_combo == 'combo2') {
                        $oil2a = $_SESSION['oil2a'] = $_GET['oil2a'];
                        $oil2b = $_SESSION['oil2b'] = $_GET['oil2b'];
                        $oil2c = $_SESSION['oil2c'] = $_GET['oil2c'];
                        //echo "Oil Combination 2 types 2a ".$oil2a." type 2b ".$oil2b." type 2c ".$oil2c;
                    }
                    if ($oil_combo == 'combo3') {
                        //echo "Oil Combination 3";
                    }
                    if ($oil_combo == 'combo4') {
                        $oil4a = $_SESSION['oil4a'] = $_GET['oil4a'];
                        $oil4b = $_SESSION['oil4b'] = $_GET['oil4b'];
                        //echo "Oil Combination 4 types 4a ".$oil4a." type 4b ".$oil4b;
                    }
                    if ($oil_combo == 'combo5') {
                        $oil5a = $_SESSION['oil5a'] = $_GET['oil5a'];
                        $oil5b = $_SESSION['oil5b'] = $_GET['oil5b'];
                        //echo "Oil Combination 5 types 5a ".$oil5a." type 5b ".$oil5b;
                    }

                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C71', $veg);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C49', $veg);
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
                }
                /*$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save("user1.xlsx");*/
                echo '<center><hr /><h3>Customized diet plan for the day</h3></center>';
                ?>
<div class="table-responsive"> 
                <table width="100%" class="table table-striped" cellspacing="2" cellpadding="2" class="table bg-white">
                    <tr valign="top" class="success">
                        <td width="20%">Food Groups</td>
                        <td align="center">Standard Serving size</td>
                        <td colspan="3" align="center">Number of Servings</td>
                    </tr>
                    <tr valign="top" class="tab-hed">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="14%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Basic Indian Diet</a>
                        </td>
                        <td width="13%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Optimized Indian
                                diet</a>
                        </td>
                        <td width="15%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Ideal Diet For People
                                With
                                Health Risks</a></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Cereals/grains</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr valign="top">
                        <td>Rice</td>
                        <td>1/2 cup cooked</td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D139')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E139')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F139')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td>Roti</td>
                        <td>1 roti</td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D140')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E140')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F140')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><?php
                            if (($bf == 1)) {
                                echo "Brown Bread ";
                            }
                            if (($bf == 2)) {
                                echo "White Bread ";
                            }
                            if (($bf == 3)) {
                                echo "Cornflakes ";
                            }
                            if (($bf == 4)) {
                                echo "Muesli ";
                            }
                            if (($bf == 5)) {
                                echo "Oats ";
                            }
                            if (($bf == 6)) {
                                echo "Roti in Breakfast";
                            }
                            ?></td>
                        <td><?php
                            if (($bf == 1) || ($bf == 2)) {
                                echo " 1 Large Bread  ";
                            }
                            if (($bf == 3) || ($bf == 4)) {
                                echo " 1 Cup  ";
                            }
                            if (($bf == 5)) {
                                echo "1/2 cup cooked ";
                            }
                            if (($bf == 6)) {
                                echo "1 roti or 1 parantha (excluding oil and stuffing) ";
                            }
                            ?>
                        </td>

                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D141')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E141')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F141')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Non-milk proteins</strong></td>
                        <td>2 oz protein equivalent= 1/2 cup cooked dal= 2 cooked pieces of boneless meat/fish each of
                            matchbox size
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr valign="top">
                        <td>Dals/meat/fish/day</td>
                        <td></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D143')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E143')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F143')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Non-milk proteins meals (2 oz servings per meal) per week</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <?php if ($veg == 3) {
                        ?>
                        <tr valign="top">
                            <td>Chicken</td>
                            <td>These number of servings per week are as per your dietary prefernce, but, if you want
                                you
                                can have non veg proteins in all meals, only do not exceed the total
                            </td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D145')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E145')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F145')->getCalculatedValue()); ?></td>
                        </tr>

                        <tr valign="top">
                            <td>Fish</td>
                            <td>These are the minimum number of 2 oz size servings of fish you should eat in a week, but
                                you
                                can and should eat more fish in lace of dal or meat, if you like it !
                            </td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D146')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E146')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F146')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top">
                            <td>Beef</td>
                            <td>&nbsp;</td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D147')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E147')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F147')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top">
                            <td>Mutton</td>
                            <td>&nbsp;</td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D148')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E148')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F148')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top">
                            <td>Lamb</td>
                            <td>&nbsp;</td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D149')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E149')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F149')->getCalculatedValue()); ?></td>
                        </tr>
                        <tr valign="top">
                            <td>Pork</td>
                            <td>&nbsp;</td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D150')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E150')->getCalculatedValue()); ?></td>
                            <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F150')->getCalculatedValue()); ?></td>
                        </tr>
                    <?php } ?>
                    <tr valign="top">
                        <td>Tofu/soya products</td>
                        <td>These are the minimum number of 2 oz size servings of soy products you should eat in a week,
                            but
                            you can and should eat more soy products in lace of dal or meat, if you like
                        </td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D151')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E151')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F151')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td>Eggs</td>
                        <td>&nbsp;</td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D152')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E152')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F152')->getCalculatedValue()); ?></td>
                    </tr>

                    <tr valign="top">
                        <td><strong>Nuts</strong></td>
                        <td>1 Oz =22 almonds/30 peanuts/16-20 kajus/10-12 macadonia nuts/28 pecan nuts/14walnut halfs
                        </td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D154')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E154')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F154')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Milk/curd</strong></td>
                        <td>1 cup=200 ml
                        </td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D155')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E155')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F155')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Vegetables</strong></td>
                        <td>1/2 cup cooked</td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D156')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E156')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F156')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Fruits</strong></td>
                        <td>1 medium sized fruit= 1/2 cup cut=100 gms fruit = 1/2 cup fruit juice
                        </td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D157')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E157')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F157')->getCalculatedValue()); ?></td>
                    </tr>
                    <tr valign="top">
                        <td><strong>Oil(<a href="http://fwitools.foodwiseindian.co.in/oil_calculator" target="_blank">how to measure oil
                                    intake</a>)</strong></td>
                        <td>1 teaspoon
                        </td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('D158')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('E158')->getCalculatedValue()); ?></td>
                        <td align="center"><?php echo sprintf("%0.1f", $objPHPExcel->getSheetByName("I&O")->getCell('F158')->getCalculatedValue()); ?></td>
                    </tr>
                </table></div>

                <br/>
                <hr/>

                <form name="" action="break_meal_menu_child.php" class="form-basic" method="GET" onSubmit="" style="box-shadow:none; height:5px;">
                   <center>
                      <input name="submit" type="submit" style="width: 250px;"
                                   value="BREAK DAY-PLAN INTO MEALS">
                    </center>
                </form>
                <form action="nutrition_child.php" class="form-basic" method="GET" onSubmit=""style="box-shadow:none;">
                    <center><input name="submit" style="width: 250px;" type="submit"
                                   value="NUTRITION DASHBOARD"></center>
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