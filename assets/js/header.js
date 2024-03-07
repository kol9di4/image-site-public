$(function(){
    //функция входа в систему
    log = function(data)
    {
        $.ajax({
            url: "core/ajax-helper/login.php", 
            type: "post",
            data: data,
            success: function (response) {
                if (response==true){
                    $('#logInModal').modal('hide');
                    location. reload();
                }
                else{
                    $('.log button[type=submit] ~ div.h6').remove();
                    $('.log button[type=submit]').after('<div class="h6 text-danger">Неверный логин или пароль!</div>');
                }
            },
            error: function (error) {},
          });
    }
    //отправка формы логина
    $('.log').on('submit',function(e){
        e.preventDefault();
        const data = {
            login: $('.log input[name=login]').val(),
            password: $('.log input[name=password]').val()
          };
        log(data);
    })
    // валидация и отправка формы регистрации
    $('.reg').on('submit',function(e){
        e.preventDefault();
        var email = $('.reg input[name="email"]');
        var login = $('.reg input[name="login"]');
        var password = $('.reg input[name="password"]');
        var passwordConf = $('.reg input[name="password-confirm"]');
        var ok = true;
        if(email.val()=="" || login.val()=="" || password.val()=="" || passwordConf.val()=="")
        {
            $('.reg div.h6').html('');
            $('.reg div.h6').html('Заполните все поля');
            ok = false;
        }
        else
        {
            $('.reg div.h6').html('');
            if (password.val().length<7)
            {
                password.addClass('is-invalid');
                password.after('<div class="h6 text-danger">Пароль меньше 7 символов</div>');
                ok = false;
            }
            else
                $('.reg input[name="password"] ~ div.h6').remove();

            if (password.val()!=passwordConf.val())
            {
                password.addClass('is-invalid');
                passwordConf.addClass('is-invalid');
                passwordConf.after('<div class="h6 text-danger">Пароли не совпадают</div>');
                ok = false;
            }
            else
                $('.reg input[name="password-confirm"] ~ div.h6').remove();

            if (login.val().length<4)
            {
                login.addClass('is-invalid');
                login.after('<div class="h6 text-danger">Логин меньше 4 символов</div>');
                ok = false;
            }
            else
                $('.reg input[name="login"] ~ div.h6').remove();
        }
        if(email.val()=="")
            email.addClass('is-invalid');
        else
            email.removeClass('is-invalid');
        if(login.val()=="")
            login.addClass('is-invalid');
        else
            login.removeClass('is-invalid');
        if(password.val()=="")
            password.addClass('is-invalid');
        else
            password.removeClass('is-invalid');
        if(passwordConf.val()=="")
            passwordConf.addClass('is-invalid');
        else
            passwordConf.removeClass('is-invalid');
        if(ok)
        {
            const data = {
                login: $('.reg input[name=login]').val(),
                password: $('.reg input[name=password]').val()
            };
            $.ajax({
                url: "core/ajax-helper/register.php", 
                type: "post",
                data: data,
                success: function (response) {
                    if(response){
                        $('#regModal').modal('hide');
                        log(data);
                    }
                    else
                    {
                        $('.reg button[type=submit] ~ div.h6').remove();
                        $('.reg button[type=submit]').after('<div class="h6 text-danger">Пользователь с таким именем уже существует!</div>');
                    }
                },
                error: function (error) {
                  console.error("Ошибка при отправке данных: ", error);
                },
            });
        }
    });
    // выход из системы
    $('#log-out-button').on('click',function(){
        $.ajax({
            url: "core/ajax-helper/log_out.php",
            type: "post",
            success: function (response) {
                location. reload();
            },
            error: function (error) {
              console.error("Ошибка при отправке данных: ", error);
            },
        });
    })
})