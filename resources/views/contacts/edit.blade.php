<x-layout>
    <div class="container">
        <h1>Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name : </label>
                <input class="form-control" name="name" type="text" value="{{ $contact->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input class="form-control" name="email" type="email" value="{{ $contact->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone : </label>
                <input class="form-control" name="phone" type="text" value="{{ $contact->phone }}">
            </div>
            <div class="form-group">
                <label for="address">Address : </label>
                <input class="form-control" name="address" type="text" value="{{ $contact->address }}">
            </div>
            <button class="btn btn-warning mt-2" type="submit">Update</button>
        </form>
    </div>
</x-layout>
