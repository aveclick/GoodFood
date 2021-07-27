document.getElementById('signup-form').addEventListener("submit", checkForm);

function checkForm(event){

    var el = document.getElementById('signup-form');
    var name = el.name.value;
    var email = el.email.value;
    var pass = el.pass.value;
    var repass = el.repass.value;

    var fail = "";
    if(name == "" || pass == "" || email == "")
        fail = "Заполните все поля";
    else if(name.length < 5 || name.length > 15)
        fail = "Введите корректный логин";
    else if(pass.length < 5 || pass.length > 15)
        fail = "Введите корректный пароль";
    else if(email.split("@").length != 2)
        fail = "Некорректный Email";
    else if(pass != repass)
        fail = "Пароли должны совпадать";
    if(fail != ""){
        event.preventDefault(); // отключаем перезагрузку страницы
        document.getElementById("error").innerHTML = fail;
        return false;
    }

}
