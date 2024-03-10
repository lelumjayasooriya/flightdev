const loginForm = document.querySelector('.login-form');
const signupForm = document.querySelector('.signup-form');

// Add shake animation on invalid input

const shake = (element) => {
  element.classList.add('shake');
  setTimeout(() => {
    element.classList.remove('shake');
  }, 500);
}

const validateForm = (form) => {
  let isValid = true;
  const inputs = form.querySelectorAll('input[required]');

  for (let input of inputs) {
    if (input.value.trim() === '') {
      shake(input);
      isValid = false;
    }
  }

  return isValid;
}

loginForm.addEventListener('submit', (event) => {
  event.preventDefault();

  if (validateForm(loginForm)) {
    // Simulate form submission (replace with your actual logic)
    alert('Login successful!');
  }
});

signupForm.addEventListener('submit', (event) => {
  event.preventDefault();

  if (validateForm(signupForm)) {
    // Simulate form submission (replace with your actual logic)
    alert('Signup successful!');
  }
});
