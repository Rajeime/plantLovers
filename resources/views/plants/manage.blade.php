
<x-layout>
    <a href="{{ route('plant.index') }}">Back</a>
    <table>
        <tr>
            <td>Title</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
    
        @foreach ($plants as $plant)
        <tr>
            <td>{{ $plant['genus'] }}</td>
            <td>
                <button><a href="{{ route('plant.edit', $plant['id']) }}">Edit</a></button>
            </td>

            <td>
                <form action="{{ route('plant.destroy', $plant['id']) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="subimt">Delete</button>
                </form>
            </td>
         </tr>
        @endforeach
        
    </table>
</x-layout>

