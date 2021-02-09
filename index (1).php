<?php 
require_once('connection.php'); // Database connection file
require_once('function.php');  // PHP functions file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="logot.jpg" type="image/x-icon">
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, our Team name is</div>
                <div class="text-2">Narikootam</div>
                <div class="text-3">And We are <span class="typing"></span></div>
                <a href="#contact">Hire us</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="logot.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Yogeshwaran and I'm a <span class="typing-2"></span></div>
                    <p> We are team of Full Stack Web Developers, App Developers and Embedded Developer</p>
                    <a href="/developer/projects.php#main">See our Projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Development</div>
                        <p>Web development refers to building, creating, and an maintaining websites. It includes aspects such as web design, web publishing, web programming, and database management. ... These tools make it easy for anyone to create and edit their own website using a web-based interface.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Designing</div>
                        <p>Design involves problem-solving and creativity. In contrast, production involves a routine or pre-planned process. A design may also be a mere plan that does not include a production or engineering processes although a working knowledge of such processes is usually expected of designers.
.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Development(Native)</div>
                        <p>Each app is different and our methodologies are always evolving, but this is a fairly standard process when developing mobile apps. ... This mobile app development process typically includes idea, strategy, design, development, deployment, and post-launch phases.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Our creative skills & experiences.</div>
                    
                    <a href="/developer/projects.php#main">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>90%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>90%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpg" alt="">
                        <div class="text">Yogeshwaran</div>
                        <p>A Full Stack Web developer and Native App Developer.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpg" alt="">
                        <div class="text">Vicky</div>
                        <p>A Frontend developer also knows Wordpress.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpg" alt="">
                        <div class="text">Santhosh</div>
                        <p>A Python Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpg" alt="">
                        <div class="text">Ranjith</div>
                        <p>A Python Developer.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects  section start -->
    <section class="services" id="projects">
        <div class="max-width">
            <h2 class="title">Our Projectss</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                        <div class="text">Yogesh Projects</div>
                        <ul>
                            <li style="list-style-type:none"><i class="fa fa-hand-o-right" style="font-size:24px"></i>Weather app using Django</li>
                            <li style="list-style-type:none"><i class="fa fa-hand-o-right" style="font-size:24px"></i>Social media using PHP</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-wordpress" aria-hidden="true"></i>
                        <div class="text">Vicky's Projects</div>
                        <ul>
                            <li style="list-style-type:none"><i class="fa fa-hand-o-right" style="font-size:24px"></i>TODO List Using Javascript</li>
                            <li style="list-style-type:none"><i class="fa fa-hand-o-right" style="font-size:24px"></i>Blog using Wordpress</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Santhosh Projects</div>
                        <ul>
                            <li style="list-style-type:none"><i class="fa fa-hand-o-right" style="font-size:24px"></i>Snake Game using Pygame(2D)</li>
                            <li style="list-style-type:none"><i class="fa fa-hand-o-right" style="font-size:24px"></i>Problem solver Badge</li>
                        </ul>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Our Team will make your project in safe and secure way. </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Narikootam</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Tirupur, Tamilnadu</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">infosimple07@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message us</div>
                    <form action="" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="cli_name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="cli_mail"  required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="cli_sub"  required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="cli_message"  required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="cli">Send message</button>
                            <?php include("insert_client.php")?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
    <div>
    <?php
    $total_page_views = total_views($conn, $page_id); // Returns total views of this page
    echo "<strong>How many of them Contacted Us:</strong> " . $total_page_views;
    ?>
    </div>
        <span>Created By <a href="http://yjobs.epizy.com/developer" style="color:blue; text-decoration:none;"> Our Team</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
    <script>
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);
    </script>
</body>
</html>