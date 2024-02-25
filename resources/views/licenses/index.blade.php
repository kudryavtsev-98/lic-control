@extends('layouts.main')

@section('page.title', 'Лицензии')

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
		{{ __('Список лицензий') }}
	</h3>
	<x-link href="{{ route('licenses.create') }}">
		Добавить лицензию
	</x-link>
</x-page-title>

@if(empty($licList))
	Нет лицензий
@else
	<table class="table table-bordered table-hover">
		<thead class="thead-light">
		<tr>
			<th scope="col">{{ __('#') }}</th>
			<th scope="col">{{ __('Название') }}</th>
			<th scope="col">{{ __('Продукт') }}</th>
			<th scope="col">{{ __('Версия продукта') }}</th>
		</tr>
		</thead>
		<tbody>
			@foreach($licList as $lic)
			<tr>
				<th scope="row">
					<p>{{ $lic->id }}</p>
				</th>
				<td>
					<a href="{{ route('licenses.show', $lic->id) }}">{{ $lic->name }}</a>
				</td>
				<td>
					<p>{{ $lic->product }}</p>
				</td>
				<td>
					<p>{{ $lic->product_version }}</p>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endif
    
@endsection