<html>
    <head>
        <title>Daftar film</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a2331dbcf7.js" crossorigin="anonymous"></script>
    </head>
    <style>
        .border-dark {
            border-width:3px !important;
        }
        </style>
    <body style="background-image: linear-gradient( 97.3deg,  rgba(25,50,70,0.81) 10.7%, rgba(155,65,25,0.72) 39.5%, rgba(255,192,0,0.81) 69.7% );">
        <div class="container mt-4" >
            <div class="card rounded-lg" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
">
                <div class="card-header text-center">
                    <div class="row">
                        <div class="col-md-15">
                            <b><h1 class="text-dark">Daftar Film <i class="fa-solid fa-film"></i></h1> 
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-center text-center text-light">
                        <table id="user_data" class="table table-bordered table-striped" style="width: 105%">
                            <thead>
                                <tr class="border-light text-center">
                                    <th class="border-light" width="35%"><b>Image <i class="fa-solid fa-image"></i></th>
                                    <th class="border-light" width="15%"><b>Title <i class="fa-solid fa-pen"></i></th>
                                    <th class="border-light" width="15%"><b>Genre <i class="fa-solid fa-list"></i></th>
                                    <th class="border-light" width="15%"><b>Harga <i class="fa-solid fa-money-bill-1"></i></th>
                                    <th class="border-light" width="20%"><b>Batas Usia <i class="fa-solid fa-address-card"></i></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<div id="userModal" class="modal fade">
    <div class="modal-dialog ">
        <form method="post" id="user_form" enctype="multipart/form-data">
            <div class="modal-content" style="height: 800px; width: 550px">
                <div class="modal-header">
                    <h4 class="modal-title">Add Film</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <label>Enter Title</label>
                        <input type="text" name="first_name" id="first_name" class="form-control"/>                     
                    </div>
                    
                    <div>
                        <label>Enter Genre</label>
                        <select class="form-select" aria-label="Default select example"  name="last_name" id="last_name" >
                            <option value="Action">Action</option>
                            <option value="Romantic">Romantic</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Anime">Anime</option>
                            <option value="Cartoons">Cartoons</option>
                        </select>
                    </div>

                    <div>
                        <label>Enter Price</label>
                        <input type="text" name="harga" id="harga" class="form-control"/>
                    </div>

                    <div>
                        <label>Enter Batas Usia</label>
                        <input type="text" name="batasusia" id="batasusia" class="form-control"/>
                    </div>
                    
                    <div>
                        <label>Select User Image</label>
                        <input type="file" name="user_image" id="user_image" class="form-control">
                        <span id="user_uploaded_image"></span>  
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Add User");
        $('#action').val("Add");
        $('#operation').val("Add");
        $('#user_uploaded_image').html('');
    });
    
    var dataTable = $('#user_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[0, 3, 4],
                "orderable":false,
            },
        ],
    });
    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var harga = $('#harga').val();
        var batasUsia = $('#batasusia').val();
        var extension = $('#user_image').val().split('.').pop().toLowerCase();
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','jfif', 'webp']) == -1)
            {
                alert("Invalid Image File");
                $('#user_image').val('');
                return false;
            }
        }   
        if(firstName != '' && lastName != '' && harga != '' && batasUsia != '')
        {
            $.ajax({
                url:"insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    alert(data);
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            alert("Both Fields are Required");
        }
    });
    
    $(document).on('click', '.update', function(){
        var user_id = $(this).attr("id");
        $.ajax({
            url:"fetch_single.php",
            method:"POST",
            data:{user_id:user_id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#first_name').val(data.first_name );
                $('#last_name').val(data.last_name);
                $('#harga').val(data.harga);
                $('#batasusia').val(data.batasusia);
                $('.modal-title').text("Edit Film ");
                $('#user_id').val(user_id);
                $('#user_uploaded_image').html(data.user_image);
                $('#action').val("Edit");
                $('#operation').val("Edit");
            }
        })
    });
    
    $(document).on('click', '.delete', function(){
        var user_id = $(this).attr("id");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{user_id:user_id},
                success:function(data)
                {
                    alert(data);
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;   
        }
    });
});
</script>