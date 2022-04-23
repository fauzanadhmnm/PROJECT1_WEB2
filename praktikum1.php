<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 1</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">P1</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <h2>
      <div class="row justify-content-center mb-3">Daftar Nilai Mahasiswa
    </h2>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-10 ">
          <!-- Default box -->
          <div>
            <div class="container">
              <div class="row">
                <?php
                $ns1 = ['id' => 1, 'nim' => '0110112', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
                $ns2 = ['id' => 2, 'nim' => '0110221', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
                $ns3 = ['id' => 3, 'nim' => '0110313', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
                $ns4 = ['id' => 4, 'nim' => '0110432', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                ?>
                <table class="table table-hover">
                  <thead class="bg-primary">
                    <tr>
                      <th>Nomor</th>
                      <th>NIM</th>
                      <th>UTS</th>
                      <th>UAS</th>
                      <th>Tugas</th>
                      <th>Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($ar_nilai as $ns) {
                      echo '<tr><td>' . $nomor . '</td>';
                      echo '<td>' . $ns['nim'] . '</td>';
                      echo '<td>' . $ns['uts'] . '</td>';
                      echo '<td>' . $ns['uas'] . '</td>';
                      echo '<td>' . $ns['tugas'] . '</td>';
                      $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                      echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                      echo '<tr/>';
                      $nomor++;
                    }
                    ?>
                  </tbody>
                </table>


              </div>
            </div>
          </div>
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