<?php
require("connection.php");

if(isset($_POST["submit"])){

  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $con->prepare("SELECT * FROM users WHERE username=:username");
  $stmt->bindParam(":username" , $username);
  $stmt->execute();
  $userExists = $stmt->fetchAll();
  var_dump($userExists);

  $passwordHashed = $userExists[0] ["password"];
  $checkPassword = password_verify($password, $passwordHashed);

  if($checkPassword === false){

  echo "Login fehlgeschlagen,<b> password</b> stimmt nicht über ein";




  }

  if($checkPassword === true){
   
    header("Location: Chat.php");



  }

}


?>














<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Starmail</title>
<meta name="description" content="Email, Chat system">
<meta name="author" content="Mario Steimel, Noah Dickgießer">
<meta name="copyright" content="Yes">
<meta name="robots" content="index, follow">
<meta name="rating" content="14 years">

<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
    
 





    <style>body {

      text-align: center;
      
      background-color: darkseagreen;
      
      font-family: sans-serif;

      
      
      }

      a{
        background-color: rgb(72, 80, 67);
      
      border: none;
      
      margin-top: 10px;
      
      font-size: 25px;
      
      transition-duration: 0.4s;

      style: none;

      color: black;

        
      

      }


      a:hover{
     color:white;
     background-color:aqua;


      }
      
      
      p {
      
          font-size: 80px;
      
      
      
      
      }


      
      
      button {
      
      background-color: rgb(72, 80, 67);
      
      border: none;
      
      margin-top: 10px;
      
      font-size: 25px;
      
      transition-duration: 0.4s;
      
      
      }

      #submit {

        background-color: rgb(72, 80, 67);
      
      border: none;
      
      margin-top: 10px;
      
      font-size: 25px;
      
      transition-duration: 0.4s;
      }
      
      
      button:hover {
      
          background-color: aqua;
      
          color: white;
      
      }

      #submit:hover {

        background-color:aqua ;

        color: white;

      }
      
      
      div  {
      
      
      margin-top: 200px;
      
      border: solid black;
      
      border-radius: 20px;

      
      
      
      
      
      }
      
      
      .ende {
      
      background-color: grey;
      
      border-radius: 1px;
      
      padding: 20px;

      border: solid black;

      margin-top: 50px;
      
      
      }
      
      img, video {
      
      margin: 100px;

      width: 500px;

      height: 200px;
      
      
      
      
      }
      
      
      
      input:invalid {
      
           animation: shake .3s;
      
      
      
      }
      
      @keyframes shake {
      
          25%{ transform: translateX(4px)}
          50%{ transform: translateX(-4px)}
          75%{ transform: translateX(4px)}
      
      
      
      }
      
      ::-webkit-scrollbar-track {
      
      background: yellowgreen;
      
      
      }
      
      
      ::-webkit-scrollbar-thumb {
      
          background: blue;
          
          
          }
      
      
      
      
      
      
          
          
          </style>

 



</head>
<body style="background:  url(img/beach.jpg) no-repeat fixed right bottom;">


  <p class="ueberschrift">Starmail</p>

  <br>
<audio id="song">
<source src="imgaudio.mp3">
</audio>

<script>
   window.addEventListener("click", () =>{
      document.getElementById("song").play();


   });


</script>
 
  


<video src="img/werbung.mp4" controls autoplay width="500px" height="200px"></video>

<iframe width="560" height="315" src="https://www.youtube.com/embed/1BAjeTBfM2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

 
<img src="img/join.jpg">




  <br>





<div>

  <h2>Login</h2>

  <form action="index.php" method="POST" >

    <input type="text" placeholder="Benutzername" id="username"name="username" autocomplete="off">

  
    <input type="password" placeholder="Passwort" id="password" name="password" autocomplete="off">

<br>

<br>

<button  name="submit" id="loginButton">Login</button>



  </form>
<a href="http://localhost/Starmail/Starmail/Anmelden.php"> neuer Account </a>

</div>


<br>

<br>








<footer class="ende">

<h2>written by Mario and styling from Noah</h2>


</footer>


</body>
</html>


