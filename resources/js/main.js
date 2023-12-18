// MESSAGGI ERRORE E SUCCESSO

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

// MENU

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

// NAVBAR 

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

// Evento navbar-toggler
/* let navbar_toggler = document.querySelector('.navbar-toggler');
let collapsible_content = document.querySelector('#navbarContent'); 

document.addEventListener('DOMContentLoaded', function() {
    navbar_toggler.addEventListener('click', function() {
        let is_expanded = collapsible_content.classList.contains('show');
        navbar_toggler.setAttribute('aria-expanded', !is_expanded);
        this.classList.toggle('menu-open');
    });
}); */

// MODAL SELEZIONE LINGUA
document.addEventListener('DOMContentLoaded', (event) => {
    let language_modal = document.querySelector("#language_modal");
    let language_icon = document.querySelector("#language_icon"); 
    let close_modal = document.querySelector(".close");
    
    // questa versione dava problemi perché js interferiva con il display-flex che stava nella classe CSS .show{display: flex} e anche col d-flex di Bootstrap. Ora, al posto di tale classe, c'è la classe .modalHidden, che itneragisce bene – pare – con js e il metodo toggle
    
    /* language_icon.addEventListener('click', () => {
        language_modal.classList.add("show");
    });
    
    span.addEventListener('click', () => {
        language_modal.classList.remove("show");
    });
    
    window.addEventListener('click', (event) => {
        if (event.target == language_modal) {
            language_modal.classList.remove("none");
        }
    }); */
    
    function toggleModal() {
        language_modal.classList.toggle('modalHidden');
    }
    
    language_icon.addEventListener('click', toggleModal);
    
    close_modal.addEventListener('click', toggleModal);
    
    window.addEventListener('click', (event) => {
        if (event.target == language_modal) {
            toggleModal();
        }
    });
});