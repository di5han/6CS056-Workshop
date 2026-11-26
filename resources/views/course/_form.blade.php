
@props(['course' => null])

<form
    action="{{ $course ? route('courses.update', $course) : route('courses.store') }}"
    method="POST"
>
    @csrf

    @if($course)
        @method('PUT')
    @endif

    <x-form-field
        label="Course Name"
        name="name"
        :value="$course?->name"
    />

    <x-form-field
        label="Description"
        name="description"
        type="textarea"
        :value="$course?->description"
    />

    <x-form-field
        label="Duration (Weeks)"
        name="duration"
        type="number"
        :value="$course?->duration"
    />

    <x-form-field
        label="Fee"
        name="fee"
        type="number"
        :value="$course?->fee"
    />

    <div style="margin-bottom: 18px;">
        <label for="difficulty">Difficulty</label>
        <br>

        <select name="difficulty" id="difficulty">
            <option value="">Select Difficulty</option>

            @foreach(['Easy', 'Medium', 'Hard'] as $level)
                <option
                    value="{{ $level }}"
                    @selected(old('difficulty', $course?->difficulty) === $level)
                >
                    {{ $level }}
                </option>
            @endforeach
        </select>

        @error('difficulty')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 18px;">
        <label for="is_active">Active</label>

        <input
            type="checkbox"
            name="is_active"
            id="is_active"
            value="1"
            @checked((bool) old('is_active', $course?->is_active ?? true))
        >

        @error('is_active')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">
        {{ $course ? 'Update Course' : 'Create Course' }}
    </button>

    <a href="{{ route('courses.index') }}">Cancel</a>
</form>
