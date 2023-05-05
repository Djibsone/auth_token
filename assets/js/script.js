/*const eye = document.querySelector(".fa-eye");
const eyeslash = document.querySelector(".fa-eye-slash");
const passwordField = document.querySelector("input[type=password]");

eye.addEventListener("click", () => {
  eyeslash.style.display = "block";
  eye.style.display = "none";
  passwordField.type = "password";
});

eyeslash.addEventListener("click", () => {
  eye.style.display = "block";
  eyeslash.style.display = "none";
  passwordField.type = "text";
});*/


const eye = document.querySelectorAll(".fa-eye");
const eyeslash = document.querySelectorAll(".fa-eye-slash");
const passwordFields = document.querySelectorAll("input[type=password]");

eye.forEach((item, index) => {
  item.addEventListener("click", () => {
    eyeslash[index].style.display = "block";
    item.style.display = "none";
    passwordFields[index].type = "password";
  });
});

eyeslash.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.style.display = "none";
    eye[index].style.display = "block";
    passwordFields[index].type = "text";
  });
});



