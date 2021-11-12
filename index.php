<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Netflix</title>
    <style>
        .login-button {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="navbar">
            <div class="navbar-container">
                <h1 style="color: #e40c0c;">Netflix</h1>
                <ul class="menu-list">
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item">Movies</li>
                    <li class="menu-list-item">Series</li>
                    <li class="menu-list-item">Popular</li>
                    <a href='subscription.php' class='login-button'>Subscription</a>
                </ul>
                <div class="profile-container">
                    <img class="profile-picture" src="img/profile.png" alt="">&nbsp;&nbsp;
                    <div class="profile-text-container">
                        <?php
                        if (session_status() === PHP_SESSION_NONE) {
                            echo "<span><a href='login.php' class='login-button'>Logout</a></span>";           
                            
                        } else {
                            session_destroy();
                            echo "<span><a href='login.php' class='login-button'>Logout</a></span>&nbsp;&nbsp;";                            
                            
                        }
                        ?>

                        <!-- <i class="fas fa-caret-down"></i> -->
                    </div>&nbsp;&nbsp;
                    <div class="toggle">
                        <i class="fas fa-moon toggle-icon"></i>
                        <i class="fas fa-sun toggle-icon"></i>
                        <div class="toggle-ball"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <i class="left-menu-icon fas fa-search"></i>
            <i class="left-menu-icon fas fa-home"></i>
            <i class="left-menu-icon fas fa-users"></i>
            <i class="left-menu-icon fas fa-bookmark"></i>
            <i class="left-menu-icon fas fa-tv"></i>
        </div>
        <div class="container">
            <div class="content-container">
                <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
                    <img class="featured-title" src="img/f-t-1.png" alt="">
                    <p class="featured-desc">In 1858 Texas, brothers Ace and Dicky Speck
                        drive a group of shackled black slaves on foot. Among them is Django,
                        sold off and separated from his wife Broomhilda von Shaft,
                        kill Dicky. Schultz offers Django his freedom and $75 in exchange for help tracking down the Brittles..</p>
                    <button class="featured-button">WATCH</button>
                </div>
                <div class="movie-list-container">
                    <h1 class="movie-list-title">NEW RELEASES</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/nr1.jpg" alt="">
                                <span class="movie-list-item-title">Red Notice</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/nr2.jpg" alt="">
                                <span class="movie-list-item-title">Arcane</span>
                                <p class="movie-list-item-desc">Tensions between two cities boil over as new inventions threaten revolution. a drug
                                    transforms humans into monsters.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/nr3.jpg" alt="">
                                <span class="movie-list-item-title">Hellbound</span>
                                <p class="movie-list-item-desc">A story about otherworldly
                                    beings who appear out of nowhere to issue a decree and condemn individuals to hell.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/nr4.jpg" alt="">
                                <span class="movie-list-item-title">Blown Away</span>
                                <p class="movie-list-item-desc">Blown Away is cranking up the heat for a spectacular holiday showdown!.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/5.jpg" alt="">
                                <span class="movie-list-item-title">Avengers</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/7.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                </div>
                <div class="movie-list-container">
                    <h1 class="movie-list-title">Popular on Netflix</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/p1.jpg" alt="">
                                <span class="movie-list-item-title">Squid Games</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/p2.png" alt="">
                                <span class="movie-list-item-title">Money heist</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/p3.jpg" alt="">
                                <span class="movie-list-item-title">House of secrets</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/p4.jpg" alt="">
                                <span class="movie-list-item-title">Little things</span>
                                <p class="movie-list-item-desc">Little Things returns for its fourth and final season. After over six years of togetherness,
                                    watch as Dhruv and Kavya.....</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/p5.jpg" alt="">
                                <span class="movie-list-item-title">Amry of thieves</span>
                                <p class="movie-list-item-desc">In this prequel to Zack Snyder's Army of the Dead, small-town bank teller Dieter gets drawn into the adventure of a
                                    lifetime when a mysterious woman recruits him to join a crew of Interpol’s most wanted criminals.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/3.jpg" alt="">
                                <span class="movie-list-item-title">Storm</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/4.jpg" alt="">
                                <span class="movie-list-item-title">1917</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                </div>
                <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                    <img class="featured-title" src="img/f-t-2.png" alt="">
                    <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                        deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                        minima voluptatibus incidunt. Accusamus, provident.</p>
                    <button class="featured-button">WATCH</button>
                </div>
                <div class="movie-list-container">
                    <h1 class="movie-list-title">NEW RELEASES</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/2.jpeg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/15.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/3.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/4.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/5.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/1.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                </div>
                <div class="movie-list-container">
                    <h1 class="movie-list-title">NEW RELEASES</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/17.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/18.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/19.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/7.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/1.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/1.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="img/1.jpg" alt="">
                                <span class="movie-list-item-title">Her</span>
                                <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    hic fugit similique accusantium.</p>
                                <button class="movie-list-item-button">Watch</button>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                </div>
            </div>
        </div>
        <script src="app.js"></script>
    </div>
</body>

</html>