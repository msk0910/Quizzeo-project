/*const form = document.querySelector('form');
const passwordField = document.getElementById('password');
const confirmPasswordField = document.getElementById('confirm_password');
const emailField = document.getElementById('email');
const submitButton = document.getElementById('submit');
let errorsContainer = document.querySelector('.errors');

if (submitButton) {
    function validateForm() {
        let errors = [];

        // Vérification des mots de passe
        if (passwordField.value !== confirmPasswordField.value) {
            errors.push("Les mots de passe ne correspondent pas.");
        }

        // Vérification de l'email
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(emailField.value)) {
            errors.push("L'adresse email n'est pas valide.");
        }

        // Affichage des erreurs
        if (errors.length > 0) {
            errorsContainer.innerHTML = `<ul>${errors.map(error => `<li>${error}</li>`).join('')}</ul>`;
            errorsContainer.style.color = 'red';
            submitButton.disabled = true; 
        } else {
            errorsContainer.innerHTML = ""; 
            submitButton.disabled = false; 
        }
    }

    passwordField.oninput = validateForm;
    confirmPasswordField.oninput = validateForm;
    emailField.oninput = validateForm;
} else {
    //console.error("Le bouton submit n'a pas été trouvé dans le DOM.");
}*/


