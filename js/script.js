// Show the Sign Up form when the "Sign Up" button in the navbar is clicked
document.getElementById("show-register").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent page reload
    document.querySelector(".sign-up-form").classList.add("active"); // Show the Sign Up form
    document.querySelector(".sign-in-form").classList.remove("active"); // Hide the Sign In form
});

// Toggle to Sign In form when the "Sign In" link is clicked inside Sign Up form
document.getElementById("show-signin").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent page reload
    document.querySelector(".sign-up-form").classList.remove("active"); // Hide the Sign Up form
    document.querySelector(".sign-in-form").classList.add("active"); // Show the Sign In form
});

// Toggle to Sign Up form when the "Sign Up" link is clicked inside Sign In form
document.getElementById("show-signup").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent page reload
    document.querySelector(".sign-in-form").classList.remove("active"); // Hide the Sign In form
    document.querySelector(".sign-up-form").classList.add("active"); // Show the Sign Up form
});

// Close button event for both forms (Sign Up and Sign In)
document.querySelectorAll(".close-btn").forEach(function(closeBtn) {
    closeBtn.addEventListener("click", function() {
        document.querySelector(".sign-up-form").classList.remove("active"); // Hide Sign Up form
        document.querySelector(".sign-in-form").classList.remove("active"); // Hide Sign In form
    });
});







document.getElementById("user_type").addEventListener("change", function() {
    var userType = this.value;
    var storeInput = document.getElementById("store_name");

    if (userType === "customer") {
        storeInput.disabled = true; 
        storeInput.value = '';
    } else if (userType === "seller") {
        storeInput.disabled = false;
    }
});

