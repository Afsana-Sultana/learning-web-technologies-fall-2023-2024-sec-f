$(document).ready(function() {
    $('#email').on('input', function() {
        var email = $(this).val();
        if (email !== '') {
            $.ajax({
                type: 'POST',
                url: 'check_email.php',
                data: { email: email },
                success: function(responsetext) {
                    $('#emailStatus').html(responsetext);
                }
            });
        } else {
            $('#emailStatus').html('');
        }
    });

    $('#registrationForm').submit(function(e) {
        e.preventDefault();
    if(email == "" || password == " " ){
          document.getElementById(email).innerHTML="invalid";
    }
        alert('Form submitted');
    });
});
