<?php
  if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = wordwrap($_POST['message']);
    $headers = "From:".$email. " Name:" .$name;
    $to = 'atta@akexplains.com, wardag.atta@gmail.com';
    mail($to,$subject,$txt,$headers);
    // send email
    if (mail($to,$subject,$message,$headers)){
      echo "Message Sent Successfull";
    }
    else{
      print_r(error_get_last());
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawsome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- custom stylesheet of DotMe-->
    <link rel="stylesheet" href="css/dotme.css">
    <title>DotMe</title>
</head>
<body>
    <!-- Header section starts here -->
    <header  class="header-section" id="header-sectionid">
        <div id="particles-js" class="particles">

        </div>
        <nav id="nav" class="navbar  navbar-expand-lg fixed-top">
            <div class="container text-uppercase p-2">
              <a class="navbar-brand font-weight-bold" href="#">ATTAULLAH WARDAG</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="nave" class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#header-sectionid">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="about" class="nav-link" href="#about-sectionid">About Me</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#portfolio-sectionid">Portfolio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact-sectionid">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div  class="container">
          <div class="hero-content">
            <p> Hi, I'M ATTAULLAH WARDAG</p>  
            <h1> 
              <a href="" class="typewrite" data-period="2000" data-type='[ "Software Engineer","Web Developer", "UX/UI Designer","Blogger"  ]'>
                <span class="wrap"></span>
              </a>
            </h1>
              <p>Software Engineer, Developer, UX/UI Designer, Blogger</p>
            <ul>
              <li><a href="https://www.facebook.com/ak.wardag" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/attaullahkhanwr" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/ak_wardag/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://sa.linkedin.com/in/attaullah-wardag-86866aa5" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCnnSKlM1YJl5Jx94gEfVSrA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="https://github.com/attaullahwardag" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
      </div>
    </header> 
    <!-- Ends Header-Section-->
    <!--============ About section starts here ==============-->
    <section class="about-section" id="about-sectionid">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4">
            <div class="img-bg">
              <div class="about-img">
                <img src="images/about-img.jpg" class="img-responsive" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-7">
             <h2> 
                Attaullah Khan Wardag a Software Engineer specializing in Web-Development and Designing UX/UI, I am a blogger and I write about Computer science, Programming and Technology. 
             </h2>
              <p> I have done Master In Computer Science & Software Engineering from Virtual University Of Pakistan. Working in the IT and Tech industry since 2012 on vrious positions in the field of IT. 8 years of diversified working Experience in diffrent countries & clutures like Pakistan, Dubai and Saudi Arabia.</p>
              <a class="btn download-resume" href="resume/experience certificate with text.pdf">Download Resume</a>
          </div>
        </div>
      </div>
    </section>
    <!--End About-Section -->
    <!--============ Services-Section Starts ==============-->
    <section class="services-section" id="services-section">
      <div class="container">
        ddd
      </div> 
    </section>
    <!--End Services-Section -->
    <!--============ Portfolio-Section Starts ==============-->
    <section class="portfolio section" id="portfolio-sectionid">
        <div class="container">
          <div class="top-side">
            <h4 class="title">MY WORKS</h4>
            <h2>PORTFOLIO</h2>
          </div>
          
          <div class="filters">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".front-end">Web-Designing</li>
              <li data-filter=".back-end"> Web-Development</li>
              <li data-filter=".mobile-app">Mobile Apps</li>
              <li data-filter=".portal">Portal</li>
            </ul>
          </div>
          
          <div class="filters-content">
            <div class="row grid">
              <div class="col-sm-4 all front-end">
                <div class="item">
                  <img src="images/portfolio-1.jpg" alt="Work 1">
                  <div class="p-inner">
                    <h5>DOTME</h5>
                    <div class="cat">
                        <p>HTML/CSS template </p>
                        <a href="https://akexplains.com/dotweb-DEMO/" target="_blank">Live Demo</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all front-end">
                <div class="item">
                  <img src="images/cleaners.jpg" alt="Work 1">
                  <div class="p-inner">
                    <h5>CLEANERS</h5>
                    <div class="cat">
                        <p>HTML/CSS template </p>
                        <a href="https://akexplains.com/cleaners-DEMO/" target="_blank">Live Demo</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all back-end">
                <div class="item">
                  <img src="images/web.jpg" alt="Work 1">
                  <div class="p-inner">
                    <h5>Work 1</h5>
                    <div class="cat">Web Full-Stack</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all mobile-app">
                <div class="item">
                  <img src="images/mobile.jpg" alt="Work 1">
                  <div class="p-inner">
                    <h5>Work 1</h5>
                    <div class="cat">Mobile Apps</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all portal">
                <div class="item">
                  <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
                  <div class="p-inner">
                    <h5>Work 1</h5>
                    <div class="cat">Mobile Apps</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--End Portfolio-Section -->
    <!--============ contact-Section Starts ==============-->
    <section class="contact-section" id="contact-sectionid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="text-uppercase">Get in touch</h2>
                    <p>35 Manfoha, Salam Street</p>
                    <p>Riyadh, Kingdome of Saudi Arabia</p>
                    <p>+966 597568961</p>
                    <p>atta@akexplains.com</p>
                    <p>wardag.atta@gmail.com</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group contact-block1">
                              <input type="text" id="name" name="name" class="form-control input" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="email" id="email" class="form-control input" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <input type="text" id="subject" class="form-control input" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <textarea id="message" class="form-control input" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <input type="submit" class="btn btn-dark input btn-send w-100" onclick="sendEmail()" value="Send message">
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End contact-section -->
    <!--============ footer-Section Starts ==============-->
    <section class="footer-section" id="footer-sectionid">
        <div class="container text-center">
            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/ak.wardag" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/attaullahkhanwr" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ak_wardag/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://sa.linkedin.com/in/attaullah-wardag-86866aa5" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCnnSKlM1YJl5Jx94gEfVSrA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://github.com/attaullahwardag" target="_blank"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
            <p class="copyrights">© Copyrights AkExplains. All rights reserved.</p>
            <div class="credits">
              <p>Designed by <a href="#">Attaullah Wardag</a></p>  
            </div>
        </div>
    </section>
    <!--End footer-section -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/main.js"></script>
    
    <script>
      function sendEmail(){
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var message = $("#message");
        $.ajax({
          url:'index.php',
          method:'POST',
          dataType:'json',
          data: {
            name:name.val(),
            email:email.val(),
            subject:subject.val(),
            message:message.val()

           }, success: function(resposne){
             console.log(resposne);
           }

        });
      }
    </script>
    <script>
      $(window).scroll(function() {
        var height = $(window).scrollTop();
       // console.log(height);
        if(height > 200) {
          $('#nav').removeClass('navbar-dark');
          $('#nav').addClass('navbar-light bg-light');
        } else {
          $('#nav').removeClass('bg-light');
          $('#nav').addClass('navbar-dark');
        }
      });   
    </script>
    <script>
      $('#nave').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'
      });
    </script>
    <script>
      var TxtType = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
      };

      TxtType.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 200 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
          }

          setTimeout(function() {
          that.tick();
          }, delta);
      };

      window.onload = function() {
          var elements = document.getElementsByClassName('typewrite');
          for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-type');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
              }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
          document.body.appendChild(css);
      };
    </script>
</body>
</html>