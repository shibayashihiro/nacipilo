$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/waste-management/updateSummary',
        type : 'post',
        data : {
            Title : $('#Title').val(),
            Content : $('#Content').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Waste Managment Summary');
            else 
                showErrorToastr('Update Waste Managment Summary');
        },
        error : function(err) {
            showErrorToastr('Update Waste Managment Summary');
        }
    })
});