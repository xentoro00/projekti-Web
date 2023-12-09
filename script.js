// const items = [
//     {
//         id : 1,
//         imgSource : 'product1.jpg',
//         title : 'Processor (CPU): Intel Core i7-9700K',
//         description : 'Powerful 9th Gen CPU with 8 cores, 8 threads, and a base clock of 3.6GHz (up to 4.9GHz). Ideal for gaming and multitasking.'
//         price:100.00€
//      }
// ]

function addToCart(productName) {
    alert('Product ' + productName + ' added to cart!');
}
var currentUser = sessionStorage.getItem("currentUser")? sessionStorage.getItem("currentUser") : 'Log in';
document.getElementById("currentUser").innerText = currentUser;

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
