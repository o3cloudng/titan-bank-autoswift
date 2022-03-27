<x-guest-layout>
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                <i class="fas fa-sign-in-alt"></i> &nbsp; User Login
                            </h1>
                            <div class="page-header-subtitle ml-5">Live Report for AutoSwift Processes</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Example DataTable for Dashboard Demo-->
            <div class="card mb-4 col-md-6 offset-md-3">
                <div class="card-header"><i class="fas fa-sign-in-alt"></i> Login</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus />
                    </div>

                    <div class="mt-4 form-group">
                        <label for="email">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif

                        <button type="submit" class="btn btn-success btn-large btn-block mb-5 mt-2">Login</button>
                    </div>
                </form>
            </div>
    </main>
</x-guest-layout>
