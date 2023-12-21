<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View The data</title>
</head>

<body>
    <h1>View Data mahasiswa</h1>

    <div class="container-center">
        <p>hi, {{ Auth::user()->name }} !! </p>
        <span><a href="{{ route('logout') }}">Logout</a></span>    
        <table class="table table-striped" style="margin-top: 50px" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Mata Kuliah</th>
                    <th>Nama Dosen</th>
                    <th>Jumlah SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->nama }}</td>
                        <td>{{ $admin->nim }}</td>
                        <td>{{ $admin->mata_kuliah }}</td>
                        <td>{{ $admin->nama_dosen }}</td>
                        <td>{{ $admin->jumlah_sks }}</td>
                        <td>
                            <form action="{{ route('admin.hapus', ['admin' => $admin->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </div>
</body>

</html>