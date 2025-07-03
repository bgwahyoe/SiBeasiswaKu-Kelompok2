<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran Beasiswa | SiBeasiswaku</title>
  <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    /* CSS BARU ADA DI SINI */
    :root {
      --primary-color: #4a90e2;
      --primary-hover-color: #357ABD;
      --secondary-color: #f9f9f9;
      --text-color: #333;
      --label-color: #555;
      --border-color: #ddd;
      --background-color: #f4f7f6;
      --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      --border-radius: 12px;
    }

    body {
      font-family: 'Poppins', Arial, sans-serif;
      background-color: var(--background-color);
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      box-sizing: border-box;
    }

    .container {
      max-width: 650px;
      width: 100%;
      margin: auto;
      background: white;
      padding: 40px;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      transition: all 0.3s ease;
    }

    .form-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-header h2 {
      color: var(--text-color);
      font-weight: 700;
      font-size: 26px;
      margin: 0;
    }

    .form-header p {
      color: var(--label-color);
      font-size: 16px;
    }

    .form-group {
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: var(--label-color);
      font-size: 14px;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px 15px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid var(--border-color);
      background-color: var(--secondary-color);
      color: var(--text-color);
      font-family: 'Poppins', sans-serif;
      font-size: 15px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus, select:focus, textarea:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
    }

    /* Custom File Upload */
    .file-upload-wrapper {
      position: relative;
      width: 100%;
      height: 140px;
      border: 2px dashed var(--border-color);
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      cursor: pointer;
      transition: border-color 0.3s ease;
      background-color: var(--secondary-color);
    }

    .file-upload-wrapper:hover {
      border-color: var(--primary-color);
    }

    .file-upload-wrapper i {
      font-size: 32px;
      color: var(--primary-color);
      margin-bottom: 15px;
    }

    .file-upload-wrapper span {
      font-size: 14px;
      color: var(--label-color);
    }

    .file-upload-wrapper span strong {
      color: var(--primary-color);
    }

    #berkas {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      opacity: 0;
      cursor: pointer;
    }

    #file-name {
      margin-top: 10px;
      font-size: 14px;
      color: #333;
      text-align: center;
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    .submit-btn {
      margin-top: 20px;
      width: 100%;
      padding: 15px;
      background: linear-gradient(45deg, #4a90e2, #2473c8);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 25px;
      color: var(--primary-hover-color);
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .back-link:hover {
      color: var(--primary-color);
      text-decoration: underline;
    }

    .back-link i {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-header">
      <h2>Form Pendaftaran Beasiswa</h2>
      <p>Lengkapi data berikut untuk melanjutkan pendaftaran.</p>
    </div>

    <form action="{{route('pendaftaran', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="motivasi">Motivasi / Alasan Mendaftar</label>
        <textarea id="motivasi" name="motivasi" rows="5" required placeholder="Jelaskan mengapa Anda tertarik dengan beasiswa ini..."></textarea>
      </div>

      <div class="form-group">
        <label for="berkas">Upload Berkas Persyaratan (PDF, max 5MB)</label>
        <div class="file-upload-wrapper">
          <input type="file" id="berkas" name="berkas" accept=".pdf" required onchange="displayFileName(this)">
          <i class="fas fa-cloud-upload-alt"></i>
          <span>Seret file ke sini atau <strong>klik untuk memilih file</strong></span>
        </div>
        <p id="file-name"></p>
      </div>

      <button type="submit" class="submit-btn">Kirim Pendaftaran</button>
    </form>

    <a href="{{ url('/beasiswa') }}" class="back-link"><i class="fas fa-arrow-left"></i> Kembali ke Detail Beasiswa</a>
  </div>

  <script>
    function displayFileName(input) {
      const fileNameDisplay = document.getElementById('file-name');
      if (input.files && input.files.length > 0) {
        fileNameDisplay.textContent = `File terpilih: ${input.files[0].name}`;
      } else {
        fileNameDisplay.textContent = '';
      }
    }
  </script>
</body>
</html>
