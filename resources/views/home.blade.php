<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAPRAS SMA</title>

    <!-- CSS dari public/css -->
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <header class="navbar">
        <div class="logo-container">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo 1" class="logo">
            <img src="{{ asset('assets/images/disdik.png') }}" alt="Logo 2" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <!-- Nanti ganti href ke route('login') kalau sudah pakai auth -->
                <li><a href="#login" class="login-btn">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section Selamat Datang -->
    <section id="home" class="welcome-section">
        <div class="welcome-box">
            <h1>Selamat Datang di<br>Situs Web</h1>
            <p class="subtitle">Sistem Manajemen Pendataan Sarana dan Prasarana SMA</p>
            <p class="institution">Dinas Pendidikan Provinsi Jambi</p>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="visi-misi">
        <h2>Visi & Misi</h2>
        <div class="visi">
            <h3>Visi</h3>
            <p>Mewujudkan pendidikan yang berkualitas melalui sarana dan prasarana yang memadai.</p>
        </div>
        <div class="misi">
            <h3>Misi</h3>
            <ul>
                <li>Menyediakan data sarana prasarana yang akurat.</li>
                <li>Mendukung perencanaan pembangunan sekolah.</li>
                <li>Meningkatkan kualitas fasilitas pendidikan.</li>
            </ul>
        </div>
    </section>

    <!-- Dashboard -->
    <section class="dashboard">
        <h2>Dashboard</h2>

        <!-- Cards -->
        <div class="cards">
            <div class="card blue">
                <p>Jumlah SMA Terdata</p>
                <h3>520</h3>
            </div>
            <div class="card green">
                <p>Jumlah Ruang Kelas</p>
                <h3>14.320</h3>
            </div>
            <div class="card gray">
                <p>Sumber Dana</p>
                <h3>DAK</h3>
            </div>
            <div class="card legend">
                <h3>Kondisi Sapras</h3>
                <p><span style="color:green;">●</span> Baik 60%</p>
                <p><span style="color:orange;">●</span> Rusak Ringan 30%</p>
                <p><span style="color:red;">●</span> Rusak Berat 10%</p>
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
    </section>

    <section class="tabel update">
        <h2>Update Terbaru SARPRAS SMA</h2>
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
                    <td>SMAN 2 Muaro Jambi</td>
                    <td>Pembangunan Ruang UKS</td>
                    <td>02/10/2024</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 SAPRAS SMA - Dinas Pendidikan Provinsi Jambi</p>
        <p>Jl. Jend. Ahmad Yani No.6, Telanaipura, Kec. Telanaipura, Kota Jambi, Jambi 36122, Indonesia</p>
        <p>Email: <a href="mailto:123@gmail.com">123@gmail.com</a> | Website: <a href="https://disdik.jambiprov.go.id/">disdik.jambiprov.go.id</a></p>
    </footer>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      // Pie Chart
      const ctxPie = document.getElementById('pieChart').getContext('2d');
      new Chart(ctxPie, {
        type: 'pie',
        data: {
          labels: ['Baik', 'Rusak Ringan', 'Rusak Berat'],
          datasets: [{
            data: [500, 220, 160],
            backgroundColor: ['#28a745', '#ffc107', '#dc3545']
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { position: 'bottom' }
          }
        }
      });

      // Bar Chart
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
          maintainAspectRatio: false,
          scales: {
            y: { beginAtZero: true }
          }
        }
      });
    </script>
</body>
</html>
