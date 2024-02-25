@extends('layouts.main')

@section('page.title')

@section('main.content')
    Стартовая страница сайта

	<div class="col-lg-6">
		<h3 class="text-center">Laravel Autocomplete Search Box</h3><hr>
		<div class="form-group">
			<h4>Type by id, name and email!</h4>
			<input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''"/>
		</div>
		<div id="search_list"></div>
	</div>
@endsection