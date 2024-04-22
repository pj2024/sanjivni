<?php
require('conn.php');
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="sec1"> 

        <header class="header">
            <div class="logo">
                <div class="image-con">
                    <img src="CSS/image/logo.png" alt="">
                </div>
                <p><span>Sanjivni</span></p>
            </div>

            <div class="menu-opions">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                    <li><a href="bglist.php">BachatGat List</a></li>
                </ul>
            </div>

            <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                    echo"
                    <div class='user btn'>
                        <p> $_SESSION[username]-<a href='logout.php'>LOGOUT</a></p>
                    </div> 
                    ";
                }else{
                    echo" 
                    <div class='btns'>
                        <div class='btn' id='signup'><a href='signup.php'>SignUp</a></div>
                        <div class='btn' id='login'><a href='login.php'>Login</a></div>
                    </div>
                    "; 
                 }
            ?> 
            

        
        </header>
       
        <div class="bg-img-sec"></div>
        <div class="text-con">
            <p class="slogun">
                बचत गटाचा घेऊन सहारा,
                सुखाचा राहिल संसारा वर पहारा।
            </p>

            <p class="register-sen">
                तुमच्या बचत गटाची येथे नोंदणी करा....
            </p>
            
             <?php
                if(isset($_SESSION['logged_in_bachat_gat']) && $_SESSION['logged_in_bachat_gat'] == true){
                    echo"
                    <div class='Bguser btn'>
                        <p> $_SESSION[bgname]-<a href='logout.php'>LOGOUT</a></p>
                    </div> 

                    <div class='btn-con'>
                        <div id='add-product' class='btn sec-1-btn'><a href='addProduct.php'>Add Products</a></div>
                    </div>
                    ";
                }else{
                    echo" 
                    <div class='btn-con'>
               <div id='register-btn' class='btn sec-1-btn'><a href='regForm.php'>Register Here..</a></div>
               <div id='login-bachatBtn' class='btn sec-1-btn'><a href='logBachat.php'>Login Bachat Gat</a></div></div>
                "; 
                }
            ?> 
            
        </div>
       
    

        
       
    </section>
    <section class="sec2" >
        <div class="inner-sec2" id="about">
            <h1>About Section</h1>
            <div class="text-con-sec2">
                <div class="image-sec2">
                    <img src="CSS/image/logo.png" alt="">
                </div>

                <div class="text-con">
                    <h1>Sanjivni <br> <span>(Bound Togeter)</span></h1>
                    <p>आपल्या बचत गट नोंदणीची आणि ग्राहकांना उत्पादांच्या संदर्भात माहिती प्राप्त करण्याची संधी दिलेली जाते. आमच्या बचत गटने ग्राहकांसाठी किंवा उपभोक्त्यांसाठी पुरवलेल्या उत्पादांच्या विस्तृत वर्णनातून, आपल्या बचत गटने सोपे, सुरक्षित, आणि सापेक्ष वितरित करण्याचा प्रमिस दिलेला आहे. हा खंड ग्राहकांना आमच्या सेवेंची माहिती मिळवण्याची एक अचूक स्रोत आहे, ज्यामुळे त्यांना ठरवलेल्या बचत गटमध्ये सहभागी व्हायचं त्यास सापेक्ष बनविलेलं आहे.</p>
                </div>
    
            </div>
          
           
        </div>
    </section>

    <section class="sec3">
        <!--?xml version="1.0" standalone="no"?-->             
       <div class="inner-sec3" id="contactus">
        <h1>Contact Us</h1>
            <div class="text-con-sec3">
                <div class="form-con">
                    <h2>Contact Us Form</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="" id="message" name="message" cols="10" rows="3" placeholder="Message"></textarea>
                        <button class="btn" id="submitBtn" name='contactsubmit'>Submit</button>
                    </form>
                </div>
                <div class="image-con">
                    <!--?xml version="1.0" standalone="no"?-->        
                    
                    <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">                    <defs>                         <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">                            <stop id="stop1" stop-color="rgba(239, 68, 68, 1)" offset="0%"></stop>                            <stop id="stop2" stop-color="rgba(239, 68, 68, 1)" offset="100%"></stop>                        </linearGradient>                    </defs>                <path fill="url(#sw-gradient)" d="M23.9,-28.5C31.9,-21.8,39.8,-15.1,40.8,-7.5C41.7,0.1,35.6,8.6,30.4,17.5C25.2,26.4,20.8,35.7,13.1,40.5C5.4,45.3,-5.6,45.5,-15.3,42C-24.9,38.5,-33.2,31.2,-37.1,22.4C-41.1,13.6,-40.7,3.2,-38.3,-6.1C-35.9,-15.5,-31.5,-23.9,-24.8,-30.8C-18.1,-37.7,-9.1,-43.1,-0.5,-42.4C8,-41.8,15.9,-35.1,23.9,-28.5Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>              </svg>
                    <img src="CSS/image/conus1.png" alt="">
                </div>
                
            </div>
       </div>


       <?php
           if (isset($_POST["contactsubmit"])) {
            $query = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[message]');";

                       
            $result = mysqli_query($conn, $query);

            if($result){
                echo
                    "<script>
                    alert('Contact Sent Successfully.');
                    document.location.href = 'index.php';
                    </script>"; 
            }else{
                echo
                "<script>
                alert('data not sended.');
                document.location.href = 'index.php';
                </script>";  
            }

           } 
       ?>
    </section>

    <footer class="footer">
        <div class="fot-inner-con">
              <div class="fot-text-con">
                  <div class="text-con">
                      <h1>our Team</h1>
                      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>Toll free: +12345678910, + 123456781</p>
                      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-check"><path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h8"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/><path d="m16 19 2 2 4-4"/></svg>example1@gmail.com, this@gmail.com</p>
                      <p style="border-bottom: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>MGM's College of CS & IT, Nanded</p>
                      <a href="https://maps.app.goo.gl/aJKSZLEAXmmgNWsj6" target="_blank">FIND US ON MAP &gt;</a>
                  </div>
                  <div class="text-con">
                      <h1>useful links</h1>
                      <p>Home <span>&gt;</span></p>
                      <p>About<span>&gt;</span></p>
                      <p>Our Services<span>&gt;</span></p>
                      <p style="border-bottom: none;">Contact us<span>&gt;</span></p>
                  </div>
                  <div class="text-con">
                      <h1>working hours</h1>
                      <p>Monday<span>9:30am-11:30pm</span></p>
                      <p>Tuesday<span>9:30am-11:30pm</span></p>
                      <p>wedensday<span>9:30am-11:30pm</span></p>
                      <p>Thirsday<span>9:30am-11:30pm</span></p>
                      <p>Friday<span>9:30am-11:30pm</span></p>
                      <p>Saturday<span>9:30am-11:30pm</span></p>
                      <p style="border-bottom: none;">Sunday<span>closed</span></p>
                  </div>
                  <div class="text-con">
                      <h1>subscribe us</h1>
                      <p style="border-bottom: none;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. consectetur!</p>
                      <form action="">
                          <input type="email" placeholder="Email Address..." id="email-input">
                          <button class="btn" id="subscribeBtn">Subscribe</button>
                      </form>
                  </div>
              </div>
              <div class="down-con">
                  <div class="logo">
                    <div class="image-con">
                        <img src="CSS/image/logo.png" alt="">
                    </div>
                    <p><span>Sanjivni</span></p>
                  </div>
                  <div class="copyright-text">
                      <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copyright"><circle cx="12" cy="12" r="10"/><path d="M14.83 14.83a4 4 0 1 1 0-5.66"/></svg></span>Copyright 2024 &nbsp;<span>Sanjivni Team</span>&nbsp;. All Rights Reserved.</p>
                  </div>
                  <div class="socil-icons">
                      <div class="icons">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                      </div>
                      <div class="icons">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                      </div>
                      <div class="icons">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                      </div>
                      <div class="icons">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                      </div>
                      <div class="icons">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                      </div>
                      <!-- <div class="icons"></div> -->
                  </div>
              </div>
        </div>
  </footer>

    <script src="page.js"></script>
</body>
</html>