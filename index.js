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

//Carousel product

