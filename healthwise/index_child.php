<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Foodwise Indian </title>
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
    start.setFullYear(start.getFullYear() - 18);
    var end = new Date();
    end.setFullYear(end.getFullYear() - 1);

    $("#dob").datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: start,
        maxDate: end,
        yearRange: start.getFullYear() + ':' + end.getFullYear()
    });
});
  
  </script>

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

  
    <!-- JQuery code for displaying dropdown based on user choice of diet -->

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

<!-- Contact Section -->
<section id="contact">
    <div class="container" style="background-color: rgba(255, 255, 255, 0);">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">


                <form id="myform" name="input_form" action="calculate_bmi_child.php" class="form-basic" method="GET">
                    <div class="form-title-row">
                        <center><h1>Get your BMI/weight status and calorie need/day</h1></center>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Sex</span>
                            <select name="gen" id="gen">
                                <option value="">Select your category</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>

                            <span>Weight(in Kgs)&nbsp;</span>
                            <input name="wt" id="wt" type="number" size="17" min="5" max="220">

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
                            <span>DOB&nbsp;</span>
                             <input name="dob" id="dob" input type="text" >
                           
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Height Ft&nbsp;</span>
                            <input name="ft" id="fr" type="number" size="1" min="1" max="6">
                            <span>Inches</span>
                            <input name="inc" id="inc" type="number" size="1" min="1" max="11">
                        </label>
                    </div>


                    <div class="form-row">
                        <label>
                            <span><b>Exercise</span>
                            <select name="exercise" id="exercise" style="">
                                <option value="">Choose your Activity</option>
                                <option value="1">< 1 hour of sports or running/cycling etc.</option>
                                <option value="2">1 hour or more of physical activity, 3 days/week or more</option>
                                <option value="3">>2 hours/day of formal sports or vigorous activity</option>
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
                        <input name="submit" type="submit"  value="Calculate">&nbsp;
                        <input name="reset" type="reset" value="Reset"><br/>
                    </center>
                </form>

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

<script>

    //og


    $("#myform").validate({
        rules: {
		    dob: {
                required: true,
                
            },
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
           
            exercise: {
                required: true
            },
            occupation: {
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

</body>

</html>
