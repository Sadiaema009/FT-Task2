

<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript Form Validation using a sample registration form</title>

<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<script>
function formValidation()
{
var fn = document.registration.fname.value;
var ln=document.registration.lname.value;
var uage=document.registration.age.value;
var jpr = document.registration.jp;
var spr = document.registration.sp;
var upl = document.registration.pl;


var pass = document.registration.pass.value;
var uemail = document.registration.email.value;
var ck="";
var right="";
var right1="";
var right2="";
var right3="";

var letters = /^[A-Za-z]+$/;
if(fn.match(letters) && fn.length>=5)
{
  
}
else
{
    var error=" name can only be alphabet and cannot less than 5 alphabet";
 document.getElementById( "na1" ).innerHTML = error;
 ck="ok";


}

if(ln.match(letters) && ln.length>=5)
{
        
}

else
{
    var error=" name can only be alphabet and cannot less than 5 alphabet";
    document.getElementById( "na2" ).innerHTML = error;
    ck="ok";
        

}

var age = parseInt(uage, 10);


if (isNaN(age) || age < 1 || age > 100)
{ 

    var error=" The age must be a number between 1 and 100";
    document.getElementById( "na3" ).innerHTML = error;
    ck="ok";

}
else{
    
}

if(document.getElementById( "d1" ).checked==true)
{
   right="junior programmer";
}

else if(document.getElementById( "d2" ).checked==true)
{
    right="SENIOR programmer";
}

else if(document.getElementById( "d3" ).checked==true)
{
    right="PTOJECT  LEAD    ";
}

else{
    var error=" please select a designation";
    document.getElementById( "na4" ).innerHTML = error;
    ck="ok";
}

if(document.getElementById( "p1" ).checked==true)
{
    righT1="jAVA";
}

else if(document.getElementById( "p2" ).checked==true)
{
    right2="PHP";
}

else if(document.getElementById( "p3" ).checked==true)
{
    right3="C++";
}

else{
    var error=" please select a language";
    document.getElementById( "na5" ).innerHTML = error;
    ck="ok";
}

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.match(mailformat))
{

}
else
{
    var error=" please use a valid email";
    document.getElementById( "na6" ).innerHTML = error;
    ck="ok";   
}

var pass_len = pass.length;
if (pass_len == 0 || pass_len < 8)
{

    var error=" Password should not be empty / length muat be grater or equal  "+8+"Characters";
    document.getElementById( "na7" ).innerHTML = error;
    ck="ok";   

}

else{

}

if(ck=="")
{   document.write(fn);
    document.write("<br>");
    document.write(ln);
    document.write("<br>");
    document.write(age);
    document.write("<br>");
    document.write(right);
    document.write("<br>");
    document.write(right1);
    document.write("<br>");
    document.write(right2);
    document.write("<br>");
    document.write(right3);
    document.write("<br>");
    document.write(uemail);
    return true;
}

else{
    return false;
}
   
    






}


</script>
</head>
<body onload="document.registration.userid.focus();">
<h1>Registration Form</h1>
Use tab keys to move from one input field to the next.
<form name='registration' onSubmit="return formValidation();">

<label for="fname">First name:</label>
<input type="text" name="fname" size="12" /><br>
<span id="na1" style="color:red"></span><br>
<label for="lname">Last name:</label>
<input type="text" name="lname" size="12" /><br>
<span id="na2" style="color:red"></span><br><br>
<label for="age">Age:</label>
<input type="text" name="age" size="3" /><br>
<span id="na3" style="color:red"></span><br>
<label id="designation">Designation:</label>
<input type="radio" name="jp" id="d1" value="Junior programmer" /><span>Junior programmer</span>
<input type="radio" name="sp" id="d2" value="Senior programmer" /><span>Senior programmer</span>
<input type="radio" name="pl" id="d3" value="Project Lead" /><span>Project Lead</span><br>
<span id="na4" style="color:red"></span><br>
<label>Prefered Language:</label>
<input type="checkbox" name="java" id="p1" value="java" /><span>java</span>
<input type="checkbox" name="PHP" id="p2" value="PHP" /><span>PHP</span>
<input type="checkbox" name="C++" id= "p3" value="C++" /><span>C++</span><br>
<span id="na5" style="color:red"></span><br>
<label for="email">Email:</label>
<input type="text" name="email" size="50" /><br>
<span id="na6" style="color:red"></span><br>
<label for="pass">Password:</label>
<input type="password" name="pass" size="12" /><br>
<span id="na7" style="color:red"></span><br>




<input type="submit" name="submit" value="Submit" />
<input type="submit" name="clear" value="clear" />
<span id="na8" style="color:black"></span><br>

</form>
</body>
</html>