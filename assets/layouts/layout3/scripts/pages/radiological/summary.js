$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/radiological/updateSummary',
        type : 'post',
        data : {
            Title : $('#Title').val(),
            Content : $('#Content').val(),
            Highlight: $('#Highlight').val()
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Radiological Summary');
            else 
                showErrorToastr('Update Radiological Summary');
        },
        error : function(err) {
            showErrorToastr('Update Radiological Summary');
        }
    })
});