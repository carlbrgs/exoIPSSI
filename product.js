/*PRODUCT PAGE
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

*/


let productItem = document.getElementsByClassName('produit-block');
let title = document.querySelectorAll('div.text-product > h2')

let search = document.getElementById('searchbar').value;
//search.addEventListener("change", getVal, false);

function getVal() {
    const searchbar = document.getElementById('searchbar').value;
    for (i = 0; i < title.length; i++) { 
        if (!title[i].innerHTML.toLowerCase().includes(searchbar)) {
            productItem[i].style.display="none";
        }
        else {
          productItem[i].style.display="block";    
        }
    }
}