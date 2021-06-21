function CheckLog(field){
  document.getElementById("logform").onsubmit=function(e){
    e.preventDefault();

    var logemail=document.getElementById("logemail").value;
    var logpassword=document.getElementById("logpassword").value;
    var signin=document.getElementById("signin").value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "registration.php?logemail="+logemail+"&logpassword="+logpassword+"&signin="+signin, true);
    xmlhttp.send();
  
 }
}
function CheckIt(field){
  document.getElementById("regform").onsubmit=function(e){
    e.preventDefault();

    var name=document.getElementById("name").value;
    var regno=document.getElementById("regno").value;
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    var signup=document.getElementById("signup").value;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(field).innerHTML = this.responseText;
      }
    }

    xmlhttp.open("POST", "registration.php?name=" +name+"&regno="+regno+"&email="+email+"&password="+password+"&field="+field+"&signup"+signup, true);
    xmlhttp.send();
  
 }
}




