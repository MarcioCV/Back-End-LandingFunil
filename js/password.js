var password = document.getElementById("password")
var confirmation_password = document.getElementById("confirmation_password")

function validation_password(){
    if (password.value != confirmation_password.value){
        confirmation_password.setCustomValidity("Senhas Diferentes")
        console.log("entrou")
        
    }else{
        confirmation_password.setCustomValidity("")
        console.log("saiu")
    }
}
password.onchange = validation_password
confirmation_password.onkeyup = validation_password

                     
