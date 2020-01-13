window.onload= function myformvalidation()
{
    //variable holding form
    var myforms = document.forms[0];
    // if the form is submitted check validation by calling function formprocess
    myforms.onsubmit = formprocess;
    var firstname = document.getElementById("fname");
    var lastname = document.getElementById("lname");
    var emailid = document.getElementById("email");
    var guestnumber = document.getElementById("guestnumber")
    var radioselection = document.getElementsByName("theme");


    var errorfname = document.getElementById("msgfname");
    var errorlname = document.getElementById("msglname")
    var erroremail = document.getElementById("msgemail");
    var errorguestnumber = document.getElementById("msgselectguest");
    var errortheme = document.getElementById("msgtheme");
    //function to check validation to check if user enters all the field without leaving anything empty
    function formprocess()
    {
        //I am checking all the fields to be non-empty
        if(firstname.value=== "")
        {
            errorfname.innerHTML = "Please enter first name";
            return false;
        }
        else if(lastname.value === "")
        {
            errorlname.innerHTML = "Please enter your last name";
            return false;
        }
        else if(emailid.value === "")
        {
            erroremail.innerHTML = "Please enter your Email ID";
            return false;
        }
        else if(guestnumber.value === "")
        {
            errorguestnumber.innerHTML = "Please select one option";
            return false;
        }
        //referenced from stack overflow on google.com
       else if(!(radioselection[0].checked || radioselection[1].checked || radioselection[2].checked))
       {
           errortheme.innerHTML = "Please select theme ";
           return false;

        }



    }
}
