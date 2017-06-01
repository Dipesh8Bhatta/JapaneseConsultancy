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

//call fetch function.
fetchDataFunction();
});

//function to update all the dynamic div. it uses ajax to fetch data from database.
function fetchDataFunction(){
  console.log("this is called.....");
  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("Dipesh").innerHTML = this.responseText;
            }
        };
        var url = "fetch.php";
        var params ="fieldname=PrincipalSpeech"
        xmlhttp.open("POST",url ,true);

        //Send the proper header information along with the request
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(params);
        // xmlhttp.open("GET",url + '?fieldname=PrincipalSpeech',true);
        // xmlhttp.send();
}
