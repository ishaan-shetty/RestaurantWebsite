function loginCheck()
{
  var un = document.forms["loginForm"]["uname"].value;
  var ps = document.forms["loginForm"]["pass"].value;
 
  if(un=="admin" && ps=="spicelane123")
  { 
    document.write("Login Successfull");
    window.location.replace("../Employee Page/Employee Page.php");
  }

  else
  {
    alert("Invalid Login Credentials")
  }
}