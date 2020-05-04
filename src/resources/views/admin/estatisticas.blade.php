@extends('adminlte::page')

@section('title', 'Estatísticas gerais')

@section('css')
<link rel="stylesheet" href="vendor/Ionicons/css/ionicons.min.css">
@endsection

@section('js')
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
@endsection
    


@section('content_header')
    <h1>Estatísticas gerais</h1>   
@endsection

@section('content')
  <a href="" data-toggle="modal" data-target="#exampleModalCenter">
    <div class="col-lg-2 col-xs-10">
      <div class="small-box bg-yellow">
        <center>
          <div style="width: 50%;">
              <h3 style="display: inline; color: white;">1000</h3>
              <div class="icon">
                <ion-icon name="person-add" size="large" style="display: inline;"></ion-icon>
              </div>
              <p style="color: white;">Quantidade de usuários</p>
          </div>
        </center>
      </div>
    </div>
  </a>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Estatísticas de usuários cadastrados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Total de usuários: {{$users->count()}}</p> <hr>
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
@endsection