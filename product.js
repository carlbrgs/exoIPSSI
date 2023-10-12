//PRODUCT PAGE
let x = document.getElementsByClassName('product');

function getVal() {
    const searchbar = document.getElementById('searchbar').value;
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(searchbar)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
