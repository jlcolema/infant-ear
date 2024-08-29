document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.querySelector('.password-toggle__button--show');

  if (toggleButton) {
    toggleButton.addEventListener('click', function () {
      const passwordField = document.getElementById('password');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleButton.textContent = 'Hide Password';
      } else {
        passwordField.type = 'password';
        toggleButton.textContent = 'Show Password';
      }
    });
  }
});
