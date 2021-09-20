let startIndex=0,count;
let imgsdiv=document.getElementsByClassName("imgs-list-items");
let prt=document.getElementById("product-imgs-list");
let no=Math.round( prt.clientWidth/imgsdiv[0].clientWidth);

function nextImg() {
    if (startIndex!=(imgsdiv.length-no)) {
        imgsdiv[startIndex].style.display="none";
        startIndex++;
    }
}

function prevImg() {
    if (startIndex!=0) {
        imgsdiv[startIndex-1].style.display="inline-block";
        startIndex--;
    }
}

// document.getElementsByClassName("product-imgs").addEventListener('mouseenter',function(e){console.log(e.target)});
// let img=document.getElementById("product-img");
let img=document.getElementById("product-img-main");
let mainsrc=img.getAttribute("src");
function imgclick(elem) {
    let src=elem.getAttribute("src");
    img.setAttribute("src",src);
}
function imgin(elem) {
    let img=document.getElementById("product-img-main");
    let src=elem.getAttribute("src");
    img.setAttribute("src",src);
}
function imgout() {
    let img=document.getElementById("product-img-main");
    img.setAttribute("src",mainsrc);
}