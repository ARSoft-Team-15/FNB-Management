@extends('layouts.menu')
@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                        <div class="col-md-6">
                            <span id="name">: {{$name}}</span>
                        </div>
                        <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail</label>
                        <div class="col-md-6">
                            <span id="email">: {{$email}}</span>
                        </div>
                        
                    </div>
                    @if (session('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                            aria-label="Warning:">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div class="ml-2">
                            {{ session('error') }}
                        </div>
                    </div>
                    @endif
                    <form action="/ubahpassword" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="oldpassword" class="col-md-4 col-form-label text-md-end">Password Lama</label>
                            <div class="col-md-6">
                                <input id="oldpassword" type="password" name="oldpassword" placeholder="Password Lama"
                                    required>
                            </div>
                            <label for="newpassword" class="col-md-4 col-form-label text-md-end">Password Baru</label>
                            <div class="col-md-6">
                                <input id="newpassword" type="text" name="newpassword" placeholder="Password Baru"
                                    required>
                            </div>
                            <label for="newpassword" class="col-md-4 col-form-label text-md-end">Konfirmasi Password
                                Baru</label>
                            <div class="col-md-6">
                                <input id="confirmnewpassword" type="text" name="confirmnewpassword"
                                    placeholder="Konfirmasi Password Baru" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
