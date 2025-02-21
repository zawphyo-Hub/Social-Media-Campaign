<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sms.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>SMC Website</title>
</head>
<body>

    <nav  id="navbar" class="navigation">
			<input type="checkbox" id="check">
			
			<div class="sms-logo">
				<img src="images/slack.png" alt="Images of sms logo">
				<h3 class="logo">SMC</h3>

			</div>			
			
			<div class="nav-link">
				<ul class="ul">
					
					<li class="li1"><a href="Home.php">Home</a></li>
					
			        
					<div class="select-menu">
							<div class="select-btn">
								<span class="sBtn-text">Teen Safety Campaigns</span>
								<i class="fa-solid fa-angle-down"></i>
							</div>
							<ul class="options">
					           <li class="option"><a href="campaignInfo.php">Information About Campaigns</a></li>
							   <li class="option"><a href="parentTips.php">How Parents Can Help</a></li>
			                   <li class="option"><a href="userSocialApp.php">Popular Social Media Apps</a></li>
			                   
					        </ul>
					</div>
					
					  			        				        
					<li class="li"><a href="livestreaming.php">Livestreaming</a></li>
                    <li class="li"><a href="LegislationGuidance.php">Legislation and Guidance</a></li>
                    <li class="li"><a href="Contact.php">Contact</a></li>  
					
         			                         
		        </ul>
				

			</div>
			
			<div class="log-nav">
				
				<ul class="ul2">
				<div id="google_translate_element"></div>
				   <div class="userSearch">
					<span class="userSearchIcon">
					    <i class="fa-solid fa-magnifying-glass searchBTN"></i>
					
					</span>
				    </div>
					<form class="search-form" action="searchsocialApp.php" method="post">
					<div class="userSearchBox">
					    
                        <input class="input1" type="text" name="keyword" placeholder="Enter Social App to search safety instruction">
						<i class="fa-solid fa-xmark closeBTN"></i>
						
					</div>
				    </form>
					<li><a class="login-link" href="Login.php"><i class="fa-regular fa-user"></i></a></li>

				</ul>
			</div>
            
			

            <label for="check" class="checkbtn">
				<i class="fa-solid fa-bars fa-sm"></i>
			</label>

			
	</nav>
	<script src="navbar.js"></script>
	
    <script type="text/javascript">
    function googleTranslateElementInit() 
    {
       new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>
 
    <script type="text/javascript" 
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    
    
</body>
</html>