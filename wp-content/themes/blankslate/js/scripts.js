var deviceWidth = $( window ).width();

$( document ).ready(function() {
  for (i = 0; i < sites.length; i++) {
    if (deviceWidth >= 800) {
      $('#laptopScreen').append('<img id="img'+i+'" src="/wp-content/themes/blankslate/img/site-'+sites[i]+'.jpg" class="sample-site"/>');
    } else {
      $('#laptopScreenSmall').append('<img id="img'+i+'" src="/wp-content/themes/blankslate/img/site-'+sites[i]+'.jpg" class="sample-site"/>');

    }
  }
  showSite();
  $('.mobile-nav-button').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
        onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
      }
    );
});


/* SAMPLE SITES */
var sites = [
    "ecommerce",
    "news",
    "video"
];
var currentHero = 0;

function showSite() {
  for (i = 0; i < sites.length; i++) {
      if (i == currentHero) {
        $('#img'+i).removeClass("hide-site");
      } else {
        $('#img'+i).addClass("hide-site");
      }

  }
}

function nextSite() {
  if (currentHero === sites.length-1) {
    currentHero = 0;
    showSite()
  }  else {
    currentHero = currentHero + 1;
    showSite()
  }
}

function prevSite() {
  if (currentHero === 0) {
    currentHero = sites.length-1;
    showSite()
  }  else {
    currentHero = currentHero - 1;
    showSite()
  }
}


/* HOW PAGE TRANSIITIONS */
var animationOffset = deviceWidth > 800 ? 50 : 0;
var options = [
      {selector: '#how-img-1', offset: 0, callback: function(el) {
        jQuery('#how-img-1').addClass('animateIn');
      } },
      {selector: '#how-img-2', offset: animationOffset, callback: function(el) {
        jQuery('#how-img-2').addClass('animateIn');
      } },
      {selector: '#how-img-3', offset: animationOffset, callback: function(el) {
        jQuery('#how-img-3').addClass('animateIn');
      } },
      {selector: '#how-img-4', offset: animationOffset, callback: function(el) {
        jQuery('#how-img-4').addClass('animateIn');
      } },
      {selector: '#how-img-5', offset: animationOffset, callback: function(el) {
        jQuery('#how-img-5').addClass('animateIn');
      } }
    ];
    Materialize.scrollFire(options);
