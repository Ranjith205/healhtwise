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

    <style type="text/css">

        .basic {

            padding: 20px;

            display: none;

        }

        .custom {

            padding: 20px;

            display: none;

        }

        .combo1 {

            display: none;

        }

        .combo2 {

            display: none;

        }

        .combo3 {

            display: none;

        }

        .combo4 {

            display: none;

        }

        .combo5 {

            display: none;

        }

    </style>

    <script type="text/javascript" src="diet_validate.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

    <!-- JQuery code for displaying dropdown based on user choice of diet -->

    <script type="text/javascript">

        $(document).ready(function () {

            $('input[type="radio"]').click(function () {

                if ($(this).attr("id") == "1") {

                    $(".basic").show();

                    $(".custom").hide();

                }

                if ($(this).attr("id") == "2") {

                    $(".custom").show();

                    $(".basic").hide();

                }

            });

        });


        $(document).ready(function () {

            $("select").change(function () {

                $("select option:selected").each(function () {

                    if ($(this).attr("value") == "combo1") {

                        $(".combo1").show();

                        $(".combo2").hide();

                        $(".combo3").hide();

                        $(".combo4").hide();

                        $(".combo5").hide();

                    }

                    if ($(this).attr("value") == "combo2") {

                        $(".combo2").show();

                        $(".combo1").hide();

                        $(".combo3").hide();

                        $(".combo4").hide();

                        $(".combo5").hide();

                    }

                    if ($(this).attr("value") == "combo3") {

                        $(".combo3").show();

                        $(".combo2").hide();

                        $(".combo1").hide();

                        $(".combo4").hide();

                        $(".combo5").hide();

                    }

                    if ($(this).attr("value") == "combo4") {

                        $(".combo4").show();

                        $(".combo2").hide();

                        $(".combo3").hide();

                        $(".combo1").hide();

                        $(".combo5").hide();

                    }

                    if ($(this).attr("value") == "combo5") {

                        $(".combo5").show();

                        $(".combo2").hide();

                        $(".combo3").hide();

                        $(".combo4").hide();

                        $(".combo1").hide();

                    }

                });

            }).change();

        });

    </script>


</head>

<body>
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

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <center><h3>Foodwise Indian</h3></center>

            <?php


            /**    Error reporting        **/

            error_reporting(E_ALL);


            /**    Include path        **/

            set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/../Classes/');

            ini_set('memory_limit', '1024M');

            //set exectuion time

            ini_set('max_execution_time', '600');

            include 'PHPExcel/IOFactory.php';


            /**    Load the quadratic equation solver worksheet into memory            **/

            $objPHPExcel = PHPExcel_IOFactory::load('./RDCA15jun.xlsx');


            //get session variables

            $adult = $_SESSION['adult'];

            $ft = $_SESSION['ft'];

            $inc = $_SESSION['inc'];

            $wt = $_SESSION['wt'];

            $gender = $_SESSION['gender'];

            $yrs = $_SESSION['age'];

            $mnths = $_SESSION['mnths'];


            $objPHPExcel->getSheetByName("child")->setCellValue('B3', $yrs);

            $objPHPExcel->getSheetByName("child")->setCellValue('C3', $mnths);

            $objPHPExcel->getSheetByName("child")->setCellValue('B7', $ft);

            $objPHPExcel->getSheetByName("child")->setCellValue('C7', $inc);

            $objPHPExcel->getSheetByName("child")->setCellValue('B8', $wt);

            $objPHPExcel->getSheetByName("child")->setCellValue('B5', $gender);


            //$age = $yrs*12+$mnths;

            //echo "RDCA Child ".$mnths."Years  ".$yrs;

            echo "<table class='table table-striped'>";

            echo "<tr><th colspan = '2' align='center'> Your Inputs </th></tr>";

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

            echo $yrs . " Years " . $mnths . " Months";

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


            if ($mnths > 6 || $yrs > 0) {

                $activity = $_SESSION['activity'];

                echo "<center>";

                echo '<br><b>Your Child Activity Level is:</b>';


                $objPHPExcel->getSheetByName("child")->setCellValue('B18', $activity);


                echo "<b>" . $activity . "</b>";


                //Retrieving and setting TER value to session variable


                echo '<br><b>Your Child Calculated RDCA is:</b><br />';

                echo "</center>";

                echo "<table class='table table-striped'>";

                echo "<tr><td>";

                echo "Your Child RDCA (Recommended Daily Calorie Allowance)";

                echo "</td>";

                echo "<td>";

                echo $objPHPExcel->getSheetByName("child")->getCell('B19')->getCalculatedValue();

                echo "</td>";

                echo "</tr>";

                echo "<tr><td>";

                echo "Your Child Recommended Daily Calorie Allowance rounded to nearest 200 cal multiple";

                echo "</td>";

                echo "<td>";

                echo $objPHPExcel->getSheetByName("child")->getCell('B20')->getCalculatedValue();

                echo "</td></tr>";

                echo "</table>";

            } else {

                echo "<center>";

                echo '<br><b>Your Child Activity Level is: Moderate</b>';

            }


            ?>


            <form name="diet_form" class="form-basic" action="dietplan_child.php" method="GET"
                  onsubmit="return validate_dietPlan()">


                <p>Choose your Diet Plan&nbsp;</p>

                <div class="form-row">


                    <div class="radio-button">

                        <label><input type="radio" name="diet_plan" id="1" value="1">Get the basic diet
                            plan</label><br/>

                        <label><input type="radio" name="diet_plan" id="2" value="2">Get my customised diet plan</label><br/>

                    </div>


                    <div class="basic" style={dispay="none"}>

                        <p><strong>Basic diet plan, which will tell you number of portions of each food group,you should
                                eat on a daily basis.</strong></p>

                        <p><b>BUT,</b> in this case will not be able to give your meal plan , nutrition dashboard and
                            deficit calories count , beacause all of these depend on your dietary preferences</p>

                        <p>However you will get recommendations on how to make healthy choices in each food group so
                            that your diet is more or less in line with national and international guidelines </p>

                        <p> OR </p>

                        <p><strong>We have ten questions about your dietary preferences and once you answer them, we
                                will give you your customised 'ideal diet plan' having</strong></p>

                        <ul>

                            <li> Your meal plan for the day ( breakfast, lunch and dinner)</li>

                            <li>Your nutritional dash-board will show</li>

                            <li>Your calorie break-up from carbs, fats and proteins vis-a-vis the recommendations</li>

                            <li>Your intake vis-a-vis recommendations of heart-health associated nutrients</li>

                            <li>Your intake vis-a vis the RDA for important vitamins and minerals</li>

                            <li>Your deficit calories and how to use them</li>

                        </ul>

                        <center>

                            <select name="bas" id="bas">

                                <option value="0">Select your category</option>

                                <option value="1">Vegetarian ,who does eat eggs</option>

                                <option value="2">Vegetarian ,who does not eat eggs</option>

                                <option value="3">Non vegetarian</option>

                            </select>

                        </center>

                    </div>

                    <div class="custom" style={dispay="none"}>


                        <p>Tell us about your food habits, so that we can make your customised ideal diet plan</p>


                        <div class="form-row">
                            <label>

                                <span>Are you a veg/non-vegetarian?</span>

                                <select name="veg" id="veg">

                                    <option value="0">Choose your Category</option>

                                    <option value="1"> Vegetarian ,who does eat eggs</option>

                                    <option value="2"> Vegetarian, who does not eat egg</option>

                                    <option value="3"> Non-vegetarian</option>

                                </select>

                            </label>
                        </div>


                        <div class="form-row">
                            <label>

                                <span>How many major meals do you take in a day?</span>

                                <select name="meal" id="meal">

                                    <option value="0"> Choose your Category</option>

                                    <option value="1"> Breakfast,lunch and dinner</option>

                                    <option value="2"> Lunch and dinner only</option>

                                </select>
                            </label>
                        </div>


                        <div class="form-row">
                            <label>

                                <span>What do you eat in breakfast?</span>

                                <select name="bf" id="bf">

                                    <option value="0"> Choose your Category</option>

                                    <option value="1"> Bread (brown)large</option>

                                    <option value="2"> Bread white large</option>

                                    <option value="3"> Cornflakes</option>

                                    <option value="4"> Muesli</option>

                                    <option value="5"> Oats</option>

                                    <option value="6"> Roti,parantha</option>

                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>


                                <span>What grains do you eat in lunch and dinner?</span>

                                <select name="grains" id="grains">

                                    <option value="0">Choose your Category</option>

                                    <option value="1"> Only/mostly rice</option>

                                    <option value="2"> Only/mostly roti</option>

                                    <option value="3"> Almost equal rice and roti</option>

                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>


                                <span>What type of rice, do you eat?</span>

                                <select name="rice" id="rice">

                                    <option value="0">Choose your type of Rice</option>

                                    <option value="1"> Brown rice</option>

                                    <option value="2"> Short grained</option>

                                    <option value="3"> Medium grained</option>

                                    <option value="4"> Long grained</option>

                                    <option value="5"> Long grained,parboiled</option>

                                </select>
                            </label>
                        </div>


                        <div class="form-row">
                            <label>


                                <span>If, you are a non-vegetarian, in how many meals per week, do you eat non veg excluding eggs? (text box)</span>

                                <select name="nveg" id="nveg">

                                    <option value="0">Choose no.of meals per week</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                    <option value="11">11</option>

                                    <option value="12">12</option>

                                    <option value="13">13</option>

                                    <option value="14">14</option>

                                    <option value="15">15</option>

                                    <option value="16">16</option>

                                    <option value="17">17</option>

                                    <option value="18">18</option>

                                    <option value="19">19</option>

                                    <option value="20">20</option>

                                    <option value="21">21</option>

                                </select>

                            </label>
                        </div>


                        <p>Of the non-veg meals , how many are of the given meats ? (Meats are assumed to be free of
                            charbi/visible fat)</p>

                        <div class="form-row">
                            <label>

                                <span>chicken without skin</span>

                                <select name="chicken" id="chicken">

                                    <option value="0">0</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                </select>

                            </label>
                        </div>
                        <div class="form-row">
                            <label>

                                <span>fish</span>

                                <select name="fish" id="fish">

                                    <option value="0">0</option>

                                    <option value=1>1</option>

                                    <option value=2>2</option>

                                    <option value=3>3</option>

                                    <option value=4>4</option>

                                    <option value=5>5</option>

                                    <option value=6>6</option>

                                    <option value=7>7</option>

                                    <option value=8>8</option>

                                    <option value=9>9</option>

                                    <option value=10>10</option>

                                </select>

                            </label>
                        </div>

                        <div class="form-row">
                            <label>

                                <span>beef</span>

                                <select name="beef" id="beef">

                                    <option value="0">0</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>

                                <span>goat meat (mutton)</span>

                                <select name="mutton" id="mutton">

                                    <option value="0">0</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>

                                <span>lamb</span>

                                <select name="lamb" id="lamb">

                                    <option value="0">0</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>

                                <span>pork</span>

                                <select name="pork" id="pork">

                                    <option value="0">0</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                </select>
                            </label>
                        </div>


                        <div class="form-row">
                            <label>

                                <span>What type of milk do you drink? (We strongly advise consuming double toned or skimmed, if available,otherwise choose what is available/preferred)</span>

                                <select name="milk" id="milk">

                                    <option value="0">Choose your Category</option>

                                    <option value="1"> Full Cream</option>

                                    <option value="2"> Toned</option>

                                    <option value="3"> Double Toned</option>

                                    <option value="4"> Skimmed</option>

                                    <option value="5"> Buffalo's milk</option>

                                    <option value="6"> Cow's milk</option>

                                </select>
                            </label>
                        </div>

                        <div class="form-row">
						<label>

                        <span>What oil(oils) is food cooked in at your house?</span>
                        

                        
                                        

                                            <select name="oil_combo" id="oil_combo">

                                                <option value="0">Select</option>

                                                <option value="combo1">Oil combination 1: One of groundnut/rice
                                                    bran/sesame/cottonseed oil + one of mustard/rapeseed/canola/soybean
                                                    oil each
                                                </option>

                                                <option value="combo2">Oil combination 2: One of safflower/sunflower oil
                                                    + one fo palmolein/palm oil + one of mustard/rapeseed/canola
                                                    oil/soybean oil
                                                </option>

                                                <option value="combo3">Oil combination 3: Safflower/sunflower+olive
                                                    (choose only if you eat atleast two fish meals in a week)
                                                </option>

                                                <option value="combo4">Oil combination 4: One of safflower/sunflower oil
                                                    + one of olive/palmolein/palm oil (choose only if you eat at least
                                                    two fish meals in a week)
                                                </option>

                                                <option value="combo5">Oil combination 5: One of safflower/sunflower oil
                                                    + one of groundnut/rice bran/sesame/cottonseed oil ( choose only if
                                                    ou eat at least 2 fish meals/week)
                                                </option>

                                            </select>
                                             </label>
                                                </div>
                                        <div class="form-row">
										</label>

                                            <div class="combo1">

                                                <select name="oil1a" id="oil1a" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Ground nut oil</option>

                                                    <option value="2"> Rice bran oil</option>

                                                    <option value="3"> Sesame oil</option>

                                                </select>

                                            </div>

                                            <div class="combo2">

                                                <select name="oil2a" id="oil2a" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Sunflower oil</option>

                                                    <option value="2"> Safflower oil</option>

                                                </select>

                                            </div>

                                            <div class="combo4">

                                                <select name="oil4a" id="oil4a" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Sunflower oil</option>

                                                    <option value="2"> Safflower oil</option>

                                                </select>

                                            </div>

                                            <div class="combo5">

                                                <select name="oil5a" id="oil5a" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Sunflower oil</option>

                                                    <option value="2"> Safflower oil</option>

                                                </select>

                                            </div>

                                        

                                            <div class="combo1">

                                                <select name="oil1b" id="oil1b" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Mustard oil</option>

                                                    <option value="2"> Canola oil</option>

                                                    <option value="3"> Soybean oil</option>

                                                </select>

                                            </div>

                                            <div class="combo2">

                                                <select name="oil2b" id="oil2b" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Palm oil</option>

                                                    <option value="2"> Palmolein oil</option>

                                                </select>

                                            </div>

                                            <div class="combo4">

                                                <select name="oil4b" id="oil4b" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Olive oil</option>

                                                    <option value="2"> Palm oil</option>

                                                    <option value="3"> Palmolein oil</option>

                                                </select>

                                            </div>

                                            <div class="combo5">

                                                <select name="oil5b" id="oil5b" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Ground nut oil</option>

                                                    <option value="2"> Rice bran oil</option>

                                                    <option value="3"> Sesame oil</option>

                                                </select>

                                            </div>

                                       

                                            <div class="combo2">

                                                <select name="oil2c" id="oil2c" style="">

                                                    <option value="0">Choose your Category</option>

                                                    <option value="1"> Mustard oil</option>

                                                    <option value="2"> Canola oil</option>

                                                    <option value="3"> Soybean oil</option>

                                                </select>

                                            </div>
                                          </label>
										  </div>
                                       


                           
                    </div>

                    

                    

                    <center>

                        <input name="submit" type="submit" value="Submit"> &nbsp;

                        <input name="reset" type="reset" value="Reset"><br/>

                    </center>

            </form>

        </div>
    </div>
</div>
</div>
<!-- End #content -->
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


