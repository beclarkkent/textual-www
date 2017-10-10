</div>

<?php
if (is_page("advertisers") || is_page("publishers") || is_page("contact")) {
} else {

  ?>

<div class="row advertiser-row contact-row">
  <div class="col s12">
    <div class="contact max-width">
       <div class="col s6">
         <h2 class="contact-h2">Contact Us</h2>
<h3 class="contact-h3">Textual.com is in beta roll out.  Please contact us for more information about putting the SMS Share icon on your site, or gaining new SMS Subscribers via our platform.</h3>
       </div>
       <div class="col s6">
         <div class="form-container">
           <form action="/contact/" method="post" class="contact-form">
               <div class="col s12"><div class='required-label'>All fields required.</div></div>
               <div class="input-field col s12">
                 <input type="text" id="fname" name="fname"/>
                 <label for="fname">First Name</label>
               </div>
               <div class="input-field col s12">
                 <input type="text" id="lname" name="lname"/>
                 <label for="lname">Last Name</label>
               </div>
               <div class="input-field col s12">
                 <input type="text" id="website" name="website"/>
                 <label for="website">Website</label>
               </div>
               <div class="input-field col s12">
                 <input type="email" id="email" name="email"/>
                 <label for="email">Email Address</label>
               </div>
               <div class="input-field col s12">
                 <input type="tel" id="wphone" name="wphone"/>
                 <label for="wphone">Work Phone</label>
               </div>
               <div class="input-field col s12">
                 <textarea class="materialize-textarea" id="note" name="note"></textarea>
                 <label for="note">Note</label>
               </div>
               <div class="col s12">
                 Human Verification:
                 <input type="number" id="human" name="human" style="width: 60px;"/><span> + 3 = 5</span>
               </div>
               <div class="col s12">
                 <input type="hidden" name="submitted" value="1">
                 <button class="btn" type="submit" name="action">Send</button>
               </div>
               <div style="clear:both"></div>
           </form>
         </div>
        </div>
     </div>
   </div>
 </div>
 <?php } ?>

<!--FOOTER-->
<div class="row footer">
  <div class="col s12 max-width">
    Copyright 2017 &nbsp;&nbsp; <a href="/privacy">Privacy</a> &nbsp;&nbsp; <a href="/terms">Terms</a>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
