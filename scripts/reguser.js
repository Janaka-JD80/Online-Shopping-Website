function setFocus(){
	var num1;
	num1=document.forms["dataform"]["FullName"].value;
	num1=document.forms["dataform"]["FullName"].focus();
  }
  
  
  function NumberValid(){
	var num;
	num=document.forms["dataform"]["Telephone"].value;
	
	if(num==""){
	document.getElementById("utelephone").innerHTML="You're required to fill this";
	}else{
		if(num.length!="10"){
			document.getElementById("utelephone").innerHTML="Length is not right";
		}
			else if(isNaN(num)){
				document.getElementById("utelephone").innerHTML="Please enter only numbers";
			}
			else if (num.substring(0,1)!="0"){
					document.getElementById("utelephone").innerHTML="First digit must be zero";
			}else{
				document.getElementById("utelephone").innerHTML="";
			}						
	}
	
  }
  
  
 
  
  function NameValid(){
	 var name;
	 var len = /^[A-Za-z\s.]+$/;
    name=document.getElementById("FulName").value

	if(name==""){
		 document.getElementById("uname").innerHTML="You're required to fill this";
		 
	}else{

    if(name.match(len))
      document.getElementById("uname").innerHTML="";
    else
       document.getElementById("uname").innerHTML="Please enter valid inputs"
	}

	 
	  }
	  
	  
	  
	function EmptyValid(event){
		 let add;
		 let name;
		 let tps;
		 let mail;
		 let uname;
		 let password;
		 let repassword;
		 
		 
		add=document.getElementById("Address").value;
		name=document.getElementById("FullName").value;
		tps=document.getElementById("Telephone").value;
		mail=document.getElementById("Email").value;
		uname=document.getElementById("UserName").value;
		password=document.getElementById("Password").value;
		repassword=document.getElementById("RePassword").value;

		
		
		
		if(name===""){
			document.getElementById("uname").innerHTML="You're require to fill this";
			document.getElementById("uaddress").innerHTML="";
			document.getElementById("utelephone").innerHTML="";
			document.getElementById("uemail").innerHTML="";
			document.getElementById("uusername").innerHTML="";
			document.getElementById("upasssword").innerHTML="";
			document.getElementById("urepassword").innerHTML="";
				return false;
			event.preventDefault();
			
		}
		return false;
		document.getElementById("ff").addEventListener("submit", EmptyValid);
		
		/*
	else if(add===""){
		    document.getElementById("uname").innerHTML="";
			document.getElementById("uaddress").innerHTML="You're require to fill this";
			document.getElementById("utelephone").innerHTML="";
			document.getElementById("uemail").innerHTML="";
			document.getElementById("uusername").innerHTML="";
			document.getElementById("upasssword").innerHTML="";
			document.getElementById("urepassword").innerHTML="";	
			
			
		}
		
		
	
		
		else if(tps===""){
		    document.getElementById("uname").innerHTML="";
			document.getElementById("uaddress").innerHTML="";
			document.getElementById("utelephone").innerHTML="You're require to fill this";
			document.getElementById("uemail").innerHTML="";
			document.getElementById("uusername").innerHTML="";
			document.getElementById("upasssword").innerHTML="";
			document.getElementById("urepassword").innerHTML="";
		
		}
		
		
		else if(mail===""){
		    document.getElementById("uname").innerHTML="";
			document.getElementById("uaddress").innerHTML="";
			document.getElementById("utelephone").innerHTML="";
			document.getElementById("uemail").innerHTML="You're require to fill this";
			document.getElementById("uusername").innerHTML="";
			document.getElementById("upasssword").innerHTML="";
			document.getElementById("urepassword").innerHTML="";
		
			
		}
			
		else if(uname===""){
		    document.getElementById("uname").innerHTML="";
			document.getElementById("uaddress").innerHTML="";
			document.getElementById("utelephone").innerHTML="";
			document.getElementById("uemail").innerHTML="";
			document.getElementById("uusername").innerHTML="You're require to fill this";
			document.getElementById("upasssword").innerHTML="";
			document.getElementById("urepassword").innerHTML="";	
			
			
		}

		else if(password===""){
		    document.getElementById("uname").innerHTML="";
			document.getElementById("uaddress").innerHTML="";
			document.getElementById("utelephone").innerHTML="";
			document.getElementById("uemail").innerHTML="";
			document.getElementById("uusername").innerHTML="";
			document.getElementById("upasssword").innerHTML="You're require to fill this";
			document.getElementById("urepassword").innerHTML="";	
		
			
		}


		else if(repassword===""){
		    document.getElementById("uname").innerHTML="";
			document.getElementById("uaddress").innerHTML="";
			document.getElementById("utelephone").innerHTML="";
			document.getElementById("uemail").innerHTML="";
			document.getElementById("uusername").innerHTML="";
			document.getElementById("upasssword").innerHTML="";
			document.getElementById("urepassword").innerHTML="You're require to fill this";
			
			
		}

		*/
		
		
	  }
	  
	 
	
	
	 
	
  
 
  
	
	  
  
  
	  
		  
  