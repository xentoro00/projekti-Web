// Lista e produkteve në shportë
let cartProducts = [];

// Funksioni për shtimin e produkteve në shportë
function addToCart(productName) {
    // Shtoni produktin në listën e shportës
    cartProducts.push(productName);

    // Llogaritja e totalit të produkteve në shportë
    let cartTotal = cartProducts.length;

    // Shfaqeni një alertë ose bëni diçka tjetër me shportën
    alert('Produkti "' + productName + '" eshte shtuar ne shporte. Totali: ' + cartTotal);
}