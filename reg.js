function formValidation()  
{  
var fname = document.register.fname;  
var lname = document.register.lname;  
var pwd = document.register.pwd;  
var uemail = document.register.email;  

if(allLetter(fname))  
{  
if(allLetter(lname))  
{
if(passid_validation(pwd,5,12))  
{    
if(ValidateEmail(uemail))  
{  
alert('Form Succesfully Submitted');    
return true;  
}  
}   
}  
}     
return false;  
  
} 


function allLetter(uname)  
{   
var letters = /^[A-Za-z]+$/;  
if(uname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Username must have alphabet characters only');  
uname.focus();  
return false;  
}  
} 
 
function passid_validation(pwd,mx,my)  
{  
var passid_len = pwd.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password should not be empty / length be between "+mx+" to "+my);  
pwd.focus();  
return false;  
}  
return true;  
}  


function ValidateEmail(uemail)  
{  
var uemail_len = uemail.value.length;
if(uemail_len==0)
{
alert("You have entered an invalid email address!");  
}
else
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  
}
}
 
