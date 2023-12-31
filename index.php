<?php include 'template/header.php';

include "proses.php"; ?>

<header>
    <div class="container bg-dark mt-2 text-center shadow-lg p-2 mb-2 bg-body rounded">
        <h1>PELAPORAN KENDALA EMR RS NUR ROHMAH</h1>
    </div>
</header>

<div class="container">
    <div class="card" style="width: auto;">
        <div class="row">
            <div class="card-body">
                <div class="col-lg col-sm">
                    <form method="POST">
                        <h5 for="" class="bg-fuchsia col text-white text-center shadow-sm p-2 bg-body rounded">Form Pelaporan</h5>
                        <div class="f-group">
                            <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                            <label for="">Tanggal</label>
                            <input type="date" id="" name="tgl" placeholder="" class="form-control tgl_now" required readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Kendala / Bug Report / Error</label>
                            <textarea class="form-control" name="kendala" id="" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                        </div>
                        <div class="f-group">
                            <label for="">Modul / Menu di EMR</label>
                            <input type="text" class="form-control" name="modul" required="Silahkan lengkapi dulu!">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="" class="form-label">Lokasi Unit / Ins.</label>
                            <select class="custom-select" name="lokasi" required>
                                <option selected>--Choose--</option>
                                <option value="IGD">IGD</option>
                                <option value="Radiologi">Radiologi</option>
                                <option value="Laboratorium">Laboratorium</option>
                                <option value="RJ Penyakit Dalam">RJ Penyakit Dalam</option>
                                <option value="RJ Syaraf">RJ Syaraf</option>
                                <option value="RJ Bedah">RJ Bedah</option>
                                <option value="RJ Anak">RJ Anak</option>
                                <option value="RJ Poli Umum">RJ Poli Umum</option>
                                <option value="RJ Obsgyn">RJ Obsgyn</option>
                                <option value="Rekam Medis">Rekam Medis</option>
                                <!-- RAWAT INAP -->
                                <option value="RI ISOLASI">RI ISOLASI</option>
                                <option value="RI HCU-ICU">RI HCU-ICU</option>
                                <option value="RI MATAHARI">RI MATAHARI</option>
                                <option value="RI KRISAN">RI KRISAN</option>
                                <option value="RI TULIP-LILI">RI TULIP-LILI</option>
                            </select>
                        </div>
                        <!-- <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Lokasi Unit / Ins.</label>
                            <textarea class="form-control" name="lokasi" id="" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                        </div> -->
                        <!-- <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Penanganan</label>
                                    <textarea class="form-control" name="penanganan" id="" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                                </div> -->
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Note / Saran </label>
                            <textarea class="form-control" name="note" id="" rows="3"></textarea>
                        </div>

                        <input type="hidden" class="form-control" name="status" value="Menunggu Respon">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="sumbit" name="save" class="btn btn-success btn btn-primary btn-sm">Submit &nbsp;<i class="fa fa-paper-plane"></i> </button>
                            <!-- <button type="submit" name="update" class="btn btn-warning btn btn-primary btn-sm">Update</button> -->
                            <button type="reset" class="btn btn-warning btn btn-primary btn-sm">Reset&nbsp;<i class="fa fa-times"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include 'template/footer.php'; ?>