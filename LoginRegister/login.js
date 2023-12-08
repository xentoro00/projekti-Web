const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");
const loginBtn = loginForm.childNodes[7];
const goToRegister = document.getElementById("goToRegister");
const goToLogin = document.getElementById("goToLogin");
const registerSubmit = document.getElementById("rSubmit");
var fetchedData = JSON.parse(sessionStorage.getItem("data"));

loginBtn.addEventListener("click", () => {
    let username = loginForm.childNodes[3].value;
    let password = loginForm.childNodes[5].value;
    if (!username) {
        alert("type a username");
        return
    }
    if (!password) {
        alert("Type a password");
        return
    }
    if (!usernameExist(username)) {
        alert("user doesn't exist or password doesn't match")
    }  else {
        const data = JSON.parse(sessionStorage.getItem("data"));
        for (let i = 0; i < data.length; i++) {
            if (username == data[i].username) {
                if (password === data[i].password) {
                    alert("logged in");
                    sessionStorage.setItem("currentUser", username);
                    window.location.replace("../index.html");
                    return
                }else {
                    alert("user doesn't exist or password doesn't match")
                }
            }
        }
        
    }
})

registerSubmit.addEventListener("click", () => {
    let gender;
    let name = signupForm.childNodes[5].value;
    let lastname = signupForm.childNodes[9].value;
    let username = signupForm.childNodes[13].value;
    let email = signupForm.childNodes[17].value;
    let password = signupForm.childNodes[21].value;
    if (!name) {
        alert("type a name");
        return
    }
    
    if (!lastname) {
        alert("type a last name");
        return
    }
    
    if (!username) {
        alert("type a username");
        return
    }else if(usernameExist(username)){
        alert("Username exist")
        return
    }
    if (!email) {
        alert("type an email");
        return
    }
    
    if (!password) {
        alert("type a password");
        return
    }
    if (!document.querySelector('input[name="gender"]:checked')) {
        alert("Select a gender");
        return
    }else if(document.querySelector('input[name="gender"]:checked').id == 'female'){
        gender = 'f';
    }else {
        gender = 'm'
    }
    let data = JSON.parse(sessionStorage.getItem("data"));
    
    if (!data) {
        data = [];
    }
    data.push({
        name:name,
        lastname:lastname,
        username:username,
        email:email,
        password:password,
        gender:gender
    })
    sessionStorage.setItem("data", JSON.stringify(data))
    goToLoginF();
})

goToRegister.addEventListener("click", () => {
    loginForm.style.display = 'none';
    signupForm.style.display = 'flex';
    loginForm.childNodes[3].value = '';
    loginForm.childNodes[5].value = '';
})

goToLogin.addEventListener("click", goToLoginF)
function goToLoginF(){
    loginForm.style.display = 'flex';
    signupForm.style.display = 'none';
    
    signupForm.childNodes[5].value  = '';
    signupForm.childNodes[9].value  = '';
    signupForm.childNodes[13].value = '';
    signupForm.childNodes[17].value = '';
    signupForm.childNodes[21].value = '';
    if(document.querySelector('input[name="gender"]:checked')){
        document.querySelector('input[name="gender"]:checked').checked = false;
    }

}
function usernameExist(user){
    let data = JSON.parse(sessionStorage.getItem("data"));
    if (!data) {
        return false
    }
    for (let i = 0; i < data.length; i++) {
        if (user == data[i].username) {
            return true;
        }
    }
    return false;

}