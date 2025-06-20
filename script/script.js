document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('.form');
    if (!form) return;

    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxAutre = form.querySelector('.checkbox_autre');
    const textareaAutre = form.querySelector('.textarea_autre');
    const btnSubmit = document.querySelector('.btn_submit');
    const messageElement = document.getElementById('message');

    if (!checkboxAutre || !textareaAutre || !btnSubmit) return;

    checkboxAutre.addEventListener('change', () => {
        textareaAutre.style.display = checkboxAutre.checked ? 'block' : 'none';
        if (!checkboxAutre.checked) {
            textareaAutre.value = '';
            btnSubmit.removeAttribute('title');
        }
    });

    form.addEventListener('submit', function (event) {
        let anyChecked = false;

        checkboxes.forEach(chk => {
            if (chk.checked) anyChecked = true;
        });

        if (!anyChecked) {
            event.preventDefault();
            btnSubmit.title = "Veuillez cocher au moins une problématique.";
            messageElement.textContent = "Vous devez cocher au moins une problématique.";
            btnSubmit.focus();
            return;
        }

        if (checkboxAutre.checked) {
            const value = textareaAutre.value.trim();
            if (value.length < 10) {
                event.preventDefault();
                btnSubmit.title = "Merci de décrire votre problématique en 10 caractères minimum.";
                messageElement.textContent = "Merci d’écrire au moins 10 caractères dans le champ \"Autre(s) problématique(s)\".";
                textareaAutre.focus();
                return;
            }
        }

        messageElement.textContent = "";

        btnSubmit.removeAttribute('title');
    });
});

    document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    if (!form) return;

    const emailInput = form.querySelector('input[type="email"]');
    const messageElement = document.getElementById('message');

    if (!emailInput || !messageElement) return;

    form.addEventListener('submit', function (event) {
    const email = emailInput.value.trim();

    if (!email || !emailInput.checkValidity()) {
    event.preventDefault();
    messageElement.textContent = "Veuillez entrer un email valide.";
    emailInput.focus();
    return;
}

    messageElement.textContent = "";
});

    emailInput.addEventListener('input', () => {
    if (emailInput.checkValidity()) {
    messageElement.textContent = "";
}
});
});