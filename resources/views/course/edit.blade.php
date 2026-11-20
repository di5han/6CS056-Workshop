
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name', $course->name) }}" required>
        <br><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description', $course->description) }}</textarea>
        <br><br>

        <label>Duration (Weeks):</label>
        <input type="number" name="duration" min="1" value="{{ old('duration', $course->duration) }}" required>
        <br><br>

        <label>Fee:</label>
        <input type="number" name="fee" step="0.01" min="0" value="{{ old('fee', $course->fee) }}" required>
        <br><br>

        <label>Difficulty:</label>
        <select name="difficulty" required>
            <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
            <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
        </select>
        <br><br>

        <label>Active:</label>
        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $course->is_active) ? 'checked' : '' }}>
        <br><br>

        <button type="submit">Update Course</button>
    </form>

    <br>
    <a href="/courses">Back to Courses</a>

</body>
</html>
