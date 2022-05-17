@extends('layouts.menu')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Group
                        </div>
                        <span aria-hidden="true"><button type="button" class="col btn btn-sm btn-success" data-toggle="modal" data-target="#tambah">Tambah</button></span>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:group-index></livewire:group-index>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <livewire:group-create></livewire:group-create>
</div>
<div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <livewire:group-update></livewire:group-update>
</div>
@endsection
