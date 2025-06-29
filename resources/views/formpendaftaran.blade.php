<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Pendaftaran Beasiswa | SiBeasiswaku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      padding: 40px;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #2c3e50;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background-color: #2980b9;
    }
    .back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #3498db;
      text-decoration: none;
      font-size: 14px;
    }
    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Pendaftaran Beasiswa</h2>
    <form action="{{route('pendaftaran', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="berkas">Upload Berkas (PDF)</label>
      <input type="file" id="berkas" name="berkas" accept=".pdf" required>

      <label for="motivasi">Motivasi / Alasan Mendaftar</label>
      <textarea id="motivasi" name="motivasi" rows="4" required></textarea>

      <button type="submit">Kirim Pendaftaran</button>
    </form>

    <!-- Tombol Kembali -->
    <a href="{{ url('/beasiswa') }}" class="back-link">← Kembali ke Detail Beasiswa</a>
  </div>
</body>
</html>
