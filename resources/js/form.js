// CATTURA ELEMENTO

let eyeIcon= document.querySelector('#eyeIcon');
let password= document.querySelector('#password');
let eyeIcon_confirmation=document.querySelector('#eyeIcon_confirmation');
let password_confirmation=document.querySelector('#password_confirmation');

// Evento eyecon
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
