<x-layout>
    <h3>Create Tasks</h3>
    <form action="{{ route('test.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="difficulty_id">Select Difficulty</label><br>
            <select name="difficulty_id" id="difficulty" class="form-control">
                <option value="" disabled selected>Select one</option>
                @foreach($difficulty as $diff)
                    <option value="{{ $diff->value }}">{{ $diff->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="due_date">Due_date</label><br>
            <input type="date" name="due_date" id="due_date" class="form-control" value={{ old('due_date') }}>
        </div>
        <br>
        <input type="submit" value="Create Task" class="btn">
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