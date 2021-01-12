<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UK Online Learning Courses</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Slab">
  <link rel="stylesheet" href="css/slick/slick.css">
  <link rel="stylesheet" href="css/slick/slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-xl" id="navbar">
      <a class="navbar-brand" href="#">
        <img src="img/logo.webp" alt="Logo" class="logo-img">
      </a>
      <!-- Mobile Navbar -->
      <span class="nav-toggler" onclick="openNav()">&#9776;</span>
      <div class="sidenav" id="mySidenav">
        <span href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</span>
        <a href="#">Home</a>
        <button class="dropdown-btn">Courses<i class="fa fa-angle-down"></i></button>
        <div class="dropdown-container">
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Online MBA</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Part Time MBA</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Online Masters Degree</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Master of Education</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Master of Arts</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>PG Certificates</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>DBA & Doctorate</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Online BA & BSc</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Universities</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Why Study Online?</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Course Index</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Online Degrees by Category</a>
        </div>
        <button class="dropdown-btn">Admissions<i class="fa fa-angle-down"></i></button>
        <div class="dropdown-container">
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Tuition Fee Payment</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>FAQ</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Universities</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Course Index</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Talk to a Consultant</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Refer a Friend</a>
        </div>
        <button class="dropdown-btn">About<i class="fa fa-angle-down"></i></button>
        <div class="dropdown-container">
          <a class="dropdown-content" href="#">-<i class="hypen"></i>About Stafford</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Meet the Team</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Stafford Crest</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Testimonials</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Partner with us</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Universities</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Global Presence</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Why Study Online?</a>
        </div>
        <a href="#">Careers</a>
        <a href="#">Blog</a>
        <a href="#">Events</a>
        <button class="dropdown-btn">Payment<i class="fa fa-angle-down"></i></button>
        <div class="dropdown-container">
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Tuition Fee Payment</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Security</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Refer a Friend</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>FAQ</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>About Stafford</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Course Index</a>
        </div>
        <button class="dropdown-btn">Contact<i class="fa fa-angle-down"></i></button>
        <div class="dropdown-container">
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Contact Us</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Global Presence</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>About Stafford</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Courses</a>
          <a class="dropdown-content" href="#">-<i class="hypen"></i>Universities</a>
        </div>
      </div>
      <!-- /Mobile Navbar -->
      <!-- Desktop Navbar -->
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              COURSES <i class="fa fa-angle-down"></i>
            </a>
            <div class="courses-menu dropdown-menu multi-column columns-3">
              <div class="row">
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">Online MBA</a>
                  <a class="dropdown-item" href="#">Part Time MBA</a>
                  <a class="dropdown-item" href="#">Online Masters Degree</a>
                  <a class="dropdown-item" href="#">Master of Education</a>
                </div>
                <div class="multi-column-dropdown two-border">
                  <a class="dropdown-item" href="#">Master of Arts</a>
                  <a class="dropdown-item" href="#">PG Certificates</a>
                  <a class="dropdown-item" href="#">DBA & Doctorate</a>
                  <a class="dropdown-item" href="#">Online BA & BSc</a>
                </div>
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">Universities</a>
                  <a class="dropdown-item" href="#">Why Study Online?</a>
                  <a class="dropdown-item" href="#">Course Index</a>
                  <a class="dropdown-item" href="#">Online Degrees by Category</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              ADMISSIONS <i class="fa fa-angle-down"></i>
            </a>
            <div class="admissions-menu dropdown-menu multi-column columns-2">
              <div class="row">
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">Tuition Fee Payment</a>
                  <a class="dropdown-item" href="#">FAQ</a>
                  <a class="dropdown-item" href="#">Universities</a>
                  <a class="dropdown-item" href="#">Course Index</a>
                </div>
                <div class="multi-column-dropdown one-border">
                  <a class="dropdown-item" href="#">Talk to a Consultant</a>
                  <a class="dropdown-item" href="#">Refer a Friend</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              ABOUT <i class="fa fa-angle-down"></i>
            </a>
            <div class="about-menu dropdown-menu multi-column columns-3">
              <div class="row">
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">About Stafford</a>
                  <a class="dropdown-item" href="#">Meet the Team</a>
                  <a class="dropdown-item" href="#">Stafford Crest</a>
                  <a class="dropdown-item" href="#">Testimonials</a>
                </div>
                <div class="multi-column-dropdown two-border">
                  <a class="dropdown-item" href="#">Partner with us</a>
                  <a class="dropdown-item" href="#">Universities</a>
                  <a class="dropdown-item" href="#">Global Presence</a>
                  <a class="dropdown-item" href="#">Why Study Online?</a>
                </div>
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">Course Index</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CAREERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">EVENTS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              PAYMENT <i class="fa fa-angle-down"></i>
            </a>
            <div class="payments-menu dropdown-menu multi-column columns-2">
              <div class="row">
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">Tuition Fee Payment</a>
                  <a class="dropdown-item" href="#">Security</a>
                  <a class="dropdown-item" href="#">Refer a Friend</a>
                  <a class="dropdown-item" href="#">FAQ</a>
                </div>
                <div class="multi-column-dropdown one-border">
                  <a class="dropdown-item" href="#">About Stafford</a>
                  <a class="dropdown-item" href="#">Course Index</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              CONATACT <i class="fa fa-angle-down"></i>
            </a>
            <div class="contact-menu dropdown-menu multi-column columns-2">
              <div class="row">
                <div class="multi-column-dropdown">
                  <a class="dropdown-item" href="#">Contact Us</a>
                  <a class="dropdown-item" href="#">Global Presence</a>
                  <a class="dropdown-item" href="#">About Stafford</a>
                  <a class="dropdown-item" href="#">Courses</a>
                </div>
                <div class="multi-column-dropdown one-border">
                  <a class="dropdown-item" href="#">Universities</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- /Desktop Navbar -->
    </nav>
    <!-- /Navbar -->
  </header>

  <main>
    <div class="container">
      <!-- Icon Boxes -->
      <div class="row icon-boxes">
        <div class="col-lg-4 icon-box">
          <div class="icon-box-inner">
            <div class="icon-wrap">
              <img src="img/star-icon.png" alt="Star" class="icon-img">
            </div>
            <h3 class="icon-title">UNIVERSITIES</h3>
            <a class="view-more-link">VIEW MORE<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 icon-box">
          <div class="icon-box-inner">
            <div class="icon-wrap">
              <img src="img/book-icon.png" alt="Book" class="icon-img">
            </div>
            <h3 class="icon-title">COURSES</h3>
            <a class="view-more-link">VIEW MORE<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 icon-box">
          <div class="icon-box-inner">
            <div class="icon-wrap">
              <img src="img/calendar-icon.webp" alt="Calendar" class="icon-img">
            </div>
            <h3 class="icon-title">EVENTS</h3>
            <a class="view-more-link">VIEW MORE<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /Icon Boxes -->
      <!-- Study For -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="study-title">Study for a UK DBA, MBA, MSc, MEd, PGCE</h1>
          <p class="study-text">Stafford Global are pioneer providers of DBA, MBA, MSc, MEd, PGCE & TESOL degrees
            courses,
            from some of the best UK universities. Our course portfolio consists of Distance Learning and Online
            Learning Degrees,
            and is available to students in Africa, Asia, Canada, Europe & the Middle East.</p>
          <p class="study-text">For more than 26 years Stafford Global has held strong to our mission – to help students
            achieve a degree
            from the world’s best Universities, without the need to disrupt their career or personal commitments.
            Stafford Global offers
            students carefully selected DBA Doctorates, Part-time MBAs, Online MBAs, Online Masters degrees and
            diploma-to-degree programmes,
            guiding them in choosing the right UK degree for their personal and career aspirations, to assisting them in
            making a successful
            application. We are proud to have helped over 20,000 graduates attain their dream and live a better life.
          </p>
          <p class="study-text">Established in 1993, our Higher Education Consultant Hubs in global markets provide
            administrative support
            to students in Asia, Africa, Canada, Europe, Levant and the Middle East. Speak to a <a href="#">Higher
              Education Consultant</a> to learn more.</p>
        </div>
      </div>
      <!-- /Study For -->
      <!-- Our Programmes -->
      <div class="col-lg-12">
        <h1 class="program-title">Our Programmes</h1>
      </div>
      <div class="row img-boxes">
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-1 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">MBA</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">MBA</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-2 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Teaching & Education</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Teaching & Education</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-3 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Data Science & Data Analytics</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Data Science & Data Analytics</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-4 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">DBA & Doctorate</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">DBA & Doctorate</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row img-boxes">
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-5 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Finance & Banking</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Finance & Banking</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-6 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">HR</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">HR</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-7 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">IT & Risk Management</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">IT & Risk Management</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-8 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Management</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Management</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row img-boxes">
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-9 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Marketing & Communication</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Marketing & Communication</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-10 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Project Management & Logistics</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Project Management & Logistics</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-11 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Psychology & Healthcare</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Psychology & Healthcare</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
        <div class="flip-card col-md-3 img-box">
          <div class="flip-card-inner">
            <div
              class="flip-card-front img-box-12 img-box-inner d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title align-middle">Course Index</h3>
            </div>
            <div class="flip-card-back d-flex flex-column justify-content-center align-items-center">
              <h3 class="img-title back-title align-middle">Course Index</h3>
              <p class="view-courses-btn">View Courses</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /Our Programmes -->
    </div>
    <!-- Register Now -->
    <div class="register-panel">
      <div class="register-container">
        <div class="register-inner d-flex flex-column align-items-center">
          <p class="register-text">
            Online Learning<br>
            <span style="color: #ffb606;">Global Open Day</span><br>
            Saturday, 28 November, 2020
          </p>
          <h1 class="register-title">RESITER NOW</h1>
          <div class="counter-block d-flex">
            <div class="counter d-flex flex-column justify-content-center align-items-center">
              <p class="counter-number" id="days">00</p>
              <p class="counter-text">DAYS</p>
            </div>
            <div class="counter d-flex flex-column justify-content-center align-items-center">
              <p class="counter-number" id="hours">00</p>
              <p class="counter-text">HOURS</p>
            </div>
            <div class="counter d-flex flex-column justify-content-center align-items-center">
              <p class="counter-number" id="minutes">00</p>
              <p class="counter-text">MINUTES</p>
            </div>
            <div class="counter d-flex flex-column justify-content-center align-items-center">
              <p class="counter-number" id="seconds">00</p>
              <p class="counter-text">SECCONS</p>
            </div>
          </div>
          <a href="#" class="register-btn">
            <p>CLICK HERE FOR FREE REGISTRATION</p>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register Now -->
    <!-- Events -->
    <div class="container">
      <div class="events-heading">
        <div class="view-all-btn">VIEW ALL</div>
        <h1 class="events-title">Events</h1>
        <p class="events-text">Upcoming Education Events to feed your brain.</p>
      </div>
      <div class="events-post">
        <div class="events-day">
          <p class="events-date">09</p>
          <p class="events-month">NOVEMBER</p>
        </div>
        <div class="events-img">
          <img src="img/PGCE-Webinar.jpg" alt="PGCE">
        </div>
        <div class="events-detail">
          <a href="#" class="events-content">
            <p>University of Nottingham PGCEi Middle East Webinar
          </a>
          </a>
          <p class="events-schedule">
            <i class="fa fa-clock-o"></i> 7:30 PM - 8:30 PM
            <i class="fa fa-map-marker"></i> WEBINAR
          </p>
        </div>
      </div>
      <div class="events-post">
        <div class="events-day">
          <p class="events-date">10</p>
          <p class="events-month">NOVEMBER</p>
        </div>
        <div class="events-img">
          <img src="img/ISSG-Webinar.jpg" alt="PGCE">
        </div>
        <div class="events-detail">
          <a href="#" class="events-content">
            <p>University of Northampton MBA Webinar
          </a>
          </a>
          <p class="events-schedule">
            <i class="fa fa-clock-o"></i> 7:30 PM - 8:30 PM
            <i class="fa fa-map-marker"></i> WEBINAR
          </p>
        </div>
      </div>
    </div>
    <!-- /Events -->
    <!-- What Students Say -->
    <div class="comments-panel">
      <div class="comments-inner d-flex flex-column align-items-center">
        <h1 class="comments-title">What Students Say</h1>
        <hr class="comments-border">

        <div class="avatar-carousel slider-nav">
          <div class="avatar">
            <img src="img/Clinton-100x100.jpg" alt="Clinton">
          </div>
          <div class="avatar">
            <img src="img/Mary-100x100.jpg" alt="Mary">
          </div>
          <div class="avatar">
            <img src="img/Tiwari-100x100.jpg" alt="Tiwari">
          </div>
          <div class="avatar">
            <img src="img/Mihira-100x100.jpg" alt="Mihira">
          </div>
          <div class="avatar">
            <img src="img/Hany-100x100.jpg" alt="Hany">
          </div>
          <div class="avatar">
            <img src="img/enu-testimonial-100x100.jpg" alt="ENU">
          </div>
          <div class="avatar">
            <img src="img/northampton-testimonial-100x100.jpg" alt="Northampton">
          </div>
        </div>
        <div class="text-carousel slider-for">
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Clinton D’Sa</h3>
            <h3 class="student-university">UNIVERSITY OF NORTHAMPTON | MBA</h3>
            <p class="comments-text">
              Hello, my name is Clinton D’Sa and I am the dep. General Manager at Basem Int’l General Trading Co. based
              in the State of Kuwait. With being appointed as the Dep. General Manager it became apparent the need for
              me to broaden my horizons, and learn the hidden aspects of conducting and managing a Business. Hence, an
              MBA seemed like the ideal qualification required to satisfy my needs. One of the major obstacles I faced
              was the humongous amount of variety and options of universities to choose from with an insane amount of
              formalities and documents required etc. A Tough Decision and a tedious time consuming chore to say the
              least. To my rescue comes Stafford Associates. I first heard of the good reviews of Stafford by word of
              mouth from close friends located in Dubai itself. After contacting them, they simplified everything for me
              and guided me from the beginning i.e. selection& enrollment right up till I received my degree in my hand.
              To put it simply, “Stafford simplified and organized my selection, enrollment and decision process.
              Coordinated and followed up my requirements on my behalf and just made things overall much easier, plus
              doing all of this with the highest degree of professionalism and courtesy”. I would definitely
              wholeheartedly recommend anyone interested in acquiring a MBA degree or other further studies in the
              Middle East area to contact Stafford Associates.
            </p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Mary Lally</h3>
            <h3 class="student-university">EDINBURGH NAPIER UNIVERSITY | BA BUSINESS MANAGEMENT</h3>
            <p class="comments-text">
              The online route to studying, particularly as a mature student, provides a truly worthwhile and valuable
              experience.
              It allows you to work at your own pace and at times that are suitable to you. The more effort you put it
              in, the greater the reward.
            </p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Harsh Tiwari</h3>
            <h3 class="student-university">EDINBURGH NAPIER UNIVERSITY | MBA - MARKETING & SALES</h3>
            <p class="comments-text">
              The online staff are brilliant. Sometimes I felt stupid asking questions but I never got an annoying reply
              from any of the online team – they are just brilliant. So yes I would definitely refer this to people who
              have an interest in studying online – Edinburgh Napier rocks!
            </p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Mihira Samarthne</h3>
            <h3 class="student-university">EDINBURGH NAPIER UNIVERSITY | MBA - FINANCE</h3>
            <p class="comments-text">
              I have been working for 15 years now, so it was difficult for me to go for a full-time MBA course. With my
              limited time available this was the option and I really enjoyed doing that.
            </p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Hany Elmantawy</h3>
            <h3 class="student-university">UNIVERSITY OF NORTHAMPTON | MBA</h3>
            <p class="comments-text">
              Studying the MBA at the University of Northampton through Stafford is a top-notch option for any student
              seeking individual attention, knowledgeable and experienced professors, and a more personal MBA experience
              than a larger program could offer. Fortunately, because of what I learned in this MBA program I am able to
              coach the non-MBA folks through it, helping my team to identify trends and clues and efficiently use the
              model to simulate the different levers and tradeoffs that drive sound decision-making. I would definitely
              recommend the MBA program at the University of Northampton through Stafford Global because it’s a good
              value for anyone who wants to succeed in management and organizational leadership.
            </p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Gaby Stein</h3>
            <h3 class="student-university">EDINBURGH NAPIER UNIVERSITY | BSC NURSING</h3>
            <p class="comments-text">
              I was on the brink of entering into another program with a similar University in UK but I realise now, in
              hindsight, that it would have been a big mistake. The service and attitude of Stafford and Napier have
              been amazing, no problem too big or small to address and sort out swiftly. Moreover, the kindness and
              cooperation received from the many role players was totally unexpected and I’m truly grateful. May you all
              be fervently blessed!
            </p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h3 class="student-name">Grant Lowe</h3>
            <h3 class="student-university">UNIVERSITY OF NORTHAMPTON | MBA</h3>
            <p class="comments-text">
              The MBA journey is a challenge that requires dedication, drive and commitment to overcome the amount of
              work involved to achieve the satisfaction of completing the modules and then concluding the quest with the
              final dissertation. In order to succeed in this undertaking, it requires many hours of work and
              perseverance, not only yourself but your support team as well. It was therefore a great pleasure to work
              with highly motivated and committed staff from the university and Stafford Global that provided the
              support required. Stafford staff were exceptional in helping with the registration, financing and
              providing the workshops to enhance the experience of online postgraduate study. Highly recommended as this
              degree is not only career enhancing but opens the mind to explore, question and critically assess your
              internal and external environments.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /What Students Say -->
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="img/logo2.webp" alt="Logo" class="footer-logo">
          <div class="email-text">
            <i class="fa fa-envelope"></i>
            <a class="email-address" href="#">info@staffordglobal.org</a>
          </div>
          <div class="social-links">
            <a class="social-link"><i class="fa fa-facebook-f"></i></a>
            <a class="social-link"><i class="fa fa-twitter"></i></a>
            <a class="social-link"><i class="fa fa-linkedin"></i></a>
            <a class="social-link"><i class="fa fa-instagram"></i></a>
            <a class="social-link"><i class="fa fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="footer-links col-md-2">
          <p><a class="footer-link" href="#">About Stafford</a></p>
          <p><a class="footer-link" href="#">Meet the Team</a></p>
          <p><a class="footer-link" href="#">Universities</a></p>
          <p><a class="footer-link" href="#">Contact Us</a></p>
        </div>
        <div class="footer-links col-md-2">
          <p><a class="footer-link" href="#">Courses</a></p>
          <p><a class="footer-link" href="#">Events</a></p>
          <p><a class="footer-link" href="#">Testimonials</a></p>
          <p><a class="footer-link" href="#">FAQs</a></p>
        </div>
        <div class="footer-links col-md-2">
          <p><a class="footer-link" href="#">Global Presence</a></p>
          <p><a class="footer-link" href="#">Talk to Consultant</a></p>
        </div>
        <div class="footer-links col-md-2">
          <p><a class="footer-link" href="#">Privacy Policy</a></p>
          <p><a class="footer-link" href="#">Terms & Conditions</a></p>
          <p><a class="footer-link" href="#">Cookies</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Footer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="css/slick/slick.min.js"></script>
  <script src="js/action.js"></script>
  <script src="js/counter.js"></script>
</body>

</html>