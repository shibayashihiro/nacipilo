$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/career/updateSummary',
        type : 'post',
        data : {
            First : $('#First').val(),
            Second : $('#Second').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Career Summary');
            else 
                showErrorToastr('Update Career Summary');
        },
        error : function(err) {
            showErrorToastr('Update Career Summary');
        }
    })
});