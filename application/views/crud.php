<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BEKUP Backend Class Malang - Profile Page</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="intro parallax">
        <div class="container">
            <div class="col-md-12 text-center quote">
                <span class="mutiara"></span>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <h6 class="description">PESERTA BACKEND MALANG</h6>
                        <div class="row pt-md table-responsive">
                            <br>
                            <span class="pull-left"><button class="btn btn-success" onclick="tambah()">Tambah </button></span>
                            <table class="table">
                                <thead style="font-weight: bold;">
                                    <tr>
                                        <td>Id</td>
                                        <td>Nama</td>
                                        <td>Pekerjaan</td>
                                        <td>Email</td>
                                        <td>Instansi</td>
                                        <td width="120px">Photo Profil</td>
                                        <td>Note</td>
                                        <td width="180px">Options</td>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals -->
    <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah peserta</h4>
                </div>
                <div class="modal-body">
                    <form id="formpeserta" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Nama</label>
                            <input type="text" class="col-md-8 col-sm-8" name="nama">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Pekerjaan</label>
                            <input type="text" class="col-md-8 col-sm-8" name="pekerjaan">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Email</label>
                            <input type="text" class="col-md-8 col-sm-8" name="email">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Instansi</label>
                            <input type="text" class="col-md-8 col-sm-8" name="instansi">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Photo Profil</label>
                            <input type="file" class="col-md-8 col-sm-8" style="margin-left: -15px" name="foto">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Note</label>
                            <input type="text" class="col-md-8 col-sm-8" name="note">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Link Project</label>
                            <input type="text" class="col-md-8 col-sm-8" name="project">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Link Facebook</label>
                            <input type="text" class="col-md-8 col-sm-8" name="facebook">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Link Youtube</label>
                            <input type="text" class="col-md-8 col-sm-8" name="youtube">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3" style="text-align:left">Link Twitter</label>
                            <input type="text" class="col-md-8 col-sm-8" name="twitter">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="simpan" onclick="save()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script>
    $(function(){
        $(".mutiara").typed({
            strings: ["A creative idea plus a fresh network is the best way to go from zero to millions.^2000","Hello, ^1000 We are from backend track BEKRAF 2.0 regional Malang^2000"],
            contentType: 'html',
            typeSpeed: 30,
            showCursor: true,
            loop:true,
        });
    });
    </script>

    <script type="text/javascript">

    function tambah()
    {
        save_method = 'add';
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Peserta');
    }

    function edit()
    {
        save_method = 'update';
        $('#modal_form').modal('show');
        $('.modal-title').text('Edit Peserta');
    }

    function save()
    {
        $('#simpan').text('Menyimpan...');
        $('#simpan').attr('disabled',true);
        var url;

        if(save_method == 'add') {
            url = "api/insert";
        } else {
            url = "api/update";
        }

        $.ajax({
            url : url,
            type: "POST",
            data: $('#formpeserta').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if(data.status)
                {
                    $('#modal_form').modal('hide');
                    reload_table();
                }
                $('#simpan').text('Simpan');
                $('#simpan').attr('disabled',false);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#simpan').text('Simpan');
                $('#simpan').attr('disabled',false);
            }
        });
    }

    function reload_table()
    {
        table.ajax.reload(null,false);
    }

    $.ajax({url: "api/show", success: function(result){
        result = $.parseJSON(result);
        $.each(result, function(i,l){
            row =
            `<tr>
            <td>`+l['id']+`</td>
            <td>`+l['nama']+`</td>
            <td>`+l['pekerjaan']+`</td>
            <td>`+l['email']+`</td>
            <td>`+l['instansi']+`</td>
            <td><div class="img-box"><img src="`+l['photoProfile']+`" alt="`+l['nama']+`" class="img img-responsive"></div></td>
            <td>`+l['note']+`</td>
            <td>
            <div class="btn-group-sm" role="group">
            <button id="update`+l['id']+`" class="btn btn-success" data-toggle="modal" data-target="#modal_form">Update</button>
            <button id="delete`+l['id']+`" type="button" class="btn btn-danger">Delete</button>
            </div>
            </td>
            </tr>`;
            $(".table-body").append(row);
        });
    }});

    $.ajax({url: "api/show", success: function(result){
        result = $.parseJSON(result);
        $.each(result, function(i,l){
            $("#delete" + l['id']).click(function (){
                if (confirm('Yakin mau dihapus?')) {
                    $.ajax({
                        type: 'DELETE',
                        url: "api/hapus/" + l['id'],
                        success: function(html){
                            location.reload();
                        }

                    });
                }
            });
        });
    }});
    </script>
</body>
</html>
