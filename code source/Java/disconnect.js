// Get the button element
var disconnectBtn = document.getElementById("disconnectBtn");

// Add a click event listener to the button
disconnectBtn.addEventListener("click", function() {
  // Show a confirmation message in a pop-up window
  var confirmation = confirm("Etes-vous sûre de vouloir vous déconnecter?");
  
  // If the user clicks "OK" on the pop-up, do something
  if (confirmation) {
    // Do something, such as redirect to a new page or log the user out
    // For example, redirect to the homepage:
    window.location.href = "https://www.example.com";
  }
});
