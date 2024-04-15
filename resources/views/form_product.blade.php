@extends('templates')

@section('title', 'Form Produk')

@section('content')
    <h1 class="text-center">Form Produk</h1>
    <form action="/product" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-3">
                
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"></input>

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3">
                <label for="price">Harga</label>
                <input id="price" type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"></input>

                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-3">
                <button class="btn btn-success text-center">Simpan</button>
            </div>
        </div>

    
    </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection