var editedServiceID = 0;


$('#btnAddNewModal').click(function() {
    $('#resource').val('');
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#newPortfolioForm').valid()) {
        return;
    }

    $.ajax({
		url: base_url + "api/resource/add",
		method: "POST",
		data: new FormData(document.getElementById('newPortfolioForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Add New Portfolio');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Portfolio');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Portfolio');
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
            showSuccessToastr('Delete Portfolio');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Portfolio');
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
            
            $('#imgPortfolio').attr('src', base_url + 'assets/resources/' + data.Attach);
            $('#editModal').modal('show');

        }
    });    
}

$('.portfolio-camera').click(function() {    
    $('#Portfolio_Edit').click();
});

$('#Portfolio_Edit').change(function () {
    readURL(this, $('#imgPortfolio'));
});

function readURL(input, avatar) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$(avatar)
				.attr('src', e.target.result);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/resource/update',
        method: "POST",
		data: new FormData(document.getElementById('updateServiceForm')),
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
            showErrorToastr('Update Portfolio');
        }
    })
})