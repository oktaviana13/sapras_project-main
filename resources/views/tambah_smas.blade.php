<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah Data Sapras</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/tambah_smas.css">
</head>
<body>
  <main class="wrap" role="main" aria-labelledby="title">
    <h1 id="title">Tambah Data</h1>

    <form id="formSapras" novalidate>
      <div class="field">
        <label for="nama">Nama SMA</label>
        <div class="control">
          <input id="nama" name="nama" type="text" placeholder="Contoh: SMA Negeri 3 Tebo" required />
        </div>
      </div>

      <div class="field">
        <label for="status">Status Sekolah</label>
        <div class="control">
          <select id="status" name="status" required>
            <option value="Negeri" selected>Negeri</option>
            <option value="Swasta">Swasta</option>
          </select>
          <span class="caret" aria-hidden="true"></span>
        </div>
      </div>

      <div class="field">
        <label for="kab">Kabupaten/Kota</label>
        <div class="control">
          <select id="kab" name="kab" required>
            <option selected>Kabupaten Tebo</option>
            <option>Kabupaten Batanghari</option>
            <option>Kabupaten Bungo</option>
            <option>Kota Jambi</option>
          </select>
          <span class="caret" aria-hidden="true"></span>
        </div>
      </div>

      <div class="field">
        <label for="tahun">Tahun Ajaran</label>
        <div class="control">
          <select id="tahun" name="tahun" required>
            <option selected>2023/2024</option>
            <option>2024/2025</option>
            <option>2025/2026</option>
          </select>
          <span class="caret" aria-hidden="true"></span>
        </div>
      </div>

      <div class="field">
        <label for="jenis">Jenis Sapras</label>
        <div class="control">
          <select id="jenis" name="jenis" required>
            <option selected>Ruang Guru</option>
            <option>Ruang Kelas</option>
            <option>Perpustakaan</option>
            <option>Laboratorium Fisika</option>
            <option>Laboratorium Biologi</option>
            <option>Laboratorium Kimia</option>
            <option>UKS</option>
            <option>Lapangan Futsal</option>
            <option>Lapangan Basket</option>
          </select>
          <span class="caret" aria-hidden="true"></span>
        </div>
      </div>

      <div class="field">
        <label for="jumlah">Jumlah Sapras</label>
        <div class="control">
          <input id="jumlah" name="jumlah" type="number" min="0" step="1" placeholder="1" required />
        </div>
      </div>

      <div class="field">
        <div class="radio-row" role="radiogroup" aria-label="Kondisi">
          <label class="radio">
            <input type="radio" name="kondisi" value="Baik" required /> Baik
          </label>
          <label class="radio">
            <input type="radio" name="kondisi" value="Rusak Ringan" /> Rusak Ringan
          </label>
          <label class="radio">
            <input type="radio" name="kondisi" value="Rusak Berat" /> Rusak Berat
          </label>
        </div>
        <div class="hint">Pilih salah satu kondisi.</div>
      </div>

      <div class="actions">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn btn-danger" type="button" id="btnBatal">Batal</button>
      </div>
    </form>
  </main>

  <script>
    // Contoh submit: validasi sederhana & tampilkan payload
    const form = document.getElementById('formSapras');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      if (!form.checkValidity()) { form.reportValidity(); return; }
      const data = Object.fromEntries(new FormData(form).entries());
      console.log('Payload kirim:', data);
      alert('Data berhasil disiapkan.\nLihat console untuk payload.');
      // TODO: fetch('/api/sapras', {method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify(data)})
    });

    // Tombol batal: kembali/clear
    document.getElementById('btnBatal').addEventListener('click', () => {
      if (document.referrer) history.back(); else form.reset();
    });
  </script>
</body>
</html>