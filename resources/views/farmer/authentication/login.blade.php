@extends('farmer.authentication.layout')

@section('farmer_authentication')
    <title>Login</title>
    <main>
        <div class="container">
            <div class="top">Login</div>
            <div class="main">
                <form action="" method="post">
                    @csrf
                    
                    {{-- Takes User's Email --}}
                    <div class="field">
                        <input type="email" name="email" id="email" placeholder="Email" required autofocus>
                        <i class="fas fa-envelope"></i>
                    </div>

                    {{-- Takes Password --}}
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="fas fa-eye-slash"></i>
                    </div>                
                    
                    {{-- Registration Button --}}
                    <button id="btn" type="submit">Login</button>
                </form>
            </div>
            <div class="bottom">
                <p>don't have an account?<a href="{{ route('register') }}">     Register <i class="fa fa-arrow-right"></i></a></p>
            </div>
        </div>
    </main>
@endsection