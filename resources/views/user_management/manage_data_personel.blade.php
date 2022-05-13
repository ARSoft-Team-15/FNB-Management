@extends('layouts.menu')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="col-md-12 mb-3" data-aos="fade-down">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="justify-content-center">Data User</h3>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-down">
                <!-- <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
                </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>User</th>
                                        <th>User@example.com</th>
                                        <th>User</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

