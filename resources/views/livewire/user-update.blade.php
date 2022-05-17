
<div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <form wire:submit.prevent="update()">
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
                        <label for="email">Email address</label>
                        <input wire:model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input wire:model="password" type="password" class="form-control" id="password" placeholder="tidak berubah">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="tidak berubah">
                    </div>
                    <div class="form-group">
                        <label for="group_id">Group</label>
                        <select wire:model="group_id" id="group_id" class="form-control @error('group_id') is-invalid @enderror" id="group_id">
                            @foreach ($group as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                        @error('group_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="access_id">Role</label>
                        <select wire:model="access_id" id="access_id" class="form-control @error('access_id') is-invalid @enderror" id="access_id">
                            @foreach ($access as $access)
                            <option value="{{ $access->id }}">{{ $access->role }}</option>
                            @endforeach
                        </select>
                        @error('access_id')
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
