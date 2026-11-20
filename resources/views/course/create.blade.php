
<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

    <h1>Create Course</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses" method="POST">
        @csrf

        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <label>Duration (Weeks):</label>
        <input type="number" name="duration" value="{{ old('duration') }}" min="1" required>
        <br><br>

        <label>Fee:</label>
        <input type="number" name="fee" step="0.01" min="0" value="{{ old('fee') }}" required>
        <br><br>

        <label>Difficulty:</label>
        <select name="difficulty" required>
            <option value="">Select Difficulty</option>
            <option value="Easy">Easy</option>
            <option value="Medium">Medium</option>
            <option value="Hard">Hard</option>
        </select>
        <br><br>

        <label>Active:</label>
        <input type="checkbox" name="is_active" value="1" checked>
        <br><br>

        <button type="submit">Create Course</button>
    </form>

    <br>
    <a href="/courses">Back to Courses</a>

</body>
</html>
