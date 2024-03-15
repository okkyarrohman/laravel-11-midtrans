<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row md-12 justify-content-center m-4">
            <div class="card" style="width: 48rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sepatu 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf
                        <div class="col-md-6 m-4">
                            <label for="name">Nama</label>
                            <input type="text" name="name">
                        </div>

                        <div class="col-md-6 m-4">
                            <label for="name">Phone</label>
                            <input type="number" name="phone">
                        </div>

                        <div class="col-md-6 m-4">
                            <label for="name">Address</label>
                            <input type="text" name="address">
                        </div>

                        <div class="col-md-6 m-4">
                            <label for="name">Quantity</label>
                            <input type="number" name="quantity">
                        </div>


                        <br>
                        <button type="submit" class="btn btn-primary">Beli</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
