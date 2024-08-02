$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/contactus/updateSummary',
        type : 'post',
        data : {
            Location : $('#Location').val(),
            Mobile : $('#Mobile').val(),
            Fax : $('#Fax').val(),
            Email : $('#Email').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Contact Us');
            else 
                showErrorToastr('Update Contact Us');
        },
        error : function(err) {
            showErrorToastr('Update Contact Us');
        }
    })
});