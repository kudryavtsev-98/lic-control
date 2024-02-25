@props([
  'color' => 'primary',
  'size' => '',  
])

<a {{ $attributes->merge([
  "type" => "submit",
])->class([
  "badge",
  "badge-{$color}",
  ($size ? "a-{$size}" : ''),
  "d-flex align-items-center p-2"
]) }}>
  <span>
    {{ $slot }}
  </span>
</a>