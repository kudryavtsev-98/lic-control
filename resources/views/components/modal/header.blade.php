@props([
    'search_id' => 'default',
])

<div 
{{ $attributes
->class([
    "modal-header",
    "flex-column",
]) }}
>
    <div class="modal-header col p-0 mb-3">
        <h5 class="modal-title">
            {{ $slot }}
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <x-input type="text" name="search" id="{{ $search_id }}" placeholder="Введите название" class="form-control"/>
</div>