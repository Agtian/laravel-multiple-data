<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="mt-5" action="{{ route('store.customer') }}" method="POST">
            @csrf
            <h3 class="mb-3">Form Input Data</h3>
            <div class="form-group row mb-2 g-3 align-items-center">
                <div class="col-md-3">
                    <label for="nama" class="col-form-label">Nama</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Masukan nama anda" required>
                </div>
            </div>
            <div class="form-group row mb-2 g-3 align-items-center">
                <div class="col-md-3">
                    <label for="email" class="col-form-label">Email</label>
                </div>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Masukan email anda" required>
                </div>
            </div>
            <div class="form-group row mb-2 g-3 align-items-center">
                <div class="col-md-3">
                    <label for="address" class="col-form-label">Alamat</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="address" name="address[]" value="{{ old('address') }}" placeholder="Masukan alamat anda" required>
                </div>
            </div>
            <div class="form-group row mb-2 g-3 align-items-center">
                <div class="col-md-3">
                    <label for="phone" class="col-form-label">HP/Telp</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="phone" name="phone[]" value="{{ old('phone') }}" placeholder="Masukan HP/Telp anda" required>
                </div>
            </div>
            <div class="form-group row mb-2 g-3 align-items-center">
                <div class="col-md-3">
                    <label for="nama" class="col-form-label">Kode Pos</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos[]" value="{{ old('kode_pos') }}" placeholder="Masukan kode pos anda" required>
                </div>
            </div>
            <div class="form-group row mb-4 g-3 align-items-center">
                <div class="col-md-3">
                    <label for="nama" class="col-form-label"></label>
                </div>
                <div class="col-md-9">
                    <a href="#" class="addcuctomer btn btn-primary" style="float: right;">Tambah alamat</a>    
                </div>
            </div>
            
            <div class="customer"></div>

            <div class="form-group row mt-2 g-3 align-items-center">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success form-control" value="Submit">
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('.addcuctomer').on('click', function() {
            addCustomer();
        });
        function addCustomer() {
            var customer = '<div><div class="form-group row mb-2 g-3 align-items-center"><div class="col-md-3"><label for="address" class="col-form-label">Alamat</label></div><div class="col-md-9"><input type="text" class="form-control" id="address" name="address[]" value="{{ old('address') }}" placeholder="Masukan alamat anda" required></div></div><div class="form-group row mb-2 g-3 align-items-center"><div class="col-md-3"><label for="phone" class="col-form-label">HP/Telp</label></div><div class="col-md-9"><input type="text" class="form-control" id="phone" name="phone[]" value="{{ old('phone') }}" placeholder="Masukan HP/Telp anda" required></div></div><div class="form-group row mb-2 g-3 align-items-center"><div class="col-md-3"><label for="nama" class="col-form-label">Kode Pos</label></div><div class="col-md-9"><input type="text" class="form-control" id="kode_pos" name="kode_pos[]" value="{{ old('kode_pos') }}" placeholder="Masukan kode pos anda" required></div></div><div class="form-group row mb-2 g-3 align-items-center"><div class="col-md-3"><label for="nama" class="col-form-label"></label></div><div class="col-md-9"><a href="#" class="remove btn btn-danger mb-4" style="float: right;">Hapus</a></div></div></div>';
            $('.customer').append(customer);
        };
        $('.remove').on('click', function() {
            $(this).parent().parent().parent().remove();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>