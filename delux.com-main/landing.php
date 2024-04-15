<?php
    include 'header.php';
?>


<div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1" ></li>
        <li data-target="#demo" data-slide-to="2" ></li>
        <li data-target="#demo" data-slide-to="3" ></li>
        <!-- <li data-target="#demo" data-slide-to="4" ></li> -->
    </ul>

    <div class="carousel-inner" style="z-index:-1;">


      <div class="carousel-item active">
            <img src="./Images/fernando-alvarez-rodriguez-M7GddPqJowg-unsplash.jpg" alt="" width="100%" height="auto">
        </div>

    <div class="carousel-item ">
    <img src="./Images/alexander-kaunas-xEaAoizNFV8-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    
    <!-- <div class="carousel-item ">
    </div> -->

    
    <div class="carousel-item ">
        <img src="./Images/ralph-ravi-kayden-FqqiAvJejto-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    
    <div class="carousel-item ">
        <img src="./Images/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    <!-- <a href="#demo" class="carousel-control-prev" data-slide="prev" style="cursor: pointer;margin-top:45%;">
        <span class="carousel-control-prev-icon" ></span>
    </a>

    <a href="#demo" class="carousel-control-next" data-slide="next" style="cursor: pointer;margin-top:45%;">
        <span class="carousel-control-next-icon"></span>
    </a> -->

    </div>
</div>

<section class="bookings">
  <h1 class="booking_head"> Hotel Booking System</h1>
    <div class="background">
            <form action="booking.php" method="POST">
          <span> <b class="checkings"> Check-In</b><input type="date" name="cin" id="cin"></span>
          <span> <b class="checkings"> Check-Out</b><input type="date" name="cout" id="cout" placeholder="Check-Out"></span>
                  <input type="submit" value="CHECK AVAILABILITY">
            </form>
    </div>
</section>
<!-- Beginning of swiper -->
<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="Image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/room5.jpg" alt="first image" class="card-img">
                    </div>

                    <div class="card-content">
                          <h2 class="names">Habitacion estandar</h2>
                        <p class="description"> Our exquisite standard room for
                            <br>our delectible guests. 50% off for first
                            <br> time reservations via our website.

                        
                         </p>
                         <a href="#">
                         <button class="button">View more..</button>
                         </a>
                    </div>      
                </div>

            </div>
    

            <div class="card swiper-slide">
                <div class="Image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/room2.jpg" alt="first image" class="card-img">
                        
                    </div>

                    <div class="card-content">
                        <h2 class="names">La Belle Chambre</h2>
                        <p class="description"> The room for our belle ladies.
                            <br> It comes with free breakfast in bed
                            <br>a complimentary card to go.
                         </p>
                         <a href="#">
                         <button class="button">View more..</button>
                         </a>
                    </div>      
                </div>

            </div>

            <div class="card swiper-slide">
                <div class="Image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/room6.jpg" alt="first image" class="card-img">
                        
                    </div>

                    <div class="card-content">
                        <h2 class="names">Stanza all'aperto</h2>
                        <p class="description"> The grand deluxe with amazing
                            <br> outdoor view. one of our customer favourites
                            <br>comes with complementary facilities.
                         </p>
                         <a href="#">
                         <button class="button">View more..</button>
                         </a>
                    </div>      
                </div>

            </div>

            <div class="card swiper-slide">
                <div class="Image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/room1.jpg" alt="first image" class="card-img">
                        
                    </div>

                    <div class="card-content">
                        <h2 class="names">Cuarto de madera</h2>
                        <p class="description">If your'e a lover of wooden furniture,
                            <br>then you'd love this room. it has 
                            <br> unique furnitures and a crazy amazing rooftop view
                         </p>
                         <a href="#">
                         <button class="button">View More..</button>
                         </a>           
                        </div>      
                </div>

            </div>

            

            <div class="card swiper-slide">
                <div class="Image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/room3.jpg" alt="first image" class="card-img">
                        
                    </div>

                    <div class="card-content">
                        <h2 class="names">Kambal na Kwarto</h2>
                        <p class="description">Popular children's room with
                            <br> twin beds.Comes with monitor for parents
                            <br>free breakfast and dinner.
                         </p>
                         <a href="#">
                         <button class="button"> View more..</button>
                         </a> 
                        </div>      
                </div>

            </div>

            <div class="card swiper-slide">
                <div class="Image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/room4.jpg" alt="first image" class="card-img">
                        
                    </div>

                    <div class="card-content">
                        <h2 class="names">Domatio enos andra</h2>
                        <p class="description"> The one man room away from
                            <br> the world, a room with
                            <br>warmth just like home.
                         </p>
                         <a href="#">
                         <button class="button">View more...</button>
                         </a>
                    </div>      
                </div>

            </div>

        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

</div>
<script type="text/javascript">
        const nav = document.querySelector("#header");
            window.addEventListener("scroll", () => {
                if(window.scrollY >= 100){
                    nav.classList.add("active_nav");
                }
                else{
                    nav.classList.remove("active_nav");
                }
            })
            function login(){
                window.open("http://localhost/delux2/delux.com-main/login1.php","_blank","left=500")
            }
</script>

    <!-- <script>
window.console.error("You made a mistake");
</script> -->
<?php
    require_once("contacthome.php");

    require_once("footer.php");
?>

