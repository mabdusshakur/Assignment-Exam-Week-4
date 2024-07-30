<x-layout>
    <div class="container">
        <h1>Contacts</h1>
        <div class="d-flex justify-content-between">
            <a class="btn btn-primary mb-3" href="{{ route('contacts.create') }}">Add Contact</a>
            <form class="mb-4" method="GET" action="{{ route('contacts.index') }}">
                <div class="input-group">
                    <input class="form-control" name="search" type="text" value="{{ request('search') }}" placeholder="Find by name or email">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">Find</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table-bordered table">
            <thead>
                <tr>
                    <th><a href="{{ route('contacts.index', ['sort' => 'name']) }}">Name</a></th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th><a href="{{ route('contacts.index', ['sort' => 'created_at']) }}">Created at</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('contacts.show', $contact->id) }}">View</a>
                            <a class="btn btn-warning" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                            <form class="d-inline-block" action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
