// TimeMout per messages
let successMessage= document.querySelector('#successMessage');

setTimeout(() => {
    if (successMessage) {
        successMessage.classList.add('hiddenAnimation')
    }

}, 2000);

setTimeout(() => {
    if (successMessage) {
        successMessage.classList.add('d-none')
    }
}, 2500);

//Menu Categorie
let allCategories = document.querySelector('#allCategories'); // bottone
let topCategories = document.querySelectorAll('.topCategories'); // top 3
let categories = document.querySelector('#categories'); // tutte le categorie

allCategories?.addEventListener('click', ()=>{
    showCategories();
})

function showCategories() {
    topCategories.forEach((category) => {

        if(category.classList.contains('d-block')){
            category.classList.add('d-none');
            category.classList.remove('d-block');
        }else{
            category.classList.remove('d-none');
            category.classList.add('d-block');
        }
    })
    if(categories.classList.contains('d-none')){
        categories.classList.remove('d-none');
    }else{
        categories.classList.add('d-none');
    }
}

// Evento Searchbar

let searchButton= document.querySelector('#searchButton');
let searchBar= document.querySelector('#searchBar');
let iconSearch=document.querySelector('#iconSearch');

iconSearch?.addEventListener('click', ()=>{
    showSearchbar();
})

function showSearchbar(){
    if(searchBar.classList.contains('d-none')){
        searchBar.classList.remove('d-none');
        searchBar.classList.add('d-block');
        // iconSearch.classList.remove('textMyWhite');
        // iconSearch.classList.add('textMyBlack');

    }else{
        searchBar.classList.add('d-none');
        searchBar.classList.remove('d-block');
        // iconSearch.classList.add('textMyWhite');
        // iconSearch.classList.remove('textMyBlack');
    }
}