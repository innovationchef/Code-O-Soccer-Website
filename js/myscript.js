function ClearForm()
{
    document.registration.reset();
    document.member1.reset();
    document.member2.reset();
    document.member3.reset();
    document.member4.reset();
}
function validatetext(x,y)
{
        validate = true;
        var u = document.forms[x][y].value;
        var uLength = u.length;
        var illegalChars = /\W/; // allow letters, numbers, and underscores
        if (u == null || u == "")
        {
          alert("Name must be filled out");
            validate     = false;
        }
        else if (illegalChars.test(u))
        {
          alert("Use of special characters in denied");
            validate     = false;
        }
        teamname.focus;

}
function validatename(x,y)
{
        validate = true;
        var u = document.forms[x][y].value;
        var uLength = u.length;
        var illegalChars = /\W/; // allow letters, numbers, and underscores
        if (u == null || u == "")
        {
          alert("Name must be filled out");
            validate     = false;
        }
        else if (uLength <4 || uLength > 11)
        {
          alert("Charater length is 4-11 ");
            validate     = false;
        }
        else if (illegalChars.test(u))
        {
          alert("Use of special characters in denied");
            validate     = false;
        }
        teamname.focus;

}


var validate;

function validateTeamname(x,y)
{
        validate = true;
        var u = document.forms[x][y].value;
        var uLength = u.length;
        var illegalChars = /\W/; // allow letters, numbers, and underscores
        if (u == null || u == "")
        {
          alert("Teamname must be filled out");
            validate     = false;
        }
        else if (uLength <4 || uLength > 11)
        {
          alert("Charater length is 4-11 ");
            validate     = false;
        }
        else if (illegalChars.test(u))
        {
          alert("Use of special characters in denied");
            validate     = false;
        }
        teamname.focus;
}
function checkEmail(x,y)
{
        var email = document.forms[x][y].value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email.value))
        {
        alert('Please provide a valid email address');
        email.focus;
        validate = false;
        }
}


function ValidateForm(){
	var emailID=document.frmSample.txtEmail

	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }

function validatePassword(x,y)
   {
       var p = document.forms[x][y].value
       var pLength = p.length;
       if (p == null || p == "")
       {
         alert('You left the password field empty');
          validate     = false;
       }
       else if (pLength < 6 || pLength > 20)
       {
         alert('Your password must be between 6 and 20 characters in length');
           validate     = false;
       }

   }
function validateCPassword(x,y)
   {
       var p = document.forms[x][y].value
       var cP = document.forms[x][y].value
       var pLength = p.length;
       if (p != cP)
       {
         alert('The passwords do not match!');
           validate     = false;
       }

   }

function validateForm()
{
     validateText();
     checkEmail();
     validatePassword();
}



function checkNum(x,y)
{

  var s_len=document.forms[x][y].value.length ;
  var s_charcode = 0;
    for (var s_i=0;s_i<s_len;s_i++)
    {
     s_charcode = x.value.charCodeAt(s_i);
     if(!((s_charcode>=48 && s_charcode<=57)))
      {
         alert("Only Numeric Values Allowed");
          x.value='';
         x.focus();

      }
    }

}
