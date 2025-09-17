<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detail Sekolah — SMA Negeri 3 Tebo</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/detail_sman.css">
</head>
<body>
  <main class="wrap" role="main" aria-labelledby="page-title">
    <h1 class="title" id="page-title">Detail Sekolah</h1>
    <div class="school">SMA Negeri 3 Tebo</div>

    <!-- Info grid -->
    <section class="info" aria-label="Informasi Sekolah">
      <div class="chip" aria-label="NPSN">
        <svg class="ic" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M12 3l8 4.5v9L12 21 4 16.5v-9L12 3Z" stroke="#111827" stroke-width="1.7"/>
          <path d="M12 7v10" stroke="#111827" stroke-width="1.7"/>
        </svg>
        NPSN
      </div>
      <div class="val">12345678</div>

      <div class="chip" aria-label="Kabupaten">
        <svg class="ic" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M12 21s7-6.2 7-11a7 7 0 10-14 0c0 4.8 7 11 7 11Z" stroke="#111827" stroke-width="1.7"/>
          <circle cx="12" cy="10" r="2.7" stroke="#111827" stroke-width="1.7"/>
        </svg>
        Kabupaten
      </div>
      <div class="val">Tebo</div>

      <div class="chip" aria-label="Alamat">
        <svg class="ic" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M4 7.5h16M7 4h10M6 11h12M5 15h14M7 19h10" stroke="#111827" stroke-width="1.7" stroke-linecap="round"/>
        </svg>
        Alamat
      </div>
      <div class="val">Pasar Muaro Tebo</div>
    </section>

    <h2 class="section-title">Sarana &amp; Prasarana</h2>

    <div class="legend" aria-hidden="true">
      <span><i class="dot good"></i>Baik</span>
      <span><i class="dot light"></i>Rusak Ringan</span>
      <span><i class="dot bad"></i>Rusak Berat</span>
    </div>

    <div class="table-wrap scroll-x" role="region" aria-label="Tabel Sarana dan Prasarana">
      <table class="table">
        <thead>
          <tr>
            <th style="width:45%">Sapras</th>
            <th style="width:35%">Kondisi</th>
            <th style="width:20%">Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ruang Kelas</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>20</td>
          </tr>
          <tr>
            <td>Ruang Kelas</td>
            <td><span class="kondisi"><i class="dot light"></i>Rusak Ringan</span></td>
            <td>5</td>
          </tr>
          <tr>
            <td>Ruang Kelas</td>
            <td><span class="kondisi"><i class="dot bad"></i>Rusak Berat</span></td>
            <td>5</td>
          </tr>
          <tr>
            <td>Laboratorium Fisika</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Perpustakaan</td>
            <td><span class="kondisi"><i class="dot light"></i>Rusak Ringan</span></td>
            <td>2</td>
          </tr>
          <tr>
            <td>Mushola</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Ruang Guru</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Tata Usaha</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Ruang Osis</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Lapangan Futsal</td>
            <td><span class="kondisi"><i class="dot light"></i>Rusak Ringan</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Lapangan Basket</td>
            <td><span class="kondisi"><i class="dot light"></i>Rusak Ringan</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Ruang Kepala Sekolah</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>UKS</td>
            <td><span class="kondisi"><i class="dot good"></i>Baik</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Laboratorium Biologi</td>
            <td><span class="kondisi"><i class="dot light"></i>Rusak Ringan</span></td>
            <td>1</td>
          </tr>
          <tr>
            <td>Laboratorium Kimia</td>
            <td><span class="kondisi"><i class="dot light"></i>Rusak Ringan</span></td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="tfoot">
      <button class="btn" type="button" onclick="window.history.back()">Tutup</button>
    </div>
  </main>

  <script>
    // (Opsional) Tambahkan interaksi lain di sini bila dibutuhkan.
  </script>
</body>
</html>