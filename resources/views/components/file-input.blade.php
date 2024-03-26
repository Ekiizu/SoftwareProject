<div>
    @props(['disabled' => false, 'field' => '', 'value' => ''])

    <input
    {{$disabled ? 'disabled' : ''}}
    {!! $attributes->merge(['class'=> 'rounded-md'])!!}
    value ="{{ $value }}"

    >

    @error ($field)
    <div class="text-red-600 text-sm"> {{$message}}</div>

    @enderror

</div>
