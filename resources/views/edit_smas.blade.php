<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Data Sapras</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/edit_smas.css">
</head>
<body>
  <main class="wrap" role="main" aria-labelledby="title">
    <h1 id="title">Edit Data</h1>

    <form id="formEditSapras" novalidate>
      <!-- ID record yang akan diedit -->
      <input type="hidden" id="recordId" name="id" value="123">

      <div class="field">
        <label for="nama">Nama SMA</label>
        <div class="control">
          <input id="nama" name="nama" type="text" value="SMA Negeri 3 Tebo" required />
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
            <option>Kabupaten Tebo</option>
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
            <option>2023/2024</option>
            <option selected>2024/2025</option>
            <option>2025/2026</option>
          </select>
          <span class="caret" aria-hidden="true"></span>
        </div>
      </div>

      <div class="field">
        <label for="jenis">Jenis Sapras</label>
        <div class="control">
          <select id="jenis" name="jenis" required>
            <option>Ruang Kelas</option>
            <option selected>Ruang Guru</option>
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
          <input id="jumlah" name="jumlah" type="number" min="0" step="1" value="200" required />
        </div>
      </div>

      <div class="field">
        <div class="radio-row" role="radiogroup" aria-label="Kondisi">
          <label class="radio"><input type="radio" name="kondisi" value="Baik" checked> Baik</label>
          <label class="radio"><input type="radio" name="kondisi" value="Rusak Ringan"> Rusak Ringan</label>
          <label class="radio"><input type="radio" name="kondisi" value="Rusak Berat"> Rusak Berat</label>
        </div>
      </div>

      <div class="actions">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn btn-danger" type="button" id="btnBatal">Batal</button>
      </div>
    </form>
  </main>

  <script>
    // === CONFIG ===
    // Ubah sesuai backend, contoh Laravel REST: /api/sapras/{id}
    const API_BASE = "/api/sapras";

    const form = document.getElementById("formEditSapras");
    const btnBatal = document.getElementById("btnBatal");
    const recordIdEl = document.getElementById("recordId");

    // Optional: load data by query ?id=xxx (jika halaman dipanggil dengan id)
    (function hydrateFromQuery(){
      const params = new URLSearchParams(location.search);
      const qid = params.get("id");
      if (qid) recordIdEl.value = qid;
      // Jika ingin auto-fetch data awal:
      // fetch(`${API_BASE}/${recordIdEl.value}`).then(r=>r.json()).then(fillForm)
    })();

    // Helper isi form dari JSON (kalau nanti fetch detail)
    function fillForm(data){
      if (!data) return;
      document.getElementById('nama').value   = data.nama ?? '';
      document.getElementById('status').value = data.status ?? 'Negeri';
      document.getElementById('kab').value    = data.kab ?? 'Kabupaten Tebo';
      document.getElementById('tahun').value  = data.tahun ?? '2024/2025';
      document.getElementById('jenis').value  = data.jenis ?? 'Ruang Guru';
      document.getElementById('jumlah').value = data.jumlah ?? 0;
      if (data.kondisi) {
        const el = [...document.querySelectorAll('input[name="kondisi"]')]
          .find(r=>r.value===data.kondisi);
        if (el) el.checked = true;
      }
    }

    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      if (!form.checkValidity()) { form.reportValidity(); return; }

      const fd = new FormData(form);
      const id = fd.get("id");
      const payload = Object.fromEntries(fd.entries());

      try {
        const res = await fetch(`${API_BASE}/${encodeURIComponent(id)}`, {
          method: "PATCH", // gunakan PUT jika backend mewajibkan
          headers: {
            "Content-Type": "application/json",
            // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          },
          body: JSON.stringify(payload),
          credentials: "include"
        });

        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        await res.json().catch(()=> ({}));
        alert("Perubahan berhasil disimpan.");
        // window.location.href = "/sapras";
      } catch (err) {
        console.error(err);
        alert("Terjadi kesalahan saat menyimpan perubahan.");
      }
    });

    btnBatal.addEventListener("click", () => {
      if (document.referrer) history.back();
      else form.reset();
    });
  </script>
</body>
</html>