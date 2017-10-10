<?php /* Template Name: Demo */ ?>


<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <?php the_content(); ?>

      <div class="row">
      <div class="col s12">
        <div class="demo">
          <div class="demo-logo-news"><img src="/wp-content/themes/blankslate/img/sample-site-logo-news.png"/></div>
          <div class="demo-menu-news">
            <ul>
              <li>HOME</li>
              <li>POLITICS</li>
              <li>BUSINESS</li>
              <li>ENTERTAINMENT</li>
              <li>TECH</li>
              <li>HEALTH</li>
              <li>LIFESTYLE</li>
            </ul>
          </div>
          <div class="demo-content-news">
            <h2>The Beginners Guide to the Paleo Diet</h2>
            <p>By John Bison</p>
            <ul class="demo-share-bar">
              <li class="textual-share-button"><img src="/wp-content/themes/blankslate/img/TXT-button.gif" /></li>
              <li class="facebook-share"><i class="fa fa-facebook"></i></li>
              <li class="twitter-share"><i class="fa fa-twitter"></i></li>
              <li class="email-share"><i class="fa fa-envelope-o"></i></li>
              <li class="pinterest-share"><i class="fa fa-pinterest-p"></i></li>
            </ul>
              <script src="/wp-content/themes/blankslate/js/textual-embed.js" data-site-id="1"></script>
            <p style="clear:both; padding-top:20px;"><img src="/wp-content/themes/blankslate/img/sample-site-img-news.png" style="width:300px; padding:0 0 20px 20px" align="right" />
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt scelerisque metus eget fringilla. Vivamus vestibulum lacus id massa ullamcorper dignissim sed eget diam. Praesent nec consequat ligula, ut gravida sem. Quisque consequat arcu non tincidunt ultricies. Nam rhoncus arcu scelerisque elit interdum placerat non eu dui. Vestibulum dictum et sem sit amet commodo. Vivamus eu eleifend enim, in pellentesque leo. Cras imperdiet rutrum sem. Fusce nec dictum quam.</p>

              <p>Praesent laoreet gravida lacus, vitae scelerisque nisl lobortis in. Nullam pretium quam mi, ut accumsan eros tempus ut. Etiam ultrices vulputate neque, consectetur blandit ligula fringilla sit amet. Fusce elementum ipsum neque. Nunc consectetur dui et dui ullamcorper, et molestie lectus dapibus. Phasellus interdum orci ac lorem placerat, non convallis justo fermentum. Pellentesque malesuada lectus in dignissim auctor. Nulla ut purus id leo feugiat efficitur. Curabitur vitae tellus at tortor maximus dignissim.</p>

              <p>Aenean augue enim, posuere eu erat a, fringilla molestie tortor. Nulla egestas purus in arcu sollicitudin tempus. Duis pharetra eu sem et tristique. Maecenas at nisl lectus. Vestibulum porttitor nec lectus nec efficitur. Aliquam erat volutpat. Curabitur in tellus finibus, dapibus ex in, aliquam ligula. Quisque ultricies dolor nec nunc gravida, at finibus magna dapibus. Integer facilisis hendrerit urna, eget malesuada enim aliquet eu. Nam porta lectus lacus, eu fermentum eros viverra vel. Nunc scelerisque commodo mauris vel efficitur. Aliquam vehicula odio eu porttitor pulvinar. Vivamus molestie orci at finibus lobortis. In vehicula nisl tellus, ac pellentesque erat rhoncus eu. In gravida est id quam tincidunt, nec molestie lorem fermentum. In dictum nibh et consequat rhoncus.</p>

              <p>Aliquam tristique euismod arcu, eget hendrerit felis interdum ac. Proin pellentesque ante tempus iaculis dignissim. Nulla volutpat, libero placerat mattis dignissim, mauris magna viverra dolor, sed lacinia ex magna id justo. Phasellus non massa sit amet mi laoreet convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi consequat libero posuere, dignissim sapien vitae, fringilla augue. Duis in tristique odio, ac viverra est. Duis eget elit a erat semper varius. Pellentesque tempus tincidunt erat et mattis. Nullam eu est at ante posuere rhoncus id at ex. Vivamus quis velit in turpis cursus lacinia mollis ut leo. In feugiat eleifend sem, eu facilisis ipsum tincidunt sed.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row advertiser-row contact-row" style="margin-top:50px;">
      <div class="col s12">
        <div class="contact max-width">
           <div class="col s6">
            <h1>Publishers</h1>
            <h2>Sign up today to benefit from the first SMS Subscriber Network:</h2>
            <ul>
                <li><i class="fa fa-comment"></i> Free tool for your Website visitors</li>
                <li><i class="fa fa-comment"></i> Increase peer to peer sharing of your content</li>
                <li><i class="fa fa-comment"></i> Revenue share with SMS Subscriber fee</li>
            <li><i class="fa fa-comment"></i> Or choose "Publisher Direct" to build your own SMS marketing list</li>
            </ul>
           </div>
           <div class="col s6">
             <div class="form-container">
               <form action="/contact/" method="post" class="contact-form">
                   <div class="col s12"><div class='required-label'>All fields required.</div></div>
                   <div class="input-field col s12">
                     <input type="text" id="company" name="company"/>
                     <label for="company">Company</label>
                   </div>
                   <div class="input-field col s12">
                     <input type="text" id="fname" name="fname"/>
                     <label for="fname">First Name</label>
                   </div>
                   <div class="input-field col s12">
                     <input type="text" id="lname" name="lname"/>
                     <label for="lname">Last Name</label>
                   </div>
                   <div class="input-field col s12">
                     <input type="email" id="email" name="email"/>
                     <label for="email">Email Address</label>
                   </div>
                   <div class="input-field col s12">
                     <input type="tel" id="wphone" name="wphone"/>
                     <label for="wphone">Work Phone</label>
                   </div>
                   <div class="col s12">
                     Human Verification:
                     <input type="number" id="human" name="human" style="width: 60px;"/><span> + 3 = 5</span>
                   </div>
                   <div class="col s12">
                     <input type="hidden" name="submitted" value="1">
                     <input type="hidden" name="referring" value="demo">
                     <button class="btn" type="submit" name="action">SIGN UP</button>
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
