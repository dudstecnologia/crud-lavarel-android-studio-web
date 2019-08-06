@extends('adminlte::page')

@section('title', 'Novo Cliente')

@section('content_header')
    <h1>Novo Cliente</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">

            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="POST">
                  <div class="box-body">

                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome</label>
                      <input type="text" class="form-control" name="nome_form" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Telefone</label>
                      <input type="text" class="form-control" name="telefone_form" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Idade</label>
                        <input type="number" class="form-control" name="idade_form">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" name="email_form" required>
                      </div>
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salvar Novo</button>
                  </div>
                </form>
              </div>

        </div>
    </div>
@stop