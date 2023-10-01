// script.js



function validateForm() {

    var password = document.getElementById("motdepasse").value;

    var confirmPassword = document.getElementById("confirmation").value;



    if (password !== confirmPassword) {

        alert("Les mots de passe ne correspondent pas !");

        return false;

    }



    return true;

}