<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetics WebDesign </title>

    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section start page -->
<section id="header" class="header">
<a href="#" class="logo"><i class="fas fa-female"></i> GLAMOUR</a>
<nav class="navbar">
    <a href="home.html">home</a> 
    <a href="#about">about</a> 
    <a href="#product">Product</a>
    <a href="#shop">Shop Now</a>   
    <a href="#contact">Contact US</a>
</nav>

<div class="icons">
    <a href = "search.html"><i class = "fas fa-search"></i></a>
    <a href = "login.html"><i class = "fas fa-user"></i></a>
    <a href = "register.html"><button name = "submit" class = "btn">Register</button></a>
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
</div>
</section>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">

    <div class="slide active" style="background:url(img/cosmetic.png) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>Cosmetics <br> Care</span>
        <h3>Be more confident AND<br>
            Shine Beautifully<br>
            Forever </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>

    <div class="slide" style="background:url(img/home-bg-2.jpg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>Cosmetics <br> Care</span>
        <h3>Be more confident AND<br>
            Shine Beautifully<br>
            Forever </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>

    <div class="slide" style="background:url(img/home-bg-3.jpg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>Cosmetics <br> Care</span>
        <h3>Be more confident AND<br>
            Shine Beautifully<br>
            Forever </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>
     
    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
    
</section>

<!-- home section ends -->

<!-- category section starts -->

<section class="category">
    <div class="box-container">

        <a href="#" class="box">
            <img src="img/category-1.png">
            <h3>skincare</h3>
        </a>

        <a href="#" class="box">
            <img src="img/category-2.png">
            <h3>lips</h3>
        </a>

        <a href="#" class="box">
            <img src="img/category-3.png">
            <h3>hair</h3>
        </a>

        <a href="#" class="box">
            <img src="img/category-4.png">
            <h3>eye</h3>
        </a>

        <a href="#" class="box">
            <img src="img/category-5.png">
            <h3>makeup</h3>
        </a>

    </div>
</section>
<!-- category section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <div class="img">
        <img src="img/about-img.jpg" alt="">
    </div>
    <div class="content">
        <div class="box">
            <h3>About <span>Us...</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Incidunt ab voluptatibus impedit animi, odit mollitia explicabo commodi ducimus molestiae error.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Incidunt ab voluptatibus impedit animi, odit mollitia </p>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-address-card"></i>
                <p>address card</p>
            </div>
            <div class="icons">
                <i class="fas fa-award"></i>
                <p>award cards</p>
            </div>
            <div class="icons">
                <i class="fas fa-gift"></i>
                <p>gift cards</p>
            </div>
        </div>
    </div>
</section>

<!-- about section ends -->
<section class = "gallery" id = "product">
        <h1 class = "heading">our<span>gallery</span></h1>
        <div class = "box-container">

            <div class = "box">
                <img src = "img/FACE.JFIF">
                <div class = "content">
                    <h3>face</h3>
                    <p>Keep your face glow</p>
                    <a href= "#" class = "btn">Read More</a>
                </div>
            </div>

            <div class = "box">
                <img src = "img/eye.JFIF">
                <div class = "content">
                    <h3>eyes</h3>
                    <p>Make your eye sparkling</p>
                    <a href= "#" class = "btn">Read More</a>
                </div>
            </div>

            <div class = "box">
                <img src = "img/lips.JFIF">
                <div class = "content">
                    <h3>lips</h3>
                    <p>Keep Lips free from dryness</p>
                    <a href= "#" class = "btn">Read More</a>
                </div>
            </div>

            <div class = "box">
                <img src = "img/hair.jpg">
                <div class = "content">
                    <h3>hairs</h3>
                    <p>Long, silk and shiny treatment</p>
                    <a href= "#" class = "btn">Read More</a>
                </div>
            </div>

            <div class = "box">
                <img src = "img/makeup.JFIF">
                <div class = "content">
                    <h3>make up</h3>
                    <p>Make your face more attractive</p>
                    <a href= "#" class = "btn">Read More</a>
                </div>
            </div>

            <div class = "box">
                <img src = "img/skincare.jpg">
                <div class = "content">
                    <h3>skin care</h3>
                    <p>Soft skin and safe </p>
                    <a href= "#" class = "btn">Read More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- gallery section ends -->

<!-- banner section starts -->

<section class="banner" style="background:url(img/background1.jpg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content" >
        <span>special <span>offer</span></span>
        <h3>upto 50% off</h3>
        <p>Get your favourite makeup kit and face pack on 50% discount. You can Choose any item and get on afordable price here.</p>
        <a href="#" class="btn">shop now</a>
    </div>
</section>

<!-- banner section ends -->
<!-- shop section starts -->

<section class="shop" id="shop">
    <h1 class="heading">our <span>shop</span></h1>
    <div class="box-container">

        <div class="box">
            <div class="img">
                <img src="img/product-1.jpg">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>airbrush matte</h3>
                <div class="price">$40-<span>$200.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="img">
                <img src="img/product-2.jpeg">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>lactic acid treatment</h3>
                <div class="price">$40-<span>$200.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="img">
                <img src="img/product-3.jpg">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>midnight must</h3>
                <div class="price">$40-<span>$200.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="img">
                <img src="img/product-4.jpg">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>face & body foundation</h3>
                <div class="price">$40-<span>$200.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="img">
                <img src="img/product-5.jpeg">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>eyeliner pack</h3>
                <div class="price">$40-<span>$200.99</span></div>
                <a href="" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="img">
                <img src="img/product-6.jpg">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>moisture balam</h3>
                <div class="price">$40-<span>$200.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
    </div>
</section>

<!-- shop section ends -->

    
    <!-- message section starts -->
    <section class="message" id="contact" style="background:url(img/message-bg.jfif) no-repeat; background-size:cover; 
    background-position: center;">
        <form action="">
            <h3>get in <span>touch</span></h3>
            <input type="text" placeholder="full name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="phone" class="box">
            <textarea placeholder="message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </section>

    <!-- message section ends -->


<!-- services section starts -->

<section class="services">

    <div class="box">
        <img src="img/icon-1.png" alt="">
        <h3>free delivery</h3>
        <p>No extra charges on product </p>
    </div>

    <div class="box">
        <img src="img/icon-2.png" alt="">
        <h3>secure payments</h3>
        <p>Card transaction, bank payment available</p>
    </div>

    <div class="box">
        <img src="img/icon-3.png" alt="">
        <h3>24/7 support</h3>
        <p>Available at any time</p>
    </div>

</section>

<!-- services section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
            <a class="link" href="#about"> <i class="fas fa-angle-right"></i> about</a>
            <a class="link" href="#product"> <i class="fas fa-angle-right"></i> Product</a>
            <a class="link" href="#shop"> <i class="fas fa-angle-right"></i> Shop Now</a>
            <a class="link" href="#contact"> <i class="fas fa-angle-right"></i> Contact Us</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my favorite </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> private policy </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +9237347753 </a>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +977 9834545423 </a>
            <a class="link" href="#"> <i class="fas fa-envelope"></i> barsha939@gmail.com </a>
            <a class="link" href="#"> <i class="fas fa-map"></i> Kathmandu, Nepal - 44400 </a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for recent updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

    <div class="credit"> created by <span>Barsha Shakya@copyright2021</span> || all rights reserved! </div>

</section>



<!-- custom js file link -->
<script src="js/main.js"></script>

</body>
</html>