const eyeIcon = document.getElementById("eye");
const passwordField = document.getElementById("password");
eyeIcon.addEventListener("click", () => {
if (passwordField.type === "password" && passwordField.value) {
    passwordField.type = "text";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
} else {
    passwordField.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
}
});

const loginForm = document.querySelector('.login');
const registerForm = document.querySelector('.register');
const motto = document.querySelector('.motto');

function lf () {
    // loginForm.classList.remove('hide');
    // registerForm.classList.add('hide');
    // motto.classList.remove('register');

    window.location.href = "/Dashboard/login.php";
}

function rf () {
    // loginForm.classList.add('hide');
    // registerForm.classList.remove('hide');
    // motto.classList.add('register');

    window.location.href = "/Dashboard/register.php";
}