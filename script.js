document.querySelector("#country_form").addEventListener("submit", function(e) {
    if (this.checkValidity()) {
        e.preventDefault();
        request("check_code.php", { phone: this.querySelector("input").value }, "POST")
            .then(response => {
                document.querySelector("#country_response").innerText = response.detail;
            })
    }
});