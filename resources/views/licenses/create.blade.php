@extends('layouts.main')

@section('page.title', 'Создание лицензии')

@section('main.content')

	<x-page-title>
		<h3>
			{{ __('Создание лицензии') }}
		</h3>
		<x-link href="{{ route('licenses') }}">
			{{ __('К списку лицензий') }}
		</x-link>
	</x-page-title>

	<div>
		<x-form action="{{ route('licenses.store') }}" method="POST" >
			<x-card>
				<x-card-header>
					<x-card-title>
						{{ __('Заполните обязательные поля') }}
					</x-card-title>
				</x-card-header>
				<x-card-body>

					<div class="raw d-flex">
						<x-col>
							<x-table>
								<x-thead>
									{{  __('Основная информация') }}
								</x-thead>
								<tbody>
									
									<tr>
										<x-raw-title>
											<x-label required for="name">
												{{ __('Название') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input type="text" name="name" id="name" placeholder="Обязательно" autofocus autocomplete="off"/>
										</x-create.value>
									</tr>

									{{-- Выбор продукта --}}
									<tr>
										<x-raw-title>
											<x-label for="product_id">
												{{ __('Продукт') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input name='product_id' id='product_id' hidden/>
											<x-input id='product_name' placeholder="Название продукта" disabled></x-input>
											<!-- Button trigger modal -->
											<x-choise type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
												{{ __('Выбрать') }}
											</x-choise>

											<!-- Modal -->
											<x-modal.window id="productModal">
												<x-modal.header search_id="search_product">
													{{ __('Укажите дилера') }}
												</x-modal.header>

												<x-modal.body search_list_id="search_list_product"></x-modal.body>
											</x-modal.window>

										</x-create.value>
									</tr>

									{{-- Выбор дилера --}}
									<tr>
										<x-raw-title>
											<x-label for="dealer_id">
												{{ __('Дилер') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input name='dealer_id' id='dealer_id' hidden/>
											<x-input id='dealer_name' placeholder="Название дилера" disabled></x-input>

											<!-- Button trigger modal -->
											<x-choise type="button" class="btn-sm" data-toggle="modal" data-target="#dealerModal">
												{{ __('Выбрать') }}
											</x-choise>

											<!-- Modal -->
											<x-modal.window id="dealerModal">
												<x-modal.header search_id="search_dealer">
													{{ __('Укажите дилера') }}
												</x-modal.header>

												<x-modal.body search_list_id="search_list_dealer"></x-modal.body>
											</x-modal.window>

										</x-create.value>
									</tr>

									{{-- Выбор типа --}}
									<tr>
										<x-raw-title>
											<x-label required for="license_type_id">
												{{ __('Тип') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<select class="form-control" id="license_type_id">
												@foreach ($licenseTypes as $item)
													<option value={{ $item['id'] }}>{{ __($item['name']) }}</option>
												@endforeach
											</select>
										</x-create.value>
									</tr>

									{{-- Выбор метрики --}}
									<tr>
										<x-raw-title>
											<x-label required for="license_metric_id">
												{{ __('Метрика') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<select class="form-control" id="license_metric_id">
												@foreach ($licenseMetrics as $item)
													<option value={{ $item['id'] }}>{{ __($item['name']) }}</option>
												@endforeach
											</select>
										</x-create.value>
									</tr>
									
			
								</tbody>
							</x-table>
						</x-col>
						<x-col>
							<x-table>
								<x-thead>
									{{  __('Бухгалтерская информация') }}
								</x-thead>
								<tbody>
									
									{{-- <tr>
										<x-raw-title>
											<x-label required>
												{{ __('Название') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input type="text" name="name" placeholder="Обязательно" autofocus/>
										</x-create.value>
									</tr> --}}

									{{-- Выбор продукта --}}
									{{-- <tr>
										<x-raw-title>
											<x-label>
												{{ __('Продукт') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input name='product_id' id='product_id' hidden/>
											<x-input id='product_name' placeholder="Название продукта" disabled></x-input>
											<!-- Button trigger modal -->
											<x-choise type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
												{{ __('Выбрать') }}
											</x-choise>

											<!-- Modal -->
											<x-modal.window id="productModal">
												<x-modal.header search_id="search_product">
													{{ __('Укажите дилера') }}
												</x-modal.header>

												<x-modal.body search_list_id="search_list_product"></x-modal.body>
											</x-modal.window>

										</x-create.value>
									</tr> --}}

									{{-- Выбор вендора --}}
									{{-- <tr>
										<x-raw-title>
											<x-label>
												{{ __('Вендор') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input name='vendor_id' id='vendor_id' hidden/>
											<x-input id='vendor_name' placeholder="Название вендора" disabled></x-input>

											<!-- Button trigger modal -->
											<x-choise type="button" class="btn-sm" data-toggle="modal" data-target="#vendorModal">
												{{ __('Выбрать') }}
											</x-choise>

											<!-- Modal -->
											<x-modal.window id="vendorModal">
												<x-modal.header search_id="search_vendor">
													{{ __('Укажите дилера') }}
												</x-modal.header>

												<x-modal.body search_list_id="search_list_vendor"></x-modal.body>
											</x-modal.window>

										</x-create.value>
									</tr> --}}
									

									{{-- Выбор дилера --}}
									{{-- <tr>
										<x-raw-title>
											<x-label>
												{{ __('Дилер') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input name='dealer_id' id='dealer_id' hidden/>
											<x-input id='dealer_name' placeholder="Название дилера" disabled></x-input>

											<!-- Button trigger modal -->
											<x-choise type="button" class="btn-sm" data-toggle="modal" data-target="#dealerModal">
												{{ __('Выбрать') }}
											</x-choise>

											<!-- Modal -->
											<x-modal.window id="dealerModal">
												<x-modal.header search_id="search_dealer">
													{{ __('Укажите дилера') }}
												</x-modal.header>

												<x-modal.body search_list_id="search_list_dealer"></x-modal.body>
											</x-modal.window>

										</x-create.value>
									</tr> --}}
									
			
								</tbody>
							</x-table>
						</x-col>
					</raw>
				</x-card-body>
			</x-card>
		</x-form>
	</div>

	@push('scripts')
		<script>
			$('#productModal').modal({
				show: false,
			});
			$('#dealerModal').modal({
				show: false,
			});
		</script>
	@endpush
@endsection