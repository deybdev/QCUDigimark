document.getElementById("user_type").addEventListener("change", function() {
    var userType = this.value;
    var storeInput = document.getElementById("store_name");

    if (userType === "customer") {
        storeInput.readOnly = true; 
        storeInput.value = '';
    } else if (userType === "seller") {
        storeInput.readOnly = false;
    }
});