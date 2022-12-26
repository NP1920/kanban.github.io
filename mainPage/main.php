<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kanban project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span>JCB</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#products" class="menu-btn">Products</a></li>
                <!-- <li><a href="#kanban" class="menu-btn">Kanban</a></li> -->
                <li><a href="#teams" class="menu-btn">Our Team</a></li>
                <li><a href="#contact" class="menu-btn">Contact Us</a></li>
            </ul>
            <!-- <button class="log-out">logout</button> -->
            <!-- <button class="log-out"><a href="../login_page/login.html">Sign out</a></button> -->

            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">

            <div class="home-content">
                <div class="text-1">Welcome to our </div>
                <div class="text-2">KANBAN PORTAL</div>
                <div class="text-3">Improving <span class="typing"></span></div>
                <a href="#portal">Click here</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About </h2>
            <div class="about-content">
                <div class="column left">
                    <img src="kanbanbackimg.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Improving <span class="typing-2"></span></div>
                    <p>Kanban is a popular Lean workflow management method for defining, managing, and improving
                        services that deliver knowledge work. It helps you visualize work, maximize efficiency, and
                        improve continuously. Work is represented on Kanban boards, allowing you to optimize work
                        delivery across multiple teams and handle even the most complex projects in a single
                        environment.The Japanese word “kanban”, meaning “visual board” or a “sign”, has been used in the
                        sense of a process definition since the 1950s. It was first developed and applied by Toyota as a
                        scheduling system for just-in-time manufacturing.</p>
                    <a href="../hyperlink_about page/hyperlinkedpageindex.html" target="_blank">Learn more about our
                        process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products section start -->
    <section class="Products" id="products">
        <div class="max-width">
            <h2 class="title">Our products</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        
                        <a href="https://www.jcb.com/en-in/products/backhoe-loaders" target="_blank"><img src="backhoe.jpg" alt=""></a>     
                        <div class="text">Backhoe</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <a href="https://www.jcb.com/en-in/products/mini-excavators" target="_blank"><img src="mini.jpg" alt=""></a> 
                        <div class="text">Mini Excavators</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <a href="https://www.jcb.com/en-in/products/skid-steer-loaders" target="_blank"><img src="skid.jpg" alt=""></a>
                        
                        <div class="text">Skid Steer Loaders</div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- kanban-->
    <section class="Kanban" id="portal">
        <div class="max-width">
            <h2 class="title">Kanban</h2>
            <div class="kanhalf">

                <div class="dropdown">Our Suppliers
                    <ul class="dropdown-menu">
                        <li><a href="../backend/index.php" target="_blank">Bony</a></li>
                        <li><a href="#chitra">Chitra</a></li>
                        <li><a href="#rikki">Rikki</a></li>
                        <li><a href="#dipti">Dipti Lal Judge</a></li>
                        <li><a href="#stanley">Stanley</a></li>
                        <li><a href="#carrier">Carrier</a></li>
                        <li><a href="#gate">Gates India</a></li>
                        <li><a href="#mother">Motherson</a></li>
                        <li><a href="#lps">LPS</a></li>
                        <li><a href="#sks">SKS</a></li>
                        <li><a href="#lps">LPS</a></li>
                    </ul>

                </div>
                <img src="kbadvantages.jpg" alt="kanbanimg">

            </div>

        </div>
    </section>


    <!-- teams -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Our team</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Sunil Sharma</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Vijay Pawadia</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Manisha</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Dilip James</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Shagorika Patil</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>For any queries, please reach out to us:</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Sunil Sharma</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Mahindra Sez, Near bagru, Jaipur, Rajasthan</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">sunil.sharma@jcb.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Us</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Visit our main site <a href="https://www.jcb.com/en-in" target="_blank">JCB</a>
    </footer>

    <script src="script.js"></script>
</body>

</html>