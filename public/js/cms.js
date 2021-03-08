$(function () {
    $('.alert').delay(5000).slideup(700);

    $('#confirm_password').keyup(function () {
        npass = $('#password').val();
        cpass = $(this).val();

        if (npass == cpass) {
            document.querySelector('#confirm_password').setCustomValidity('');
        }

        else {
            document.querySelector('#confirm_password').setCustomValidity('New password not matched!');
        }

    });
}
);