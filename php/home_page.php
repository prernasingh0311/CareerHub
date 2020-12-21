<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career hub</title>
    <link rel= "icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $phone = $_POST['psw'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "register";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn) { 
    die("Sorry unable to store :". mysqli_connect_error());
  } 
  else {
    $sql = "INSERT INTO `sign_up` (`eMail`, `phone`) VALUES ('$email', '$phone')";
   $result =  $conn->query($sql); 
  }
} 
?>

<link rel= "stylesheet" href = "../css/home.css">
<body>
    <div class= "navbar">
    <div id='cssmenu'>  
        <ul>
           <li>
            <a href="#" class="list-group-item"><i class="fa fa-home fa-fw"></i> Home</a>

           </li>
           <li>
            <a href="#" class="list-group-item"><i class="fa fa-book"></i> Stream</a>

              <ul>
                 <li><a href='#'>Commerce</a>
                    <ul>
                       <li><a href='../html/com.html'>With maths</a></li>
                       <li><a href='../html/com.html'>Without maths</a></li>
                    </ul>
                 </li>
                 <li><a href='../html/arts_page.html'>Humanities</a>
                 </li>
              </ul>
           </li>
           <li><a href="../html/about.htm" class="list-group-item"><i class="fa fa-info"></i> About</a></li>
           <li><a href="../html/contact.html" class="list-group-item"><i class="fa fa-phone"></i> Contact</a></li>
           <li><a href="../html/news.htm" class="list-group-item"><i class="fa fa-newspaper-o"></i> News</a></li>
           <li> 

            <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}
            
            /* Full-width input fields */
            input[type=text], input[type=password] {
              width: 100%;
              padding: 15px;
              margin: 5px 0 22px 0;
              display: inline-block;
              border: none;
              background: #f1f1f1;
            }
            
            /* Add a background color when the inputs get focus */
            input[type=text]:focus, input[type=password]:focus {
              background-color: #ddd;
              outline: none;
            }
            
            /* Set a style for all buttons */
            button {
              background-color: black;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              opacity: 0.9;
            }
            
            button:hover {
              opacity:1;
            }
            
            /* Extra styles for the cancel button */
            
            /* Float cancel and signup buttons and add an equal width */
             .signupbtn {
              
              width: 50%;
            }
            
            /* Add padding to container elements */
            .container {
              padding: 16px;
              display: inline;
              justify-content: center;
            }
            
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: #474e5d;
              padding-top: 50px;
              justify-content: center;
              text-align: center;
            }
            
            /* Modal Content/Box */
            .modal-content {
              background-color: #fefefe;
              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
              border: 1px solid #888;
              width: 50%; /* Could be more or less, depending on screen size */
            }
            
            /* Style the horizontal ruler */
            hr {
              border: 1px solid #f1f1f1;
              margin-bottom: 25px;
            }
             
            /* The Close Button (x) */
            .close {
              position: absolute;
              right: 35px;
              top: 15px;
              font-size: 40px;
              font-weight: bold;
              color: #f1f1f1;
            }
            
            .close:hover,
            .close:focus {
              color: #f44336;
              cursor: pointer;
            }
            
            /* Clear floats */
            .clearfix::after {
              content: "";
              clear: both;
              display: table;
            }
            
            /* Change styles for cancel button and signup button on extra small screens */
            @media screen and (max-width: 300px) {
              .cancelbtn, .signupbtn {
                 width: 100%;
              }
            }
            </style>
            <body>
            
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
            
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <form class="modal-content" action="home_page.php" method="post">
                <div class="container">
                  <label for="email"><b><br>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>
            
                  <label for="psw"><b><br>Phone Number</b></label>
                  <input type="text" placeholder="Enter Phone Number" name="psw" required>      
                    <button type="submit" class="signupbtn" action="home.php">Sign Up</button>
                </div>
              </form>
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById('id01');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
            
            </body>
            </html>
            
           </li>
        </ul>
        <div id="nav_logo">
            <img src="../images/logo.png" id="logo">
        </div>
     </div>  
    </div>
     <div class = "background">
         <img src ="../images/back_image.jpg" id= "back_image">
            <div class="child-div">
               Never dream for success,<br></div>
               <div id="child-div2"> Work for it</div>
    </div>
    <br><br>

     <div id="mid">
        <div id="head"><center>Career Hub</center></div>
        <hr class="line">
        <div id="ques"><center>What Exactly Is This?</center></div>
        <br>
        <div id="ans">
            <center>
                Here is a combination of all the educational websites which provide you with information about <br>
                various courses and colleges in India which a student can pursue after his/her schooling. No more<br>
                 visiting a number of websites and not get satisfied. CareerHub is a complete solution! <br><br>
                 CareerHub also has a personalized counselor where you can simply answer a few questions and get<br>
                information where and how to apply for your higher studies. Isn't that impressive?
            </center>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div id="know">
        Know about us
        <hr class="line">
   </div>
   <div class="container1">
       <div id="box1" class="box"><i class="fa fa-bullseye fa-2x" style="color: lightseagreen;"></i><br>Mission
    <br>
    <div class="know_text">
    Our mission is to help out students who<br>
     want to know their options for higher <br>
     studies, with exact, to the point details.<br><br>
     <div class="btn">
         <a href="#">Read More</a>
     </div>
    </div>

    </div>
       <div id="box2" class="box"><i class="fa fa-heart fa-2x" style="color: lightseagreen;"></i><br>Vission
        <div class="know_text">
            Our vision is a website which is a<br> complete stopage for every college<br> related guidance.<br><br>
            <div class="btn">
                <a href="#">Read More</a>
            </div>
        </div>
            </div>
       <div id="box3" class="box"><i class="fa fa-user fa-2x" style="color: lightseagreen;"></i><br>Team
        <div class="know_text">
            Our team is a group of 3 members, who<br> worked on different parts of the website<br> to make it happen.
            <br><br>
            <div class="btn">
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
   </div>
   <br><br><br><br><br><br><br><br>
   <div class="footer">
       <br><br>
       <div id="feedback">Feedback
        <hr class="line">
       </div>
       <div id="feed_mid">
        Help Us Grow
       </div>
       <br>
       <div id="end">
        We welcome any and every kind of feedback. Do share your experience and help us improve this<br>
         initiative. Any course we're missing on? Any eligibility criteria listed wrong? Problem in any of the links? <br>
         Do convey it to us!
       </div>
       <br><br>
           <div id="submit">
            <form action="feedback.php" method="post">
                  <input type="text"id="feed_text"name="feed" placeholder="Submit feedback" autocomplete="off"required>
                  <br>
                  <button type="submit" id="bttn">Submit a Feedback</button>
            </form>
        </div>
        <div id="chat">
        <div id="chatBox"></div>
          <p class="botText"><span>Hi, I'm bot</span></p>
      </div>
      <div id="userInput">
          <input id="textInput" type="text" name="msg" placeholder="Message" autocomplete="off"><br>
          <button id="buttonInput" type="submit">send</button>
      </div>
          </div>
      <script>
          function getBotResponse(){
              var rawText = $("#textInput").val();
              var userHtml = '<p class="userText"><span>' + rawText + '</span></p>';
              $("#textInput").val("");
              $("#chatBox").append(userHtml);
              document.getElementById('userInput').scrollIntoView({block :'start', behavior:'smooth'});
              $.get("/get", {msg:rawText}).done(function(data){
                  var botHtml = '<p class="botText"><span>' + data + '</span></p>';
                  $("#chatBox").append(botHtml);
                  document.getElementById('userInput').scrollIntoView({block :'start', behavior:'smooth'});
              });
          }
          $("#textInput").keypress(function(e){
              if(e.which == 13){
                  getBotResponse();
              }
          });
          $("#buttonInput").click(function(){
              getBotResponse();
          })
      </script>

          </div>          
        <br><br><br>
        <div id="footer">
            <br>
            <i class="fa fa-at"></i> CareerHub
        </div>
        
</body>
</html>