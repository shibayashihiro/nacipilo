var editedID = 0;

$('#btnAddNewModal').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/service/add',
        type: 'post',
        data: {
            Content : $('#Content').val(),
            Type: 'solution'
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Solution');
        }        
    })
});

function editValue(ID) {
    editedID = ID;
    $.ajax({
        url: base_url + 'api/service/get',
        type: 'post',
        data: {
            ID: ID
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == false) {
                showErrorToastr('Get Solution');
                return;
            }

            $('#ContentEdit').val(data.Content);
            $('#EditModal').modal('show');
        }
    })
    
    
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/service/update',
        type: 'post',
        data: {
            ID: editedID,
            Content: $('#ContentEdit').val()
        },
        success: function(res) {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update Solution');
        }
    })
})



function deleteValue(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/service/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Solution');
        }
    })
});