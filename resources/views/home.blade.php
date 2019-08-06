@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    

    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Idade</th>
                      <th>Email</th>
                      <th>Opções</th>
                    </tr>
                    
                    @foreach ($clientes as $cli)
                        <tr>
                            <td>{{ $cli->nome }}</td>
                            <td>{{ $cli->telefone }}</td>
                            <td>{{ $cli->idade }}</td>
                            <td>{{ $cli->email }}</td>
                            <td> 
                                <a class="btn btn-info btn-xs" href="editar/{{ $cli->id}}">Editar</a>
                                <a class="btn btn-danger btn-xs" href="excluir/{{ $cli->id}}">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                    
                  </tbody></table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
@stop