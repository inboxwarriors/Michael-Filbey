<?php
/**
* Template name: Contact

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Michaelfilbey
 */

get_header(); ?>
<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 4) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main max" role="main">
      <div class="text-area intro">
      <h1>Contact</h1>
      <p>Michael is available for emergency call out Monday to Saturday from 07:00 to 22:00. In those circumstances call Michael on the mobile number below. Alternatively, if you are looking for a quote, whether it be a small or large job you can call or use any of the methods available here to contact Michael and he will respond to your enquiry at the end of the working day.</p></div>

    <div class="contact-form box">
      <form action="<?php the_permalink(); ?>" method="post">
        <fieldset>

          <h3>Message Michael</h3>

          <p><?php echo $response; ?></p>

          <label for="name">Name</label>
          <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">

          <label for="message_email">Email</label>
          <input type="email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">

          <label for="message_text">Message</label>
          <textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>

          <label for="message_human">Human Verification</label>
          If you add <input type="text" name="message_human" class="human-verify"> to 3 you’ll get a total of 7

          <input type="hidden" name="submitted" value="1">
          <div>
            <button type="submit" class="button-primary">Send</button>
          </div>

        </fieldset>

      </form>

      <div class="payment-info">
        <p>Michael also accepts PayPal payments.</p>
        <img src="<?php bloginfo('template_url'); ?>/img/paypal.svg" class="paypal">
      </div>
    </div>

    <div class="section">
      <h3>My job wasn't in your services list can you still help?</h3>

      <p>Not all home maintenance jobs fit nicely into a category, the chances are if it's in your home and it needs doing then Michael can probably do it. Get in touch and ask the question and Michael will get back to you to discuss your issue.
      </p>
    </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
