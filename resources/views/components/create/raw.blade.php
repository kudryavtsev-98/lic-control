<?php

?>
  
<tr>
  <x-raw-title>
    {{ $slot }}
  </x-raw-title>
  <x-raw-value :link="['route'=>$item['route'], 'id'=>$item['id']]">
    {{ $item['value'] }}
  </x-raw-value>
</tr>