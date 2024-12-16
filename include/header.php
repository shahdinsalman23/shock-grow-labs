<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
       
<div id="main">


    <!-- Header Section Start -->
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="covid-alert">
                        <p>Covid-19 Shipping Delay Notice</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="head-top-shop">
                        <div class="shopping-cart">
                            <a href="#"><i class='bx bx-shopping-bag'></i> Shopping Cart <span>0</span></a>
                            <a href="#"><svg class="icon-globe icon" viewBox="0 0 50 50" width="100%" height="100%">
                                    <path
                                        d="M 25 1.9199219 C 12.265113 1.9199219 1.9199219 12.265113 1.9199219 25 C 1.9199219 37.734887 12.265113 48.080078 25 48.080078 C 37.734887 48.080078 48.080078 37.734887 48.080078 25 C 48.080078 12.265113 37.734887 1.9199219 25 1.9199219 z M 24 4.0371094 L 24 13.970703 C 21.43251 13.91011 18.991445 13.623022 16.740234 13.152344 C 17.136627 11.9515 17.587103 10.835559 18.087891 9.8339844 C 19.740825 6.5281156 21.837286 4.5160498 24 4.0371094 z M 26 4.0371094 C 28.162714 4.5160498 30.259175 6.5281156 31.912109 9.8339844 C 32.414496 10.838757 32.866379 11.958806 33.263672 13.164062 C 31.015269 13.630037 28.5709 13.911377 26 13.970703 L 26 4.0371094 z M 19.171875 4.7402344 C 18.086481 5.8772845 17.118637 7.2998344 16.298828 8.9394531 C 15.727502 10.082106 15.226366 11.34271 14.789062 12.6875 C 12.825936 12.158279 11.050587 11.492361 9.5175781 10.71875 C 12.097501 7.9227151 15.411073 5.8180109 19.171875 4.7402344 z M 30.828125 4.7402344 C 34.585289 5.8169681 37.895737 7.9189636 40.474609 10.710938 C 38.96425 11.498668 37.190868 12.172098 35.216797 12.703125 C 34.778353 11.352409 34.274712 10.086534 33.701172 8.9394531 C 32.881363 7.2998344 31.913519 5.8772845 30.828125 4.7402344 z M 41.783203 12.273438 C 44.280319 15.563254 45.849591 19.596544 46.054688 24 L 37.013672 24 C 36.940686 20.642697 36.511581 17.472843 35.777344 14.632812 C 38.021162 14.025788 40.043564 13.230357 41.783203 12.273438 z M 8.2050781 12.289062 C 9.9635362 13.222752 11.989301 14.00879 14.226562 14.615234 C 13.489633 17.459671 13.059462 20.635904 12.986328 24 L 3.9453125 24 C 4.1500856 19.603485 5.7148727 15.576078 8.2050781 12.289062 z M 16.175781 15.085938 C 18.608124 15.603479 21.237145 15.911692 24 15.972656 L 24 24 L 14.986328 24 C 15.060725 20.787369 15.480743 17.762271 16.175781 15.085938 z M 33.828125 15.099609 C 34.521088 17.7726 34.939401 20.792796 35.013672 24 L 26 24 L 26 15.972656 C 28.764457 15.913393 31.396477 15.612271 33.828125 15.099609 z M 3.9453125 26 L 12.986328 26 C 13.059314 29.357303 13.488419 32.527156 14.222656 35.367188 C 11.978838 35.974212 9.9564363 36.769643 8.2167969 37.726562 C 5.7196806 34.436746 4.1504088 30.403456 3.9453125 26 z M 14.986328 26 L 24 26 L 24 34.027344 C 21.235543 34.086607 18.603523 34.387729 16.171875 34.900391 C 15.478912 32.2274 15.060599 29.207204 14.986328 26 z M 26 26 L 35.013672 26 C 34.939275 29.212631 34.519257 32.237729 33.824219 34.914062 C 31.391876 34.396521 28.762855 34.088308 26 34.027344 L 26 26 z M 37.013672 26 L 46.054688 26 C 45.849914 30.396515 44.285127 34.423922 41.794922 37.710938 C 40.036464 36.777248 38.010699 35.99121 35.773438 35.384766 C 36.510367 32.540329 36.940538 29.364096 37.013672 26 z M 24 36.029297 L 24 45.962891 C 21.837286 45.48395 19.740825 43.471884 18.087891 40.166016 C 17.585504 39.161243 17.133621 38.041194 16.736328 36.835938 C 18.984731 36.369963 21.4291 36.088623 24 36.029297 z M 26 36.029297 C 28.56749 36.08989 31.008555 36.376978 33.259766 36.847656 C 32.863373 38.0485 32.412897 39.16444 31.912109 40.166016 C 30.259175 43.471884 28.162714 45.48395 26 45.962891 L 26 36.029297 z M 14.783203 37.296875 C 15.221647 38.647591 15.725288 39.913466 16.298828 41.060547 C 17.118637 42.700166 18.086481 44.122716 19.171875 45.259766 C 15.414711 44.183032 12.104263 42.081036 9.5253906 39.289062 C 11.03575 38.501332 12.809132 37.827902 14.783203 37.296875 z M 35.210938 37.3125 C 37.174064 37.841721 38.949413 38.507639 40.482422 39.28125 C 37.902499 42.077285 34.588927 44.181989 30.828125 45.259766 C 31.913519 44.122716 32.881363 42.700166 33.701172 41.060547 C 34.272498 39.917894 34.773634 38.65729 35.210938 37.3125 z">
                                    </path>
                                </svg> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="header-logo">
                        <img src="images/logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About us</a></li>
                            <li><a href="product.php">Products</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="header-end">
                        <input type="search" name="search" id="" placeholder="Search the store">
                        <span><i class='bx bx-search'></i></span>
                    </div>
                    <div class="search-btn">
                         <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="selected-item-txt">
        <p>SALE UP TO 70% OFF ON SELECTED ITEMS*</p>
    </div>
    <!-- Header Section End -->


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="about-us.php">About us</a>
        <a href="product.php">Products</a>
        <a href="contact-us.php">Contact Us</a>
        </div>