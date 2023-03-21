<?php include 'sendmail.php'; ?>
<?php include 'db_conn.php';  ?>

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
            <input type="text" name="name" class="text-box"
                   placeholder="Your Name" required 
                   autofocus autocomplete>
            </div>
          <div>
            <input type="tel" name="phone" class="text-box" 
              placeholder="123-456-7890" 
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              autocomplete required>  
          </div>
          <div>
            <input type="email" name="email" class="text-box" 
                placeholder="example@gmail.com" autocomplete required>
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
      
      