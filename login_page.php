<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="aboutus_css/aboutus_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="insert.php" method="POST">
    <input type="text" name="username" class="contact-form-text" placeholder="Your name">
    <input type="email"  name="email" class="contact-form-text" placeholder="Your email">
    <input type="text" name="phone" class="contact-form-text" placeholder="Your phone">
    <textarea class="contact-form-text" name="message" placeholder="Your message"></textarea>
    <input type="submit" name="submit" class="contact-form-btn" value="Send">
  </form>
</div>


  </body>
</html>
