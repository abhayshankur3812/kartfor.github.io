function loadImageSize(child,parent) {
    let parentHeight = parent.clientHeight;
    let parentWidth = parent.clientWidth;
    let childHeight = child.naturalHeight;
    let childWidth = child.naturalWidth;
    let newHeight,newWidth,prt;
 
    if(childHeight==childWidth){
        if(parentHeight==parentWidth){newWidth=parentWidth,newHeight=parentHeight;}
        else if(parentHeight>parentWidth){newWidth=newHeight=parentWidth;}
        else {newWidth=newHeight=parentHeight;}
    }
    else if (childHeight > childWidth) {
        prt = (childWidth * 100) / childHeight;
        newWidth = (parentWidth * prt) / 100, newHeight = parentHeight;
    }
    else {
        prt = (childHeight * 100) / childWidth;
        newWidth = parentWidth, newHeight = (parentHeight * prt) / 100;
    }
    child.setAttribute("width", newWidth.toString());
    child.setAttribute("height", newHeight.toString());
}