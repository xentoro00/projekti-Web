function addToCart(productName) {
    alert('Product ' + productName + ' added to cart!');
}

const loginForm = document.getElementById('loginForm');

// Kontrolloni nëse loginForm është gjetur para se të shtoni dëgjuesin
if (loginForm) {
    loginForm.addEventListener('submit', function (event) {
        // Merrni vlerat e dhëna nga input-et
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Kryeni veprimet e nevojshme me të dhënat (p.sh., autentikim në server)

        // Shembull i thjeshtë: shfaqeni në konsolë për t'i parë vlerat e dhëna
        console.log('Username:', username);
        console.log('Password:', password);

        // Parandaloni dërgimin e formës, pasi kjo është vetëm një shembull
        event.preventDefault();
    });
} else {
    console.error('Element with ID "loginForm" not found.');
};

const signupForm = document.getElementById('signupForm');
if (loginForm) {
    loginForm.addEventListener('submit', function (event) {
        // Kodet e ngjarjes së formës së hyrjes
        event.preventDefault();
    });
} else {
    console.error('Element with ID "loginForm" not found.');
}
        // Krijoni një referencë për formën

        // Shtoni një dëgjues për ngjarjen e paraqitjes së formës
        signupForm.addEventListener('submit', function (event) {
            // Merrni vlerat e dhëna nga input-et
            const name = document.getElementById('name').value;
            const lname = document.getElementById('lname').value;
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Merrni vlerën e zgjedhur të gjinisë
            let gender;
            const maleRadio = document.getElementById('male');
            const femaleRadio = document.getElementById('female');

            if (maleRadio.checked) {
                gender = 'Male';
            } else if (femaleRadio.checked) {
                gender = 'Female';
            }

            // Kryeni veprimet e nevojshme me të dhënat (p.sh., dërgim në server)

            // Shembull i thjeshtë: shfaqeni në konsolë për t'i parë vlerat e dhëna
            console.log('Name:', name);
            console.log('Last Name:', lname);
            console.log('Username:', username);
            console.log('Email:', email);
            console.log('Password:', password);
            console.log('Gender:', gender);

            // Parandaloni dërgimin e formës, pasi kjo është vetëm një shembull
            event.preventDefault();
        });