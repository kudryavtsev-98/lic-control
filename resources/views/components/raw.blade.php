<?php
	if(empty($item['route'])) {
		$item['route'] = null;
	} 
	if(empty($item['id'])) {
		$item['id'] = null;
	} 
?>
  
<tr>
  <x-raw-title>
    {{ $slot }}
  </x-raw-title>
  <x-raw-value :link="['route'=>$item['route'], 'id'=>$item['id']]">
    {{ $item['value'] }}
  </x-raw-value>
</tr>