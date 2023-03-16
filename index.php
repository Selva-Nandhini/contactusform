<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
    <?php echo $alert; ?>
      <?php 
        $nameErr = $emailErr = $phoneErr = "";
        $name = $email =  $phone = $message = "";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          }else {
            $name = test_input($_POST["name"]);
              if(!preg_match("/^[a-zA-Z ]*$/", $name)) {                     //CHECK IF NAME CONTAINS ONLY LETTERS
                $name_error = "Only Letters  and White Space Allowed";
            }
            }
            
          if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            }else {
              $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
              }
            }
          
            
          if (empty($_POST["message"])) {
              $message = "";
            }else {
              $message = test_input($_POST["message"]);
            }
            
          if (empty($_POST["phone"])) {
              $phoneErr = "Phone Number is required";
            }else {
              $phone = test_input($_POST["phone"]);
              if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0-2}?\d{3}[\s-]?\d{4}$/i", $phone)) {
                $phone_error = "Invalid Phone Number";
              }
         
            }
         }
         
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
      ?>
    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Dubai, UAE.,</div>
        <div><i class="fas fa-envelope"></i>muthuvenkatesh808@email.com</div>
        <div><i class="fas fa-phone"></i>+917 52 765 6870</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <div>
          <input type="text" name="name" class="text-box" placeholder="Your Name" required autofocus>
          <span class = "error"> <?php echo $nameErr;?></span>  
        </div>
          <div>
          <input type="text" name="phone" class="text-box" placeholder="Your Phone Number" required>  
          <span class = "error"> <?php echo $phoneErr;?></span>  
        </div>
          <div>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <span class = "error"> <?php echo $emailErr;?></span>  
        </div>
          <div>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>    
          </div>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  </body>
</html>
      