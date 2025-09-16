const passwordInput = document.getElementById('password');
const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
document.getElementById('password-toggle').addEventListener('click', function() {
    passwordInput.setAttribute('type', type);
    this.textContent = type === 'password' ? '*': '$'
});

