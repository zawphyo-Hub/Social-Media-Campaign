<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sms.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>SMC Website</title>
</head>
<body class="con">

    <?php 
        include('Navbar.php'); 
    ?>
    <section class="sectionContact"> 
           <div class="contactContainer">
                      
                <div class="contactForm">
                    <div class="midhead">
                        <h4>Send Us A Message</h4>
                        
                    </div>
                    <div class="combination">
                    <div class="left">
                        
                        <div class="address">
                            <div class="addressInside">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>Address</h4>

                            </div>
                            <div class="para">
                            <p>California, CA 90012,</p>
                            <p>103 Main StreetLos.</p>
                            </div>
                            
                           
                        </div> 
                        <div class="phone">
                           <div class="phoneInside">
                               <i class="fa-solid fa-phone"></i>
                               <h4>Phone</h4>
                           </div>
                           <div class="para">
                           <p>+959124569</p>
                           <p>+012678355</p>
                           </div>
                          

                        </div>
                        <div class="email">
                           <div class="emailInside">
                               <i class="fa-solid fa-envelope"></i>
                               <h4>Email</h4>
                           </div>
                           <div class="para">
                           <p>sms77@info.gmail.com</p>
                           
                           </div>
                           

                        </div>
                          
                       
                    </div>
                    <div class="right">
                       
                       <form action="Contact_process.php" method="post" >

                            <input type="text" name="firstname" placeholder="Enter your firstname" required> <br><br>
                            <input type="text" name="lastname" placeholder="Enter your lastname" required> <br><br>
                            <input type="email" name="email" placeholder="Enter your email" required> <br><br>
                            
                            <textarea class="textarea" name="message" placeholder="Write your message" required></textarea> <br><br>

                            <button class="butcon" type="submit" name="send">Send</button>
                            
                        </form>
                    </div>
                    

                    </div>
                    <span class="policy">To Understand the Importance and Implications, <a href="policy.php"> Read Our Privacy Policies</a></span>
                </div> 
            </div>
            
    </section>
   

    
</body>
</html>