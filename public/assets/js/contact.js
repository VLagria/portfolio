$(document).ready(function () {
    $('#contact-form').submit(function (event) {
        event.preventDefault();

        var form = $(this);

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function (response) {
                Swal.fire({
                    title: 'Success!',
                    text: response.message,
                    icon: 'success'
                });
                form[0].reset();
            },
            error: function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: error.responseJSON.message,
                    icon: 'error'
                });
            }
        });
    });
});