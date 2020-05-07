@extends('adminlte::page')

@section('title', 'Estatísticas gerais')

@section('content_header')
    <center><h1>Estatísticas gerais</h1></center> <br>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>{{$users->count()}}</h3> 
          <p>Total de usuários</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <a href="" class="small-box-footer" data-toggle="modal" data-target="#exampleModalCenter">Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><sup style="font-size: 20px">R$</sup>{{number_format($doacoes, 2, ',', '.')}}</h3>
          <p>Capital para doação</p>
        </div>
        <div class="icon">
          <i class="fa fa-credit-card"></i>
        </div>
        <a href="" class="small-box-footer" data-toggle="modal" data-target="#exampleModalCenter">Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

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
            <table>
              <tr>
                <td>Total de usuários: </td>
                <td>&nbsp{{$users->count()}}</td>
                <td>&nbsp | &nbsp</td>
                <td><a href="{{route('admin.users')}}">Verificar</a></td>
              </tr>
              <tr>
                <td>Total de usuários bloqueados: </td>
                <td>&nbsp{{$block->count()}}</td>
                <td>&nbsp | &nbsp</td>
                <td><a href="{{route('admin.blockedUsers')}}">Verificar</a></td>
              </tr>
              
              <tr>
                <td>Total de usuários excluidos: </td>
                <td>&nbsp{{$exclu->count()}}</td>
                <td>&nbsp | &nbsp</td>
                <td><a href="{{route('admin.del')}}">Verificar</a></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
         <h3><sup style="font-size: 20px">R$</sup>{{number_format($dados, 2, ',', '.')}}</h3>
          <p>Capital LuvArts</p>
        </div>
        <div class="icon">
          <i class="fas fa-dollar-sign"></i>        
        </div>
        <a href="{{route('admin.capitalLuvArts')}}" class="small-box-footer">Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-gray">
        <div class="inner">
          <h3><sup style="font-size: 20px">R$</sup>{{number_format($users->sum('capital'), 2, ',', '.')}}</h3>
          <p>Capital de usuários</p>
        </div>
        <div class="icon">
          <i class="fas fa-money-check-alt"></i>
        </div>
        <a href="" class="small-box-footer class="small-box-footer" data-toggle="modal" data-target="#exampleModalCenter2"">Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Estatísticas do capital de usuários</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table>
              <tr>
                <td>Total bruto: </td>
                <td>&nbspR$: {{number_format($users->sum('capital'), 2, ',', '.')}}</td>
              </tr>
              <tr>
                <td>Total ativos: </td>
                <td>&nbspR$: {{number_format($ativo->sum('capital'), 2, ',', '.')}}</td>
              </tr>
              
              <tr>
                <td>Total bloqueado: </td>
                <td>&nbspR$: {{number_format($block->sum('capital'), 2, ',', '.')}}</td>
              </tr>
              <tr>
                <td>Total excluidos: </td>
                <td>&nbspR$: {{number_format($exclu->sum('capital'), 2, ',', '.')}}</td>
              </tr>
              <tr>
                <td><br><h4>Total líquido: </h4></td>
                <td><br><h4>&nbspR$: {{number_format($liqui, 2, ',', '.')}}</h4></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$venda->sum('vendas')}}</h3>
          <p>Total de vendas</p>
        </div>
        <div class="icon">
          <i class="fas fa-palette"></i>       
        </div>
        <a href="" class="small-box-footer" data-toggle="modal" data-target="#exampleModalCenter3">Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Top 5 usuários com mais vendas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead class="thead-dark">
              <tr>
                <th>Nome</th>
                <th>Usuário</th>
                <th>Vendas</th>
                <th>Nome produto</th>      
              </tr>
              @foreach ($top5 as $item)
                <tr>
                  <td>{{$item->user->nome}}</td>
                  <td>&nbsp{{$item->user->email}}</td>
                  <td>&nbsp {{$item->vendas}}</td>
                  <td>&nbsp {{$item->nome_pro}}</td>
                </tr>
              @endforeach
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>

  <br>

  <div class="box box-info">
    <div class="box-header with-border">
      <center><h3 class="box-title">Ultimas vendas</h3></center>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="">
      <div class="table-responsive-lg">
        <table class="table no-margin">
          <thead class="thead-dark">
          <tr>
            <th>ID da venda</th>
            <th>Item</th>
            <th>Status</th>
            <th>Vendedor</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><a href="pages/examples/invoice.html">OR9842</a></td>
            <td>Refrigerador consul</td>
            <td><span class="badge badge-success">Enviado</span></td>
            <td>
              <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          <tr>
            <td><a href="pages/examples/invoice.html">OR1848</a></td>
            <td>Smart TV</td>
            <td><span class="badge badge-warning">Pendente</span></td>
            <td>
              <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          <tr>
            <td><a href="pages/examples/invoice.html">OR7429</a></td>
            <td>Fogão Dako</td>
            <td><span class="badge badge-success">Enviado</span></td>
            <td>
              <div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          <tr>
            <td><a href="pages/examples/invoice.html">OR7429</a></td>
            <td>Bicicleta aro 29</td>
            <td><span class="badge badge-primary">Processando</span></td>
            <td>
              <div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          <tr>
            <td><a href="pages/examples/invoice.html">OR1848</a></td>
            <td>video cassete</td>
            <td><span class="badge badge-warning">Pendente</span></td>
            <td>
              <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          <tr>
            <td><a href="pages/examples/invoice.html">OR7429</a></td>
            <td>iPhone 6 Plus</td>
            <td><span class="badge badge-success">Enviado</span></td>
            <td>
              <div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix" style="">
      <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todas as vendas</a>
    </div>
    <!-- /.box-footer -->
  </div> 
  <br><br><br>
@endsection