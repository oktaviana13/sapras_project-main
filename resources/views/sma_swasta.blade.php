<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Sekolah Negeri</title>
  <link rel="stylesheet" href="sma_swasta.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="logo">
      <img src="../image/disdik.png" alt="Logo" />
      <img src="../image/logo.png" alt="Logo" />
      <h3>Dinas Pendidikan</h3>
    </div>
    <ul>
  <li><i class="fa fa-home"></i> Dashboard</li>
  <li class="active"><i class="fa fa-school"></i> Data Sekolah</li>
  <ul class="submenu">
    <li class="submenu-item">SMA Negeri</li>
    <li class="submenu-item active-sma-swasta">SMA Swasta</li>
  </ul>
  <li><i class="fa fa-building"></i> Data Kabupaten</li>
  <li><i class="fa fa-calendar-day"></i> Kegiatan</li>
  <li><i class="fa fa-file-alt"></i> Laporan</li>
</ul>
    <button class="logout"><i class="fa fa-sign-out-alt"></i> Logout</button>
  </div>

  <!-- MAIN -->
  <div class="main">
   <!-- Header -->
    <div class="header">
      <h2>Sistem Sarana & Prasarana SMA</h2>
      <div class="user">
        <span>Oktaviana Dwi</span>
        <img src="https://ui-avatars.com/api/?name=Oktaviana+Dwi&background=3a6ff7&color=fff&rounded=true" alt="User"/>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
      <h2>Data Sekolah SMA Swasta</h2>
      <div class="tools">
        <input type="text" placeholder="Search...">
        <select>
          <option value="">Filter Kabupaten</option>
          <option value="tebo">Kabupaten Tebo</option>
          <option value="merangin">Kabupaten Merangin</option>
          <option value="sarolangun">Kabupaten Sarolangun</option>
          <option value="muaro_jambi">Kabupaten Muaro Jambi</option>
          <option value="bungo">Kabupaten Bungo</option>
          <option value="kerinci">Kabupaten Kerinci</option>
          <option value="batanghari">Kabupaten Tanjung Jabung Barat</option>
          <option value="batanghari">Kabupaten Tanjung Jabung Timur</option>
          <option value="batanghari">Kota Sungai Penuh</option>
          <option value="batanghari">Kota Jambi</option>
          <option value="batanghari">Kabupaten Batanghari</option>
        </select>
        <button class="btn-blue">Tambah</button>
        <button class="btn-gray">Export</button>
      </div>
      <table>
        <thead>
          <tr>
            <th>Nama Sekolah</th>
            <th>NPSN</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
      <tr>
      <td class="nama-sekolah">SMAN 1 Tebo</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
        <button class="btn-edit">Edit</button>
        <button class="btn-detail">Detail</button>
        <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 2 Merangin</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
        <button class="btn-edit">Edit</button>
        <button class="btn-detail">Detail</button>
        <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 3 Tebo</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
        <button class="btn-edit">Edit</button>
        <button class="btn-detail">Detail</button>
        <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 1 sarolangun</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
        <button class="btn-edit">Edit</button>
        <button class="btn-detail">Detail</button>
        <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 1 muaro Jambi</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
      <button class="btn-edit">Edit</button>
      <button class="btn-detail">Detail</button>
      <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 3 muaro Jambi</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
      <button class="btn-edit">Edit</button>
      <button class="btn-detail">Detail</button>
      <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 9 Kerinci</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
      <button class="btn-edit">Edit</button>
      <button class="btn-detail">Detail</button>
      <button class="btn-delete">Hapus</button>
      </td>
      <tr>
      <td class="nama-sekolah">SMAN 5 Batanghari</td>
      <td class="npsn">12345678910</td>
      <td class="alamat">Jl. Ahmad Yani No 105</td>
      <td class="aksi">
      <button class="btn-edit">Edit</button>
      <button class="btn-detail">Detail</button>
      <button class="btn-delete">Hapus</button>
      </td>
      </tr>
      </tbody>
    </table>
    </div>
  </div>
</body>
</html>