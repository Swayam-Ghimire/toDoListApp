@props(['highlight' => false, 'path' => '', 'title' => ''])

<!--
div.highlihted
->div.dashed
->slot
->div.flex-justifybetween
->a.leftside/
->div.flex
->a.rightside/
->form/btn/
->/div.flex
->/div.flex-justifybetween
->/div.dashed
->/div.highlihted
-->
<div @class(['highlighted' => $highlight, 'card']) id="card-{{ $path }}">
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded shadow-md">
        {{ $slot }}

        <!-- Flex container for buttons -->
        <div class="flex justify-between items-center mt-4">
            <!-- View Details Button -->
            <a href="{{ $attributes->get('href') }}" class="btn">View Details</a>

            <!-- Edit and Delete Buttons -->
            <div class="flex gap-2">

                <!-- Edit Button -->
                <a href="{{ route('test.edit', ['id'=>$path, 'title'=>$title]) }}" class="btn">Edit</a>

                <!-- Delete Button -->
                <form action="{{ route('test.destroy', $path) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn'>Delete Task</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Checkbox for marking task as completed -->
    <div class="flex gap-2">
        <form action="{{ route('test.complete', $path) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="checkbox" name="completed" onchange="this.form.submit()">
        </form>
        <p>Mark as completed</p>
    </div>
</div>