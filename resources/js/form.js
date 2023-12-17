// ELEMENTI CATTURATI

//Register Form
let eyeIcon= document.querySelector('#eyeIcon');
let password= document.querySelector('#password');
let eyeIcon_confirmation=document.querySelector('#eyeIcon_confirmation');
let password_confirmation=document.querySelector('#password_confirmation');

//Login Form
let eyeIconLogin= document.querySelector('#eyeIconLogin');
let passwordLogin= document.querySelector('#passwordLogin');


//EVENTI

// Evento Eyecon Form Register
function passwordVisibility(){
    if (password.type==='password') {
        password.type= 'text';
        if (eyeIcon.classList.contains('openEyeIcon')) {
            eyeIcon.classList.remove('openEyeIcon');
            eyeIcon.classList.add('closedEyeIcon');
        }
    }else{
        password.type='password';
        if (eyeIcon.classList.contains('closedEyeIcon')) {
            eyeIcon.classList.add('openEyeIcon');
            eyeIcon.classList.remove('closedEyeIcon');
        }
    }
}

if(eyeIcon != null){
    eyeIcon.addEventListener('click',()=>{
        
        passwordVisibility();
    });
}

function passwordConfirmationVisibility(){
    if (password_confirmation.type==='password') {
        password_confirmation.type= 'text';
        if (eyeIcon_confirmation.classList.contains('openEyeIcon')) {
            eyeIcon_confirmation.classList.remove('openEyeIcon');
            eyeIcon_confirmation.classList.add('closedEyeIcon');
        }
    }else{
        password_confirmation.type='password';
        if (eyeIcon_confirmation.classList.contains('closedEyeIcon')) {
            eyeIcon_confirmation.classList.add('openEyeIcon');
            eyeIcon_confirmation.classList.remove('closedEyeIcon');
        }
    }
}

if (eyeIcon_confirmation != null) {
    eyeIcon_confirmation?.addEventListener('click',()=>{
        
        passwordConfirmationVisibility();
    });
}

// Evento Eyecon Form Login
function passwordLoginVisibility(){
    if (passwordLogin.type==='password') {
        passwordLogin.type= 'text';
        if (eyeIconLogin.classList.contains('openEyeIconLogin')) {
            eyeIconLogin.classList.remove('openEyeIconLogin');
            eyeIconLogin.classList.add('closedEyeIconLogin');
        }
    }else{
        passwordLogin.type='password';
        if (eyeIconLogin.classList.contains('closedEyeIconLogin')) {
            eyeIconLogin.classList.add('openEyeIconLogin');
            eyeIconLogin.classList.remove('closedEyeIconLogin');
        }
    }
}

if(eyeIconLogin != null){
    eyeIconLogin.addEventListener('click',()=>{
        
        passwordLoginVisibility();
    });
}
