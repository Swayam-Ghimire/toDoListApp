<x-layout>
    <h3>Edit Tasks</h3>
    <form action="{{ route('test.update', $tasks->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" class="form-control" value="{{ $tasks->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="description" class="form-control">{{ $tasks->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="difficulty_id">Select Difficulty</label><br>
            <select name="difficulty_id" id="difficulty" class="form-control">
                <option value="" disabled selected>Select one</option>
                @foreach($difficulty as $diff)
                    <option value="{{ $diff->value }}" {{ $tasks->difficulty_id == $diff->value ? 'selected' : '' }}>{{ $diff->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="due_date">Due_date</label><br>
            <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $tasks->due_date }}">
        </div>
        <br>
        <input type="submit" value="Update Task" class="btn">
    </form>
    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
                @if (!($error=='The difficulty id field is required.'))
                    <li class="my-2 text-blue-500">
                        {{ $error }}
                    </li>
                @else 
                    <li class="my-2 text-blue-500">
                        Difficulty is required
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
</x-layout>