<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cijalu Resort | Best hotel in Dubai</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?php 
    $this->load->view('templates/css');
    $this->load->view('templates/js');
    ?>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/img')?>/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url('assets/img')?>/favicon.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row">
            <br>
            <h3 style="text-align: center;">Register Form</h3>
            <div class="col-md-8 col-md-offset-2">
                <form role="form" class="wowload fadeInRight">
                    <div class="form-group col-md-8 col-md-offset-2">
                        <input type="text" class="form-control"  placeholder="Group Name">
                    </div>

                    <div class="form-group col-md-8 col-md-offset-2">
                        <input type="text" class="form-control"  placeholder="Username">
                    </div>

                    <div class="form-group col-md-8 col-md-offset-2">
                        <input type="password" class="form-control"  placeholder="Password">
                    </div>
                    
                    <div class="form-group col-md-8 col-md-offset-2">
                        <input type="date" class="form-control"  placeholder="Date">
                    </div>
                    
                    <div class="form-group col-md-8 col-md-offset-2">
                        <input type="number" minlength="0" class="form-control"  placeholder="Room Quantity">
                    </div>
                    
                    <div class="form-group col-md-8 col-md-offset-2">
                        <input type="number" minlength="0" class="form-control"  placeholder="Member Quantity">
                    </div>
                    
                    <button class="btn btn-default col-md-4 col-md-offset-4" align="center">Register</button>

                </form>
            </div>  
        </div>    
    </div>
    <br>
    <div align="center">
        <p>©<?=date('Y')?> Cijalu Resort. All Rights Reserved.</p>
    </div>
</body>