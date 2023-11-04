var request;

$( document ).ready(function() {
    init();
});

function init(){
    $('#registerForm').submit((event) => {sendRegistration(event);});

    $('#loginForm').submit((event) => {sendLogin(event);});
}

function sendRegistration(event){
    event.preventDefault();

    let name = $('#fname')[0].value;
    let lastname = $('#lastname')[0].value;
    let email = $('#email')[0].value;
    let phone = $('#phone')[0].value;
    let password = $('#password')[0].value;
    let confirmPass = $('#confirmPass')[0].value;

    if(password != confirmPass){
        mostrarError('Your password dont match');
    }else if(name == '' || lastname == ''){
        mostrarError('Name can\'t be null');
    }else if(email == ''){
        mostrarError('Email can\'t be null');
    }else if(phone == ''){
        mostrarError('Phone can\'t be null');
    }else{
        limpiarError();
        sendForm(name, lastname, email, phone, password, confirmPass);
    }
}

function sendLogin(event){
    event.preventDefault();

    let email = $('#email')[0].value;
    let password = $('#password')[0].value;

    sendLoginPetition(email, password);
}

function mostrarError(mensaje){
    $('#erroMessage').text(mensaje);
    $('#erroMessage').css('display','block');
}

function limpiarError(){
    $('#erroMessage').text('');
    $('#erroMessage').css('display','none');
}

function sendForm(name, lastname, email, phone, password, confirmPass){
    if (request) {
        request.abort();
    }

    var $form = $('#registerForm');
    var $inputs = $form.find("input, select, button, textarea");
    $inputs.prop("disabled", true);

    request = $.ajax({
        url: "../controller/usuarioController.php",
        type: "post",
        data: {
            'name' : name,
            'lastname' : lastname,
            'email' : email,
            'phone' : phone,
            'password' : password,
            'confirmPass' : confirmPass,
            'action' : 'createUser'
        }
    });

    request.done(function (response, textStatus, jqXHR){
        console.log(response);
        var responseData = JSON.parse(response);

        if(responseData['success']){
            window.location.href = "../index.php";
        }else if(responseData['error'] && responseData['error'] == 'ERROR_EMAIL_ALREADY_USED'){
            mostrarError('Email already used.');
        }else{
            mostrarError('Unusual error, please contact support.');
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        $inputs.prop("disabled", false);
    });
}

function sendLoginPetition(email, password){
    if (request) {
        request.abort();
    }

    var $form = $('#loginForm');
    var $inputs = $form.find("input, select, button, textarea");
    $inputs.prop("disabled", true);

    request = $.ajax({
        url: "../controller/usuarioController.php",
        type: "post",
        data: {
            'email' : email,
            'password' : password,
            'action' : 'searchUser'
        }
    });

    request.done(function (response, textStatus, jqXHR){
        console.log(response);
        var responseData = JSON.parse(response);

        if(responseData['success']){
            window.location.href = "../index.php";
        }else if(responseData['error'] && responseData['error'] == 'INVALID_USER'){
            mostrarError('Email and password combination dont found');
        }else{
            mostrarError('Unusual error, please contact support.');
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        $inputs.prop("disabled", false);
    });
}