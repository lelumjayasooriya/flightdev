// Simple validation and alert (replace with actual functionality)
const forms = document.querySelectorAll("form");

forms.forEach((form) => {
  form.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("Form submitted!");
  });
});

// Optional: Add functionality for the "Forgot Password" link
const forgotPasswordLink = document.querySelector(".forgot-password a");

if (forgotPasswordLink) {
  forgotPasswordLink.addEventListener("click", (event) => {
    event.preventDefault();
    alert("We'll send you instructions to reset your password.");
  });
}
