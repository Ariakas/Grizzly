document.querySelector("#country_form").addEventListener("submit", function(e) {
    if (this.checkValidity()) {
        e.preventDefault();
        request("check_code.php", { phone: this.querySelector("input").value }, "POST")
            .then(response => {
                document.querySelector("#country_response").innerText = response.detail;
            })
    }
});


document.querySelector("#close_popup")?.addEventListener("click", () => {
    document.querySelector("#t2").close()
});

document.querySelector("#confirm_cookie")?.addEventListener("click", () => {
    document.querySelector("#t2").close();
    document.cookie = `GRIZZLY=1; max-age=86400`
});