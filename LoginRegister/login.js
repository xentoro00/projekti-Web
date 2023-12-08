const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");
const loginBtn = loginForm.childNodes[7];
const register = document.getElementById("register");
const registerSubmit = document.getElementById("rSubmit");
var fetchedData = JSON.parse(sessionStorage.getItem("data"));

loginBtn.addEventListener("click", () => {
    data = {
        username: loginForm.childNodes[3].value,
        password: loginForm.childNodes[5].value
    };
    
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
    }else if(checkIfUsernameExist(username)){
        alert("Username exist")
        return
    }
    if (!email) {
        alert("type an email");
        return
    }
    
    if (!password) {
        alert("type a passwords");
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
    loginForm.style.display = 'flex';
    signupForm.style.display = 'none';
})

register.addEventListener("click", () => {
    loginForm.style.display = 'none';
    signupForm.style.display = 'flex';
})

function checkIfUsernameExist(user){
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