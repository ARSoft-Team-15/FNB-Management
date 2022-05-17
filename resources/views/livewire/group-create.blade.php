
<div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tambahLabel">Tambah User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <form wire:submit.prevent="store()">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" required>
                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="group_accesss_id">Role</label>
                        <select wire:model="group_accesss_id" id="group_accesss_id" class="form-control @error('group_accesss_id') is-invalid @enderror" id="group_accesss_id">
                            @foreach ($group_access as $access)
                            <option value="{{ $access->id }}">{{ $access->role }}</option>
                            @endforeach
                        </select>
                        @error('group_accesss_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
