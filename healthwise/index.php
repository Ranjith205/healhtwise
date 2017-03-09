<!DOCTYPE html>
<html lang="en">

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
 <link rel="stylesheet" href="css/datepicker.css">
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>
     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  <script>
$(function () {
    var start = new Date();
    start.setFullYear(start.getFullYear() - 100);
    var end = new Date();
    end.setFullYear(end.getFullYear() - 18);

    $("#dob").datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: start,
        maxDate: end,
        yearRange: start.getFullYear() + ':' + end.getFullYear()
    });
	
});
  
  </script>
<script>
  $(function() {
    $( "#date" ).datepicker({ minDate: -310, maxDate: "-1" });
  });
  </script>


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

        .adult_zone {
            display: none;
        }

        .child_zone {
            background-color: #fff;
            margin-left: 55px;
            margin-right: 55px;
            padding-bottom: 25px;
            font-weight: bold;
            text-decoration: underline;
            font-size: 18px;
            display: none;

        }

        .child {
            display: none;
        }

        .female {

            display: none;
        }

        .yes {

            display: none;
        }

        .pregnant {

            display: none;
        }

        .breast {

            display: none;
        }

        .breast1 {

            display: none;
        }
		.SeeMore2 {
    display: block;
    border-radius: 2px;
    background-color:  #ff740a;
    color: #ffffff;
    font-weight
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 4px 12px;
    border: 0; 
	cursor: pointer;
    
}
    </style>

    <style>

        #wt-error,
        #fr-error,
        #inc-error,
        #gen-error,
        #preg_qn-error,
        #breast_qn-error,
        #veg-error,
        #exercise-error,
        #occupation-error {

            display: inline-block;
            color: #D21F1F;
            padding-left: 46%;
            font-size: 13px;
            font-weight: 600;
            float: left;
            padding-top: 6px;
        }
    </style>


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
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top:-90px;">

                <center><h3>FWI ideal diet plan</h3></center>
                <hr>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
            

                <p class="small"><span>A)</span> <strong>Is for every one (not only for people interested in weight loss):</strong> for
                        children, adults, pregnant women and breast feeding mothers and for people with lifestyle
                        diseases such as diabetes, high blood pressure, high blood cholesterol, heart disease
                </p>

                <p class="small"><span>B)</span> <strong>Provides only enough calories</strong> to keep you in calorie balance or to
                    help you lose weight, if needed</p>

                 <div id="collapseTwo" class="accordion-body collapse">

                    <p class="small"><span>C)</span> <strong>Provides nutrients in the recommended range</strong> and/or in line with
                        the
                        RDA (Recommended Daily Allowance) for your age and gender
                    </p>

                    <p class="small"><span>D)</span> <strong>Leaves you with some deficit calories</strong> for snacking and
                        indulgences
                    </p>

                    <p class="small"><span>E)</span> <strong>You will get a daily menu plan:</strong> telling you how much of each
                        food
                        group to eat and also recommendations on weekly requirements of some special food suff<br></p>

                    <p class="small"><span>F)</span> <strong>You will see your nutritional dashboard:</strong> showing how well you
                        fare
                        in comparison with RDA and recommendations</p>

                    <p class="small"><span>G)</span> <strong>you will get to know your deficit calories,</strong> bad fats and added
                        sugars available for snacking</p>

                    <p class="small"><span>H)</span> <strong> Our diet plan gives you choices</strong></p>

                    <ul>
                        <li>We will give you three diet-plan choices and you choose the one best suited for you, to know
                            about our three diets, go to 'FoodWise diets'
                        </li>
                        <li>For people with diabetes, heart disease, high blood pressure or high cholesterol, our 'Ideal
                            Diet for people with health risks' is perfect, it has been designed on the principles of
                            TLC,
                            DASH and MLT diets, recommended for these people
                        </li>
                        <li>For healthy people our 'Basic Indian Diet' and 'Optimised Indian Diet' are options to choose
                            from
                        </li>
                        <li> We take inputs from you on your preferred rains, proteins etc. and accordingly further
                            csutomize you diet plan
                        </li>
                    </ul>
                    <h4>To get the FWI ideal diet plan for you or your child or other loved one:</h4>

                    <p class="small"><strong>Give us your particulars and preferences and we will</strong></p>

                    <p class="small"><span>1.</span> Calculate your BMI and weigt category </p>

                    <p class="small"><span>2.</span> Calculate your daily calorie requirement for current eight or for a
                            moderate
                            weight loss, whichever one you chose</p>

                    <p class="small"><span>3.</span> Then, you can get a basic diet plan or a customised diet plan (for which
                            you
                            will have to answer some questions)</p>

                    <p class="small"><span>4.</span>  Get your nutrition dashboard (only with customized diet plan)
                    </p>
                </div>
               
                <button class="SeeMore2"  data-toggle="collapse" href="#collapseTwo">Read More</button>
                
            </div>


        </div>

    </div>
</section>
<!-- Contact Section -->
<section id="contact">
    <div class="container" style="margin-top:-40px;">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">


                <form id="myform" name="input_form" action="calculate_bmi.php" class="form-basic" method="GET">
                    <div class="form-title-row"><h1>Get your BMI/weight status and calorie need/day</h1>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>ADULT or CHILD <br>(less than 18 years of age)?</span>
                            <select name="ad" id="ad">
                                <option value="0">Select your category</option>
                                <option value="Adult">Adult</option>
                                <option value="child">Child</option>
                            </select>
                        </label>
                    </div>


                    <div class="adult_zone">
                        <div class="form-row">
                            <label>
                                <span>Sex&nbsp;</span>
                                <select name="gen" id="gen" title="This field is required.">
                                    <option value="">Select your category</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </label>
                        </div>


                        <div class="child">
                            <div class="female">
                                <div class="form-row">
                                    <label>
                                        <span>Are you Pregnant?&nbsp;</span>
                                        <select name="preg_qn" id="preg_qn">
                                            <option value="">Select your category</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </label>
                                </div>


                            </div>

                            <div class="pregnant">
                                <div class="form-row">
                                    <label>
                                        <span>What was the first day of your last mensrual period</span>
                                        <input type="text" name="date" id="date">
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label>
                                        <span>What was your pre-pregnancy weight(Kgs)</span>
                                        <input type="text" name="pre_preg">
                                    </label>
                                </div>

                                <b><p>NOTE:WE DO NOT MAKE DIET PLAN FOR WEIGHT LOSS FOR PREGNANT
                                        WOMEN(CHOOSE NO)</p></b>


                            </div>

                            <div class="breast">
                                <div class="form-row">
                                    <label>
                                        <span>Are you Breast Feeding?</span>
                                        <select name="breast_qn" id="breast_qn">
                                            <option value="">Select your category</option>
                                            <option value="nob">No</option>
                                            <option value="yesb">Yes</option>

                                        </select>
                                    </label>
                                </div>


                            </div>

                            <div class="breast1">
                                <div class="form-row">
                                    <label>

                                        <span>What was your pre-pregnancy weight(Kgs)</span>
                                        <input type="text" name="pre_preg1">
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label>
                                        <span>how old is your child?</span>
                                        <select name="child_age">
                                            <option value="6 months or younger"> 6 months or younger</option>
                                            <option value="older than 6 months"> Older than 6 months</option>
                                        </select>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-row">
                            <label>
                                <span>Weight(in Kgs)</span>
                                <input name="wt" id="wt" type="number" size="17">
                            </label>
                        </div>
                        <div class="form-row">
                            <label>
                                <span>Do you want a diet for weight loss?</span>
                                <select name="wt_loss" id="wt_loss">
                                    <option value="wt_no">No</option>
                                    <option value="wt_yes">Yes</option>

                                </select>
                            </label>
                        </div>
                        <div class="form-row">
                            <label>
                                <span>DOB</span>
                                
                                <input name="dob" input type="text" id="dob">
                            </label>
                        </div>
                        <div class="form-row">
                            <label>

                                <span>Height -Ft</span>
                                <input name="ft" id="fr" type="number" size="1">

                                <span>Inches</span>
                                <input name="inc" id="inc" type="number" size="1">
                            </label>
                        </div>


                        <b><p>Choose your activity level</p></b>

                        <div class="form-row">
                            <label>
                                <span>Exercise</span>
                                <select name="exercise" id="exercise" style="width:70%">
                                    <option value="">Choose your Activity</option>
                                    <option value="1">No regular exercise</option>
                                    <option value="2"> Exercise>20 min,1-3 days/week</option>
                                    <option value="3">Exercise 30-60 min,3-4 days/week</option>
                                    <option value="4">Exercise>60 min, 5-7 days/week</option>
                                    <option value="5">Athlete or very active</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>
                                <span>Occupation</span>
                                <select name="occupation" id="occupation">
                                    <option value="">Choose your Activity</option>
                                    <option value="1"> sitting /desk jobs</option>
                                    <option value="2">standing  for long times</option>
                                    <option value="3">Active e.g. waiter</option>
                                    <option value="4">Heavy activity, e.g. carpenter</option>
                                    <option value="5">Strenuous e.g.Labourers .</option>

                                   
                                </select>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>
                                <span>Are you a veg/non-vegetarian?</span>
                                <select name="veg" id="veg">
                                    <option value="">Choose your Category</option>
                                    <option value="1"> Vegetarian ,who does eat eggs</option>
                                    <option value="2"> Vegetarian, who does not eat egg</option>
                                    <option value="3"> Non-vegetarian</option>
                                </select>
                            </label>
                        </div>
                        <center>
                            <input name="submit" type="submit" value="Calculate">&nbsp;
                            <input name="reset" type="reset" value="Reset"><br/>
                        </center>
                </form>
            </div>
            <div class="child_zone">
                <center><a href="index_child.php">click here </a></center>
            </div>

        </div>
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



<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("select").change(function () {
            $("select option:selected").each(function () {
                if ($(this).attr("value") == "Adult") {
                    $(".child_zone").hide();
                    $(".adult_zone").show();

                }
                if ($(this).attr("value") == "child") {
                    $(".child_zone").show();
                    $(".adult_zone").hide();

                }
            });
        }).change();
    });

    $(document).ready(function () {
        $("select").change(function () {
            $("select option:selected").each(function () {
                if ($(this).attr("value") == "Female") {
                    $(".female").show();
                    $(".child").show();

                }
                if ($(this).attr("value") == "Male") {
                    $(".child").hide();
                }
            });
        }).change();
    });

    $(document).ready(function () {
        $("select").change(function () {
            $("select option:selected").each(function () {
                if ($(this).attr("value") == "no") {
                    $(".breast").show();
                    $(".pregnant").hide();
                    $(".breast1").hide();
                }

                if ($(this).attr("value") == "yes") {
                    $(".breast").hide();
                    $(".pregnant").show();
                    $(".breast1").hide();

                }
                if ($(this).attr("value") == "yesb") {
                    $(".breast1").show();

                    $(".female").hide();

                }
                if ($(this).attr("value") == "nob") {
                    $(".breast1").hide();

                }
            });
        }).change();
    });


</script>

<script>

    //og


    $("#myform").validate({
        rules: {
            wt: {
                required: true,
                min: 5,
                max: 220
            },
            ft: {
                required: true,
                min: 1,
                max: 6
            },
            inc: {
                required: true,
                min: 0,
                max: 11
            },
            gen: {
                required: true
            },
            preg_qn: {
                required: true
            },
            breast_qn: {
                required: true
            },
            exercise: {
                required: true
            },
            occupation: {
                required: true
            },
            dob: {
                required: true
            },
            veg: {
                required: true
            }
        },
        messages: {

            wt: {
                min: "enter a value greater than 5",
                max: "enter a value less than 220"
            },
            ft: {
                min: "enter a value greater than 1",
                max: "enter a value less than 6"
            },
            inc: {
                min: "enter a value greater than 1",
                max: "enter a value less than 11"
            }

        }
    });


</script>
  <script>
  $('.SeeMore2').click(function(){
		var $this = $(this);
		$this.toggleClass('SeeMore2');
		if($this.hasClass('SeeMore2')){
			$this.text('Read More');			
		} else {
			$this.text('Read Less');
			var $this = $(this);
			$this.toggleClass('SeeMore2');
		}
	});
	</script>

</body>

</html>

