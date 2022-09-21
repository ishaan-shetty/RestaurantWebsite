function validation()
{
  var cnt=0;
  var datecnt=0;
  
  //Name Validation
  var n = document.forms["reservationForm"]["name"].value;
  if (n !="")
  {cnt++;}

//Mobile Number Validation
var m = document.forms["reservationForm"]["tel"].value;
var IndNum = /^[0]?[789]\d{9}$/;
if(IndNum.test(m))
{
   cnt++;
}
//Email Address Validation
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reservationForm.email.value))
  {cnt++;}

//Number of Guests Validation
var g = document.forms["reservationForm"]["number"].value;
if(g>0 && g<=15)
  {cnt++;}

// Date Validation
var GivenDate = document.forms["reservationForm"]["Date"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate > CurrentDate)
{cnt++;datecnt++}

  //Final Dialog Box Check
  if(cnt==5)
  {alert("Reservation Confirmed");}

  if(datecnt==0 && cnt==4)
  {alert("Please enter a date later than today.");
    return (false);
  }
}