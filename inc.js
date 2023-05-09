
//     $(document).ready(function() {
//   const minus = $('.quantity__minus');
//   const plus = $('.quantity__plus');
//   const input = $('.quantity__input');
//   minus.click(function(e) {
//     e.preventDefault();
//     var value = input.val();
//     if (value > 1) {
//       value--;
//     }
//     input.val(value);
//   });
  
//   plus.click(function(e) {
//     e.preventDefault();
//     var value = input.val();
//     value++;
//     input.val(value);
//   })
// });
const incrementCount = document.getElementById("p");
const decrementCount = document.getElementById("m");

// Select total count
const totalCount = document.getElementById("num");

// Variable to track count
var count = 0;

// Display initial count value
totalCount.innerHTML = count;

// Function to increment count
const handleIncrement = () => {
  count++;
  totalCount.innerHTML = count;
};

// Function to decrement count
const handleDecrement = () => {
  count--;
  totalCount.innerHTML = count;
};

// Add click event to buttons
incrementCount.addEventListener("click", handleIncrement);
decrementCount.addEventListener("click", handleDecrement);

