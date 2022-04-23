<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 4</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">P4</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row justify-content-center mb-3">
      <h2> Keliling dan Luas Persegi Panjang</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <?php
          class persegipanjang
          {
            public $panjang;
            public $lebar;

            public function luasp()
            {
              $luas = $this->panjang * $this->lebar;
              return "Luas :" . $luas;
            }
            public function kelilingp()
            {
              $keliling = 2 * ($this->panjang + $this->lebar);
              return "Keliling :" . $keliling;
            }

            public function setLebar($lebar)
            {
              return $this->lebar = $lebar;
            }
            public function setPanjang($panjang)
            {
              return $this->panjang = $panjang;
            }
          }
          $LuasPersegi = new persegipanjang();
          echo "Panjang :" . $LuasPersegi->setPanjang(49);
          echo "<br>";
          echo "Lebar :" . $LuasPersegi->setLebar(9);
          echo "<br>";
          echo $LuasPersegi->luasp();
          echo "<br>";
          echo $LuasPersegi->kelilingp();

          ?>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>