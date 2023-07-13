
<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
    <head>  
        <title>Disease Prediction System </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/login.css">

 
        <style>

button{
    cursor:pointer;
}

</style>

    </head>
    <body>



    <?php
      include "login.php";
    ?> 
        <section class="container content">
            <div class="hompage">
            
            <h2>What concerns you about your health today ?</h2>
            <p>Check your symptoms and find out what could be 
                causing them ,It's fast ,free and anonymous.
            </p>
            <ul>
            <li><button class="homepage-button"onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a>Login as Admin</a></button></li>
           <li> <button class="homepage-button"><a href="intro.php">Start Checkups</a></button></li>
           
            </ul>
         
            </section>
      </div>
      <!-- Done By section -->
      
    <section>
       
      <div class="container1">
        <h2 class="mad">Done By</h2>
        <div class="team-member">
            <!-- Team member 1 -->
            <div class="team-member-card">
               
                <div class="team-member-info">
                    <div class="team-member-name">John Doe</div>
                    <div class="team-member-role">Web Developer</div>
                </div>
            </div>
            <!-- Team member 2 -->
            <div class="team-member-card">
                
                <div class="team-member-info">
                    <div class="team-member-name">Jane Smith</div>
                    <div class="team-member-role">UI/UX Designer</div>
                </div>
            </div>
            <!-- Add more team members as needed -->
           <!-- Team member 3 -->
            <div class="team-member-card">
                
                <div class="team-member-info">
                    <div class="team-member-name">Jane Smith</div>
                    <div class="team-member-role">UI/UX Designer</div>
                </div>
            </div>
            <!-- Team member 4 -->
            <div class="team-member-card">
                
                <div class="team-member-info">
                    <div class="team-member-name">Jane Smith</div>
                    <div class="team-member-role">UI/UX Designer</div>
                </div>
            </div>
        </div>
        <style>
            .container1{

                background-image: url('image.jpg');


background-size: cover;


background-position: center;


background-repeat: no-repeat;


width: 100%;
height: 400px;



  padding: 5%;
  margin-top : 1px; ;
  
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
        

  
  text-align: center;
  
  }
  .team-member-name {
            font-size: 18px;
            font-weight: bold;
        }
        .team-member-role {
            font-size: 14px;
            color: #999;
        }
        .mad{
            margin:10px
        }
  </style>
</section>

        
       
    

    

        

    </body>
</html>