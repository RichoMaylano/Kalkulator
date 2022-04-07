<?php  $this->load->view('templates/header')?>

<title>Pembagian</title>

<body>
<h2>Pembagian</h2>
<form action="Pembagian/bagi" method="post" enctype="multipart/form-data">
    
    <div class="mb-3">
    Nilai a : <input type="number" name="a"  id="a" required autofocus>
</div>
<div class="mb3">
    Nilai b : <input type="number" name="b" id="b" required autofocus>
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

<?php  $this->load->view('templates/footer')?>