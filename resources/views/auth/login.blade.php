<x-layout>
    <div class="custom-form-container" id="register">
        <h1 class="custom-form-title">Login</h1>
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            <div class="custom-input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="(e.g abc@gmail.com)" required>
                <label for="email">E-mail</label>
            </div>
            <div class="custom-input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Login" class="custom-btn" name="SignIn">
        </form>
        <div class="custom-or">OR</div>
        <div class="custom-icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
        </div>
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="custom-links">
            <p>Already have an account?</p>
            <a href="{{ route('auth.register') }}">Register</a>
        </div>
    </div>
</x-layout>