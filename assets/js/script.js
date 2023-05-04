const eye = document.querySelector(".fa-eye");
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
});


// partie 2

  const h1 = document.getElementById("h1");
  const h2 = document.getElementById("h2");
  const password = document.querySelector("input[type=password]");
  
  h1.addEventListener("click", () => {
      h1.style.display = "block";
      h2.style.display = "none";
      password.type = "password";
  });
  
  h2.addEventListener("click", () => {
      h2.style.display = "block";
      h1.style.display = "none";
      password.type = "text";
  });
  

