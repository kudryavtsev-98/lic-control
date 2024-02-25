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
        </div>
    </div>
</div>