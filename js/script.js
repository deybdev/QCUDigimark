document.querySelector("#show-register").addEventListener("click", function() {
    const loginForm = document.querySelector(".register-form");
    loginForm.classList.toggle("active");
});

document.querySelector(".register-form .close-btn").addEventListener("click", function() {
    document.querySelector(".register-form").classList.remove("active");
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

