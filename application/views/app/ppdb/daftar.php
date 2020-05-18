<div class="container">
  
  <?php if($this->session->flashdata('pesan')): ?>
    <div class="row mb-2">
      <div class="col-12 text-center">
        <?= $this->session->flashdata('pesan'); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="row mb-2">
    <form action="<?= base_url('Landing/ppdb') ?>" method="post">
      <div class="col-12 my-2">
        <div class="card">
          <div class="card-header">
            A. Keterangan Siswa
          </div>
          <div class="card-body">
              <div class="form-group row">
                <label for="" class="col-3">Nama lengkap</label>
                <input type="text" class="form-control col-8" name="nama_lengkap">
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Nama Panggilan</label>
                <input type="text" class="form-control col-8" name="nama_panggilan">
              </div>
              <div class="form-group row">
                <label for="" class="col-3">NIK</label>
                <input type="text" class="form-control col-8" name="NIK_siswa">
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-8">
                  <option value="l" selected>Laki-laki</option>
                  <option value="p">Perempuan</option>
                </select>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                  </div>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Agama</label>
                <select name="agama" id="agama" class="form-control col-8">
                  <option value="islam">Islam</option>
                  <option value="kristen">Kristen</option>
                  <option value="hindu">Hindu</option>
                  <option value="buddha">Buddha</option>
                  <option value="satanis">Satanis</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Kewarganegaraan</label>
                <input type="text" class="form-control col-8" name="kewarganegaraan">
              </div>
              <div class="row">
                <div class="col-3">
                  <div class="form-group">
                    <label for="">Anak nomor ke-</label>
                    <input type="number" class="form-control" name="anak_ke" min=1 value=1>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="">Jumlah Saudara Kandung</label>
                    <input type="number" class="form-control" name="saudara_kandung" min=0>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="">Jumlah Saudara Tiri</label>
                    <input type="number" class="form-control" name="saudara_tiri" min=0>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label for="">Jumlah Saudara Angkat</label>
                    <input type="number" class="form-control" name="saudara_angkat" min=0>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Bahasa Sehari-hari</label>
                <input type="text" class="form-control col-8" name="bahasa">
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label for="">Berat Badan (kg)</label>
                    <input type="number" class="form-control" name="berat_badan" min=1>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="">Tinggi Badan (cm)</label>
                    <input type="number" class="form-control" name="tinggi_badan" min=1>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="">Golongan Darah</label>
                    <select name="golongan_darah" id="golongan_darah" class="form-control">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Penyakit berat yang pernah diderita</label>
                <input type="text" class="form-control col-8" name="penyakit">
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Alamat Tempat Tinggal</label>
                <textarea name="alamat" id="alamat_tinggal" class="form-control col-8" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Bertempat Tinggal Pada</label>
                <select name="tinggal_dengan" id="tinggal_dengan" class="form-control col-8">
                  <option value="Ortu">Orang Tua</option>
                  <option value="Paman">Paman / Tante</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="" class="col-3">Nomor HP yang bisa dihubungi</label>
                <input type="text" class="form-control col-8" name="nomor_hp">
              </div>

              <!-- tahun ajaran -->
              <input type="hidden" name="tahun_ajaran" value="<?= $tahun_satu ?>">
            </form>
          </div>
      </div>

      <div class="col-12 my-2">
        <div class="card">
          <div class="card-header">
            B. ORANG TUA / WALI
          </div>
          <div class="card-body">
            <h4>Ayah</h4>
            <div class="form-group row">
              <label for="" class="col-3">Nama</label>
              <input type="text" class="form-control col-8" name="nama_ayah">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">NIK</label>
              <input type="text" class="form-control col-8" name="NIK_ayah">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Pendidikan</label>
              <select name="pendidikan_ayah" id="pendidikan_ayah_kandung" class="form-control col-8">
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1-D4">D1/D2/D3/D4</option>
                <option value="S1-S3">S1/S2/S3</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Pekerjaan</label>
              <input type="text" class="form-control col-8" name="pekerjaan_ayah">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Penghasilan perbulan</label>
              <input type="number" class="form-control col-8" name="penghasilan_ayah" min=1>
            </div>

            <br>
            
            <h4>Ibu</h4>
            <div class="form-group row">
              <label for="" class="col-3">Nama</label>
              <input type="text" class="form-control col-8" name="nama_ibu">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">NIK</label>
              <input type="text" class="form-control col-8" name="NIK_ibu">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Pendidikan</label>
              <select name="pendidikan_ibu" id="pendidikan_ibu_kandung" class="form-control col-8">
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1-D4">D1/D2/D3/D4</option>
                <option value="S1-S3">S1/S2/S3</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Pekerjaan</label>
              <input type="text" class="form-control col-8" name="pekerjaan_ibu">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Penghasilan perbulan</label>
              <input type="number" class="form-control col-8" name="penghasilan_ibu" min=1>
            </div>

            <br>

            <h4>Wali</h4>
            <div class="form-group row">
              <label for="" class="col-3">Nama Wali</label>
              <input type="text" class="form-control col-8" name="nama_wali">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">NIK</label>
              <input type="text" class="form-control col-8" name="NIK_wali">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Pendidikan</label>
              <select name="pendidikan_wali" id="pendidikan_wali" class="form-control col-8">
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1-D4">D1/D2/D3/D4</option>
                <option value="S1-S3">S1/S2/S3</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Pekerjaan</label>
              <input type="text" class="form-control col-8" name="pekerjaan_wali">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Hubungan wali dengan siswa</label>
              <input type="text" class="form-control col-8" name="hubungan_wali_siswa">
            </div>

          </div>
        </div>
      </div>

      <div class="col-12 my-2">
        <div class="card">
          <div class="card-header">
            C. ASAL MULA SISWA
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="" class="col-3">Masuk sekolah ini sebagai</label>
              <select name="masuk_sebagai" id="sebagai_siswa" class="form-control col-8">
                <option value="baru">Siswa Baru</option>
                <option value="mutasi">Siswa Mutasi</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Asal siswa</label>
              <select name="asal_siswa" id="asal_sekolah_siswa" class="form-control col-8">
                <option value="TK">TK</option>
                <option value="SD">SD</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Nama Sekolah</label>
              <input type="text" class="form-control col-8" name="nama_sekolah">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Nomor/Tahun Surat Keterangan</label>
              <input type="text" class="form-control col-8" name="nomor_tahun_sk">
            </div>
            <div class="form-group row">
              <label for="" class="col-3">Lama belajar</label>
              <input type="number" class="form-control col-8" name="lama_belajar">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 my-2">
        <button type="submit" class="btn btn-primary float-right">Daftar siswa</button>
      </div>
      
    </div>
  </div>
</div>