document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.querySelector('.checkbox_autre');
    const textarea = document.querySelector('.textarea_autre');

    checkbox.addEventListener('change', () => {
        textarea.style.display = checkbox.checked ? 'block' : 'none';
    });
});
