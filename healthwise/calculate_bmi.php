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

    <!-- Division for Basic Diet DropDown -->
    <style type="text/css">
        .basic {
            padding: 20px;
            display: none;
        }

        .form-basic .form-row > label span {
            display: inline-block;
            box-sizing: border-box;
            color: #5F5F5F;
            width: 131px;
            /* text-align: right; */
            vertical-align: middle;
            padding: 12px 25px;
        }
	

    </style>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <!-- JQuery code for displaying dropdown based on user choice of diet -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('input[type="radio"]').click(function () {
                if ($(this).attr("id") == "1") {
                    $(".basic").show();
                }
                if ($(this).attr("id") == "2") {
                    $(".basic").show();
                }
            });
        });
    </script>

    <script type="text/javascript">
        function validate_activity() {
            if (document.activty_form.exercise.value == 0) {
                alert("Please choose your Activity Level in Exercise");
                exercise.focus();
                return false;
            }
            if (document.activty_form.occupation.value == 0) {
                alert("Please choose your Activity Level in Occupation");
                occupation.focus();
                return false;
            }
            return true;
        }
    </script>
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
          
                <?php
                /**    Error reporting        **/
                error_reporting(E_ALL);

                /**    Include path        **/
                set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/../Classes/');
                ini_set('memory_limit', '1024M');
                //set exectuion time
                ini_set('max_execution_time', '600');
                ?>
               

                <?php
                /**    If the user has submitted the form, then we need to execute a calculation **/

                /**    So we include PHPExcel to perform the calculations    **/
                include 'PHPExcel/IOFactory.php';

                if (isset($_GET['submit'])) {
//Taking inputs from url
                    $adult = $_GET['ad'];
                    $gender = $_GET['gen'];

                    $current_date = date("Y-m-d");//current date
                    $current_date = date_create($current_date);
                    $age = $_GET['dob'];//dob of user

                    $date2 = date_create($age);
                    $diff_age = date_diff($date2, $current_date);
                    $diff = $current_date->diff($date2);

					//echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";
                    $age = $diff->y;
                    $mnths = $diff->m;
                    //echo "Age == ".$age;
                    $ft = $_GET['ft'];
                    $inc = $_GET['inc'];
                    $wt = $_GET['wt'];


                    $wt_loss = $_GET['wt_loss'];
                    $exer = $_GET['exercise'];
                    $occ = $_GET['occupation'];
                    $veg = $_GET['veg'];

                    $_SESSION['activity_exer'] = $exer;
                    $_SESSION['activity_occ'] = $occ;
                    $_SESSION['veg'] = $veg;

                    echo "<table class='table table-striped' align='center' width='50%'>";
					echo "<h3 align='center'>Your Inputs</h3>";
                    echo "<tr>";
                    echo "<td>";
                    echo '<b>Category </b>';
                    echo "</td>";
                    echo "<td>";
                    echo $adult;
                    echo "</td></tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo '<b>Gender </b>';
                    echo "</td>";
                    echo "<td>";
                    echo $gender;
                    echo "</td></tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo '<b>Age </b>';
                    echo "</td>";
                    echo "<td>";
                    echo $age . " Years " . $mnths . " Months";
                    echo "</td></tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo '<b>Height </b>';
                    echo "</td>";
                    echo "<td>";
                    echo $ft . "." . $inc . "\"";
                    echo "</td></tr>";


                    //Adding to session variables
                    $_SESSION['adult'] = $adult;
                    $_SESSION['gender'] = $gender;
                    //$_SESSION['yrs']=$yrs;
                    $_SESSION['mnths'] = $mnths;
                    $_SESSION['age'] = $age;
                    $_SESSION['ft'] = $ft;
                    $_SESSION['inc'] = $inc;
                    $_SESSION['wt_loss'] = $wt_loss;


                    //set default values for pregnant and breast feeding women as NO
                    $_SESSION['pregnant'] = $pregnant = 'no';
                    $_SESSION['breast_feed'] = $breast_feed = 'no';
                    /**    Set Sex, age, Height values to excel    **/

                    //If Pregnant is YES set following cell values
                    if ((isset($_GET['preg_qn'])) && ($_GET['preg_qn'] == 'yes')) {
                        $pregnant = $_GET['preg_qn'];
                        $_SESSION['pregnant'] = $pregnant;

                        //echo "<center><strong>This is for Pregnant Women </strong> </center";

                        $objPHPExcel = PHPExcel_IOFactory::load('./diet_plan-December-pregnant.xlsx');//load seperate excel for pregnant

                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C7', $age);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C9', $ft);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C10', $inc);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C11', $wt);

                        $date1 = date("Y-m-d");//current date
                        $date1 = date_create($date1);
                        $date2 = $_GET['date'];//last mensrual period
                        $date2 = date_create($date2);
                        $diff = date_diff($date2, $date1);
                        $diff = $diff->format("%R%a");
                        $_SESSION['diff_date'] = $diff;
                        $days = round($diff / 7);


                        echo "<tr>";
                        echo "<td>";
                        echo '<b>Pregnancy </b>';
                        echo "</td>";
                        echo "<td>";
                        echo $pregnant;
                        echo "</td></tr>";
                        echo "<tr>";
                        echo "<td>";
                        echo '<b>Trimester </b>';
                        echo "</td>";
                        echo "<td>";


                        if ($days < 12) {
                            $objPHPExcel->getSheetByName("I&O")->setCellValue('C16', 'First');
                            $_SESSION['trimester'] = "First";
                            echo "First";
                        } else if (($days > 12) && ($days < 28)) {
                            $objPHPExcel->getSheetByName("I&O")->setCellValue('C16', 'Second');
                            $_SESSION['trimester'] = "Second";
                            echo "Second";
                        } else {
                            $objPHPExcel->getSheetByName("I&O")->setCellValue('C16', 'Third');
                            $_SESSION['trimester'] = "Third";
                            echo "Third";
                        }
                        echo "</td></tr>";

                        $prePreg_wt = $_GET['pre_preg'];
                        $_SESSION['prePreg_wt'] = $prePreg_wt;
                        //$wt = $prePreg_wt;

                        echo "<tr>";
                        echo "<td>";
                        echo '<b>Pre Pregnancy Weight </b>';
                        echo "</td>";
                        echo "<td>";
                        echo $prePreg_wt . " Kgs";
                        echo "</td></tr>";

                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C15', $prePreg_wt);

                    } 
                    else if( (isset($_GET['breast_qn'])) && ($_GET['breast_qn'] == 'yesb') ){

					//echo "<center><strong>This is for Breast Feeding Women </strong><center>".$_GET['breast_qn'];
					$breast_feed = "yes";
					$_SESSION['breast_feed'] = $breast_feed;

					$objPHPExcel = PHPExcel_IOFactory::load('./diet_plan-December-breastfeed.xlsx');

					$objPHPExcel->getSheetByName("I&O")->setCellValue('C7', $age);
			      	$objPHPExcel->getSheetByName("I&O")->setCellValue('C9', $ft);
			        $objPHPExcel->getSheetByName("I&O")->setCellValue('C10', $inc);
			        $objPHPExcel->getSheetByName("I&O")->setCellValue('C11', $wt);
			        if ($wt_loss=='wt_yes') {
			        	$objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'yes');
			        }
			        else{
			        	$objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'no');
			        }

			        $child_age = $_GET['child_age'];
					$_SESSION['child_age'] = $child_age;
					$objPHPExcel->getSheetByName("I&O")->setCellValue('C18', $child_age);	

					$prePreg_wt = $_GET['pre_preg1'];
					$_SESSION['prePreg_wt'] = $prePreg_wt;
					
					echo "<tr>";echo "<td>";
					echo '<b>Pre Pregnancy Weight </b>';
					echo "</td>";echo "<td>";
					echo $prePreg_wt." Kgs";
					echo "</td></tr>";
					
					
					$objPHPExcel->getSheetByName("I&O")->setCellValue('E11', $prePreg_wt);

					echo "<tr>";echo "<td>";
					echo '<b>Breast Feeding </b>';
					echo "</td>";echo "<td>";
					echo $breast_feed;
					echo "</td></tr>";	
					echo "<tr>";echo "<td>";
					echo '<b>Child Age </b>';
					echo "</td>";echo "<td>";
					echo $child_age;
					echo "</td></tr>";
					
				}
				else {

                        //echo "<center><strong>This is for Normal Men and Women </strong></center>";
                        $wt = $_GET['wt'];

                        $objPHPExcel = PHPExcel_IOFactory::load('./diet_plan-December.xlsx');

                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C6', $gender);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C7', $age);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C9', $ft);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C10', $inc);
                        $objPHPExcel->getSheetByName("I&O")->setCellValue('C11', $wt);
                        if ($wt_loss == 'wt_yes') {
                            $objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'yes');
                        } else {
                            $objPHPExcel->getSheetByName("I&O")->setCellValue('C33', 'no');
                        }
                    }
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C3', 'Adult');
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D23', $exer);
                    $objPHPExcel->getSheetByName("I&O")->setCellValue('D24', $occ);

                    $objPHPExcel->getSheetByName("I&O")->setCellValue('C49', $veg);


                    $_SESSION['wt'] = $wt;
                }
                echo "<tr>";
                echo "<td>";
                echo '<b>Weight </b>';
                echo "</td>";
                echo "<td>";
                echo $wt . " Kgs";
                echo "</td></tr>";
                echo "</table>";
                //echo $objPHPExcel->getSheetByName("I&O")->getCell('C25')->getCalculatedValue()	;//Retrieves particular cell
                //echo $objPHPExcel->getSheetByName("I&O")->getCell('C27')->getCalculatedValue();

                /**    Calculate and Display the results            **/
                echo "<h3 align='center'>Your BMI and weight category</h3>";
                echo "<table class='table table-striped' align='center' width='50%'>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Your healthy weight range (in Kgs):</b>';
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("Adults")->getCell('B21')->getCalculatedValue();
                echo "</td></tr>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Your BMI is:</b>';
                echo "</td>";
                echo "<td>";
                $bmi = $objPHPExcel->getSheetByName("Adults")->getCell('B15')->getCalculatedValue();
                echo sprintf("%0.2f", $bmi);
                echo "</td></tr>";
                echo "<tr>";
                echo "<td>";
                //Choosing wight Cateogry based on BMI Value
                echo '<b>Your Weight Category is:</b>';
                echo "</td>";
                echo "<td>";
                if ($bmi < 18) {
                    echo "Under Weight";
                }
                if ($bmi >= 18 && $bmi <= 22.99) {
                    echo "Normal";
                }
                if ($bmi >= 23 && $bmi <= 24.9) {
                    echo "Over Weight";
                }
                if ($bmi >= 25) {
                    echo "Obesity";
                }
                echo "</td></tr>";

                if ($wt_loss == 'wt_yes') {
                    echo "<tr>";
                    echo "<td>";
                    echo '<b>Your weight loss target (over 3-6 months)</b>';
                    echo "</td>";
                    echo "<td>";
                    echo $objPHPExcel->getSheetByName("I&O")->getCell('F33')->getCalculatedValue() . " Kgs";
                    echo "</td></tr>";
                }

                echo "<tr>";
		echo "<td>";
		echo '<b>Your Activity Level is:</b>';
		echo "</td>";
		echo "<td>";
		echo $objPHPExcel->getSheetByName("I&O")->getCell('C25')->getCalculatedValue();
		echo "</td></tr>";
		echo "<tr><td>";
		echo "Your RDCA (Recommended Daily Calorie Allowance)";
		echo "</td>";
		echo "<td>";
		echo $objPHPExcel->getSheetByName("I&O")->getCell('C27')->getCalculatedValue();
		echo "</td>";
		echo "</tr>";
		echo "<tr><td>";
		echo "Your Recommended Daily Calorie Allowance rounded to nearest 200 cal multiple";
		echo "</td>";
		echo "<td>";
		echo $objPHPExcel->getSheetByName("I&O")->getCell('C28')->getCalculatedValue();
		echo "</td></tr>";
		echo "</table>";

                

                ?>
				<div class="form-title-row"><h3 align="center">YOUR BASIC DIET PLAN IS:</h3></div>
                <div class="table-responsive">  
                <table width="100%"  class="table table-striped">

                    <thead>
                    <tr class="success">
                        <td><strong>Food groups</strong></td>
                        <td align="center"><strong>1 Servings equals</strong></td>
                        <td colspan="3" align="center"><strong>Number of Servings</strong></td>
                        <td align="center"><strong>Important considerations</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="18%">&nbsp;</td>
                        <td width="17%">&nbsp;</td>
                        <td width="12%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Basic Indian Diet</a>
                        </td>
                        <td width="9%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Optimized Indian
                                diet</a>
                        </td>
                        <td width="15%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Ideal Diet For People
                                With
                                Health Risks</a></td>
                        <td width="29%" align="center"><a href="https://foodwiseindian.co.in/category/foodwise-tips/" target="_blank"> ( to
                                know
                                more , go to 'Take home tips') </a></td>
                    </tr>
                    <tr>
                        <td><strong>Grains/cereals</strong></td>
                        <td>1 roti/large bread, 1/2 cup cooked rice/cereals, 1 cup cornflakes</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C55')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D55')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E55')->getCalculatedValue(); ?></td>
                        <td>Half of all grains/grain products should be whole grain or products,</td>
                    </tr>
                    <tr>
                        <td><strong>Non-milk proteins</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Dals/meats/day</td>
                        <td>1/2 cup cooked</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C58')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D58')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E58')->getCalculatedValue(); ?></td>
                        <td>Lean meats should be consumed and organ meats such as liver etc. should be avoided</td>
                    </tr>
                    <tr>
                        <td>Maxm. Eggs/week</td>
                        <td> 1 egg</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C59')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D59')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E59')->getCalculatedValue(); ?></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Minm. Fish/seafood/week</td>
                        <td>2 oz= 2 pieces of boneless meat, each of match box size</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C60')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D60')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E60')->getCalculatedValue(); ?></td>
                        <td>Fishes are major source of omega-3 , specially long cain omega-3 fatty acids (DHA/EPA) and
                            have
                            very little SFA, so they must be consumed liberally
                        </td>
                    </tr>
                    <?php if ($veg == 3) { ?>
                        <tr>
                            <td>Soya products/week for non-vegetarians</td>
                            <td>1/2 cup cooked</td>
                            <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C61')->getCalculatedValue(); ?></td>
                            <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D61')->getCalculatedValue(); ?></td>
                            <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E61')->getCalculatedValue(); ?></td>
                            <td>&nbsp;</td>
                        </tr>
                    <?php }
                    if (($veg == 1) || ($veg == 2)) { ?>
                        <tr>
                            <td>Min. Soya products/week</td>
                            <td>1/2 cup cooked</td>
                            <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C62')->getCalculatedValue(); ?></td>
                            <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D62')->getCalculatedValue(); ?></td>
                            <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E62')->getCalculatedValue(); ?></td>
                            <td>Vegetarians can reduce their carbohydrate burden and add more proteins to their diet by
                                substituting pulses with soy products in some meals
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td><strong>Nuts/seeds/day</strong></td>
                        <td>1 Oz : 22 almonds/30 peanuts/16-20 kajus/10-12 macadonia nuts/28 pecan nuts/14 walnut
                            halfs
                        </td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C63')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D63')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E63')->getCalculatedValue(); ?></td>
                        <td>Consume a mix of nuts including almonds and walnuts and consume in moderate quantities, 1 oz
                            serving of nuts give nearly 170 calories
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Milk/curd</strong></td>
                        <td>1 cup=200 ml</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C64')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D64')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E64')->getCalculatedValue(); ?></td>
                        <td>Low fat/ reduced fat milk should be consumed, otherwise milk will be a major contributor to
                            bad
                            fats (SFA and cholesterol)
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Vegetables</strong></td>
                        <td>1/2 cup cooked, 1 cup salad</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C65')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D65')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E65')->getCalculatedValue(); ?></td>
                        <td>Starchy, orange-red and other types of vegetables hsould each be nearly one third of total
                            vegetables consumed and GLVs (Green Leafy Vegetables) should be at least 10%
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Fruits</strong></td>
                        <td>1 medium fruit/00 gms/ half cup cut fruit</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C66')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D66')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E66')->getCalculatedValue(); ?></td>
                        <td>Eat variety of fruits including citrus fruits, orange/red fruits and occassionally fruits
                            aving
                            high calorie ensity also
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Oils</strong></td>
                        <td>1 teaspoon</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C67')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D67')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E67')->getCalculatedValue(); ?></td>
                        <td>Use a combination of oils for cooking, as advised by NIN, India, to get enough omega 3 fats
                            and
                            balance SFAs, MUFAs and PUFAs in diet
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <form name="diet_form" class="form-basic" action="rdca_adult.php" method="GET" style="box-shadow:none; ">
                    <center>
                        <input type="submit" name="customized " style="width: 320px;"
                               value="Customised diet plan & nutrition dashboard "/>
                    </center>
                </form>
                <center style="padding-bottom:50px;"><script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if ('https:' === document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onClick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-print-icon.gif" width="16" height="15" alt="Print Friendly Version of this page" />Print <img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-pdf-icon.gif" width="12" height="12" alt="Get a PDF version of this webpage" />PDF</a></center>

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

