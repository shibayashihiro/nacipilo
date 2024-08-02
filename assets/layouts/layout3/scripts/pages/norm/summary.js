$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/norm/updateSummary',
        type : 'post',
        data : {
            First : $('#First').val(),
            Second : $('#Second').val()            
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Norm Summary');
            else 
                showErrorToastr('Update Norm Summary');
        },
        error : function(err) {
            showErrorToastr('Update Norm Summary');
        }
    })
});