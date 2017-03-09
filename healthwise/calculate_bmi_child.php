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
    <style type="text/css">

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
            <div class="col-lg-10 col-lg-offset-1">
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

                    $gender = $_GET['gen'];

                    $current_date = date("Y-m-d");//current date
                    $current_date = date_create($current_date);
                    $age = $_GET['dob'];//dob of user

                    $date2 = date_create($age);
                    $diff = $current_date->diff($date2);

					//echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";
                    $age = $diff->y;
                    $mnths = $diff->m;
                    $ft = $_GET['ft'];
                    $inc = $_GET['inc'];
                    $wt = $_GET['wt'];
                    //Adding to session variables
                    $exer = $_GET['exercise'];
                    $wt_loss = $_GET['wt_loss'];
                    $veg = $_GET['veg'];


                }


                $_SESSION['gender'] = $gender;
                //$_SESSION['yrs']=$yrs;
                $_SESSION['mnths'] = $mnths;
                $_SESSION['age'] = $age;
                $_SESSION['ft'] = $ft;
                $_SESSION['inc'] = $inc;
                $_SESSION['wt_loss'] = $wt_loss;
                $_SESSION['wt'] = $wt;
                $_SESSION['activity_exer'] = $exer;

                $_SESSION['veg'] = $veg;

                echo "<table class='table table-striped' align='center' width='50%'>";
                echo "<h4 align='center'><br>Your Inputs</h4>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Category </b>';
                echo "</td>";
                echo "<td>";
                echo "Child";
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


                echo "<tr>";
                echo "<td>";
                echo '<b>Weight </b>';
                echo "</td>";
                echo "<td>";
                echo $wt . " Kgs";
                echo "</td></tr>";
                echo "</table>";
                $objPHPExcel = PHPExcel_IOFactory::load('./diet_plan-December.xlsx');

                $objPHPExcel->getSheetByName("I&O")->setCellValue('C3', 'Child');
                $objPHPExcel->getSheetByName("child")->setCellValue('B3', $age);
                $objPHPExcel->getSheetByName("child")->setCellValue('C3', $mnths);
                $objPHPExcel->getSheetByName("child")->setCellValue('B7', $ft);
                $objPHPExcel->getSheetByName("child")->setCellValue('C7', $inc);
                $objPHPExcel->getSheetByName("child")->setCellValue('B8', $wt);
                $objPHPExcel->getSheetByName("child")->setCellValue('B5', $gender);

                $ter_value = $objPHPExcel->getSheetByName("child")->getCell('B19')->getCalculatedValue();
                $_SESSION['ter_value'] = $ter_value;
                //echo "ter_value===".$ter_value;
                //set the values to Excel file
                //$objPHPExcel->getSheetByName("I&O")->setCellValue('C27', $ter_value);
                $objPHPExcel->getSheetByName("I&O")->setCellValue('C49', $veg);

                //$age = $yrs*12+$mnths;
                //$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                //$objWriter->save("user.xlsx");
                /**    Calculate and Display the results            **/
                //echo "</table>";
                echo "<h4><center>Your Child BMI and weight category</center></h4>";
                echo "<table class='table table-striped' align='center' width='50%'>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Your Child BMI is:</b>';
                echo "</td>";
                echo "<td>";
                //$bmi = sprintf("%0.02f",$objPHPExcel->getSheetByName("child")->getCell('B9')->getCalculatedValue());
                echo sprintf("%0.02f", $objPHPExcel->getSheetByName("child")->getCell('B9')->getCalculatedValue());
                echo "</td></tr>";
                echo "<tr>";
                echo "<td>";
                echo '<b>Your Child healthy weight Category is :</b>';
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("child")->getCell('B11')->getCalculatedValue();
                echo "</td></tr>";
                echo "<tr>";
                echo "<td>";
                //Choosing wight Cateogry based on BMI Value
                echo '<b>Your Child Height Category is:</b>';
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("child")->getCell('B12')->getCalculatedValue();
                echo "</td></tr>";
                echo "<tr>";
            echo "<td>";    
            echo '<b>Your Child Activity Level is:</b>';
            echo "</td>";
            echo "<td>";
                if ($exer == 1) {
                    $objPHPExcel->getSheetByName("child")->setCellValue('B18', 'Sedentary');
                    $_SESSION['activity'] = "Sedentary";
                    echo "<b>Sedentary</b>";
                } else if ($exer == 2) {
                    $objPHPExcel->getSheetByName("child")->setCellValue('B18', 'Moderate');
                    $_SESSION['activity'] = "Moderate";
                    echo "<b>Moderate</b>";
                } else if ($exer == 3) {
                    $objPHPExcel->getSheetByName("child")->setCellValue('B18', 'Vigorous');
                    $_SESSION['activity'] = "Vigorous";
                    echo "<b>Vigorous</b>";
                }
                //Retrieving and setting TER value to session variable
                $ter_value = $objPHPExcel->getSheetByName("child")->getCell('B19')->getCalculatedValue();
                $_SESSION['ter_value'] = $ter_value;

                echo "</td>";
                echo "</tr>";
                
                echo "<tr><td>";
                echo "<b>Your Child RDCA (Recommended Daily Calorie Allowance)</b>";
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("child")->getCell('B19')->getCalculatedValue();
                echo "</td>";
                echo "</tr>";
                echo "<tr><td>";
                echo "<b>Your Child Recommended Daily Calorie Allowance rounded to nearest 200 cal multiple</b>";
                echo "</td>";
                echo "<td>";
                echo $objPHPExcel->getSheetByName("child")->getCell('B20')->getCalculatedValue();
                echo "</td></tr>";
                echo "</table>";

                echo '<center><hr /><b><h4>Your Basic Diet Plan is:</h4></b></center>';
                ?>
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
                                diet</a></td>
                        <td width="15%"><a href="https://foodwiseindian.co.in/foodwise-diets/" target="_blank">Ideal Diet For People
                                With Health Risks</a></td>
                        <td width="29%" align="center"><a href="http://www.foodwiseindian.co.in" target="_blank"> ( to
                                know more , go to 'Take home tips') </a></td>
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
                            have very little SFA, so they must be consumed liberally
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
                            bad fats (SFA and cholesterol)
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
                            aving high calorie ensity also
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Oils</strong></td>
                        <td>1 teaspoon</td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('C67')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('D67')->getCalculatedValue(); ?></td>
                        <td align="center"><?php echo $objPHPExcel->getSheetByName("I&O")->getCell('E67')->getCalculatedValue(); ?></td>
                        <td>Use a combination of oils for cooking, as advised by NIN, India, to get enough omega 3 fats
                            and balance SFAs, MUFAs and PUFAs in diet
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
               <form name="diet_form" class="form-basic" action="rdca_child.php" method="GET" style="box-shadow:none; ">
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