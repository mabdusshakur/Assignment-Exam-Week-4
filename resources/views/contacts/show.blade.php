<x-layout>
    <div class="container">
        <h1>Contact Details</h1>
        <div class="card border-success border">
            <div class="card-body">
                <h5 class="card-title">{{ $contact->name }}</h5>
                <p class="card-text">Email : {{ $contact->email }}</p>
                <p class="card-text">Phone : {{ $contact->phone }}</p>
                <p class="card-text">Address : {{ $contact->address }}</p>
                <a class="btn btn-success" href="{{ route('contacts.index') }}">Return to Contacts</a>
            </div>
        </div>
    </div>
</x-layout>
