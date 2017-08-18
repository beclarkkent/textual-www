<?php /* Template Name: Advertisers */ ?>

<?php

//response generation function

$response = "<div class='required-label'>All fields required.</div>";
 if (is_page("advertisers")) {
   $contact_type = "Advertiser";
 } else if (is_page("publishers")) {
   $contact_type = "Publisher";
 } else {
   $contact_type = "General";
 }

//function to generate response
function my_contact_form_generate_response($type, $message, $feedback){

  global $response;

  if($type == "success") $response = "<div class='success'>". $message . $feedback . "</div>";
  else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email address invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Success! Someone will be in touch with you shortly.";

//user posted variables
$company = $_POST['company'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$wphone = $_POST['wphone'];
$human = $_POST['human'];
$website = $_POST['website'];
$note = $_POST['note'];

//php mailer variables
$to = get_option('admin_email');
$subject = "New ". $contact_type ." sign up";
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {

    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
      //validate presence of name and message
      if($contact_type != "General" && (empty($company) || empty($fname) || empty($lname) || empty($email) || empty($wphone) || empty($human))){
        my_contact_form_generate_response("error", $missing_content);
      }
      else if ($contact_type == "General" && (empty($fname) || empty($lname) || empty($email) || empty($wphone) || empty($human))) {
        my_contact_form_generate_response("error", $missing_content);
      }
      else //ready to go!
      {
        if($contact_type != "General") { $getCompany="<strong>Company:</strong> " . $company . "<br/>"; } else { $getCompany=''; }
        if($contact_type == "General") { $getWebsite="<strong>Website:</strong> " . $website . "<br/>"; } else { $getWebsite=''; }
        if($contact_type == "General") { $getNote="<strong>Note:</strong> " . $note . "<br/>"; } else { $getNote=''; }

        if($contact_type != "General") { $getCompanyEmail="First Name:  " . $company . "\r\n"; } else { $getCompanyEmail=''; }
        if($contact_type == "General") { $getWebsiteEmail="Website: " . $website . "\r\n"; } else { $getWebsiteEmail=''; }
        if($contact_type == "General") { $getNoteEmail="Note: " . $note . "\r\n"; } else { $getNoteEmail=''; }

        $email_body = "Contact Type: " . $contact_type . "\r\n" .
          $getCompanyEmail .
          "First Name: " . $fname . "\r\n" .
          "Last Name: " . $lname . "\r\n" .
          $getWebsiteEmail .
          "Email: " . $email . "\r\n" .
          "Work Phone: " . $wphone . "\r\n" .
          $getNoteEmail;
        $feedback_body = "<br/>".
            $getCompany.
            "<strong>First Name:</strong> " . $fname . "<br/>" .
            "<strong>Last Name:</strong> " . $lname . "<br/>" .
            $getWebsite.
            "<strong>Email:</strong> " . $email . "<br/>" .
            "<strong>Work Phone:</strong> " . $wphone . "<br/>" .
            $getNote;
        $sent = wp_mail($to, $subject, strip_tags($email_body), $headers);
        if($sent) my_contact_form_generate_response("success", $message_sent, $feedback_body); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
      }
    }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>

<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="row advertiser-row">
      <div class="col s12">
        <div class="contact max-width">
           <div class="col s6">
             <?php the_content(); ?>
           </div>
           <div class="col s6">
            <div class="form-container">
              <form action="<?php the_permalink(); ?>" method="post"/>
                <div class="col s12"><?php echo $response; ?></div>
                <?php if($contact_type != "General") { ?>
                <div class="input-field col s12">
                  <input type="text" id="company" name="company" <?php if(!is_null($_POST['company'])) { ?>value="<?php echo esc_attr($_POST['company']); ?>"<?php } ?> />
                  <label for="company">Company</label>
                </div>
                <?php } ?>
                <div class="input-field col s12">
                  <input type="text" id="fname" name="fname" <?php if(!is_null($_POST['fname'])) { ?>value="<?php echo esc_attr($_POST['fname']); ?>"<?php } ?>/>
                  <label for="fname">First Name</label>
                </div>
                <div class="input-field col s12">
                  <input type="text" id="lname" name="lname" <?php if(!is_null($_POST['lname'])) { ?>value="<?php echo esc_attr($_POST['lname']); ?>"<?php } ?>/>
                  <label for="lname">Last Name</label>
                </div>
                <?php if($contact_type == "General") { ?>
                <div class="input-field col s12">
                  <input type="text" id="website" name="website" <?php if(!is_null($_POST['website'])) { ?>value="<?php echo esc_attr($_POST['website']); ?>"<?php } ?> />
                  <label for="website">Website</label>
                </div>
                <?php } ?>
                <div class="input-field col s12">
                  <input type="email" id="email" name="email" <?php if(!is_null($_POST['email'])) { ?>value="<?php echo esc_attr($_POST['email']); ?>"<?php } ?>/>
                  <label for="email">Email Address</label>
                </div>
                <div class="input-field col s12">
                  <input type="tel" id="wphone" name="wphone" <?php if(!is_null($_POST['wphone'])) { ?>value="<?php echo esc_attr($_POST['wphone']); ?>"<?php } ?>/>
                  <label for="wphone">Work Phone</label>
                </div>
                <?php if($contact_type == "General") { ?>
                <div class="input-field col s12">
                  <textarea class="materialize-textarea" id="note" name="note"><?php if(!is_null($_POST['note'])) { echo esc_attr($_POST['note']); } ?></textarea>
                  <label for="note">Note</label>
                </div>
                <?php } ?>
                <div class="col s12">
                  Human Verification:
                  <input type="number" id="human" name="human" style="width: 60px;"/><span> + 3 = 5</span>
                </div>
                <div class="col s12">
                  <input type="hidden" name="submitted" value="1">
                  <button class="btn" type="submit" name="action"><?php if($contact_type == "General") { echo "Send"; } else { echo "Sign Up"; } ?></button>
                </div>
                <div style="clear:both"></div>
              </form>
            </div>
           </div>
        </div>
      </div>
    </div>





<?php endwhile; endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
