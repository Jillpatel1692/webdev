<html>
<head>
   <title>login</title>
  
   <style>
        body {
          background-image: url('../image/logo.jpg'); 
          background-repeat : no-repeat ,repeat; 
          background-size: 1600px 600px;
  }
  img {
  opacity: 0.5;
  background-size: 80%;
}
  .chat-container-one {
      border-radius: 1%;
      max-width: 30%;
      height: 60%;
      text-align: center;
  }
 
  .center {
    margin: auto;
    width: 30%;
    height: 60%;
    border-radius: 1%;
    border: 1px solid black;
    background-color: white;
    padding: 15px;
    padding-top : 1%;
  }
 

  .input[type=text] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  .input[type=password] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
   .button {
    border: 1em;
    border-radius: 0.3em;
    background-color: white ;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 6em;
    margin: 4px 2px;
    
  }
  
  .b3[type=submit]{
    width: 18%;
    height: 4%;
    margin: auto;
    background-color: white;
    position: absolute;
    top: 42%;
    left: 40%;
  } 
 
.b3:hover {
  background-color: #115dd6;
  color: white;
}
</style>

</head>
<body>
<div class="chat-container-one, center" >
        <p><h2>Login Form</h2></p>
        <form method="post">

         <input type="text" id="username" name="Email" class="input" placeholder="UserName" required><br>
         <input type="password" id="password" name="password" class="input" placeholder="Password" required><br>
         <div>
          <a href="#"><a href= "./signup.php"> SIGN UP </a></a><br>
          
       </div>
       <div class="button1">
        <input class="b3" type="submit"  value="Log In" name="login">
        
      </div>
       </form>
        
       
</body>
</html>

<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdev";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM login WHERE Email = ?");
if(isset($_POST['login']))
{


    $email = $_POST['Email'];
    $Password = $_POST['password'];

   
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0)
            {
                $data = $stmt_result->fetch_assoc(); 
                
                if($Password==$data['Password'])
                {
                  header('Location:index.php');  
                }
                else
                {    
                    // header('Location:login.php');       
                }
            }



}
$conn->close();
?>