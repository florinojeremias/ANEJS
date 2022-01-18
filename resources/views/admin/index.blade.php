@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Candidatos a Membros</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Membros com Cargo</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Membros sem Cargo</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Novos Pedidos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--New row-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Pedidos Atentidos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase ">Novas doações</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Doações  Realizadas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase "> Actividades realizadas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Tabela de  membros-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"> Lista de Testemunhas</h6>    
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th> id</th>
                            <th> Nome do beneficiario</th>
                            <th>Descrição</th>
                            <th>Morada</th>
                            <th>Data da doação</th>
                            <th>Accoes</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th> id</th>
                            <th> Nome do beneficiario</th>
                            <th>Descrição</th>
                            <th>Morada</th>
                            <th>Data da doação</th>
                            <th>Accoes</th>
                        </tr>
                    </tfoot>


                </table>

            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-success btn-sn float-right">Adicionar</button>
        </div>


    </div>
@endsection
