
@props(['student' => null])

<form
    action="{{ $student ? route('students.update', $student) : route('students.store') }}"
    method="POST"
>
    @csrf

    @if($student)
        @method('PUT')
    @endif

    <x-form-field
        label="Name"
        name="name"
        :value="$student?->name"
    />

    <x-form-field
        label="Email"
        name="email"
        type="email"
        :value="$student?->email"
    />

    <x-form-field
        label="Phone"
        name="phone"
        :value="$student?->phone"
    />

    <x-form-field
        label="Address"
        name="address"
        type="textarea"
        :value="$student?->address"
    />

    <x-form-field
        label="Date of Birth"
        name="date_of_birth"
        type="date"
        :value="$student?->date_of_birth?->format('Y-m-d')"
    />

    <button type="submit">
        {{ $student ? 'Update Student' : 'Create Student' }}
    </button>

    <a href="{{ route('students.index') }}">Cancel</a>
</form>
