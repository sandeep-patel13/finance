<x-masterLayout>

    <x-slot:title>
        {{ __("lang.dashboard") }}
    </x-slot:title>

    <x-slot:nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">{{ $user->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">{{ __('lang.dashboard') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">{{ __('lang.profile') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('lang.logout') }}
                            </a>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">{{ __('lang.search') }}</button>
                    </form>
                </div>
            </div>
        </nav>
    </x-slot:nav>

    <x-slot:sidebar>
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">{{ __('lang.menu') }}</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                id="menu">
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">{{ __('lang.home') }}</span>
                    </a>
                </li>
            </ul>
            <hr>
        </div>
    </x-slot>

    <x-slot:mainContent>
        @foreach ($user->bank_accounts as $bank_account)
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">{{ $bank_account->bank->name }}</h5>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-2"><strong>Account Number:</strong>
                            {{ $bank_account->accountNumber }}</p>
                        <p class="mb-2"><strong>Total Amount:</strong>
                            {{ $bank_account->totalAmount }}</p>
                        <p class="mb-0"><strong>Ifsc Code:</strong>
                            {{ $bank_account->bank_detail->ifscCode }}</p>
                    </blockquote>
                </div>
            </div>
        @endforeach
    </x-slot:mainContent>

</x-masterLayout>
