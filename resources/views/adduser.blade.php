<x-guest-layout>
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Add New User
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
            <div class="card-header">Add New User</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <div class="form-group">
                        {{-- <label for="name">Name</label> --}}
                        <input id="name" placeholder="Name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4 form-group" >
                        {{-- <label for="name">Email</label> --}}
                        <input id="email" placeholder="Email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <div class="mt-4 form-group">
                        {{-- <label for="name">Password</label> --}}
                        <input id="password" placeholder="Password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4 form-group">
                        {{-- <label for="name">Confirm Password</label> --}}
                        <input id="password_confirmation" placeholder="Confirm password" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            Already registered?
                        </a>
        
                        <button type="submit" class="btn-block btn btn-success btn-large mt-2">
                            Save User
                        </button>
                    </div>
                </form>
</main>
</x-guest-layout>