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
                                        <th>Group</th>
                                        <th>Access</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $u)
                                    <tr>
                                        <th>{{$u['id']}}</th>
                                        <th>{{$u['name']}}</th>
                                        <th>{{$u['email']}}</th>
                                        <th>{{$u['group_id']}}</th>
                                        <th>{{$u['access_id']}}</th>
                                    </tr>
                                    @endforeach
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

