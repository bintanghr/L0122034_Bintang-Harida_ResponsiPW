<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    @include('components.navbar')
    <div class="container w-75">
        <h1 class="text-center mt-4">Data Antrian Pasien</h1>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $patients as $index => $patient )
                <tr>
                    <th scope='row' class='col col-1'>{{ $index + 1 }}</th>
                    <td class='col col-3'>{{$patient->name}}</td>
                    <td class='col col-2'>{{$patient->gender}}</td>
                    <td class='col col-2'>{{$patient->age}}</td>
                    <td class='col col-3'>{{$patient->address}}</td>
                    <td>
                        <button type='button' class='btn btn-warning btn-sm'  data-bs-toggle='modal' data-bs-target='#editModal'>
                            <a href="patients/{{$patient->id}}/edit">
                                <i class='bi bi-pencil-square text-dark'></i>
                            </a>
                        </button>
                    </td>
                    <td class=''>
                        <form method="POST" action="{{ route('patients.destroy', $patient->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick='return confirm("hapus pasien atas nama {{$patient->name}} ?")' class='btn btn-danger btn-sm'>
                                <a href="patients/{{$patient->id}}">
                                    <i class='bi bi-trash3 text-dark'></i>
                                </a>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex container w-25 mx-auto">
            <button class="btn btn-primary w-100">
                @method('GET')
                <a href="/patients/create" class="text-decoration-none text-light">
                    Tambah pasien
                </a>
            </button>
        </div>
    </div>
    @include('components.notification')
</body>
</html>
