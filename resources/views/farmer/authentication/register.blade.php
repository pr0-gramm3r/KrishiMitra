@extends('farmer.authentication.layout')

@section('farmer_authentication')   
    <title>Register</title>
    <main>
        <div class="container">
            <div class="top">
                Register
            </div>
            <div class="main">
                <form action="" method="post">
                    @csrf

                    {{-- Takes User's name --}}
                    <div class="field">
                        <input type="text" name="name" id="name" placeholder="Full Name" required autofocus>
                        <i class="fas fa-user"></i>
                    </div>
                    
                    {{-- Takes User's Email --}}
                    <div class="field">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <i class="fas fa-envelope"></i>
                    </div>

                    {{-- Takes Village name --}}
                    <div class="field">
                        <input type="text" name="village" id="village" placeholder="Village Name" required>
                        <i class="fas fa-home"></i>
                    </div>
                    
                    {{-- Takes Phone no. --}}
                    <div class="field">
                        <input type="number" name="number" id="number" placeholder="Phone No." required>
                        <i class="fas fa-phone-alt"></i>
                    </div>

                    {{-- Takes Password --}}
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="fas fa-key"></i>
                    </div>                
                    
                    {{-- Confirms Password --}}
                    <div class="field">
                        <input type="text" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                        <i class="fas fa-unlock-alt"></i>
                    </div>                
                    
                    {{-- Registration Button --}}
                    <button id="btn" type="submit">Register</button>
                </form>
            </div>
            <div class="bottom">
                <p>already have an account?<a href="{{ route('login') }}">  Login <i class="fa fa-arrow-right"></i></a></p>
            </div>
        </div>
    </main>
@endsection