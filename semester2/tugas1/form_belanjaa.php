<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Belanja online </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <form method="POST" action="form_belanjaa.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
        <h2>Belanja Online </h2>
        <hr />
        <div class="container px-3">
            <div class="form-group row" style="padding:10px;">
                <label for="custname" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input name="custname" id="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row" style="padding:10px;">
                <label class="col-4">Pilih produk</label>
                <div class="col-8" >
                    <div class="custom-control custom-radio custom-control-inline" style="display: inline-block;">
                        <input value="TV" name="produk" id="TV" type="radio" class="custom-control-input" required>
                        <label for="TV" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline"  style="display: inline-block;">
                        <input value="KULKAS" name="produk" id="KULKAS" type="radio" class="custom-control-input" required>
                        <label for="KULKAS" class="custom-control-label">KULKAS </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline"  style="display: inline-block;">
                        <input value="MESINCUCI" name="produk" id="MESINCUCI" type="radio" class="custom-control-input" required>
                        <label for="MESINCUCI" class="custom-control-label">MESIN CUCI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="padding:10px;">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8" >
                    <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                </div>
            </div>
            <div class="form-group row" style="padding:10px;">
                <div class="offset-4 col-8">
                    <input nama="submit" type="submit" name="submit" value="Kirim" class="btn btn-success">
                </div>
            </div>
            <div class="form-group">
                <p class="my-1">Daftar Harga</p>
                <ol>
                    <li>TV  : 4.200.000</li>
                    <li>Kulkas : 3.100.000</li>
                    <li>Mesin Cuci : 3.800.000</li>
                </ol>
            </div>
        </div>
    </form>
 
    <?php

    if(isset($_POST['submit'])){

        $cst = $_POST['custname'];
        $prd = $_POST['produk'];
        $jml = $_POST['jumlah'];
        $btn = $_POST['submit'];

        switch($prd){
            case "TV":
                $total = $jml * 4200000 ;
                break;
            case "KULKAS":
                $total = $jml * 3100000 ;
                break;
            case "MESINCUCI":
                $total = $jml * 3800000 ;
                break;
        }
        
        echo '<br>Nama Custumer  : ' .$cst;
        echo '<br>Nama Produk  : ' . $prd;
        echo '<br>Jumlah Beli  : ' . $jml;
        echo '<br>Total Belanja : ' .$total;
        echo '<br>submit : ' . $btn;

    }

    ?>

</body>

</html>