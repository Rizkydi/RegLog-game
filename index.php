<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn ajax native</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">ID player</label>
                            <textarea type="number" name="num" id="id" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">nick player</label>
                            <input type="text" name="nick" id="nick" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="text" name="user" id="gmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="user" id="gmail" class="form-control">
                        </div>
                        <div align="right">
                            <button type="button" class="btn btn-primary" style="margin-top: 10px;" onclick="simpanData()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="jquery.min.js"></script>
<script>
    function simpanData()
    {
      var ID_player = $('#ID_player').val()
      var nick_player = $('#nick_player').val()
      var gmail_user = $('#gmail_user').val()
      var gmail_pass_user = $('#gmail_pass_user').val()
      $.ajax({
        url: 'simpan.php',
        type: 'POST',
        data: {'ID_player': ID_player, 'nick_player': nick_player, 'gmail_user': gmail_user, 'gmail_pass_user': gmail_pass_user},
        datatype: 'JSON',
        success : function(data)
        {
            alert(data)
        }
      })
    }
</script>
</body>
</html>