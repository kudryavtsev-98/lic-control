@props([
  'color' => 'primary',
  'size' => 'sm',  
])

<button {{ $attributes->merge([
  "type" => "button",
])->class([
  "btn",
  "btn-{$color}",
  ($size ? "btn-{$size}" : ''),
  "ml-2",
]) }}>
  {{ $slot }}
</button>