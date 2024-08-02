$('#btnSendMessage').click(function() {
    $.ajax({
        url: base_url + 'api/sendEmail',
        type: 'post',
        data: {
            name: $('#name').val(),
            email: $('#email').val(),
            message: $('#message').val()
        },
        success: function(res) {
            var data =  JSON.parse(res);

            if (data.success == true) {
                showSuccessToastr('Send Message');
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');
            }
            else 
                showErrorToastr(data.message);
        },
        error: function(err) {
            showErrorToastr('Send Message');
        }
    })
})