
// Function to visible Password.
function passwordCheck(checkbx,inpt) {
    let val=document.getElementById(checkbx.toString());
    let pass= document.getElementById(inpt.toString());
    if(val.checked === true){
        pass.setAttribute("type","text");
    }
    else{
        pass.setAttribute("type","password");
    }
}
// Function to Keep logged in.
function keepSignIn(id,checkboxValue) {
    if(checkboxValue === "on") {
        localStorage.setItem("id",id.toString());
    }
}

// Function for Panel switch.
function panel(val) {   
    let signinPanel = document.getElementsByClassName("signin-panel");
    let loginPanel = document.getElementsByClassName("login-panel");
    switch (val) {
        case 'signinPanel':
            signinPanel[0].style.display = "flex";
            loginPanel[0].style.display = "none";
            break;
        case 'loginPanel':
            signinPanel[0].style.display = "none";
            loginPanel[0].style.display = "flex";
            break;

        default:
            break;
    }
}