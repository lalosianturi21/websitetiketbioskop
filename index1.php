<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Flix
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./style/app.css">
    <link rel="stylesheet" href="./style/grid.css">
    <script src="https://kit.fontawesome.com/a2331dbcf7.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                <i class="fa-solid fa-film bx-tada main-color text-warning"></i><span class="main-color text-warning"> T</span>io <span class="main-color text-warning">F</span>lix
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#movie">Home</a></li>
                    <li> 
                    <div class="dropdown">
                    <a class="btn btn-transparant dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 16px">Genre</a>
                    <ul class="dropdown-menu bg-dark">
                        <a class="dropdown-item" href="#anime">Anime</a>
                        <a class="dropdown-item" href="#cartoons">Cartoons</a>
                        <a class="dropdown-item" href="#action">Action</a>
                        <a class="dropdown-item" href="#romantic">Romantic</a>
                        <a class="dropdown-item" href="#comedy">Comedy</a>
                    </ul>
                    </div>
                    </li>
                    <li><a href="#series">Series</a></li>
                    <li><a href="#movies">Movies</a></li>
                    <li><a href="daftarfilm/index.php">List Movie</a></li>
                    <li><a href="belitiket/create.php">Buy Ticket</a></li>
                    <li><a href="#about">About</a></li>
                    <li>
                        <div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php 
                            session_start();
                            if (!isset($_SESSION['username'])){
                                echo "<span>LOG IN</span>";
                            } else {
                                echo "<span>" . $_SESSION['username'] . "</span>";
                            }
                        ?>
  </button>
  <ul class="dropdown-menu bg-dark">
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
</div>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger "></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section" id="movie">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                <a href="belitiket/create.php"><img src="./images/black-banner.png" alt=""></a>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Black Panther
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            Black Panther is the title held by T'Challa, a member of the royal family of the fictional African country of Wakanda. After the death of his father, T'Challa claimed the throne and the role of Black Panther. He was exposed to a mystical herb that enhanced his strength and agility to near-superhuman levels.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/watch?v=_Z3QKkl1WyM" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                <a href="belitiket/create.php"><img src="./images/supergirl-banner.jpg" alt=""></a>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Supergirl
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            SUPERGIRL is an action-adventure drama based on the DC Comics character Kara Zor-El, Superman's (Kal-El) cousin who, after 12 years of keeping her powers a secret on Earth, decides to finally embrace her superhuman abilities and be the hero she was always meant to be.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/watch?v=IXAlpqvjAbM" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                <a href="belitiket/create.php"><img src="./images/wanda-banner.jpg" alt=""></a>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Wanda Vision
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            WandaVision is an American web television miniseries, based on the Marvel Comics superheroes Scarlet Witch and Vision. The series is a sequel to Avengers: Endgame. It is the thirteenth television series in the Marvel Cinematic Universe, and the first installment of Phase Four and The Multiverse Saga. The series was produced by Marvel Studios and was released on Disney+.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="https://www.youtube.com/watch?v=njxWyMmuv5Q" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide" id="genre">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="belitiket/create.php"><img src="./images/series/supergirl.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Supergirl
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="belitiket/create.php"><img src="./images/movies/captain-marvel.png" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Captain Marvel
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="belitiket/create.php"><img src="./images/cartoons/demon-slayer.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Infinity Train
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                
                <div class="movie-item">
                <a href="belitiket/create.php"><img src="./images/movies/blood-shot.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Bloodshot
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="belitiket/create.php"><img src="./images/series/wanda.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Wanda Vision
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="belitiket/create.php"><img src="./images/movies/bat-man.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Dark Knight
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section" id="genre">
        <h1 class="text-center"><b>GENRE</b></h1>
        <div class="container">
            <div class="section-header" id="anime">
                Anime
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/anime/secret world.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            The secret world
                        </div>

                        <iframe width="300" height="100" 
                            src="https://www.youtube.com/embed/VlMe7PavaRQ";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/anime/akame ga kill.png" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Akame ga kill
                        </div>
                        <iframe width="300" height="100" 
                            src="https://www.youtube.com/embed/IJ5XisoWTsk";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/anime/kimi no nawa.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Kimi no nawa
                        </div>
                        <iframe width="300" height="100" 
                            src="https://www.youtube.com/embed/0LYv1TgeFD4";>
                        </iframe>
                        <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/anime/classroomoftheelite.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Classroom of the elite
                        </div>
                        <iframe width="300" height="100" 
                            src="https://www.youtube.com/embed/YPh0gqAtWBQ";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/anime/one piece.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            One piece
                        </div>
                        <iframe width="300" height="100" 
                            src="https://www.youtube.com/embed/89JWRYEIG-s";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/anime/tokyo ghoul.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Tokyo ghoul
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/vGuQeQsoRgU";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM --> 
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/anime/haikyu.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                           Haikyu
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/JOGp2c7-cKc";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    
    <br>
    <div class="container">
            <div class="section-header" id="cartoons">
                Cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/cartoons/coco.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                           Coco
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/Ga6RYejo6Hk";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/cartoons/croods.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Croods
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/4fVCKy69zUY";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/cartoons/beautyandthebeast.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Beauty And The Beast
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/Qp4WLIZLsTw";>
                        </iframe>
                        <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/cartoons/dragon.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Dragon Ball
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/wHAaKXtfSOg";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/cartoons/over-the-moon.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Over The Moon
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/P_zuK_pergw";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/cartoons/the lion king.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Lion King
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/lFzVJEksoDY";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/cartoons/aladdin.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Aladdin
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/eTjHiQKJUDY";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    <br>
    <div class="container">
            <div class="section-header" id="action">
                Action
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/action/dracula.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Dracula
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/_2aWqecTTuE";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/action/inception.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Inception
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/8hP9D6kZseM";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/action/ironman.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Iron Man
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/33-KvBH_en8";>
                        </iframe>
                        <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/action/thegray.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            The Gray Man
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/Inur3zkveFM";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/action/theraid.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            The Raid
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/GDYwcjhvD-Y";>
                        </iframe>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/action/terminator2.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Terminator 2
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/OOqIS8_8B9E";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/action/johnwick2.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            John Wick 4
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/qEVUtrk8_B4";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    
    <br>
    <div class="container">
            <div class="section-header" id="romantic">
                Romantic
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/romantic/astarisborn.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            A Star Is Born
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/0gWeEk2QjdY";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/romantic/ifistay.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            If I Stay
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/aE_4mxeWI2A";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/romantic/mebeforeyou.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Me Before You
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/Eh993__rOxA";>
                        </iframe>
                        <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/romantic/midnightsun.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Midnight Sun
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/fEskVQgtwaI";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/romantic/redeeminglove.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Redeeming Love
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/_8RIlIOd_us";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/romantic/theinbetween.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            The In Between
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/MmGNg3nreDA";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/romantic/throughmywindow.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Through My Window
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/5dKvG5u1H-A";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>

    <br>
    <div class="container">
            <div class="section-header" id="comedy">
                Comedy
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/comedy/21 jump street.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Jump Street
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/RLoKtb4c4W0";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                <img src="./images/comedy/extreme job.jpg" alt="">
                <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Extreme Job
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/l9Hu3Xocc-g";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/comedy/free guy.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Free Guy
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/X2m-08cOAbc";>
                        </iframe>
                        <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/comedy/ghostbusters.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Ghost Busters
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/w3ugHP-yZXw";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/comedy/hangover.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Hangover
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/tcdUhdOlz9M";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/comedy/pee mak.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            Pee Mak
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/B9xbj_UK1pc";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/comedy/the king's man.jpg" alt="">
                    <div class="movie-item-content text-center">
                        <div class="movie-item-title">
                            The King's Man
                        </div>
                        <iframe width="300" height="100"
                            src="https://www.youtube.com/embed/5zdBG-iGfes";>
                        </iframe>
                    <br>
                        <div class="movie-infos d-flex justify-content-center">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->
    

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <h1 class="text-center" id="movies"><b>Movies</b></h1>
        <div class="container">
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/end-game.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Avengers End Game
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/joker.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Joker
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/hunter-killer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Hunter Killer
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/insidious.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Insidious
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/love-roise.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                           Love Roise
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/theatre-dead.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Theatre dead
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/movies/transformer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Wanda Vision
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

      <!-- LATEST SERIES SECTION -->
      <div class="section">
        <h1 class="text-center" id="series"><b>Series</b></h1>
        <div class="container">
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/moneyheist.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Money Heist
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/peakyblinders.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                           Peaky Blinders
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/newmoonknight.webp" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            New Moon Knights
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/forlife.webp" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            For Life
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/theboys.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Boys
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/you.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            You
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="belitiket/create.php" class="movie-item">
                    <img src="./images/series/riverdale.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Riverdale
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section">
        <div class="hero-slide-item">
            <img src="./images/transformer-banner.jpg" alt="">
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                    <div class="item-content-title">
                        Transformer
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span>9.5</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>120 mins</span>
                        </div>
                        <div class="movie-info">
                            <span>HD</span>
                        </div>
                        <div class="movie-info">
                            <span>16+</span>
                        </div>
                    </div>
                    <div class="item-content-description">
                    The film stars Shia LaBeouf as Sam Witwicky, a teenager who gets caught up in a war between the heroic Autobots and the villainous Decepticons, two factions of alien robots who can disguise themselves by transforming into everyday machinery, primarily vehicles.
                    </div>
                    <div class="item-action">
                        <a href="https://www.youtube.com/watch?v=cbeB65XMO58" class="btn btn-hover">
                            <i class="bx bxs-right-arrow"></i>
                            <span>Watch now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

   

    <!-- FOOTER SECTION -->
    <footer class="section">
    <section class="about-section">
    	<div class="container">
        	<div class="row clearfix">
            	
                <!--Content Column-->
                <a href="#" class="logo text-center">
                            <i class='bx-movie-play bx-tada main-color'></i>Abo<span class="main-color">u</span>t Us
                        </a>
                        <br>
                        <br>
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                    		
                        	<h2>Purpose and function of making this website :</h2>
                        </div>
                        <div class="text"><p>We provide various kinds of films. This website was created to make buying tickets easier, therefore we make it easier for buyers through online media.</p></div>
                        <p>Those who participated in the creation of this website are :</p>
                        <p>1. Melky Eka Putra Damanik</p>
                        <p>2. Harry Binur Simarmata</p>
                        <p>3. Qhika anastasya br bangun</p>
                        <p>4. Tio Fulalo Simatupang</p>


                        <div class="social-list">
                            <a href="https://m.facebook.com/profile.php?id=100006771917927" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="https://github.com/lalosianturi21" class="social-item">
                                <i class="bx bxl-github"></i>
                            </a>
                            <a href="https://www.instagram.com/lalosianturi21/" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="image">
                        <img src="./images/cinemas1.jpeg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
         
    </footer>
    <!-- END FOOTER SECTION -->

    <!-- COPYRIGHT SECTION -->
    <!-- END COPYRIGHT SECTION -->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="javascript/app.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>