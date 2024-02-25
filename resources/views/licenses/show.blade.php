@extends('layouts.main')

@section('page.title', 'Лицензии')

@section('main.content')
	<x-page-title>
		<h3>
			{{ __('Информация о лицензии') }}
		</h3>
		<x-link href="{{ route('licenses.edit', $info->id) }}">
			{{ __('Редактировать') }}
		</x-link>
	</x-page-title>

	@if(empty($info))
		{{ __('Нет информации о лицензии') }}
	@else
		<div class="raw d-flex">
			<x-col>
				<x-table>
					<x-thead>
						{{  __('Основная информация') }}
					</x-thead>
					<tbody>

						<x-raw :item="[
							'value'=>$info->dealer, 
						]">
							{{ __('Название') }}
						</x-raw>

						<x-raw :item="[
							'id'=>$info->product_id,
							'value'=>$info->product, 
							'route'=>'products.show', 
						]">
							{{ __('Продукт') }}
						</x-raw>

						<x-raw :item="[
							'id'=>$info->version_id,
							'value'=>$info->version, 
							'route'=>'versions.show', 
						]">
							{{ __('Версия продукта') }}
						</x-raw>
						
						<x-raw :item="[
							'value'=>$info->type, 
						]">
							{{ __('Тип') }}
						</x-raw>

						<x-raw :item="[
							'value'=>$info->metric, 
						]">
							{{ __('Метрика') }}
						</x-raw>

						<x-raw :item="[
							'value'=>$info->expiration_date, 
						]">
							{{ __('Действует до') }}
						</x-raw>

					</tbody>
				</x-table>
			</x-col>
			<x-col>
				<x-table>
					<x-thead>
						{{ __('Бухгалтерская информация') }}
					</x-thead>
					<tbody>
						<x-raw :item="[
							'id'=>$info->purchase_id,
							'value'=>$info->purchase, 
							'route'=>'purchases.show', 
						]">
							{{ __('Закупка') }}
						</x-raw>

						<x-raw :item="[
							'id'=>$info->dealer_id,
							'value'=>$info->dealer, 
							'route'=>'dealers.show', 
						]">
							{{ __('Контрагент') }}
						</x-raw>
					</tbody>
				</x-table>
			</x-col>
		</div>
		<div class="raw d-flex">
			<x-col>
				<x-table>
					<x-thead>
						{{  __('Расположение') }}
					</x-thead>
					<tbody>
						<x-raw :item="[
							'id'=>$info->key_id,
							'value'=>$info->key, 
							'route'=>'keys.show', 
						]">
							{{ __('Ключ') }}
						</x-raw>

						<x-raw :item="[
							'value'=>$info->key_type, 
						]">
							{{ __('Тип ключа') }}
						</x-raw>

						<x-raw :item="[
							'id'=>$info->host_id,
							'value'=>$info->host, 
							'route'=>'hosts.show', 
						]">
							{{ __('Хост') }}
						</x-raw>

					</tbody>
				</x-table>
			</x-col>

			<x-col>
				<x-table>
					<x-thead>
							{{  __('Дополнительно') }}
					</x-thead>
					<tbody>
						<x-raw :item="[
							'value'=>$info->note, 
						]">
							{{ __('Примечание') }}
						</x-raw>
					</tbody>
				</x-table>
			</x-col>
		</div>

		
	@endif
    
@endsection