<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    
</head>
<body>
    <div class="login" style="margin-top:30px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card-body">
                       
                        <div class="login" style="margin-top: 30px;">
                                <img src="../assets/images/logo.jpg" class="rounded mx-auto d-block" alt="" width="206" height="220">
                                <h4 class="text-center" style="font-weight:bold;">
                                    <span class="two-lines">KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA ACEH</span>
                                </h4>
                            
                                <h5 class="text-center" style="font-weight:semi-bold;">PENGAMBILAN NOMOR SURAT</h5>
                                <h3 style="margin-top: 20px;">LOGIN</h3>
                            
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mt-2 mx-auto">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                 
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="form-group mb-3">
                                                            <input id="username" type="text" class="form-control custom-bg" placeholder="Username"  name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            
                                                            @error('username')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
        
                            
                                                        <div class="form-group mb-3">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>    
                                                    
                        
    
                                            {{-- <div class="form-group mb-3">
                                                <label for="username" type="text" class="form-control custom-bg" id="" placeholder="Username"></label> 
                                            </div>
    
                                            <div class="form-group mb-2">
                                                <input type="password" class="form-control custom-bg" id="" placeholder="Password">
                                            </div> --}}
    
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


