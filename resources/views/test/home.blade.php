<x-layout>
    @if($details->isEmpty())
        <div class="bg-white-100 px-4 py-2 rounded text-sm text-red-700">
            <p class="my-0">No tasks found.</p><br>
            <a href="{{ route('test.create') }}" class="btn my-0">Create Task</a>
        </div>
    @endif
    <ul>
        @foreach($details as $detail)
            <li>
                <x-card href="{{ route('test.show', $detail->id) }}" :path="$detail->id" :title="$detail->title" :highlight="$detail->due_date < now() ">
                    <h3>{{ $detail->title }}</h3>
                    <p>Difficulty: {{ $detail->difficulty->name }}</p>
                </x-card>
            </li>
            <br>
        @endforeach
    </ul>
    <br>
    {{ $details->links() }}
    <script>
        window.details = @json($details);
    </script>
</x-layout>