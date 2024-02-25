<td class="p-1">  
  @if(empty($link['id']) || empty($link['route']))
    <p class="m-0">
      {{ $slot }}
    </p>
  @else
    <a href="{{route($link['route'],$link['id'])}}" class="m-0">
      {{ $slot }}
    </a>
  @endif
</td>    
