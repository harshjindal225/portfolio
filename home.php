<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<style>
    .card {
      width: 33rem;
      height: 25rem;
      border: 1px solid #333;
      transition: box-shadow 0.3s ease-in-out;
    }
    .card:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .card-body {
      padding: 1rem;
    }
    .card-title {
      font-size: 1.25rem;
      margin-bottom: 0.75rem;
    }
    .card-subtitle {
      font-size: 1rem;
      color: #6c757d;
      margin-bottom: 1rem;
    }
    .card-text {
      margin-bottom: 1rem;
    }
    .card-link {
      color: #007bff;
      text-decoration: none;
    }
    .card-link:hover {
      text-decoration: underline;
    }
    .p-1 {
        font-size: 112px;
        line-height: 1em;
        letter-spacing: -6px;


    }

    .p-2 {
        font-family: 'Gill sans';
        font-size: 112px;
        font-weight: 500;
        font-style: italic;
        line-height: 1em;
        letter-spacing: -4px;
    }

    .p-3 {
        font-size: 112px;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: -6px;
    }

    .pimg {
        border-radius: 40%;
        /* Makes the image circular */
        overflow: hidden;
        /* Ensures the image doesn't overflow the border radius */
        width: 300px;
        /* Adjust width as needed */
        height: 450px;
        vertical-align: middle;
        display: inline-block;
    }

    .social1 {
        padding-left: 40%;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="container">
        <div class="row" style="padding-top: 10%; padding-bottom:10%">
            <div class="col-xs-8" style="padding-top: 6%;">
                <p class="p-1">Hi. I am a</p>
                <p class="p-2">website devloper</p>
                <p class="p-3">based in Miami</p>

            </div>
            <div class="col-xs-4" style="padding-top: 4%;">
                <img src="https://picsum.photos/200/300" alt="" class="pimg">
            </div>
        </div>
        <div class=" col-xs-12 row" style="padding-bottom: 15%;">
            <div class="col-xs-4" style="padding-top: 5%;font-size:20px">
                <i class="fa-solid fa-arrow-down"></i>
                <strong>Scroll to Continue</strong>
            </div>
            <div class="col-xs-4" style="padding-top: 5%;">

            </div>
            <div class=" col-xs-4 social1" style="padding-top:5%;">
                <div class="col-xs-4" style="font-size:15px">
                    <p>Behance</p>
                    <div class="social-icons">
                        <a href="https://www.behance.net/" target="_blank"></a>
                    </div>
                </div>
                <div class="col-xs-4" style="font-size:15px">
                    <p>Dribbble</p>
                    <div class="social-icons">
                        <a href="https://www.dribbble.com/" target="_blank"></a>
                    </div>
                </div>
                <div class="col-xs-4" style="font-size:15px">
                    <p>LinkedIn
                    <p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-xs-12">
            <div class="col-xs-3">
                <h3><strong>01.</strong></h4>
            </div>
            <div class="col-xs-9">
                <h3><strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ratione inventore tenetur magni nesciunt iusto eligendi accusamus dolore labore voluptas vero, at molestias qui reiciendis ipsum unde? Porro, repellat iusto.</strong></h3>
                <br>
                <p style="font-size:large;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit fugit dolore doloremque neque qui illo quaerat aperiam. Distinctio neque tempora, esse eaque ad temporibus culpa facere rerum nulla eligendi at?</p>
                <br>
                <a href="#" class="" style="font-size:15px; border-color:white">
                    <bold>More about me</bold>
                </a>
            </div>
        </div>
        <div class="row col-xs-12" style="padding-top: 25%;">
            <div class="col-xs-3">
                <h3><strong>02.</strong></h4>
            </div>
            <div class="col-xs-4">
                <h3 style="font-size:30px"><strong>Recent Projects</strong></h3>
            </div>
            <div class="col-xs-5" style="padding-top: 2%;padding-left:25%">
                <a href="#" class="" style="font-size:20px; border-color:aliceblue">View all works</a>
            </div>
            <div class="row">
                <div class="col-xs-12" style="padding-left:0%; padding-top:5%;padding-bottom:5%">
                    <div class="card">
                        <img class="card-img-top" src="https://picsum.photos/1200/640" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><strong>Lorem, ipsum.</strong></h4>
                            <p class="card-text">Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:5%;">
            <div class="col-xs-6" style="padding-left:5%; padding-top:5%;">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="https://picsum.photos/520/520" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Lorem, ipsum.</strong></h4>
                        <p class="card-text">Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6" style="padding-left:13%; ">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="https://picsum.photos/520/520" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Lorem, ipsum.</strong></h4>
                        <p class="card-text">Lorem ipsum dolor sit.'</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:5%;">
            <div class="col-xs-6" style="padding-left:5%; padding-top:5%;">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="https://picsum.photos/520/520" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Lorem, ipsum.</strong></h4>
                        <p class="card-text">Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6" style="padding-left:13%;">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="https://picsum.photos/520/520" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Lorem, ipsum.</strong></h4>
                        <p class="card-text">Lorem ipsum dolor sit.'</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-xs-12" style="padding-top: 20%;">
            <div class="col-xs-12">
                <h3><strong>03.</strong></h4>
            </div>
            <div class="row">
                <div class="col-xs-3" style="padding-top: 5%;">
                    <p style="font-size:30px;padding-left:4%">
                        <strong>What I am
                            awesome at</strong>
                    </p>
                </div>
                <div class="col-xs-9" style="padding-top: 5%;">
                    <p style="font-size: 20px;">Lorem ipsum, adipisicing elit. Expedita tempore quibusdam, voluptatem perferendis ipsa, alias dignissimos amet consequuntur in dolor minima aspernatur, officia quaerat culpa! Veritatis minima rem reprehenderit molestiae? </p>
                </div>
            </div>
            <div class="row" style="padding-top: 5%;">
                <div class="col-xs-3" style="padding-top: 5%;">

                </div>
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-body" style="margin-left: 5%; margin-right:5%">
                            <h3 class="card-title" style="font-size:30px" >Lorem, ipsum.</h3>
                            <!-- <h6 class="card-subtitle mb-2 text-muted" style="font-size:20px"></h6> -->
                            <p class="card-text" style="font-size:20px"> Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-body" style="margin-left: 5%; margin-right:5%">
                            <h5 class="card-title" style="font-size:30px">Lorem, ipsum.</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted" style="font-size:20px">Card subtitle</h6> -->
                            <p class="card-text" style="font-size:20px"> Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 5%;">
                <div class="col-xs-3" style="padding-top: 5%;">

                </div>
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-body" style="margin-left: 5%; margin-right:5%">
                            <h3 class="card-title" style="font-size:30px" >Lorem, ipsum.</h3>
                            <!-- <h6 class="card-subtitle mb-2 text-muted" style="font-size:20px"></h6> -->
                            <p class="card-text" style="font-size:20px"> Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-body" style="margin-left: 5%; margin-right:5%">
                            <h5 class="card-title" style="font-size:30px">Lorem, ipsum.</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted" style="font-size:20px">Card subtitle</h6> -->
                            <p class="card-text" style="font-size:20px"> Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <p style="font-size:30px; padding-top:30%;">Want to work together?</p>
                    <div class="text-left" style="font-size:80px; padding-top:6%; padding-bottom:20%;">
                        <a href=""><strong>hello@harsh.com</strong></a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<?php include('footer.php') ?>