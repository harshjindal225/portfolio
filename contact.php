<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #text {
            padding-top: 10%;
            padding-left: 5%;
        }

        .mail {
            padding-top: 15%;
            padding-left: 7%;
            padding-bottom: 25%;
            font-size: 90px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        

        /* Increase text size for h4 headings */
        h4 {
            margin-bottom: 30px;
            /* Optional: Add margin-bottom for spacing */
        }

        .social {
            padding-top: 5%;
            padding-bottom: 10%;
            font-size: x-large;
        }

        p {
            padding-top: 20%;
            font-size: 48px;
        }

        .custom-container{
            padding-bottom: 10%;
        }


    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="text" class="col-xs-10">
                <textarea name="" id="" class="form-control form-control-lg" rows="6" placeholder="Send me a message" style="border:0;"></textarea>
                <br>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="text-left mail">
                    <!-- <strong>hello@harsh.com</strong> -->
                    <a href="#">hello@harsh.com</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container social">
                <div class="col-sx-3">
                    <strong>Or connect with me on socials</strong>
                </div>
                <div class="col-xs-3" style="padding-top: 5%;">
                    <p>Behance</p>
                    <div class="social-icons">
                        <a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
                <div class="col-xs-3" style="padding-top: 5%;">
                    <p>Dribbble</p>
                    <div class="social-icons">
                        <a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
                <div class="col-xs-3" style="padding-top: 5%;">
                    <p>LinkedIn
                    <p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="container custom-container">
        <div class="col-xs-5">
            <pre style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; background-color: white; border: 0; font-weight:bold">
        Let's discuss your 
        brand and business 
        goals and objectives 
    </pre>
        </div>
        <div class="col-xs-6">
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="Full Name*" class="form-control form-control-lg" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email address*" class="form-control form-control-lg" required>
                </div>
                <div class="form-group">
                    <textarea type="message" name="" id="" placeholder="Your Message*" class="form-control form-control-lg" rows="5" required></textarea>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>


</html>
<?php include('footer.php') ?>