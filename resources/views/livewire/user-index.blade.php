<div>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Group</th>
        <th scope="col">Role</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->group->name }}</td>
            <td>{{ $item->access->role }}</td>
            <td>
                <button wire:click="getUser({{ $item->id }})" data-toggle="modal" data-target="#edit" class="btn btn-sm btn-info">Edit</button>
                <button wire:click="destroy({{ $item->id }})" class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
