<div x-data="{ checkboxes: @entangle($field->key){{$field->deferEntangle}} }">
    <fieldset>
@foreach($field->options as $value => $label)
        <x-tall-checkboxes
            :field="$field"
            :value="$value"
            :label="$label"
            wire:key="{{ md5($field->key.$value.$label.$loop->index) }}" />
@endforeach
    </fieldset>
</div>
