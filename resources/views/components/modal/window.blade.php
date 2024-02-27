{{-- @props([
    'tabindex' => -1,
    'aria-labelledby' => "productModalLabel"
]) --}}

<div 
{{ $attributes
->merge([
    "tabindex" => -1,
    "aria-hidden" => true,
    "aria-labelledby" => "productModalLabel"
])->class([
    "modal",
    "fade",
]) 
}}>
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            {{ $slot }}
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Закрыть') }}</button>
            </div>
        </div>
    </div>
</div>