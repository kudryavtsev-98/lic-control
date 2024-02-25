<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('page.title', config('app.name'))</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		.required:after { content: '*'; color: red; margin-left: 3px; }
	</style>
</head>
<body>
	<div class="d-flex flex-column justify-content-between min-vh-100">

		@include('includes.header')

		<main class="flex-grow-1 py-3">
		
		@yield('content')

		</main>
		
		@include('includes.footer')

	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

	@stack('scripts')

  	<script>
		$(document).ready(function(){
			$('input[id^="search_"]').on('keyup',function(){
				var searchId = $(this).attr('id');
				var searchItem = searchId.replace('search_', '');
				var searchListId = searchId.replace('search_', 'search_list_');
				
				var query= $.trim($(this).val().toLowerCase());
				$.ajax({
					url:'/item'+'_'+searchItem,
					type:"GET",
					data:{'search':query},
					success:function(data){ 
						$('#'+searchListId).html(data);
					}
				});
				
				//end of ajax call
				// alert(searchListId);
			});
		});
  	</script>
</body>


</html>