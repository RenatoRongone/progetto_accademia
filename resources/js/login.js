// CATTURA DEGLI ELEMENTI
let password = document.querySelector('#password');
let eyeIcon = document.querySelector('#eyeIcon');

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

eyeIcon?.addEventListener('click',()=>{

    passwordVisibility();
});