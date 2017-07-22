var sites = [
    "ecommerce",
    "news",
    "video"
];
var currentHero = 0;
console.log(sites.length)
$( document ).ready(function() {
  for (i = 0; i < sites.length; i++) {
      $('#laptopScreen').append('<img id="img'+i+'" src="/wp-content/themes/blankslate/img/site-'+sites[i]+'.jpg" class="sample-site"/>');
  }
  showSite();
});

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
