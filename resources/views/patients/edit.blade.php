<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formAddList" class="container mt-4 w-75" method="POST" action={{ route('patients.update', $patient) }}>
        @csrf
        @method('PUT')
        <div class="d-flex flex-column gap-3 justify-content-center" >
            <h4 class="mx-auto">Form Edit Pasien</h4>
            <div class="input-group w-50 mx-auto">
                <span class="input-group-text w-25" id="">Nama</span>
                <input id="inputName" name="name" value="{{ $patient->name }}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputName">
            </div>
            <div class="input-group w-50 mx-auto">
                <label class="input-group-text w-25" for="inputGender">Gender</label>
                <select class="form-select" id="inputGender" name="gender" value="{{ $patient->gender }}">
                    <option></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="input-group w-50 mx-auto">
                <span class="input-group-text w-25" id="">Usia</span>
                <input id="inputAge" name="age" value="{{ $patient->age }}" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputName">
            </div>
            <div class="input-group w-50 mx-auto">
                <span class="input-group-text w-25" id="">Alamat</span>
                <input id="inputAddress" name="address" value="{{ $patient->address }}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputName">
            </div>
            <button type="submit" class="btn btn-primary w-25 mx-auto">Perbarui Data Pasien</button>
        </div>
    </form>
</body>
</html>
