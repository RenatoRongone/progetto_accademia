// ELEMENTI CATTURATI

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

