<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <style>
        body {
          background: linear-gradient(#eef3f8 0%,#d2e5f3 40%, #a2d9ff 100%);
            font-family: 'Lora', serif;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 15px;
        }
        .nav {
            padding-right: 15px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            text-align: left;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            
        }
       
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Projects
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.html">Tugas Javascript</a></li>
                  <li><a class="dropdown-item" href="#">Tugas PHP</a></li>
                  <li><a class="dropdown-item" href="index2.php">Connect Database</a></li>
                  <li><a class="dropdown-item" href="#">Tugas PHP</a></li>
                  <li><a class="dropdown-item" href="index.php">Tugas PHP</a></li>
          </div>
        </div>
      </nav>
      <br><br><br><br>
    <div class="container">
        <h1>BIODATA</h1>
        <br>
        <form action="proses.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="name@example.com" required><br>

            <label for="name">Nama:</label>
            <input type="text" id="name" name="nama" placeholder="ex : Pande Komang Indah Triroshanti" required><br>
            <label for="univ">Universitas:</label>
            <input type="text" id="univ" name="univ" placeholder="ex : Universitas Udayana" required><br>
            <label for="fakultas">Fakultas:</label>
            <input type="text" id="fakultas" name="fakultas" placeholder="ex : Fakultas Teknik" required><br>
            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" name="prodi" placeholder="ex : Teknologi Informasi" required><br>

            <label for="nim">NIM:</label>
            <input type="number" id="nim" name="nim" placeholder="2205551053" required><br>

            <label for="gender">Jenis Kelamin:</label>
            <select id="gender" name="gender" required>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select><br>

            <label for="age">Umur:</label>
            <input type="number" id="age" placeholder="19" name="umur" required><br>

            <label for="birthplace">Tempat Lahir:</label>
            <input type="text" id="birthplace" placeholder="ex: Gianyar" name="birthplace" required><br>

            <label for="tglLahir">Tanggal Lahir:</label>
            <input type="date" id="tglLahir" name="tglLahir" required><br><br>

            <label for="hobi">Hobi:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Jurnalistik" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Jurnalistik
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Menyanyi" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Menyanyi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Menari" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Menari
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Olahraga
                </label>
            </div>
            
            <br/>
            <label for="agama">Agama : </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="hindu" value="hindu">
                <label class="form-check-label" for="hindu">
                  Hindu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="kristen value="kristen">
                <label class="form-check-label" for="kristen">
                  Kristen
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="katolik" value="katolik">
                <label class="form-check-label" for="katolik">
                  Katolik
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="buddha" value="buddha">
                <label class="form-check-label" for="buddha">
                  Buddha
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="konghucu" value="konghucu">
                <label class="form-check-label" for="konghucu">
                  Kong Hu Cu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="islam" checked value="islam">
                <label class="form-check-label" for="islam">
                  Islam
                </label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
        <div id="result">
            
        </div>
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

</html>
