<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud Laravel 5.2 With Materializecss</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css') }}">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@section('css')

	@show
</head>
<body>
@section('header')
	@include('layouts.header')
@show

<div class="container">
	@yield('content')
</div>	
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
	(function($){
		$(function(){
			$('.button-collapse').sideNav();
		@if(Session::has('flash_message'))
			//Materialize.toast('{{ Session::get('flash_message') }}', 4000);
			swal(
			  'Good job!',
			  '{{ Session::get('flash_message') }}',
			  'success'
			)
		@endif
		}); //end of document ready
	})(jQuery); // end of jQuery name space
</script>
<script type="text/javascript">
$(document.body).on('click', '.js-submit-confirm', function(event) {
  event.preventDefault();
  var $form = $(this).closest('form');
  swal({
      title: "Are you sure?",
      text: "You will not be able to recover this resource!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function() {
      $form.submit();
    });
});
</script>
</body>
</html>