
    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact Us  </title>
    <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<?php include 'header.php'; ?>
<main>
  
  <div class="container">
    <h2>Contact Us</h2>
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Prishtina, Kalabri</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+383(0)45963828</div>
          <div class="text-two">+383(0)44554054</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">onlinestore@gmail.com</div>
          <div class="text-two">info.onlinestore@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
        <form action="process_form.php" method="post">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email">
          </div>
          <div class="input-box message-box" name="message">
            <input type="text" name="message" placeholder="enter your message"> 
            
          </div>
          <button class="shopnow-btn">Send now</button>
          
        </div>
      </form>
    </div>
  </div>
</div>

</main>
<?php include 'footer.php'; ?>
</body>


</html>