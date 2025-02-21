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
				<h3 class="adminName">ADMIN CONTROL</h3>

			</div>			
			
			<div class="nav-link">
				<ul >
			        <li class="li"><a href="Userlists.php">USERS LIST</a></li>
					<li class="li"><a href="Popularapp_form.php">APP FORM</a></li>
					<li class="li"><a href="Popularsocial.php">POPULAR SOCIAL MEDIA APPS</a></li>			        			                                  
		        </ul>
                
			</div>

            
			<div class="log-nav">
				
				<ul class="ul3">
				   <div class="userSearch">
					<span class="userSearchIcon">
					    <i class="fa-solid fa-magnifying-glass searchBTN"></i>
					
					</span>
				    </div>
					<form class="search-form" action="searchapp_admin.php" method="post">
					<div class="userSearchBox">
					    
                        <input class="input1" type="text" name="keyword" placeholder="Enter Social Media Name to search">
						<i class="fa-solid fa-xmark closeBTN"></i>
						
					</div>
				    </form>
					<li class="logoutAdmin"><a href="Logout.php">LOGOUT</a></li>

				</ul>
			</div>

            <label for="check" class="checkbtn">
				<i class="fa-solid fa-bars fa-sm"></i>
			</label>

			
	</nav>
   

    <script>
		let searchBTN = document.querySelector('.searchBTN');
        let closeBTN = document.querySelector('.closeBTN');
        let userSearchBox = document.querySelector('.userSearchBox');

        searchBTN.onclick = function(){
        userSearchBox.style.display = "flex";
        userSearchBox.classList.add('active');
  
        }
       closeBTN.onclick = function(){
  
       userSearchBox.classList.remove('active');
       userSearchBox.style.display = "none";
  
     }
	</script>
	
  
</body>
</html>