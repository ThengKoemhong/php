<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="icon" href="/img/Icon.png">
    <title>createnew_login</title>
</head>
 <style>
    
body nav div img{
    width: 40px;
    height: 20px;
    background-size: 100%;
    padding-right: 10px;
    
}
li{
    list-style-type: none;
    margin-left: 20px;
}
li:hover {
    background-color: rgb(132, 243, 132);
    border-radius: 10px;
}
.carousel-item{
    width: 100%;
    height: 500px;
    background-color: #a7bac3;
}
nav div button{
    margin-left: 50px;
}
nav div ul li a{
    font-weight: bold;
    
}
#text-bg{
    width: 50%;
    height: 400px;
    
}
.carousel-item div img{
    width: 300px;
    height: 300px;
}
 </style>
<body>
    <nav class="w-100 navbar navbar-expand navbar-light bg-light justify-content-between">
        <div class="d-flex w-25 justify-content-center align-items-center" id="logo">
            <img src="img/Icon.svg" alt="">
            <h3>NENCEN</h3>
        </div>
        <div class="collapse navbar-collapse justify-content-center d-flex w-50">
            <ul class="d-flex align-items-center justify-content-center w-50  ">
                <li class="nav-item "><a class="nav-link text-dark " href="">Home</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="">Feathure</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="">Comunication</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="">Blog</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="">Pricing</a></li>
            </ul>
            <button class="btn btn-outline-success">Register Now<img src="img/Right.svg" alt=""></button>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center w-100 " alt="First slide">
                    <div id="text-bg" class="d-flex flex-column align-items-lg-start justify-content-center w-75">
                        <div style="padding-left: 100px;">
                            <h1>Lessons and insights</h1> <br>
                            <h1 class="text-success">From 8 years</h1>
                            <p class="bg-dark-subtle">Where to grow your business as a photographer: site or social
                                media?</p>
                            <button class="btn btn-outline-success ">Register</button>
                        </div>
                    </div>
                    <div class="d-block w-25">
                        <img src="img/logobg.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center w-100 " alt="Second slide">
                    <div id="text-bg" class="w-75 d-flex flex-column align-items-lg-start justify-content-center">
                        <div style="padding-left: 100px;">
                            <h1>The unseen of spending three years at Pixelgrade</h1> <br>
                            <p class="bg-dark-subtle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit
                                amet justo ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat
                                vestibulum lorem sed porta. Nullam mattis tristique iaculis. Nullam pulvinar sit amet
                                risus pretium auctor. Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec
                                elementum pulvinar odio.</p>
                            <button class="btn btn-outline-success ">Learn More</button>
                        </div>
                    </div>
                    <div class="d-block w-25">
                        <img src="img/Frame 35.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center w-100 " alt="Third slide">
                    <div id="text-bg" class="w-75 d-flex flex-column align-items-lg-start justify-content-center">
                        <div style="padding-left: 100px;">
                            <h1>How to design your site footer like we did</h1> <br>
                            <p class="bg-dark-subtle">Donec a eros justo. Fusce egestas tristique ultrices. Nam tempor,
                                augue nec tincidunt molestie, massa nunc varius arcu, at scelerisque elit erat a magna.
                                Donec quis erat at libero ultrices mollis. In hac habitasse platea dictumst. Vivamus
                                vehicula leo dui, at porta nisi facilisis finibus. In euismod augue vitae nisi
                                ultricies, non aliquet urna tincidunt. Integer in nisi eget nulla commodo faucibus
                                efficitur quis massa. Praesent felis est, finibus et nisi ac, hendrerit venenatis
                                libero. Donec consectetur faucibus ipsum id gravida.</p>
                            <button class="btn btn-outline-success ">Learn More</button>
                        </div>
                    </div>
                    <div class="d-block w-25">
                        <img src="img/pana.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 justify-content-center d-flex align-items-center flex-column p-1">
            <h1>Our Clients</h1>
            <p style="color: gray;">We have been working with some Fortune 500+ clients</p>
        </div>
        <div class="justify-content-around align-items-center d-flex p-2">
            <img src="img/Logo-1.png" alt="">
            <img src="img/Logo-2.png" alt="">
            <img src="img/Logo-3.png" alt="">
            <img src="img/Logo-4.png" alt="">
            <img src="img/Logo-5.png" alt="">
            <img src="img/Logo-6.png" alt="">
        </div>
        <div class="w-100 justify-content-center d-flex align-items-center flex-column p-1">
            <h1 class="w-50 text-center">Manage your entire community in a single system</h1>
            <p style="color: gray;">Who is Nextcent suitable for?</p>
        </div>
        <div class="justify-content-around align-items-center d-flex p-2 ">
            <div class="card "  style="width: 18rem;box-shadow: 5px 5px 5px rgb(201, 210, 213);">
                <center> <img class="card-img-top  m-2" style="width: 50px;" src="img/hd2.png"
                        alt="Card image cap">
                </center>
                <div class="card-body">
                    <h5 class="card-title text-center ">
                        Membership Organisations
                    </h5>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;box-shadow: 5px 5px 5px rgb(201, 210, 213);">
                <center> <img class="card-img-top m-2 " style="width: 50px;" src="img/hdr2.svg"
                        alt="Card image cap">
                </center>
                <div class="card-body">
                    <h5 class="card-title text-center ">
                        Clubs And Groups
                    </h5>
                    <p class="card-text text-center">Our membership management software provides full automation of membership renewals and payments</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;box-shadow: 5px 5px 5px rgb(201, 210, 213);">
                <center> <img class="card-img-top m-2 " style="width: 50px;" src="img/hd3.png"
                        alt="Card image cap">
                </center>
                <div class="card-body">
                    <h5 class="card-title ">
                        Membership Organisations
                    </h5>
                    <p class="card-text text-center">Our membership management software provides full automation of membership renewals and payments</p>
                </div>
            </div>
        </div>
        <div style="height: 20px;"></div>
        <div class="w-100 d-flex bg-secondary" style="height: 250px;">
            <div class="w-50 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
               <div>
               <h3 class="text-light">
                Helping a local 
                </h3>
                <h3 class="text-success">
                business reinvent itself
                </h3>
                <p>We reached here with our hard work and dedication</p>
               </div>
            </div>

            <div class="w-50 d-flex flex-column justify-content-around align-items-center flex-wrap" style="height: 100%;">
              <div class="d-flex flex-column justify-content-center align-items-center" style=" width: 150px; height: 100px;">
                    <div>
                    <h3 class="text-light">
                    2,245,341
                    </h3>
                    <p>Members</p>
                    </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center" style=" width: 150px; height: 100px;">
                    <div>
                    <h3 class="text-light">
                    46,328
                    </h3>
                    <p>Club</p>
                    </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center" style=" width: 150px; height: 100px;">
                    <div>
                    <h3 class="text-light">
                    828,867
                    </h3>
                    <p>Event Bookings</p>
                    </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center" style=" width: 150px; height: 100px;">
                    <div>
                    <h3 class="text-light">
                    1,926,436
                    </h3>
                    <p>Payments</p>
                    </div>
              </div>
            </div>
        </div>
        
</body>
</html>