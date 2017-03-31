<!-- Success HTML -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jackson Gators | Return</title>
    <link rel="shortcut icon" href="img/gatoricon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="header">
    <header>
      <a href="index.html" class="home">Home</a>
      <a href="contact.html" class="links">Contact</a> 
      <a href="location.html" class="links">Location</a>
      <a href="join.html" class="links selected">Join</a>
      <a href="goal.html" class="links">Goal</a>
      <a href="coaches.html" class="links">Coaches</a>
      <a href="cuts.html" class="links">Times</a>
      <a href="pics.html" class="links">Pictures</a>
    </header>
    </div>
    <h1 class="title logoheader"><a href="index.html" class="title">Jackson Gators</a></h1>
    <h2 class="logoimg"><a href="index.html"><img src="img/logo.png" class="logoheader"></a></h2>
   <hr class="line">
    <div class="wrap">
        <h1 class="h1contact">Thank you for your message!</h1> 
        <h2 class="h1contact">Someone on the Jackson Gator staff will be contacting you soon.</h2>
      <br><br><br><br><br><br>
    </div>
    <footer class="footer">
        <ul class="grid">
         <li><a href="index.html" class="footerlinks">Home</a></li>
         <li><a href="pics.html" class="footerlinks">Pictures</a></li>
         <li><a href="cuts.html" class="footerlinks">Times</a></li>
         <li><a href="coaches.html" class="footerlinks">Coaches</a></li>
         <li><a href="goal.html" class="footerlinks">Goal</a></li>
         <li><a href="join.html" class="footerlinks">Join</a></li>
         <li><a href="location.html" class="footerlinks">Location</a></li>
         <li><a href="contact.html" class="footerlinks">Contact</a></li>
       </ul>
       <div class="footerInfo">
         <h2><a href="tel:731-343-5320">731-343-5320</a></h2>
         <h2>&copy 2017 Jackson Gators</h2>
       </div>
    </footer>
  </body>
</html>


       <?php
 
if(isset($_POST['email'])) {
    $to = "corey.wyatt@students.jmcss.org";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = "Contact Form Submission";
    $message = $first_name . " " . $last_name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
   
   
    mail($to,$subject,$message);

}
  function died($error) {
 
        // Error Code
 
        echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";
 
        echo "<strong><p>The following items are not specified correctly.</p></strong><br />";
 
        echo $error."<br /><br />";
 
        echo "<p>Return to the form and try again.</p><br />";
        die();
		
 
    }
  
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<li><p>The completed e-mail address appears to be invalid.<p></li>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= '<li><p>The first name appears to be empty.</p></li>';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= '<li><p>The last name appears to be empty.</p></li>';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= '<li><p>The message box appears to be empty or there are not enough words in the box to be valid.</p></li>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 

 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email Adress: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
      
 
// email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  

?>


 

