function formValidation()  
{  
var cname = document.card.cname;  
var cno = document.card.cno;  
var cvc = document.card.cvc;  

if(allLetter(cname))  
{  
if(allnumeric(cno))  
{
if(threedigit(cvc))  
{    
	return true;
}   
}  
}     
return false;  
} 

function allLetter(cname)  
{   
var letters = /^[A-Za-z]+$/;  
if(cname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Card name must have alphabet characters only');  
cname.focus();  
return false;  
}  
}  

function allnumeric(cno)  
{   
var numbers = /^[0-9]+$/;  
if(cno.value.match(numbers))  
{  
return true;  
}  
else  
{  
alert('Card number must have numeric characters only');  
cno.focus();  
return false;  
}  
}  
 function threedigit(cvc)
{
var numbers=/^[0-9]+$/;
if(cvc.value.match(numbers))
{
var cvc_len = cvc.value.length;  
if (cvc_len == 0 ||cvc_len >= 3 || cvc_len < 0)  
{  
alert('CVC should not be empty / length should be 3'); 
cvc.focus();   
return false;  
}  
else
{
return true;
}
}

