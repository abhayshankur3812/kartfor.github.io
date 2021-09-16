let imageindex = 0;
function loaditems() {
    slides();
}

window.addEventListener('load',loaditems()); 

function slides() {
    let i;
    let x = document.getElementsByClassName("image-slides");
    for (i = 0; i < x.length / 2; i++) {
        x[i].style.display = "none";
        x[i + 3].style.display = "none";
    }
    imageindex++;
    if (imageindex > x.length / 2) { imageindex = 1 }
    x[imageindex - 1].style.display = "block";
    x[imageindex + 2].style.display = "block";
    setTimeout(slides, 2000);
}
