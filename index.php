 <?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?> 

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mec</title>
    
    <!------bootstrap link-------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!------font link------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <!---font awesome------>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

<link rel="stylesheet" href="style.css">



    </head>

<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary demo-logo">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./Asset/images/demo-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="bars" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-0 me-3">
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="#banner">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="#testimonial">TESTIMONIALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="#footer">CONTACT</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="logout.php"> <button type="button" class="btn btn-primary" style="margin-top: 0px;">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!------banner section------->
    <section id="banner" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">BEST COLLEGE FOR ENGINEERING</p>
                    <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis sed iure commodi natus
                        soluta a
                        cum dicta deserunt quia corrupti, suscipit molestiae dolores error obcaecati eius reprehenderit
                        praesentium ullam laborum.</P>
                    <a href="#"><img src="./Asset/images/play.png" class="play-btn" alt="">Watch Tutorials</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="./Asset/images/home2.png" class="img-fluid" alt="">
                </div>


            </div>
        </div>
        </div>
        <img src="./Asset/images/wave1.png" class="img-fluid" alt="">
    </section>

    <!---------services section-------------->

    <section id="services">

        <div class="container text-center">
            <h1 class="title">WHAT WE DO ?</h1>
            <div class="row text-center">
                <div class="col-md-4 sercives">
                    <img src="./Asset/images/service1.png" class="service-img" alt="">
                    <h4>INCREASE PLACEMENT</h4>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, similique aliquam harum pariatur
                        ratione, corporis iure consequuntur ab minus numquam amet cupiditate earum. Repellendus,
                        blanditiis aliquid? Enim consequuntur voluptatibus minus.</P>
                </div>
                <div class="col-md-4 sercives">
                    <img src="./Asset/images/service2.png" class="service-img" alt="">
                    <h4>OUI COME BASED EDUCATION</h4>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, similique aliquam harum pariatur
                        ratione, corporis iure consequuntur ab minus numquam amet cupiditate earum. Repellendus,
                        blanditiis aliquid? Enim consequuntur voluptatibus minus.</P>
                </div>
                <div class="col-md-4 sercives">
                    <img src="./Asset/images/service3.png" class="service-img" alt="">
                    <h4>INCOME BASED EDUCATION</h4>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, similique aliquam harum pariatur
                        ratione, corporis iure consequuntur ab minus numquam amet cupiditate earum. Repellendus,
                        blanditiis aliquid? Enim consequuntur voluptatibus minus.</P>
                </div>
            </div>
            <button type="button" class="btn btn-primary"> All sercives</button>
        </div>

    </section>
    <section id="about-us">
        <div class="container">
            <h1 class="title text-center">WHY CHOOSE US?</h1>
            <div class="row">
                <div class="col-md-6 about-us">
                    <p class="about-title">Why We are Different?</p>
                    <ul>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>
                        <li> we are the best we are the best</li>


                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="./Asset/images/network.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- testimonial -->
    <section id="testimonial">
        <div class="container">
            <h1 class="title text-center">WHAT CLEINT SAY ?</h1>
            <div class="row offset-1">
                <div class="col-md-5 testimonial">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda repellendus porro
                        expedita laboriosam aspernatur ab dolorum, sunt vitae placeat modi neque labore pariatur rem
                        corporis totam dolore vero quia!</p>
                    <img src="./Asset/images/user1.jpg" alt="">
                    <p class="user-details"><b>Ellies Pery</b><br>Co-Founder of Amazon</p>

                </div>
                <div class="col-md-5 testimonial">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda repellendus porro
                        expedita laboriosam aspernatur ab dolorum, sunt vitae placeat modi neque labore pariatur rem
                        corporis totam dolore vero quia!</p>
                    <img src="./Asset/images/user2.jpg" alt="">
                    <p class="user-details"><b>Naseem Sha</b><br>Co-Founder of Google</p>

                </div>
            </div>
        </div>


    </section>

    <!--------------social media----------------->
    <section id="social-media">
        <div class="container text-center">
            <p>FIND US ON SOCIAL MEDIA</p>
            <div class="social-media-icons">

                <a href="#"><img src="./Asset/images/snapchat-icon.png" alt=""></a>
                <a href="#"><img src="./Asset/images/twitter-icon.png" alt=""></a>
                <a href="#"><img src="./Asset/images/facebook-icon.png" alt=""></a>
                <a href="#"><img src="./Asset/images/instagram-icon.png" alt=""></a>
                <a href="#"><img src="./Asset/images/whatsapp-icon.png" alt=""></a>
                <a href="#"><img src="./Asset/images/linkedin-icon.png" alt=""></a>
            </div>

        </div>


    </section>
    <!--------footer section----------->
    <section id="footer">

        <img src="./Asset/images/wave2.png" class="img-fluid" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-box">
                    <img src="./Asset/images/demo-logo.png" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, distinctio excepturi porro
                        asperiores quos ut perspiciatis. Non enim maiores cumque dolor, fugiat molestias, quidem quasi
                        ea atque deleniti saepe sed.</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>CONTACT US</b></p>
                    <p class="fa">World Trade Center, Chennai</p><br>
                    <p class="fa">+91 6379943997</p><br>
                    <p class="fa">xyz@gmail.com</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>SUBSCRIBE NEWS LETTER</b></p>
                    <input type="email" class="form-control" placeholder="Your Email">
                    <button type="button" class="btn btn-primary">Subscribe</button>
                </div>
            </div>
            <hr>
            <p class="copyright">This Website is created by Manimaran</p>
        </div>


    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>