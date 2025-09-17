<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Sarpras SMA</title>
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <!-- Tambahkan ikon (Font Awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">
      <img src="../image/disdik.png" alt="Logo" />
      <h3>Dinas Pendidikan</h3>
    </div>
    <ul class="menu">
      <li class="active"><i class="fa fa-home"></i> Dashboard</li>
      <li><i class="fa fa-school"></i> Data Sekolah</li>
      <li><i class="fa fa-building"></i> Data Kabupaten</li>
      <li><i class="fa fa-calendar-day"></i> Kegiatan</li>
      <li><i class="fa fa-file-alt"></i> Laporan</li>
    </ul>
    <button class="logout"><i class="fa fa-sign-out-alt"></i> Logout</button>
  </div>

  <!-- Main Content -->
  <div class="main">
    <!-- Header -->
    <div class="header">
      <h2>Sistem Sarana & Prasarana SMA</h2>
      <div class="user">
        <span>Oktaviana Dwi</span>
        <img src="https://ui-avatars.com/api/?name=Oktaviana+Dwi&background=3a6ff7&color=fff&rounded=true" alt="User"/>
      </div>
    </div>

    <!-- Cards -->
    <div class="cards">
      <div class="card blue">
        <h3>520</h3>
        <p>Jumlah SMA Terdata</p>
      </div>
      <div class="card green">
        <h3>14.320</h3>
        <p>Jumlah Ruang Kelas</p>
      </div>
      <div class="card gray">
        <h3>300</h3>
        <p>Jumlah Laboratorium</p>
      </div>
    </div>

    <!-- Charts -->
    <div class="charts">
    <div class="chart">
        <h4>Kondisi Bangunan</h4>
        <canvas id="pieChart"></canvas>
    </div>
    <div class="chart">
        <h4>Jumlah Ruangan Kelas per Kabupaten</h4>
        <canvas id="barChart"></canvas>
    </div>
    </div>

    <!-- Table -->
    <div class="table-section">
  <h4>Update Terbaru SARPRAS SMA</h4>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th>Sekolah</th>
          <th>Keterangan</th>
          <th>Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SMAN 3 Tebo</td>
          <td>Pembangunan Ruang Laboratorium Komputer</td>
          <td>02/02/2024</td>
        </tr>
        <tr>
          <td>SMAN 1 Sarolangun</td>
          <td>Pembangunan Ruang Kelas Baru (RKB)</td>
          <td>05/07/2024</td>
        </tr>
         <tr>
          <td>SMAN 1 Bungo</td>
          <td>Pembangunan Ruang Laboratorium Kimia</td>
          <td>15/07/2024</td>
        </tr>
         <tr>
          <td>SMAN 2 Muaro Jambi</td>
          <td>Pembangunan Ruang UKS</td>
          <td>15/10/2024</td>
        </tr>
         <tr>
          <td>SMAN 3 Tebo</td>
          <td>Pembangunan Ruang Laboratorium Biologi</td>
          <td>11/09/2024</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</body>
<script>
  // Pie Chart: Kondisi Bangunan
  const ctxPie = document.getElementById('pieChart').getContext('2d');
  new Chart(ctxPie, {
    type: 'pie',
    data: {
      labels: ['Baik', 'Rusak Ringan', 'Rusak Berat'],
      datasets: [{
        data: [500, 220, 160], // data asli
        backgroundColor: ['#28a745', '#ffc107', '#dc3545']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' }
      }
    }
  });

  // Bar Chart: Jumlah Ruangan Kelas per Kabupaten
  const ctxBar = document.getElementById('barChart').getContext('2d');
  new Chart(ctxBar, {
    type: 'bar',
    data: {
      labels: ['Kerinci','Merangin','Sarolangun','Batanghari','Muaro Jambi','Tanjabbar','Tanjabtim','Bungo','Tebo'],
      datasets: [{
        label: 'Jumlah Ruangan Kelas',
        data: [1200, 1500, 800, 1000, 900, 750, 1100, 950, 600],
        backgroundColor: '#3a6ff7'
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>
</html>
<?php /**PATH C:\xampp\htdocs\project_sapras\perpus\resources\views/dashboard.blade.php ENDPATH**/ ?>