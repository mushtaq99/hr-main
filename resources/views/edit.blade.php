<x-layout>

    <h3>Fill the form field carefully</h3>

    <x-slot name="title"> Edit
    </x-slot>
    <div>
        <form action="/country/{{$info['id']}}" method="post">
            {{--html form does not support the PUT method thats why we use the bellow method--}}
            @csrf
            @method('PUT')
            <label for="name">Country Name</label>
            <input type="text" id="name" name="name" placeholder="enter name.." value="{{$info['name']}}">
            @error('name')
            <p class="text-danger text-sm" style="color: red">{{$message}}</p>
            @enderror
            <label for="code">Country Code</label>
            <input type="text" id="code" name="code" placeholder="enter code.." value="{{$info['code']}}">
            @error('code')
            <p class="text-danger text-sm" style="color: red">{{$message}}</p>
            @enderror
            <input type="submit" value="Update">
        </form>
    </div>
</x-layout>
