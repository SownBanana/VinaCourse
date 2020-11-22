//Check is input null
function isUsername(elementId){
    check = (document.getElementById(elementId).value.trim() == "") ||
            (/\s+/.test(document.getElementById(elementId).value.trim()));
    borderInput(elementId, !check);
    return !check;
}
//Check is input null
function isInputNull(elementId){
    check = document.getElementById(elementId).value.trim() == "";
    borderInput(elementId, !check);
    return check;
}
//Check is input is email
function isInputEmail(elementId){
    const emailRegEX = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$/;
    check = emailRegEX.test(document.getElementById(elementId).value.trim());
    borderInput(elementId, check);
    return check;
}
//Check is input is phone
// function isInputPhone(elementId){
//     const phoneRegEX = /^\+?[0-9]{9,13}$/;
//     check = phoneRegEX.test(document.getElementById(elementId).value.trim());
//     borderInput(elementId, check);
//     return check;
// }
//Check is password confirm (while password id valid)
function isPassConfirmed(passId, repassId){
    check = (document.getElementById(passId).value == document.getElementById(repassId).value)&&isPasswordValid(passId);
    borderInput(repassId, check);
    return check;
}
//Check password
function isPasswordValid(elementId){
    var password = document.getElementById(elementId).value;
    var checkLength, checkCap, checkSpecial = false;
    //Check length
    if(password.length > 8) {
        checkLength = true;
        document.getElementById("length").classList.add("meet");
    }else{
        document.getElementById("length").classList.remove("meet");
    }
    //Check have capital (uppercase) and lowercase
    if(password.toUpperCase() != password && password.toLowerCase() != password) {
        checkCap = true;
        document.getElementById("capital").classList.add("meet");
    }else{
        document.getElementById("capital").classList.remove("meet");
    }
    //Check have special character
    const regex = /[!@#$%^&*.,<>/\'";:?]/
    if(regex.test(password)) {
        checkSpecial = true;
        document.getElementById("special").classList.add("meet");
    }else{
        document.getElementById("special").classList.remove("meet");
    }

    borderInput(elementId, checkLength&&checkCap&&checkSpecial);
    // isPassConfirmed("password", "repassword");
    return checkLength&&checkCap&&checkSpecial;
}

//Change class of input valid and invalid
function borderInput(elementId, isValid){
    var element = document.getElementById(elementId);
    if(isValid) {
        element.classList.add("valid");
        element.classList.remove("invalid");
    }else{
        element.classList.remove("valid");
        element.classList.add("invalid");
    }
}
function validateForm() {
    //check variable
    var validated = true;

    //Check if username not null
    if (isInputNull("name")) {
        validated = false;
    }
    if (!isUsername("username")) {
        validated = false;
    }
    //Check email is valid
    if (!isInputEmail("email")) {
        validated = false;
    }
    //Check phone is valid
    // if (!isInputPhone("phone")) {
    //     validated = false;
    // }
    //Check is password valid
    if (!isPasswordValid("password")) {
        validated = false;
    }
    //Check password is confirmed
    if (!isPassConfirmed("password", "repassword")) {
        validated = false;
    }
    debugger
    if(!validated) alert("Vui lòng điền đúng các thông tin!");
    if (!$('#policy').is(':checked')) {
        validated = false;
        alert("Bạn phải chấp nhận các điều khoản của chúng tôi để đăng ký");
        return validated;
    }
    $('.mask').removeClass("hidden");
    return validated;
}

function wait_server(){
    $('.mask').removeClass("hidden");
}
function stop_wait_server(){
    $('.mask').addClass("hidden");
}

function showAlert(alert){
    $(alert).slideDown(200, function() {
        $(this).show();
    });
    $(alert).delay(10000).slideUp(200, function() {
        $(this).hide();
    });
}
function hideAlert(alert){
    $(alert).hide()
}