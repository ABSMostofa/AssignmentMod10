<!DOCTYPE html>
<html>
<head>
    <title>My Business</title>
    <!-- Include CSS files for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- index.php -->



</head>
<body>
<?php include 'navigation.php';?>
    <!-- Include the Bootstrap carousel for image slider -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/slider1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                    <h3>Image 1</h3>
                    <p>Image 1 description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/slider2.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Image 2</h3>
                    <p>Image 2 description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/slider3.jpg" alt="Slide 3">
                <div class="carousel-caption">
                    <h3>Image 3</h3>
                    <p>Image 3 description</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<section>
<div class="row">
      <div class="col-12 col-lg-5 ">
        <img class="border border-light img-fluid" class="img-fluid" src="./assets/img/about.png" alt="Company Image">
      </div>
      <div class="col-12 col-lg-7">
        <h1 class="display-6"><b>About US</b></h1>
        <p>
        Welcome to our business! We are a small team of experts in the field, dedicated to providing the best services 
        to our clients. With years of experience and a passion for what we do, we strive to exceed our clients' expectations
        and deliver top-notch results.
        </p>
        <p>
        Our mission is to help businesses succeed by providing them with innovative solutions tailored to their needs.
        We specialize in web design, web development, digital marketing, and branding. Our team is committed to delivering
        excellence in every project we undertake, and we take pride in our attention to detail, creativity, and professionalism.        </p>
        <div class="py-1">
          <h3 class="display-6">Follow Us</h3>
          <a href="" class=""><img src="./assets/img/facebook.png" alt=""></a> &nbsp;&nbsp;
          <a href="" class=""><img src="./assets/img/skype.png" alt=""></a> &nbsp;&nbsp;
          <a href="" class=""><img src="./assets/img/linkedin.png" alt=""></a> &nbsp;&nbsp;
          <a href="" class=""><img src="./assets/img/youtube.png" alt=""></a> &nbsp;&nbsp;
        </div>
      </div>
    </div>
</section>

<section>
<div class="container mt-5">
    <h1>Our Services</h1>
    <p>We offer a wide range of services to cater to the unique needs of our clients. Our services include:</p>
    <ul>
        <li>Web design and development</li>
        <li>Digital marketing</li>
        <li>Branding and identity design</li>
        <li>E-commerce solutions</li>
        <li>Mobile app development</li>
        <li>Content creation and management</li>
    </ul>
    <p>Our team of experts uses the latest technologies and industry best practices to deliver high-quality solutions that drive results for our clients. We are committed to providing exceptional service and exceeding our clients' expectations.</p>
</div>
</section>
<section>
<div class="container mt-5">
        <h1>Our Portfolio</h1>
        <p>Check out some of our recent projects:</p>
        <div class="row">
            <div class="col-md-4">
                <img src="./assets/img/project1.jpg" alt="Project 1" class="img-fluid">
                <h4>Project 1</h4>
                <p>Description of Project 1</p>
            </div>
            <div class="col-md-4">
                <img src="./assets/img/project2.jpg" alt="Project 2" class="img-fluid">
                <h4> Project 2</h4>
                    <p>Description of Project 2</p>
            </div>
<div class="col-md-4">
<img src="./assets/img/project3.jpg" alt="Project 3" class="img-fluid">
<h4>Project 3</h4>
<p>Description of Project 3</p>
</div>
</div>
</div>
</section>

<section>
<div class="container mt-5">
        <h1>Our Blog</h1>
        <p>Stay updated with our latest articles and insights:</p>
        <div class="row">
            <div class="col-md-4">
                <h4>Article 1</h4>
                <p>Content of Article 1</p>
            </div>
            <div class="col-md-4">
                <h4>Article 2</h4>
                <p>Content of Article 2</p>
            </div>
            <div class="col-md-4">
                <h4>Article 3</h4>
                <p>Content of Article 3</p>
            </div>
        </div>
    </div>
</section>

<section>
<div class="container mt-5">
        <h1>Contact Us</h1>
        <p>Get in touch with us:</p>
        <form action="contact_form.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</section>


    <?php include 'footer.php'; ?>

    <!-- Include JavaScript files for Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
