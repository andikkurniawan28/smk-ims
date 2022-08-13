<option value="{{ $value }}" 
@if($requested == $value)
    {{ 'selected' }}
@endif
>{{ $label }}</option>