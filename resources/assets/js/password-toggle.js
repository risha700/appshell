
if(location.pathname === "/login"){


    show_password.addEventListener('click', function () {

        if (password.type == 'password'){

            show_password.setAttribute("uk-icon", "icon:lock");
            password.type = 'text';
        }else{
            password.type = 'password';
            show_password.setAttribute("uk-icon", "icon:unlock");

        }

    })
}
if(location.pathname ==="/register"){
    show_password.addEventListener('click', function () {

        if (password.type == 'password'){

            show_password.setAttribute("uk-icon", "icon:lock");
            password.type = 'text';
        }else{
            password.type = 'password';
            show_password.setAttribute("uk-icon", "icon:unlock");

        }

    })

    show_password_confirmation.addEventListener('click', function () {

        if (password_confirmation.type == 'password'){

            show_password_confirmation.setAttribute("uk-icon", "icon:lock");
            password_confirmation.type = 'text';
        }else{
            show_password_confirmation.setAttribute("uk-icon", "icon:unlock");
            password_confirmation.type = 'password';

        }

    })
}