<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style.css">

    <title></title>
</head>

<body>
    <form id="formconfirm" name="formconfirm" method="post" action="Form/simpandata">
    
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-2 py-4">
            <div class="card-body">
                <img src="asset/images/logo.png" class="mx-auto d-block" alt="Logo Bakrie Pipe ">
                <h5 class="information mt-4 mb-4 text-center">Konfirmasi Kunjungan</h5>
                
                        <h6 style="color: rgb(122, 118, 118);">Halo, </h6>
                        <label class="form-check-visit">Apakah Anda Bersedia Menerima?</label> 
                
                
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" id="ya" name="Persetujuan" value="ya" required>
                            <label class="form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" id="tidak" name="Persetujuan" value="tidak">

                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <textarea class="form-control" id="Keterangan" name="Keterangan" placeholder="Keterangan" required autofocus></textarea> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-3 mt-3 mb-3">
                <button class="btn btn-primary btn-block confirm-button" id="" value="KONFIRMASI">Konfirmasi</button>
            </div>
        </div>
    </div>

    <script>
        function submitform(){
            $('#fm').form('submit',{
                url: '<?php echo base_url() ?>Form/simpandata',
                iframe: false,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        alert(result.Konfirmasi);
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }

        
    </script>
    </form>

    