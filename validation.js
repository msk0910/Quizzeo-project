document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirm_password");
    const emailInput = document.getElementById("email");
    const requiredFields = form.querySelectorAll("[required]");

    function displayError(input, message) {
        let errorDiv = input.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains("error-message")) {
            errorDiv = document.createElement("div");
            errorDiv.classList.add("error-message");
            input.insertAdjacentElement("afterend", errorDiv);
        }
        errorDiv.textContent = message;
        input.classList.add("input-error");
    }

    function removeError(input) {
        const errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains("error-message")) {
            errorDiv.remove();
        }
        input.classList.remove("input-error");
    }

    function checkPasswords() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            displayError(confirmPasswordInput, "Les mots de passe ne sont pas identiques.");
            return false;
        } else {
            removeError(confirmPasswordInput);
            return true;
        }
    }

    function checkEmail() {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value)) {
            displayError(emailInput, "Veuillez entrer une adresse email valide.");
            return false;
        } else {
            removeError(emailInput);
            return true;
        }
    }

    function checkRequiredFields() {
        let allValid = true;
        requiredFields.forEach(function (field) {
            if (field.value.trim() === "") {
                displayError(field, `Le champ ${field.name} est requis.`);
                allValid = false;
            } else {
                removeError(field);
            }
        });
        return allValid;
    }

    form.addEventListener("submit", function (e) {
        const formIsValid = checkPasswords() && checkEmail() && checkAge() && checkRequiredFields();

        if (!formIsValid) {
            e.preventDefault();
        }
    });

    requiredFields.forEach(function (field) {
        field.addEventListener("input", function () {
            removeError(field);
        });
    });
});

const consentInput = document.getElementById("consent");

form.addEventListener("submit", function (e) {
    if (!consentInput.checked) {
        showError(consentInput, "Vous devez accepter les conditions pour continuer.");
        e.preventDefault();
    } else {
        clearError(consentInput);
    }
});
