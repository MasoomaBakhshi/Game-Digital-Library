var error=[];
var msg=[];
//////check id/////
function checkid(input_field)
		{
			var temp=input_field;
			var tst=/^[0-9]{1,6}$/;
			msg["id"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["id"]=1;
			  msg["id"]="Id can not be blanked.";
			  }
				else if (tst.test( temp.value ))
				{
				error["id"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["id"]=1;
			  msg["id"]="Id should be number and maximum length of 6";
			  }
	  }
//////check name/////
function checkname(input_field)
		{
			var temp=input_field;
			var tst=/^[A-Za-z\s]+$/;
			msg["name"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["name"]=1;
			  msg["name"]="Name can not be blanked.";
			  }
				else if (tst.test( temp.value ))
				{
				error["name"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["name"]=1;
			  msg["name"]="Name should be characters";
			  }
	  }
//////check user name/////
function checkusername(input_field)
		{
			var temp=input_field;
			var tst=/^[a-z0-9_-]{3,16}$/;
			msg["username"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["username"]=1;
			  msg["username"]="Username can not be blanked";	
			  }
				else if (tst.test( temp.value ))
				{
				error["username"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["username"]=1;
			  msg["username"]="Username should be characters or numbers or combination of characters and numbers with  maximum length of 3";
			  }
	  }
	  //////check game name/////
function checkgamename(input_field)
		{
			var temp=input_field;
			var tst=/^[A-Za-z0-9 _-]{3,50}$/;
			msg["gamename"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["gamename"]=1;
			  msg["gamename"]="Game name can not be blanked";	
			  }
				else if (tst.test( temp.value ))
				{
				error["gamename"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["gamename"]=1;
			  msg["gamename"]="Game name should be characters or numbers or combination of characters and numbers with  maximum length of 3";
			  }
	  }		  
//////check game name/////
function checkmulname(input_field)
		{
			var temp=input_field;
			msg["mulname"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["mulname"]=1;
			  msg["mulname"]="Username can not be blanked";	
			  }
				else 
				{
				error["mulname"]=0;
				temp.style.background="white";
				}
			 
	  }		  
//password check/////
function checkpassword(input_field)
		{
			var temp=input_field;
			var tst=/^[a-z0-9_-]{6,18}$/;
			msg["password"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["password"]=1;
			  msg["password"]="Password can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["password"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["password"]=1;
			  msg["password"]="Password should be greater than 6 and should include alphbets or numbers or both ";
			  }
	  }	
//url check/////
function checkurl(input_field)
		{
			var temp=input_field;
			var tst=/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
			msg["url"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["url"]=1;
			  msg["url"]="Url can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["url"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["url"]=1;
			  msg["url"]="Url is wrong pattern";
			  }
	  }
	  //price check/////
function checkprice(input_field)
		{
			var temp=input_field;
			var tst= /^[0-9]+\.[0-9]{2}$|[0-9]+\.[0-9]{2}[^0-9]/;
			msg["price"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["price"]=1;
			  msg["price"]="Price can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["price"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["price"]=1;
			  msg["price"]="Price is wrong.";
			  }
	  }
	 		  	  
//////check city/////
function checkcity(input_field)
		{
			var temp=input_field;
			var tst=/^[A-Za-z\s]+$/;
			msg["city"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["city"]=1;
			  msg["city"]="City can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["city"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["city"]=1;
			  msg["city"]="City name is wrong";
			  }
	  }	
//////check country/////
function checkcountry(input_field)
		{
			var temp=input_field;
			var tst=/^[A-Za-z\s]+$/;
			msg["country"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["country"]=1;
			  msg["country"]="Country can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["country"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["country"]=1;
			  msg["country"]="Country name is wrong";
			  }
	  }		  	  	   
	  ////addresss///
	  function checkaddress(input_field)
		{
			var temp=input_field;
			var tst=/^[a-zA-Z0-9\s,'-]*$/;
			msg["address"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["address"]=1;
			  msg["address"]="Address is blank";
			  }
				else if (tst.test( temp.value ))
				{
				error["address"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["address"]=1;
			  msg["address"]="Address is wrong";
			  }
	  }
	   //////empty brief/////
	 function checkbrief(input_field)
		{
			var temp=input_field;
			msg["brief"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["brief"]=1;
			  msg["brief"]="Blank field or Unselected field";
			  }
			  else 
			  {
			  error["brief"]=0;
			  temp.style.background="white";
			  }
	  }
	  //////empty des/////
	 function checkdesciption(input_field)
		{
			var temp=input_field;
			msg["desciption"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["desciption"]=1;
			  msg["desciption"]="Blank field or Unselected field";
			  }
			  else 
			  {
			  error["desciption"]=0;
			  temp.style.background="white";
			  }
	  }
	   //////empty subject/////
	 function checksubject(input_field)
		{
			var temp=input_field;
			msg["subject"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["subject"]=1;
			  msg["subject"]="Blank field or Unselected field";
			  }
			  else 
			  {
			  error["subject"]=0;
			  temp.style.background="white";
			  }
	  }  
	   //////empty accoun/////
	 function checkaccounttype(input_field)
		{
			var temp=input_field;
			msg["accounttype"]="";
			if(temp.value=="" || temp.value==null || temp.value=="Select Accounnt type"  )
			{
			  temp.style.background="red";
			  error["accounttype"]=1;
			  msg["accounttype"]="Blank field or Unselected field";
			  }
			  else
			  {
			  error["accounttype"]=0;
			  temp.style.background="white";
			  }
	  } 
 //////empty game type/////
	 function checkgametype(input_field)
		{
			var temp=input_field;
			msg["gametype"]="";
			if(temp.value=="" || temp.value==null || temp.value=="Select game type"  )
			{
			  temp.style.background="red";
			  error["gametype"]=1;
			  msg["gametype"]="Blank field or Unselected field";
			  }
			  else
			  {
			  error["gametype"]=0;
			  temp.style.background="white";
			  }
	  }
 //////empty game release date/////
	 function checkreleasedate(input_field)
		{
			var temp=input_field;
			msg["releasedate"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["releasedate"]=1;
			  msg["releasedate"]="Blank field or Unselected field";
			  }
			  else
			  {
			  error["releasedate"]=0;
			  temp.style.background="white";
			  }
	  }	   
//////empty game rating/////
	 function checkgamerating(input_field)
		{
			var temp=input_field;
			msg["gamerating"]="";
			if(temp.value=="" || temp.value==null || temp.value=="Select game Rating"  )
			{
			  temp.style.background="red";
			  error["gamerating"]=1;
			  msg["gamerating"]="Blank field or Unselected field";
			  }
			  else
			  {
			  error["gamerating"]=0;
			  temp.style.background="white";
			  }
	  } 	  	  
///////check email///////
	  function checkmail(input_field)
	  {
				var temp=input_field;
				msg["mail"]="";
			  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
			 if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["mail"]=1;
			  msg["mail"]="Email is blank";
			  }
				else
			 if (mailformat.test( temp.value ))
				{  
				error["mail"]=0;
				temp.style.background="white";
				}  
				else  
				{
			  	temp.style.background="red";
			  	error["mail"]=1;	
				msg["mail"]="Email is wrong";
				}
		}
///////check date//////	
function checkdate(input_field)
{
var temp = input_field;
msg["date"]="";
if(temp.value=="" || temp.value==null || temp.value=="Month" || temp.value=="Year" )
			{
	 temp.style.background="red";
	error["date"]=1;
	msg["date"]="Choose expiry date complete";	
	  }
	else
		{
error["date"]=0;
temp.style.background="white";
		}
}
///////check transaction cardname//////	
function checkcardname(input_field)
		{
			var temp=input_field;
			var tst=/^[A-Za-z\s]+$/;
			msg["cardname"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["cardname"]=1;
			  msg["cardname"]="Name on card can not be blanked.";
			  }
				else if (tst.test( temp.value ))
				{
				error["cardname"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["cardname"]=1;
			  msg["cardname"]="Name on card should be characters";
			  }
	  }

	///////zipcode no//////		
function checkzipcode(input_field)  
{ 
var temp=input_field;
  var zipcode = /^(0[289][0-9]{2})|([1345689][0-9]{3})|(2[0-8][0-9]{2})|(290[0-9])|(291[0-4])|(7[0-4][0-9]{2})|(7[8-9][0-9]{2})$/;
  msg["zipcode"]="";
  if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["zipcode"]=1;
			  msg["zipcode"]="Zipcode is blank";
			  }
	else  
  if(temp.value.match(zipcode))  
        {	  
      error["zipcode"]=0;
	  temp.style.background="white";  
        }  
      else  
        { 
		temp.style.background="red";  
        error["zipcode"]=1;
		msg["zipcode"]="Zipcode should be Australian";  
        }
} 
///////check card//////		
function checkcard(input_field)  
{ 
var temp=input_field;
   var card1 =/^(4[0-9]{12}(?:[0-9]{3})?)*$/;          //Visa
   var card2=/^(5[1-5][0-9]{14})*$/;                  // MasterCard
   msg["card"]="";
  if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["card"]=1;
			  msg["card"]="Card no is blank";
			  }
	else
  if(temp.value.match(card1) || temp.value.match(card2))  
        {		  
    error["card"]=0;
	temp.style.background="white";  
        }  
      else  
        { 
		temp.style.background="red"; 
        error["card"]=1;
		msg["card"]="Card no should be master or visa";  
        }
}   
///////check card code//////		
function cardcode(input_field)  
{ 
var temp=input_field;
  var code = /^[0-9]{3,4}$/;
  msg["code"]="";
  if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			 error["code"]=1;
			 msg["code"]="Card code is blank";
			  }
	else
  if(temp.value.match(code))  
        {	  
      error["code"]=0;
	  temp.style.background="white"; 
        }  
      else  
        { 
		temp.style.background="red";  
        error["code"]=1;
		msg["code"]="Card code should be 3 to 4 digits"; 
        } 
}  
//add submission
function checksubmit()
	  { 
	  var temp=0;
	document.getElementById("alert").innerHTML="<strong>Please correct input value/s in red field/es</strong>"; 
	  for(var key in error ) 
	      {
			  if (error[key]==1)
			  {			
			  event.preventDefault();
			  document.getElementById("alert").innerHTML+="<li>"+msg[key]+"</li>";
				temp=1;
				 }	 
	      }
	  if(temp==1)
	  {
		 $("#alert").css("display","block");
	  	return false;
	  }
	   else
		  return true;
	  }
/////submit update////
 		
	function checkupdate()
	  { 
	  var temp=0;
	document.getElementById("alert-update").innerHTML="<strong>Please correct input value/s in red field/es</strong>"; 
	  for(var key in error ) 
	      {
			  if (error[key]==1)
			  {			
			  event.preventDefault();
			  document.getElementById("alert-update").innerHTML+="<li>"+msg[key]+"</li>";
				temp=1;
				 }	 
	      }	
	  if(temp==1)
	  {$("#alert-update").css("display","block");
	  return false;
	  }
	   else
		  return true;
	  }	
/////submit search////
 		//////user search////	
	function checksearchuser()
	  { 
	   var temp=0;
	  var x = document.forms["search"]["id"].value;
	  var z= document.forms["search"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out. ");
			return false;
		}
	document.getElementById("alert-search").innerHTML="<strong>Please One field must be filled out for search </strong></br>";

	 
	if (error["id"]==1 && error["username"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-search").innerHTML+=msg["username"]+"";
			  $("#alert-search").css("display","block");
	          return false;
		       }
	if (error["id"]==1 && error["username"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }
	if (error["id"]==null && error["username"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["username"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }		   		   
	if (error["id"]==1 && error["username"]==0)
	{
	$("#user-update :input").prop("disabled", false);	
	return true;
	}
	if (error["id"]==0 && error["username"]==1)	
	{
	$("#user-update :input").prop("disabled", false);	
	return true;
	}
	}
	/////Transaction for search////	   
	function checksearchtran()
	  { 
	   var temp=0;
	  var x = document.forms["search"]["id"].value;
	  var z= document.forms["search"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out. ");
			return false;
		}
	document.getElementById("alert-search").innerHTML="<strong>Please One field must be filled out for search </strong></br>";
	if (error["id"]==1 &&  error["mail"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-search").innerHTML+=msg["mail"]+"";
			  $("#alert-search").css("display","block");
	          return false;
		       }
	if (error["id"]==1 && error["mail"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }
	if (error["id"]==null && error["mail"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["mail"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }			   
	if (error["id"]==1 &&  error["mail"]==0)
	{	
	return true;
	}
	if (error["id"]==0 &&  error["mail"]==1) 
	{	
	return true;
	}
	}
			  ///////game search//// 
	function checksearchgame()
	  { 
	   var temp=0;
	  var x = document.forms["search"]["id"].value;
	  var z= document.forms["search"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out . ");
			return false;
		}
	document.getElementById("alert-search").innerHTML="<strong>Please One field must be filled out for search </strong></br>"; 
	if (error["id"]==1 && error["name"]==1 )
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-search").innerHTML+=msg["name"]+"";
			  $("#alert-search").css("display","block");
	          return false;
	 }
	 if (error["id"]==1 && error["name"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }
	if (error["id"]==null && error["name"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["name"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }	
	 if (error["id"]==1 && error["name"]==0 ) 
	 {	
	return true;
	}
	 if (error["id"]==0 && error["name"]==1 ) 
	 {	
	return true;
	}
	  }
	///////blog search//// 
	function checksearchblog()
	  { 
	   var temp=0;
	  var x = document.forms["search"]["id"].value;
	  var z= document.forms["search"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out . ");
			return false;
		}
	document.getElementById("alert-search").innerHTML="<strong>Please One field must be filled out for search </strong></br>"; 
	if (error["id"]==1 && error["name"]==1 )
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-search").innerHTML+=msg["name"]+"";
			  $("#alert-search").css("display","block");
	          return false;
	 }
	 if (error["id"]==1 && error["name"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["id"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }
	if (error["id"]==null && error["name"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-search").innerHTML+=msg["name"]+"...";
			  $("#alert-search").css("display","block");
	          return false;
		       }	
	 if (error["id"]==1 && error["name"]==0 ) 
	 {	
	return true;
	}
	 if (error["id"]==0 && error["name"]==1 ) 
	 {	
	return true;
	}
	  }  
	/////submit delete////
	//////user delete////	
	function checkuserdelete()
	  { 
	  var temp=0;
	  var x = document.forms["delete"]["id"].value;
	  var z= document.forms["delete"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out for delete. ");
			return false;
		}
	document.getElementById("alert-delete").innerHTML="<strong>Please One field must be filled out for search </strong></br>";
	if (error["id"]==1 && error["username"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-delete").innerHTML+=msg["username"]+"";
			  $("#alert-delete").css("display","block");
	          return false;
		       }
	if (error["id"]==1 && error["username"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }
			   else{
	                return alert("Are you sure you want to delete this user?");}
	if (error["id"]==null && error["username"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["username"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this user?");}
							   		   
	if (error["id"]==1 && error["username"]==0)	 {
	return alert("Are you sure you want to delete this user?");}
	if (error["id"]==0 && error["username"]==1)	{
		return alert("Are you sure you want to delete this user?"); }
	}
	/////Transaction for Delete////
	function checkdeletetran()
	  { 
	  var temp=0;
	  var x = document.forms["delete"]["id"].value;
	  var z= document.forms["delete"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out for delete. ");
			return false;
		}
	document.getElementById("alert-delete").innerHTML="<strong>Please One field must be filled out for search </strong></br>";	   
	if (error["id"]==1 &&  error["mail"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-delete").innerHTML+=msg["mail"]+"";
			  $("#alert-delete").css("display","block");
	          return false;
		       }
	if (error["id"]==1 && error["mail"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this record?");}
	if (error["id"]==null && error["mail"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["mail"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this record?");}			   
	if (error["id"]==1 &&  error["mail"]==0)   return confirm('Are you sure you want to delete this record?');
	if (error["id"]==0 &&  error["mail"]==1)   return confirm('Are you sure you want to delete this record?');	
	}
			  ///////game delet//// 
	function checkdeletegame()
	  { 
	  var temp=0;
	  var x = document.forms["delete"]["id"].value;
	  var z= document.forms["delete"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out for delete. ");
			return false;
		}
	document.getElementById("alert-delete").innerHTML="<strong>Please One field must be filled out for search </strong></br>";			  
	if (error["id"]==1 && error["name"]==1 )
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-delete").innerHTML+=msg["name"]+"";
			  $("#alert-delete").css("display","block");
	          return false;
	 }
	 if (error["id"]==1 && error["name"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this game?");}
	if (error["id"]==null && error["name"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["name"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this game?");}	
	 if (error["id"]==1 && error["name"]==0 )   return confirm('Are you sure you want to delete this game?');
	 if (error["id"]==0 && error["name"]==1 )   return confirm('Are you sure you want to delete this game?');
	  }
	   ///////del blog//// 
	function checkdeleteblog()
	  { 
	  var temp=0;
	  var x = document.forms["delete"]["id"].value;
	  var z= document.forms["delete"]["name"].value;
    if (x == "" && z == "" ) 
		{
			alert("One field must be filled out for delete. ");
			return false;
		}
	document.getElementById("alert-delete").innerHTML="<strong>Please One field must be filled out for search </strong></br>";			  
	if (error["id"]==1 && error["name"]==1 )
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  document.getElementById("alert-delete").innerHTML+=msg["name"]+"";
			  $("#alert-delete").css("display","block");
	          return false;
	 }
	 if (error["id"]==1 && error["name"]==null)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["id"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this blog?");}
	if (error["id"]==null && error["name"]==1)
	{			
			  event.preventDefault();
			  document.getElementById("alert-delete").innerHTML+=msg["name"]+"...";
			  $("#alert-delete").css("display","block");
	          return false;
		       }else{
	                return alert("Are you sure you want to delete this blog?");}	
	 if (error["id"]==1 && error["name"]==0 )   return confirm('Are you sure you want to delete this blog?');
	 if (error["id"]==0 && error["name"]==1 )   return confirm('Are you sure you want to delete this blog?');
	  }
	  