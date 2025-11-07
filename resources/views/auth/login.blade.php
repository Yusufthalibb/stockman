@extends('layouts.auth')

@section('login')
<body>

<div class="login-box">
    <style>
        /* DARK MODE BACKGROUND */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-box {
            width: 500px;
            margin: 7% auto;
            margin-top: 150px;
            background: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
            padding: 30px 40px;
            color: #e0e0e0;
        }

        .login-logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .login-logo img {
            max-width: 120px;
            height: auto;
            object-fit: contain;
            filter: brightness(0) invert(1); /* invert logo warna terang, kalau logo gelap */
        }

        .login-logo h3 {
            font-weight: 600;
            color: #e0e0e0;
            margin: 0;
        }

        .form-login .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-login input.form-control {
            width: 100%;
            padding: 10px 40px 10px 12px;
            font-size: 14px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #e0e0e0;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        /* Animasi fokus input */
        .form-login input.form-control:focus {
            border-color: #f97316;
            box-shadow: 0 0 8px #f97316;
            background-color: #333;
            color: #fff;
        }

        .form-login .glyphicon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            transition: color 0.3s;
        }

        /* Warna ikon berubah saat input fokus */
        .form-login input.form-control:focus + .glyphicon {
            color: #f97316;
        }

        .has-error input.form-control {
            border-color: #e74c3c;
            box-shadow: 0 0 6px #e74c3c;
        }

        .help-block {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
        }

        .checkbox.icheck {
            user-select: none;
            font-size: 14px;
            color: #ccc;
        }

        .checkbox.icheck input[type="checkbox"] {
            margin-right: 6px;
            position: relative;
            top: 1px;
            cursor: pointer;
        }

        /* Tombol dengan animasi hover */
        .btn-primary {
            background-color: #f97316;
            border-color: #f97316;
            font-weight: 600;
            border-radius: 5px;
            padding: 10px 0;
            font-size: 15px;
            transition: background-color 0.3s, box-shadow 0.3s;
            cursor: pointer;
            color: #121212;
        }

        .btn-primary:hover {
            background-color: #f97316;
            border-color: #f97316;
            box-shadow: 0 0 12px #f97316;
            color: #fff;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .col-xs-8 {
            flex: 1 1 auto;
        }

        .col-xs-4 {
            flex: 0 0 100px;
        }
    </style>

    <div class="login-logo">
        <a href="{{ url('/') }}">
            @if(isset($setting) && $setting->path_logo)
                <img src="{{ url($setting->path_logo) }}" alt="Logo POS">
            @else
                <h3><b>Login</b> POS</h3>
            @endif
        </a>
    </div>

    <form action="{{ route('login') }}" method="post" class="form-login" novalidate>
        @csrf
        <div class="form-group has-feedback @error('email') has-error @enderror">
            <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" autofocus>
            <span class="glyphicon glyphicon-envelope"></span>
            @error('email')
                <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group has-feedback @error('password') has-error @enderror">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock"></span>
            @error('password')
                <span class="help-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <!-- <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div> -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
    </form>
</div>
    
</body>
@endsection
