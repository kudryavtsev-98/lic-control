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
		<x-form action="{{ route('licenses.store') }}" method="POST" class="col">
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
											<x-label required>
												{{ __('Название') }}
											</x-label>
										</x-raw-title>
										<x-create.value>
											<x-input type="text" name="name" placeholder="Обязательно" autofocus/>
										</x-create.value>
									</tr>

									{{-- Выбор продукта --}}
									<tr>
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
											<x-modal id="productModal">
												<x-modal-header>
													<div class="modal-header col p-0 mb-3">
														<h5 class="modal-title" id="productModalLabel">{{ __('Укажите продукт') }}</h5>
													
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<x-input type="text" name="search" id="search_product" placeholder="Enter search name" class="form-control" onfocus="this.value=''"/>
												</x-modal-header>
												
												<div class="modal-body">
													<div class="col p-0">
														<div id="search_list_product"></div>
													</div>
												</div>

												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Закрыть') }}</button>
												</div>
											</x-modal>

										</x-create.value>
									</tr>

									{{-- Выбор вендора --}}
									<tr>
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
											<x-modal id="vendorModal">
												<div class="modal-header flex-column">
													<div class="modal-header col p-0 mb-3">
														<h5 class="modal-title" id="vendorModalLabel">{{ __('Укажите вендора') }}</h5>
													
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<x-input type="text" name="search_vendor" id="search_vendor" placeholder="Enter search name" class="form-control" onfocus="this.value=''"/>
												</div>

												<div class="modal-body">
													<div class="col p-0">
														<div id="search_list_vendor"></div>
													</div>
												</div>

												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Закрыть') }}</button	on>
												</div>
											</x-modal>

										</x-create.value>
									</tr>
									
			
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
			$('#vendorModal').modal({
				show: false,
			});
		</script>
		{{-- <script>
			function vendorSearch() {
				$(".vendor-item").on("click", function() {
					$(' . $formField . ').val(' . $row->id . ');
					$(' . $clientField . ').val(' . $inputValue . ');
				});
			}
		</script> --}}
	@endpush
@endsection