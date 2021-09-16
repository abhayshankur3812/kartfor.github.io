isAlreadyLoggedIn();

// Function to Open Side Menu
function openSideMenu(){
    let extlgscrn=window.outerWidth;
    let lgscrn=window.outerWidth;
    let mdscrn=window.outerWidth;
    let smscrn=window.outerWidth;
    let scrn=window.innerWidth;
    if(extlgscrn>1080){
        document.getElementById("sidemenu-smscrn").style.width="35vw";      
    }else if(lgscrn>800){
        document.getElementById("sidemenu-smscrn").style.width="40vw";
    }else if(mdscrn>480){
        document.getElementById("sidemenu-smscrn").style.width="50vw";
    }else{
        if(scrn==smscrn){
            document.getElementById("sidemenu-smscrn").style.width="70vw";
        }
        else{
            document.getElementById("sidemenu-smscrn").style.width="70vw";
        }
    }  
}

// Function to Close Side Menu
function closeSideMenu() {
    document.getElementById("sidemenu-smscrn").style.width="0";
}

// Function to Open the links of Top Navbar.
function openTopLinks(id) {
    switch (id) {
        case 'button-more':
            case 'sm-more':
                openSideMenu();
            break;
        case 'button-home':
            case 'sm-home':
                window.open("index.php","_top");
            break;
        case 'button-category':
            // window.open("allcategories.html","_top");
            break;    
        case 'button-deals':
            window.open("#","_top");
            break;
        case 'button-prime':
            window.open("#","_top");
            break;
        case 'button-cart':
            case 'sm-cart':
                window.open("#","_top");
            break;    
    }
}

// Function to Open the links of Side menubar. 
function openSideLinks(id) {
    switch (id.id) {
        case 'sidemenu-content-1':
            window.open("#","_top");
            break;
        case 'sidemenu-content-2':
            // window.open("allcategories.html","_top");
            break;
        case 'sidemenu-content-3':
            window.open("#","_top");
            break;
        case 'sidemenu-content-4':
            window.open("#","_top");
            break;
        case 'sidemenu-content-5':
            window.open("#","_top");
            break;
        case 'sidemenu-content-6':
            window.open("#","_top");
            break;
        case 'sidemenu-content-7':
            window.open("#","_top");
            break;
        case 'sidemenu-content-8':
            window.open("#","_top");
            break;
        case 'sidemenu-content-9':
            window.open("#","_top");
            break;
        case 'sidemenu-content-10':
            logout();
            window.open("index.php","_top");
            break;
        case 'sidemenu-content-11':
            window.open("form.php","_top");
            break;        
        default:
            break;
    }
}

// Function to get Name of User.
function getNameById(id) {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            let side=document.getElementById("sidemenu-top-smscrn1"); 
            side.innerHTML= this.responseText;
        }
    }
    xmlhttp.open("GET","include/ajaxdataretrive.php?q="+id,true);
    xmlhttp.send();
}

// Function to check is Already Log in.
function isAlreadyLoggedIn() {
    let logout=document.getElementById("sidemenu-content-10");
    let signin=document.getElementById("sidemenu-content-11");

    let id=localStorage.getItem("id");
    if (id===null) {
        logout.style.display="none";
        signin.style.display="flex";
    } else {
        getNameById(id);
        logout.style.display="flex";
        signin.style.display="none";

    }
}

//Function Log Out.
function logout() {
    localStorage.removeItem("id");
}

// Function for Drop down.
function dropdown() {
    let dropdown=document.getElementById("dropdown-content-2");
    dropdown.style.display="block";
}

// Function for classifying appropiate page.
function products(elem) {
    let listName=elem.getAttribute("data-list");
    switch (listName) {
        case 'list-mobile':
            getCategoryId(listName);
            break;

        case 'list-fashion':
            getCategoryId(listName);
            break;
            
        case 'list-electronics':
            getCategoryId(listName);
            break;
            
        case 'list-appliances':
            getCategoryId(listName);
            break;

        default:
            break;
    }
}

// Function for getting the requested code for category.
function getCategoryId(name) {
    let http=new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            let id=this.responseText;
            // sessionStorage.removeItem("Category Id");
            // sessionStorage.setItem("Category Id",id.toString());
            window.open("./productlist.php?categoryId="+id,"_top");
        }
    };
    http.open("POST","./include/mainServer.php?category="+name,true);
    http.send();
}
