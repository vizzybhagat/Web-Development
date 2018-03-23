function formValidation()  
{  
var uname = document.login.uname; 
var pwd = document.login.pwd;   

if(allLetter(uname))  
{  
if(passid_validation(pwd,5,12))  
{  
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
