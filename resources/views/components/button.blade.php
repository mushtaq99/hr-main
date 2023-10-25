
{{--@props change change value label  where Submit is default value if label is not set --}}
@props([
'label'=> 'Submit'
])

{{--bellow {{ $attributes }}  is use to apply html attributes here it will apply automatically--}}
<button {{ $attributes }} type="submit" class="btn btn-primary"> {{ $label }}</button>
