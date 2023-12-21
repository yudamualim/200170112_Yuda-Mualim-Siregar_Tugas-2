<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
</head>

<body>
    <h1>Menu Admin</h1>
    <p>hi, {{ Auth::user()->name }} !! </p>
    <span><a href="{{ route('logout') }}">Logout</a></span>
    <div class="card" style="with: 18rem;">
        <div class="card-body">
            <div class="container-fluid ">
                <div class="center-container">
                    <h1 class="animated fadeInUp" style="center">Admin Form</h1>
                    <form method="POST" action="{{ route('admin.add') }}" class="animated fadeInUp">
                        @csrf
                        <div class="form-group">
                            <label  style="margin-right: 10px">Nama</label>
                            <input type="text" name="nama" class="form-control" required autofocus>
                        </div>
                        <div class="form-group" style="margin-top: 60px;">
                            <label  style="margin-right: 10px">Nim</label>
                            <input type="text" name="nim"  class="form-control" required>
                        </div>

                        <div class="form-group" style="margin-top: 60px;">
                            <label  style="margin-right: 10px">Mata Kuliah</label>
                            <input type="text" name="mata_kuliah"  class="form-control" required>
                        </div>

                        <div class="form-group" style="margin-top: 60px;">
                            <label  style="margin-right: 10px">Nama Dosen</label>
                            <input type="text" name="nama_dosen"  class="form-control" required>
                        </div>

                        <div class="form-group" style="margin-top: 60px;">
                            <label  style="margin-right: 10px">Jumlah SKS</label>
                            <input type="number" name="jumlah_sks"  class="form-control" required>
                        </div>

                        <div class="form-group" style="margin-top: 60px;">
                            <button type="submit">Save Preview</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>