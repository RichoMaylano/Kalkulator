<?php  $this->load->view('templates/header')?>

    <title>Penjumlahan</title>
<body>
<h2>Penjumlahan</h2>
<form action="Penjumlahan/tambah" method="post" enctype="multipart/form-data">
    <div class="mb-3">
    Nilai a : <input type="number" name="a"  id="a" step="any" required autofocus>
</div>
<div class="mb3">
    Nilai b : <input type="number" name="b" id="b" step="any" required autofocus>
</div>
<br>

<div class="row">
<div class="sm-4">
</div>
    <div class="sm-4">   
<input type="submit" value="Submit" name="submit">
</div>
</div>

</form>
<?php  $this->load->view('templates/header')?>
