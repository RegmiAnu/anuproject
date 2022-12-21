
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php include('topbar.php'); ?>
    <?php include('head.php'); ?>

    <div class="container">
        <h1 class="page-header text-center">Add about Content</h1>
        <div class="row">
            <div class="col-md-12">

                <a style="font-size:17px" href="" data-toggle="modal" data-target="#ModalLoginForm" class="pull-left btn btn-primary"><span class="glyphicon glyphicon-plus"></span><b> New Post</b></a>


            </div>
        </div>
        <div style="margin-top:10px;">
            <style>
                th {
                    background: #FAEBD7;
                    position: sticky;
                    top: 0;
                    box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);

                }
                tr td{
                    backgroubd-color:black;
                    color:white;
                    padding:10px;
                    margin:4px;
                }
            </style>
            <table class="table table-hover table-bordered">
                <thead>
                    <th style="font-size:17px;">image</th>
                    <th style="font-size:17px;">listtitle</th>
                    <th style="font-size:17px;">city</th>
                    <th style="font-size:17px;">location</th>
                    <th style="font-size:17px;">subject</th>
                    
                </thead>
                <tbody>
                    <?php
                    $select_query = "SELECT * FROM travel";
                    $select_result = mysqli_query($conn, $select_query);
                    $i = 0;

                    while ($data_select = mysqli_fetch_array($select_result)) {


                    ?>
                        <tr>
                            <td class="text-center "><img src="<?php echo "upload/" . $data_select['img']; ?>" alt="" height="150px;" width="150px;"></td>
                            <td style="font-size:17px"><?php echo $data_select['listtitle']; ?></td>
                            <td style="font-size:17px"><?php echo $data_select['city']; ?></td>
                            <td style="font-size:17px"><?php echo $data_select['location']; ?></td>
                            <td style="font-size:17px"><?php echo $data_select['subject']; ?></td>
                            <td class="text-center">
                                <a name="" id="" class="btn btn-danger btn-sm" href="deleteblog.php?id=<?php echo $data_select['id']; ?>" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                <a name="" id="" class="btn btn-primary btn-sm" href="editblog.php?id=<?php echo $data_select['id']; ?>" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>




    <!-- add about page -->
    <?php
    if (isset($_POST['submit'])) {
        $listtitle = $_POST['listtitle'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $dataFile = $_FILES['dataFile']['name'];
        $filesize = $_FILES['dataFile']['size'];
        $explode_values = explode('.', $dataFile);
        $name = $explode_values[0];
        $fname = str_replace(' ', '', $name);
        $finalname = strtolower($fname . time());
        $extention = $explode_values[1];
        $finalfile = $finalname . "." . $extention;

        $ftype = $_POST['decp'];

        if ($filesize <= 3000000) {
            if ($extention == 'jpg' || $extention == 'JPG' || $extention == 'PNG' || $extention == 'png' || $extention == 'jpeg') {
                if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "upload/" . $finalfile)) {
                    $query = "INSERT INTO destination (image,listtitle,city,location,subject) VALUES ('$listtitle','$finalfile','$city','$location','$subject')";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>File is added successfully.</strong>
                        </div>

                        <meta http-equiv="refresh" content=" 0 ; url = blog.php" />

                        <script>
                            $(".alert").alert();
                        </script>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>File couldn't be added.</strong>
                        </div>
    <?php
                    }
                } else {
                    echo "File couldn't be uploaded successfully.";
                }
            } else {
                echo "File format not accepted.";
            }
        } else {
            echo "File size exceeded. Limited to 2MB.";
        }
    }
    ?>
    <!-- Modal HTML Markup -->
    <div id="ModalLoginForm" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-xs-center">Add</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" form action="#" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <div>
                                <input type="text" name="title" class="form-control input-lg" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">images</label>
                            <div>
                                <input type="file" name="dataFile" class="form-control input-lg" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <div>
                                <input type="text" name="decp" class="form-control input-lg" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">city</label>
                            <div>
                                <input type="text" name="city" class="form-control input-lg" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">location</label>
                            <div>
                                <input type="text" name="location" class="form-control input-lg" name="password">
                            </div>
                        </div>
                        
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <div>

                                    <button type="submit" name="submit" class="btn btn-info btn-block">submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!--  end of add about page -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
       <br>
       <br>
        
        