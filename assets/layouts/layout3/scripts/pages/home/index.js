$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/home/updateSummary',
        type : 'post',
        data : {
            Radiological : $('#Radiological').val(),
            Waste : $('#Waste').val(),
            Norm: $('#Norm').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Home Summary');
            else 
                showErrorToastr('Update Home Summary');
        },
        error : function(err) {
            showErrorToastr('Update Home Summary');
        }
    })
});