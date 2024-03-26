@props(['publishers', 'field' => '','selected' => null])

<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @foreach ($publishers as $publisher)
        <option value="{{ $publisher->id }}" {{ $selected == $publisher->id ? 'selected' : '' }}>
            {{ $publisher->name }}
        </option>
    @endforeach
</select>

@error($field)
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
