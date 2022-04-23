<?php
include_once 'header.php';
include_once 'sidebar2.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div style="text-align : center; margin-top : 8px">
            <H2>Kalkulator BMI</H2>
            <p>Silahkan input data terlebih dahulu</p>
          </div>
          <?php
          class pasien
          {
            public $kode;
            public $nama;
            public $gender;
          }
          ?>

          <?php
          class BMI
          {
            public $berat;
            public $tinggi;

            function __construct($berat, $tinggi)
            {
              $this->berat = $berat;
              $this->tinggi = $tinggi;
            }
            public function nilaiBMI()
            {
              $BMI = $this->berat / (($this->tinggi / 100) ** 2);
              return number_format($BMI, 1);
            }
            public function statusBMI()
            {
              if ($this->nilaiBMI() < 18.5) {
                echo 'kekurangan berat badan';
              } elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9) {
                echo 'normal(ideal)';
              } elseif ($this->nilaiBMI() >= 25.0 && $this->nilaiBMI() <= 29.9) {
                echo 'kelebihan berat badan';
              } elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9) {
                echo 'kekurangan berat badan';
              } elseif ($this->nilaiBMI() > 30.0) {
                echo 'kegemukan(obesitas)';
              } else {
                echo 'tidak termasuk kategori';
              }
            }
          }
          ?>

          <?php
          class BMIpasien extends pasien
          {
            public $bmi;
            public $pasien;

            function __construct($bmi, $pasien)
            {
              $this->bmi = $bmi;
              $this->pasien = $pasien;
            }
          }
          ?>

          <?php
          $pasien1 = new pasien();
          $pasien1->kode = isset($_POST['kode']) ? $_POST['kode'] : '';
          $pasien1->nama = isset($_POST['nama']) ? $_POST['nama'] : '';
          $pasien1->gender = isset($_POST['gender']) ? $_POST['gender'] : '';
          $pasien1->tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';


          $bmi1 = new BMI($_POST['$berat'], $_POST['$tinggi']);

          $bmipasien1 = new BMIpasien($bmi1, $pasien1);
          $ar_bmi = [$bmipasien1];
          ?>

          <form method="POST">
            <div class="form-group row">
              <label for="kode" class="col-4 col-form-label">Kode</label>
              <div class="col-8">
                <input id="kode" name="kode" placeholder="Masukan kode" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </div>
                  </div>
                  <input id="tanggal" name="tanggal" type="text" class="form-control" placeholder="Masukan Tanggal">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label>
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan nama" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Jenis Kelamin</label>
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Lk">
                  <label for="gender_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P">
                  <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="berat" class="col-4 col-form-label">Berat</label>
              <div class="col-8">
                <input id="berat" name="berat" placeholder="Masukan berat badan" type="text" class="form-control" aria-describedby="beratHelpBlock">
                <span id="beratHelpBlock" class="form-text text-muted">Kg</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="tinggi" class="col-4 col-form-label">Tinggi</label>
              <div class="col-8">
                <input id="tinggi" name="tinggi" placeholder="Masukan tinggi" type="text" class="form-control" aria-describedby="tinggiHelpBlock">
                <span id="tinggiHelpBlock" class="form-text text-muted">Cm</span>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          <img src="Gambar1.png" class="rounded mx-auto d-block m-3">

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-hover">
                  <thead class="bg-primary">
                    <tr>
                      <th>NO</th>
                      <th>Tanggal Periksa</th>
                      <th>Kode Pasien</th>
                      <th>Nama Pasien</th>
                      <th>Gender</th>
                      <th>Berat</th>
                      <th>Tinggi</th>
                      <th>Nilai BMI</th>
                      <th>Status BMI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>10/12/2020</td>
                      <td>1001</td>
                      <td>Budi</td>
                      <td>Lk</td>
                      <td>55kg</td>
                      <td>170cm</td>
                      <td>19.0</td>
                      <td>normal(ideal)</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>29/10/2021</td>
                      <td>1011</td>
                      <td>Reza</td>
                      <td>Lk</td>
                      <td>45kg</td>
                      <td>169cm</td>
                      <td>15.8</td>
                      <td>kekurangan berat badan</td>
                    </tr>
                    <?php $nomor = 3; ?>
                    <?php foreach ($ar_bmi as $obj) { ?>
                      <tr>
                        <td><?= $nomor; ?></td>
                        <td><?= $obj->pasien->tanggal; ?></td>
                        <td><?= $obj->pasien->kode; ?></td>
                        <td><?= $obj->pasien->nama; ?></td>
                        <td><?= $obj->pasien->gender; ?></td>
                        <td><?= $obj->bmi->berat . "kg"; ?></td>
                        <td><?= $obj->bmi->tinggi . "cm"; ?></td>
                        <td><?= $obj->bmi->nilaiBMI(); ?></td>
                        <td><?= $obj->bmi->statusBMI(); ?></td>
                      </tr>
                    <?php $nomor++;
                    } ?>
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