<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Demo Packge</title>
</head>
<body>
    <h1 style="text-align: center"> Demo package laravel!</h1>
    <div class="container">
        <div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('create-user')}}" method="POST" >
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Tên</label>
                            <input type="text" class="form-control" name="name" id="inputPassword4" placeholder="Tên">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Địa chỉ</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="KK5 Ba Vì, Phường 15, Quận 10, TP HCM">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputState">Tỉnh/TP</label>
                            <select id="inputState" class="form-control" name="city_id">
                                <option value="hcm">Hồ Chí Minh</option>
                                <option value="py">Phú Yên</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" >
                            <label for="inputZip">Zip Code</label>
                            <input type="text" name="zip_code" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right;">Tạo</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
