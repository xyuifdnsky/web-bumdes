<x-guest-layout>
    <style>
        /* Font Jakarta Sans */
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Background Full Screen */
        .login-container {
            background-image: url('{{ asset('images/bg-login.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Efek Glassmorphism (Box Transparan) */
        .glass-box {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Garis bawah input custom */
        .input-underline {
            background: transparent !important;
            border: none !important;
            border-bottom: 2px solid #fff !important;
            border-radius: 0 !important;
            color: #fff !important;
            padding-left: 35px !important;
            font-weight: 500;
        }
        .input-underline:focus {
            box-shadow: none !important;
            border-bottom-color: #00bcd4 !important; /* Cyan saat focus */
        }
        .input-underline::placeholder { color: rgba(255, 255, 255, 0.7); }

        /* Wrapper Ikon */
        .icon-wrapper {
            position: absolute;
            left: 5px;
            top: 12px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="login-container min-h-screen flex flex-col justify-center items-center p-4">

        <div class="mb-[-50px] z-10">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center border-4 border-white shadow-xl">
                <img src="https://via.placeholder.com/100?text=logo" alt="Logo" class="w-16 h-16 rounded-full">
            </div>
        </div>

        <div class="glass-box w-full max-w-md p-10 pt-16 mt-0">

            <h1 class="text-white text-5xl font-extrabold text-center mb-10 tracking-tight">Login</h1>

            <x-auth-session-status class="mb-4 text-center text-red-200" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="relative mb-6">
                    <div class="icon-wrapper">
                        <i class="fas fa-user"></i>
                    </div>
                    <input id="email"
                           class="block mt-1 w-full input-underline"
                           type="email"
                           name="email"
                           placeholder="username/Email"
                           value="{{ old('email') }}"
                           required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-200 text-xs" />
                </div>

                <div class="relative mb-4">
                    <div class="icon-wrapper">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input id="password"
                           class="block mt-1 w-full input-underline"
                           type="password"
                           name="password"
                           placeholder="Password"
                           required />
                    <div class="absolute right-2 top-12 cursor-pointer text-white/80 hover:text-white" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-200 text-xs" />
                </div>

                <div class="text-right mb-8">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-white hover:text-cyan-200 underline" href="{{ route('password.request') }}">
                            {{ __('Lupa sandi?') }}
                        </a>
                    @endif
                </div>

                <div class="flex justify-center mb-8">
                    <button type="submit" class="w-full max-w-[200px] flex items-center justify-center gap-3 bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-200 text-lg">
                        <span>LOGIN</span>
                        <div class="w-7 h-7 bg-white/20 rounded-full flex items-center justify-center">
                             <i class="fas fa-user-check text-xs"></i>
                        </div>
                    </button>
                </div>

                <div class="flex justify-center mb-10">
                    <a href="{{ url('/auth/google') }}" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-md hover:scale-110 transition-transform duration-200" title="Login dengan Google">
                        <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" alt="Google" class="w-6 h-6">
                    </a>
                </div>

                <div class="text-center text-white text-sm">
                    <p class="font-medium">Belum punya akun?</p>
                    <a href="{{ route('register') }}" class="font-bold text-white hover:text-cyan-200 underline text-base">
                        Daftar
                    </a>
                </div>

            </form>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</x-guest-layout>
