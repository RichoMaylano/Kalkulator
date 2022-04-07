<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/assets/footermain.css" type="text/css" rel="stylesheet">
    <title>Perkalian</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Kalkulator Perkalian</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form  action="Perkalian/perkalian" method="post" enctype="multipart/form-data">
                                    <input type="number" step="any" name="angka1"> x
                                    <input type="number" step="any" name="angka2">
                                    <input type="submit" name="submit" value="=">
                                    <!-- <input type="text" name="jumlah" value=""> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- <footer id="footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; 2022</small>
    </div>
</footer> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</html>