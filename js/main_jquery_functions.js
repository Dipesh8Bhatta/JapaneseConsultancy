$(document).ready(function(){
  console.log("this is great Dipesh.");
  $(window).scroll(function() {
    if ($(document).scrollTop() > 200) {
    $("#topHeader").removeClass("transparentHeaderColor");
      $("#topHeader").addClass("opaqueHeaderColor");
    } else {
      $("#topHeader").removeClass("opaqueHeaderColor");
      $("#topHeader").addClass("transparentHeaderColor");
    }
  });
});
