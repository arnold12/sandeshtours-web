<?php
if(isset($_POST['contact_form']) && $_POST['contact_form'] == "1")
{
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$message=trim($_POST['message']);
    $to = "dmellodany@gmail.com";
    $subject = "creativeidea";
    
    $message = 'Name:'.$name.'<br>Email:'.$email.'<br>Message:'.$message.'<br>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <david.dmello@vistaarmedia.com>' . "\r\n";
    $headers .= 'Cc: machadoarnold@gmail.com' . "\r\n";
    if(mail($to,$subject,$message,$headers)){
        ?>
        <script type="text/javascript">

            alert("Email Send Successfully");
            window.location.href="contactus.php";
        </script>

        <?php
    }

    
}


?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->

<!-- Mirrored from www.soaptheme.net/html/travelo/pages-contactus1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2016 13:25:37 GMT -->
<head>
    <!-- Page Title -->
    <title>Sandesh Tours</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo - Travel, Tour Booking HTML5 Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">
	
    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
    <div id="page-wrapper">
        <?php include_once("header.php") ?>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Contact Us</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="index.php">HOME</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <!-- <div class="travelo-google-map block"></div> -->
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="travelo-box contact-us-box">
                                <h4>Contact us</h4>
                                <ul class="contact-address">
                                    <li class="address">
                                        <i class="soap-icon-address circle"></i>
                                        <h5 class="title">Address</h5>
                                        <p>Fenil, Near MTNL Charai Exchange, Thane (W), Maharashtra, India</p>
                                    </li>
                                    <li class="phone">
                                        <i class="soap-icon-phone circle"></i>
                                        <h5 class="title">Phone</h5>
                                        <p>+91 9768 782 555,</br>+91 9004 699 778</p>
                                    </li>
                                    <li class="email">
                                        <i class="soap-icon-message circle"></i>
                                        <h5 class="title">Email</h5>
                                        <p>sandeshtours@gmail.com</p>
                                    </li>
                                </ul>
                                <!-- <ul class="social-icons full-width">
                                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="soap-icon-twitter"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="GooglePlus"><i class="soap-icon-googleplus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="soap-icon-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="soap-icon-linkedin"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Vimeo"><i class="soap-icon-vimeo"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="travelo-box">
                                <form class="contact-form" action="" method="post" onsubmit="return validate();">
                                    <h4 class="box-title">Send us a Message</h4>
                                    <div class="row form-group">
                                        <div class="col-xs-6">
                                            <label>Your Name</label>
                                            <input type="text" name="name" id="name" class="input-text full-width">
                                            <label id="err_msg_name" for="name" class="err_msg" style="color: #dd4b39;font-size: 11px;display: none;"></label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Your Email</label>
                                            <input type="text" name="email" id="email" class="input-text full-width">
                                            <label id="err_msg_email" for="email" class="err_msg" style="color: #dd4b39;font-size: 11px;display: none;"></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" rows="6" id="message" class="input-text full-width" placeholder="write message here"></textarea>
                                        <label id="err_msg_message" for="message" class="err_msg" style="color: #dd4b39;font-size: 11px;display: none;"></label>
                                    </div>
                                    <input type="hidden" id="contact_form" name="contact_form" value="1">
                                    <button type="submit" class="btn-large full-width">SEND MESSAGE</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <?php include_once("footer.php") ?>
    </div>




    


    <!-- Javascript -->
    
    <script type="text/javascript">
        
        function validate()
        {
                var name=document.getElementById('name').value;
                var email=document.getElementById('email').value;
                var email_validate= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var message=document.getElementById('message').value;
                jQuery(".err_msg").html('');
                jQuery(".err_msg").hide();
                    if(name==''){
                    jQuery("#err_msg_name").show();        
                    jQuery("#err_msg_name").html('Enter Name');
                    jQuery("#name").focus();
                    return false;
                    }
                    if(email==''){
                    jQuery("#err_msg_email").show();        
                    jQuery("#err_msg_email").html('Enter Valid Email');
                    jQuery("#email").focus();
                    return false;
                    }
                    if(!email.match(email_validate)){
                    jQuery("#err_msg_email").show();        
                            jQuery("#err_msg_email").html('Enter Valid Email');
                            jQuery("#email").focus();
                    return false;
                    }
                    if(message==''){
                    jQuery("#err_msg_message").show();        
                    jQuery("#err_msg_message").html('Enter Message');
                    jQuery("#message").focus();
                    return false;
                    }
                    return true;
        }
    </script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery-ui.1.10.4.min.js"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Google Map Api -->
    <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <script type="text/javascript">
        tjq(".travelo-google-map").gmap3({
            map: {
                options: {
                    center: [48.85661, 2.35222],
                    zoom: 12
                }
            },
            marker:{
                values: [
                    {latLng:[48.85661, 2.35222], data:"Paris"}

                ],
                options: {
                    draggable: false
                },
            }
        });
    </script>
</body>

<!-- Mirrored from www.soaptheme.net/html/travelo/pages-contactus1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2016 13:25:37 GMT -->
</html>

