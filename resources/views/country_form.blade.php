<x-layout>



    @push('style')
        <h3> Push somthing  to head only on Country form</h3>
    @endpush
    <h3>Fill the form field carefully</h3>
        <x-slot name="title"> Country Form
        </x-slot>
    <div>
        <form action="/country" method="post">
            @csrf
            <label for="name">Country Name</label>
            <input type="text" id="name" name="name" placeholder="enter name.." value="{{old('name')}}">
            @error('name')
            <p class="text-danger text-sm" style="color: red">{{$message}}</p>
            @enderror

            <label for="code">Country Code</label>
            <input type="text" id="code" name="code" placeholder="enter code.." value="{{old('code')}}">
            @error('code')
            <p class="text-danger text-sm" style="color: red">{{$message}}</p>
            @enderror
            <x-button label="Submit"/>
         {{--   <input type="submit" value="Submit">--}}
        </form>
    </div>
</x-layout>
