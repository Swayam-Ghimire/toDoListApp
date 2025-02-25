<x-layout>
        <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded shadow-md">
        <h1>{{ $detail->title }}</h1>
        <p><strong>Description:</strong> {{ $detail->description }}</p>
        @php
        $dueDate = \Carbon\Carbon::parse($detail->due_date);
        $daysRemaining = now()->diffInDays($dueDate, false);
        @endphp
        <p><strong>Due Date:</strong> {{ $detail->due_date }}</p>
        <p><strong>Days Remaining:</strong> {{ (int)$daysRemaining }}</p>
        <p><strong>Completed:</strong> {{ $detail->is_completed ? 'Yes' : 'No' }}</p>
        <p><strong>Difficulty:</strong> {{ $detail->difficulty->name }}</p>
        <p><strong>Created At:</strong> {{ $detail->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $detail->updated_at }}</p>
        </div>
        <br>
</x-layout>