<x-layout>
    <div class="container">
        <h1>Create Contact</h1>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="name" type="text" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" type="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control" name="phone" type="text">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control" name="address" type="text">
            </div>
            <button class="btn btn-primary mt-2" type="submit">Save</button>
        </form>
    </div>
</x-layout>
