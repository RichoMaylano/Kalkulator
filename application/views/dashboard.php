<?php  $this->load->view('templates/header')?>
<title>Dashboard</title>

<style>
.minus{
    transform: rotate(-45deg);
}
</style>

<body>
    <h1 style="text-align:center;">Kalkulator</h1>
<div class="container mt-3">
    <div class="row mt-3">

    <div class="form-group row">
<div class="col-sm-2">
</div>

        <div class="col-sm-2">
    <a type="button" class="btn btn-primary" href="Penjumlahan"><i class="icon-plus"></i>&nbsp Penjumlahan</a>
</div>
       <div class="col-sm-2">
    <a type="button" class="btn btn-warning" href="Pengurangan"><i class="icon-minus"></i>&nbsp Pengurangan</a>
</div>
    
   <div class="col-sm-2">
    <a type="button" class="btn btn-success" href="Perkalian"><i class="icon-remove"></i>&nbspPerkalian</a>
</div>

   <div class="col-sm-2">
    <a type="button" class="btn btn-danger " href="Pembagian">
       
            &nbsp Pembagian</a>
</div>
</div>

</div>
</div>


<?php  $this->load->view('templates/footer')?>