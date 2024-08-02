var editedServiceID = 0;


$('#btnAddNewModal').click(function() {
    $('#resource').val('');
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#newDocumentForm').valid()) {
        return;
    }

    $.ajax({
		url: base_url + "api/resource/add",
		method: "POST",
		data: new FormData(document.getElementById('newDocumentForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Add New Document');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Document');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Document');
        }
	});
});

function deleteService(ID) {
    editedServiceID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/resource/delete',
        method : 'post',
        data: {
            ID : editedServiceID
        },
        success: function() {
            showSuccessToastr('Delete Document');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Document');
        }
    })
})

function editService(ID) {    
    $('#ID_Edit').val(ID);

    $.ajax({
        url: base_url + 'api/resource/get',
        type: 'post', 
        data: {
            ID : ID
        },
        success: function(res) {
            var data = JSON.parse(res);
            data = data.data;
            if (data.success == false) {
                showErrorToastr('Get Detail');
                return;
            }
            
            $('#Title_Edit').val(data.Title);
            $('#Description_Edit').val(data.Description);
            $('#editModal').modal('show');
        }
    });    
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/resource/update',
        method: "POST",
		data: new FormData(document.getElementById('updateDocumentForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
        success: function(res){
            if (res.success == true)               
                document.location.reload();
            else   
                showErrorToastr(res.message);
        },
        error: function(err) {
            showErrorToastr('Update Document');
        }
    })
})