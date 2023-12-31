@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" name="id" id="id" value="{{ $admin->id }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Portofolio</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $admin->nama }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="kategori" id="">
                    <option value="Futsal">Futsal</option>
                    <option value="Sepak Bola">Sepak Bola</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Lari">Lari</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Foto</label><br>
                @if(file_exists("storage/". $admin->foto))
                <img src="/storage/{{ $admin->foto }}" alt="" width="100"><br>
                @endif
                <input type="file" name="foto" id="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="simpan" class="btn btn-primary">{{ $tombol }}</button>
        </div>
    </div>
</div>
</form>
</body>
</html>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js">
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>
