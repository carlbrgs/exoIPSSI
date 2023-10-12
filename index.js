//HOME PAGE

let btn = document.querySelector('.text-content');
btn.addEventListener("click", () => {
    fermerPopup();
})

function fermerPopup() {
    let page = document.querySelector(".page-content");
    let close = document.querySelector(".pop-up");
    close.style.display = "none";
    removeFilter = page.style.filter = "none";
    localStorage.setItem('popup', 'false')
}

let popup = document.querySelector(".pop-up");
let test = localStorage.getItem('popup')
console.log(test)

if(test == 'false'){
    let page = document.querySelector(".page-content");
    let close = document.querySelector(".pop-up");
    close.style.display = "none";
    removeFilter= page.style.filter = "none";
    
}

// //PRODUCT PAGE
// let x = document.getElementsByClassName('product');

// function getVal() {
//     const searchbar = document.getElementById('searchbar').value;
//     for (i = 0; i < x.length; i++) { 
//         if (!x[i].innerHTML.toLowerCase().includes(searchbar)) {
//             x[i].style.display="none";
//         }
//         else {
//             x[i].style.display="list-item";                 
//         }
//     }
// }

