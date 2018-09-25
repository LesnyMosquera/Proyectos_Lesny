<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<title>@yield('title','Default')Panel de admon</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="{{asset('librerias/bootstrap/css/bootstrap.min.css')}}"> 

	<link rel="stylesheet" href="{{asset('librerias/jquery/jquery-3.2.1.js')}}">
	<link rel="stylesheet" href="{{asset('librerias/sweetalert/sweetalert2.min.css')}}">

	<script src="{{asset('librerias/sweetalert/sweetalert2.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('librerias/css/layout.css') }} " />
	<link rel="stylesheet" href="{{asset('librerias/css/menu.css') }} " />
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">npm run dev

  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulario modal</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





	<link rel="stylesheet" href="{{asset('librerias/bootstrap/js/bootstrap.js')}}">

</body>
</html>