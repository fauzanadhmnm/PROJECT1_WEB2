<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 3</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">P3</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row justify-content-center mb-3">
      <h2> Template Header - Footer</h2>
    </div>
    <?php
    include_once 'header1.php';
    ?>
    <div class="card card-primary card-outline mb-3">
      <div class="card-header">
        <h5 class="m-0">Main Content</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">STT Terpadu Nurul Fikri</h6>

        <p class="card-text">Kampus IT yang Siap Menjadi Perintis Teknologi Digital Masa Depan</p>
        <a href="https://nurulfikri.ac.id/" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
    <?php
    include_once 'footer1.php';
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
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