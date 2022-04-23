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
          <h1>Praktikum 5</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">P5</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <h2>
      <div class="row justify-content-center mb-3">PHP Object Oriented Programing
    </h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <?php
          class Dispenser
          {
            protected $volume;
            protected $hargaSegelas;
            private $volumeGelas;
            public $namaMinuman;

            function __construct($brand, $hargaSegelas, $volumeGelas, $vol)
            {
              $this->namaMinuman = $brand;
              $this->volume = $vol;
              $this->hargaSegelas = $hargaSegelas;
              $this->volumeGelas = $volumeGelas;
            }
            public function beli($jumlah)
            {
              echo "Pengguna Membeli Minuman " . $this->namaMinuman . " Sejumlah " . $jumlah . " Gelas";
              echo "<br>";
              $this->volume = $this->volume - ($this->volumeGelas * $jumlah);
              echo "Total Harganya adalah Rp " . ($this->hargaSegelas * $jumlah) . ",-";
              echo "<br>";
              return;
            }
            public function print()
            {
              echo "Merek Minuman = " . $this->namaMinuman;
              echo "<br>";
              echo "Isi wadah = " . $this->volume . " ml";
              echo "<br>";
              echo "Harga Pergelas = Rp " . $this->hargaSegelas . ",-";
              echo "<br>";
              echo "Ukuran Pergelas = " . $this->volumeGelas . " ml";
              echo "<hr>";
            }
            public function isiUlang()
            {
              $this->volume = $this->volume + 10000;
            }
          };

          $minuman = new Dispenser("Coca Cola", 2000, 250, 10000);
          $minuman->print();
          $minuman->beli(4);
          $minuman->print();
          $minuman->isiUlang();
          $minuman->print();
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