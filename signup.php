<html>
<head>
   <title>Sign up</title>
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
      height: 70%;
      text-align: center;
  }
 
  .center {
    margin: auto;
    width: 30%;
    height: 60%;
    border-radius: 1%;
    border: 1px solid black;
    background-color: white;
    padding: 10px;
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
    background-color: lightblue ;
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
    top: 50%;
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

        <!-- <p><h1>Sign up</h1></p>
        <body>
    Enter Username: <br>
    <input type="text" id="username" name="username"class="input" placeholder="UserName"><br>
    
    Enter Email: <br>
    <input type="text" id="Email" name="Email"class="input" placeholder="Email"><br>
    <br>
    Enter Password: <br>
    <input type="password" id="pass" name="pass" class="input" placeholder="Password"><br>
    <br>
    Conform Password: <br>
    <input type="password" id="rpass" name="rpass" class="input" placeholder="Repeat Password"><br>
    <br>

      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <button type="submit" id="submit" class="b3">Sign Up</button>
    </div>
    <script src="./js/login.js"></script> -->
    <p><h1>Sign up</h1></p>
        <form action="./database.php/" method="post">
         <input type="text" id="username" name="username"class="input" placeholder="UserName" required><br>
         <input type="text" id="Email" name="Email"class="input" placeholder="Email" required><br>
         <input type="password" id="pass" name="pass" class="input" placeholder="Password" required><br>
         
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <button type="submit" id="submit" class="b3">Sign Up</button>
      <!-- <button type = "reset" value = "Reset"  class="b3" >Reset</button>   -->
    </div>
    
</body>
</html>

