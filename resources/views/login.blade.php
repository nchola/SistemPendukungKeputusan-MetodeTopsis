<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>SPMFI - Login Page</title>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="{{ asset('template') }}/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
        <link href="{{ asset('template') }}/plugins/simplebar/simplebar.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('template') }}/plugins/nprogress/nprogress.css" rel="stylesheet" />

        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="{{ asset('template') }}/css/style.css" />

        <!-- FAVICON -->
        <link href="{{ asset('template') }}/images/favicon.png" rel="shortcut icon" />
    </head>
</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="card card-default mb-0" style="min-width:368px">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="/index.html">
                                    <img src="{{ asset('template') }}/images/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        
                        <div class="card-body px-5 pb-5 pt-0">
                            <h4 class="text-dark mb-6 text-center">Sign in</h4>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Username" value="{{ old('username') }}">
                                        <small class="text-danger">{{ $errors->first('username') }} </small>
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" value="{{ old('password') }}">
                                        <small class="text-danger">{{ $errors->first('password') }} </small>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-4">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->first('message'))
        <script>
            alert('{{ $errors->first('message') }}')
        </script>
    @endif
</body>

</html>
