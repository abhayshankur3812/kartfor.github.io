// Function to get Products for ProductList
function getProducts(categoryId) {
    let elem1 = document.getElementById("center-panel-content");
    // let categoryid=sessionStorage.getItem("Category Id");
    let centralPanel=new XMLHttpRequest();
    centralPanel.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            let htmlDiv=this.responseText;
            // console.log(htmlDiv)
            elem1.innerHTML= htmlDiv;
        }
    };
    centralPanel.open("POST","./include/productServer.php?categoryIdForProducts="+categoryId,true);
    centralPanel.send();

    let elem2 = document.getElementById("left-panel-content-body");
    let leftPanel=new XMLHttpRequest();
    leftPanel.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            let htmlDiv=this.responseText;
            // console.log(htmlDiv)
            elem2.innerHTML= htmlDiv;
        }
    };
    leftPanel.open("POST","./include/productServer.php?categoryIdForBrands="+categoryId,true);
    leftPanel.send();

}

// Function to Show a Product.
function showProduct(elem) {
    productId=elem.getAttribute("data-id");
    window.open("product.php?productId="+productId,"_top");
    // categoryId=productId.slice(0,3);
    // brandId=productId.slice(3,6);
    // console.log(categoryId,brandId);
}