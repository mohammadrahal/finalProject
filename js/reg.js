const first_name = document.getElementById("Fname");
const last_name = document.getElementById("Lname");
const email = document.getElementById("email");
const error = document.getElementById("error_msg");
const password = document.getElementById("password");

const inputValid = () => {
  if (
    !first_name.value ||
    !last_name.value ||
    !email.value ||
    !password.value
  ) {
    error.textContent = "Fieldes Cannot be empty";
    setTimeout(() => {
        error.textContent = "";
    }, 3000);
    return false;
}
return true;
};
