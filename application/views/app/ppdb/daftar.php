<div class="container">
  <div class="row">

    <div class="col-12 my-2">
      <div class="card">
        <div class="card-header">
          A. Keterangan Siswa
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="">Nama lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap">
          </div>
          <div class="form-group">
            <label for="">Nama Panggilan</label>
            <input type="text" class="form-control" name="nama_panggilan">
          </div>
          <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="nik">
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
              <option value="p" selected>Pria</option>
              <option value="w">Wanita</option>
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
          <div class="form-group">
            <label for="">Agama</label>
            <select name="agama" id="agama" class="form-control">
              <option value="islam">Islam</option>
              <option value="kristen">Kristen</option>
              <option value="hindu">Hindu</option>
              <option value="buddha">Buddha</option>
              <option value="satanis">Satanis</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Kewarganegaraan</label>
            <input type="text" class="form-control" name="kewarganegaraan">
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
                <input type="number" class="form-control" name="jumlah_saudara_kandung" min=0>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="">Jumlah Saudara Tiri</label>
                <input type="number" class="form-control" name="jumlah_saudara_tiri" min=0>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="">Jumlah Saudara Angkat</label>
                <input type="number" class="form-control" name="jumlah_saudara_angkat" min=0>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Bahasa Sehari-hari</label>
            <input type="text" class="form-control" name="bahasa_sehari">
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
          <div class="form-group">
            <label for="">Penyakit berat yang pernah diderita</label>
            <input type="text" class="form-control" name="penyakit_berat">
          </div>
          <div class="form-group">
            <label for="">Alamat Tempat Tinggal</label>
            <textarea name="alamat_tinggal" id="alamat_tinggal" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="">Bertempat Tinggal Pada</label>
            <select name="tinggal_dengan" id="tinggal_dengan" class="form-control">
              <option value="Ortu">Orang Tua</option>
              <option value="Paman">Paman / Tante</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nomor HP yang bisa dihubungi</label>
            <input type="text" class="form-control" name="nomor_hp">
          </div>

        </div>
      </div>
    </div>

    <div class="col-12 my-2">
      <div class="card">
        <div class="card-header">
          B. ORANG TUA / WALI
        </div>
        <div class="card-body">
          <h4>Ayah</h4>
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama_ayah_kandung">
          </div>
          <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="NIK">
          </div>
          <div class="form-group">
            <label for="">Pendidikan</label>
            <select name="pendidikan_ayah_kandung" id="pendidikan_ayah_kandung" class="form-control">
              <option value="TK">TK</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="D1-D4">D1/D2/D3/D4</option>
              <option value="S1-S3">S1/S2/S3</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_ayah_kandung">
          </div>
          <div class="form-group">
            <label for="">Penghasilan perbulan</label>
            <input type="number" class="form-control" name="penghasilan_ayah_kandung" min=1>
          </div>

          <br>
          
          <h4>Ibu</h4>
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama_ibu_kandung">
          </div>
          <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="NIK">
          </div>
          <div class="form-group">
            <label for="">Pendidikan</label>
            <select name="pendidikan_ibu_kandung" id="pendidikan_ibu_kandung" class="form-control">
              <option value="TK">TK</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="D1-D4">D1/D2/D3/D4</option>
              <option value="S1-S3">S1/S2/S3</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_ibu_kandung">
          </div>
          <div class="form-group">
            <label for="">Penghasilan perbulan</label>
            <input type="number" class="form-control" name="penghasilan_ibu_kandung" min=1>
          </div>

          <br>

          <h4>Wali</h4>
          <div class="form-group">
            <label for="">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali">
          </div>
          <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="NIK">
          </div>
          <div class="form-group">
            <label for="">Pendidikan</label>
            <select name="pendidikan_wali" id="pendidikan_wali" class="form-control">
              <option value="TK">TK</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="D1-D4">D1/D2/D3/D4</option>
              <option value="S1-S3">S1/S2/S3</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_wali">
          </div>
          <div class="form-group">
            <label for="">Hubungan wali dengan siswa</label>
            <input type="text" class="form-control" name="hubungan_wali">
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
          <div class="form-group">
            <label for="">Masuk sekolah ini sebagai</label>
            <select name="sebagai_siswa" id="sebagai_siswa" class="form-control">
              <option value="baru">Siswa Baru</option>
              <option value="mutasi">Siswa Mutasi</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Asal siswa</label>
            <select name="asal_sekolah_siswa" id="asal_sekolah_siswa" class="form-control">
              <option value="TK">TK</option>
              <option value="SD">SD</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nama Sekolah</label>
            <input type="text" class="form-control" name="nama_asal_sekolah_siswa">
          </div>
          <div class="form-group">
            <label for="">Nomor/Tahun Surat Keterangan</label>
            <input type="text" class="form-control" name="nomor_surat_keterangan">
          </div>
          <div class="form-group">
            <label for="">Lama belajar</label>
            <input type="text" class="form-control" name="lama_belajar">
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 my-2">
      <button type="submit" class="btn btn-primary float-right">Daftar siswa</button>
    </div>
    
  </div>
</div>