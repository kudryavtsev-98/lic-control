@extends('layouts.main')

@section('page.title', 'Редактирование лицензии')

@section('main.content')

	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<h3 class="text-center">Laravel Autocomplete Search Box</h3><hr>
		<div class="form-group">
			<h4>Type by id, name and email!</h4>
			<input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
		</div>
		<div id="search_list"></div>
	</div>

<x-page-title>
	<h3>
		{{ __('Редактирование данных о лицензии') }}
	</h3>
	{{-- @dd($info) --}}
	<x-link href="{{ route('licenses.update', 32) }}">
		{{ __('Сохранить изменения') }}
	</x-link>
</x-page-title>

@if(empty($info))
  	{{ __('Нет информации о лицензии') }}
@else

	{{-- <x-edit.form>
		<x-edit.card>
			<x-edit.card-header>
				<x-edit.card-title>
					{{ __('Изменение') }}
				</x-edit.card-title>
			</x-edit.card-header>
			<x-edit.card-body>
				<x-edit.form action="{{ route('licenses.update'), 32 }}" method="POST">
					@method('PUT')
					<x-edit.form-item>
						<x-edit.label required>{{ __('Email') }}</x-edit.label>
						<x-edit.input type="email" name="email" autofocus/>
					</x-edit.form-item>
					
				</x-edit.form>
			</x-edit.card-body>
		</x-edit.card>
	</x-edit.form> --}}

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