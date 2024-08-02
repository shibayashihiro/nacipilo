$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/aboutus/updateSummary',
        type : 'post',
        data : {
            First : $('#First').val(),
            Second : $('#Second').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update AboutUs Summary');
            else 
                showErrorToastr('Update AboutUs Summary');
        },
        error : function(err) {
            showErrorToastr('Update AboutUs Summary');
        }
    })
});