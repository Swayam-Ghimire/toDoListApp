<x-layout>
    <div class="custom-form-container" id="register">
        <h1 class="custom-form-title">Register</h1>
        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf
            <div class="custom-input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="first" id="fname" placeholder="(e.g Swayam)" required>
                <label for="first">First Name</label>
            </div>
            <div class="custom-input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="last" id="lname" placeholder="(e.g Ghimire)" required>
                <label for="last">Last Name</label>
            </div>
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
            <div class="custom-input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" id="password" placeholder="Confirm Password" required>
                <label for="password_confirmation">Confirm Password</label>
            </div>
            <input type="submit" value="Register" class="custom-btn" name="SignUp">
        </form>
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="custom-or">OR</div>
        <div class="custom-icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="custom-links">
            <p>Already have an account?</p>
            <a href="{{ route('auth.login') }}">Login</a>
        </div>
    </div>
</x-layout>