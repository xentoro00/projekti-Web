const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const errCode = parseInt(urlParams.get('errCode'));
document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('container');
const registerBtn = document.getElementById('toggleSignup');
const loginBtn = document.getElementById('toggleLogin');

if (errCode) {
    showPopUp(errCode);
}

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});


})