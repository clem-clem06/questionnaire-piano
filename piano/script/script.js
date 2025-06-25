const InfoPerso = document.getElementById('info-perso');
if (InfoPerso) Form_InfoPerso(InfoPerso);

['pourquoi', 'style', 'problematiques'].forEach(id => {
    const form = document.getElementById(id);
    if (form) Form_Checkbox(form);
});

const Motivation = document.getElementById('motivation');
if (Motivation) Form_Motivation(Motivation);

const Autre = document.getElementById('autre');
if (Autre) Form_Radio(Autre);


function Form_InfoPerso(form) {
    const Nom = form.querySelector('input[name="nom"]');
    const Mail = form.querySelector('input[type="email"]');
    const Message = form.querySelector('#message');
    const Submit = form.querySelector('.btn_submit');

    form.addEventListener('submit', function (event) {
        if (!Message || !Submit) return;

        if (Mail) {
            const email = Mail.value.trim();
            if (!email || !Mail.checkValidity()) {
                event.preventDefault();
                Message.textContent = "Veuillez entrer un email valide.";
                Mail.focus();
                return;
            }
        }

        if (Nom && Nom.value.trim().length < 3) {
            event.preventDefault();
            Message.textContent = "Veuillez entrer un prénom valide (au moins 3 caractères).";
            Nom.focus();
            return;
        }

        Message.textContent = "";
        Submit.removeAttribute('title');
    });
}


function Form_Checkbox(form) {
    const Checkboxes = form.querySelectorAll('input[type="checkbox"]');
    const Checkbox_Autre = form.querySelector('.checkbox_autre');
    const Textarea_Autre = form.querySelector('.textarea_autre');
    const Message = form.querySelector('#message');
    const Submit = form.querySelector('.btn_submit');

    if (!Checkboxes.length || !Textarea_Autre) return;

    Textarea_Autre.style.display = "none";

    if (Checkbox_Autre) {
        Checkbox_Autre.addEventListener('change', () => {
            if (Checkbox_Autre.checked) {
                Textarea_Autre.style.display = 'block';
            } else {
                Textarea_Autre.style.display = 'none';
                Textarea_Autre.value = '';
                Message.textContent = '';
                Submit.removeAttribute('title');
            }
        });
    }

    form.addEventListener('submit', function (event) {
        const anyChecked = Array.from(Checkboxes).some(c => c.checked);

        if (!anyChecked) {
            event.preventDefault();
            Message.textContent = "Veuillez cocher au moins une case.";
            Submit.title = "Veuillez cocher une option.";
            return;
        }

        if (Checkbox_Autre && Checkbox_Autre.checked && Textarea_Autre.value.trim().length < 10) {
            event.preventDefault();
            Message.textContent = "Merci d’écrire au moins 10 caractères dans le champ Autre(s).";
            Submit.title = "Le champ texte est requis.";
            Textarea_Autre.focus();
            return;
        }

        Message.textContent = "";
        Submit.removeAttribute('title');
    });
}


function Form_Motivation(form) {
    const Textarea = form.querySelector('Textarea');
    const Message = form.querySelector('#message');
    const Submit = form.querySelector('.btn_submit');

    if (!Textarea || !Message || !Submit) return;

    form.addEventListener('submit', function (event) {
        if (Textarea.value.trim().length < 10) {
            event.preventDefault();
            Message.textContent = "Merci d’écrire au moins 10 caractères dans le champ Motivation.";
            Submit.title = "Le champ motivation est requis.";
            Textarea.focus();
        } else {
            Message.textContent = "";
            Submit.removeAttribute('title');
        }
    });
}


function Form_Radio(form) {
    const Radios = form.querySelectorAll('input[type="radio"][name="autre[]"]');
    const Textarea = form.querySelector('.textarea_autre');
    const Message = form.querySelector('#message');
    const Submit = form.querySelector('.btn_submit') || form.querySelector('button[type="submit"]');

    if (!Radios.length || !Textarea || !Submit) return;

    Textarea.style.display = "none";

    Radios.forEach(radio => {
        radio.addEventListener('change', () => {
            if (radio.value === "2" && radio.checked) {
                Textarea.style.display = 'block';
            } else if (radio.value === "1" && radio.checked) {
                Textarea.style.display = 'none';
                Textarea.value = '';
                if (Submit) Submit.removeAttribute('title');
                if (Message) Message.textContent = "";
            }
        });
    });

    let submitEnCours = false;

    form.addEventListener('submit', function (event) {

        const ouiRadio = Array.from(Radios).find(r => r.value === "2" && r.checked);

        if (submitEnCours) {
            event.preventDefault();
            return;
        }


        if (ouiRadio && Textarea.value.trim().length < 10) {
            event.preventDefault();
            Message.textContent = "Merci d’écrire au moins 10 caractères dans le champ Oui.";
            Submit.title = "Ce champ est requis.";
            Textarea.focus();
            return;
        }

        submitEnCours = true;
        Submit.disabled = true;
        Submit.textContent = "Envoi en cours...";

        const confirmation = document.createElement('p');
        confirmation.textContent = "Merci pour vos réponses. Un mail vous sera envoyé dans quelques instants.";
        confirmation.className = "intro";
        form.appendChild(confirmation);
    });
}


window.addEventListener("load", function () {
    const navigation = performance.getEntriesByType("navigation");
    if (
        navigation.length > 0 &&
        navigation[0].type === "reload" &&
        !sessionStorage.getItem("reset_done")
    ) {
        fetch("reset_session.php", { method: "POST" })
            .then(() => {
                sessionStorage.setItem("reset_done", "true");
                window.location.href = window.location.pathname;
            })
            .catch(() => {
                sessionStorage.removeItem("reset_done");
            });
    } else {
        sessionStorage.removeItem("reset_done");
    }
});