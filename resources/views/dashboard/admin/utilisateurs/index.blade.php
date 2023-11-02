@extends('dashboard.admin.layouts.app')
@section('title',"Dashboard")
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

        <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-harder">

                        </div>
                    <div class="card-body">


            <div class="container">
                <div class="row">
                    <div class="col-lg-9"> <p class="card-title mb-0"> <label for="">Liste des utilisateurs</label> </p><br><br></div>
                    <div class="col-lg-3">
                        <a href="{{ route('employes.create')}}" type="button" class="btn btn-primary mb-5" >
                            Ajouter un utilisateur
                        </a>
</a>
                    </div>

                </div>
                <div class="row">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                        <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <table id="client_datatable" class="display expandable-table dataTable no-footer" style="width: 100%;" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" >#</th>
                                    <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending">Nom & Prénoms</th>
                                    <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1">Email</th>
                                    <!-- <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1">Fonction</th> -->
                                    <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;">Pays</th>
                                    <!-- <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;">Pays</th> -->
                                    <!-- <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 79px;">Code Postal</th> -->
                                    <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;">Rôle</th>
                                    <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 79px;">Modifier</th>
                                    <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 79px;">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $num=1 @endphp
                                    @foreach ($employes as $employe)
                                        <tr>
                                            <td>{{ $num++ }} </td>
                                            <td>{{$employe->nom}} {{$employe->prenoms}}</td>
                                            <td>{{$employe->email}}</td>
                                            <td>{{$employe->pays->nom}}</td>
                                            <td></td>

                                            <td><a class="btn btn-primary" href="{{ route('employes.edit',$employe->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a></td>

                                            <td>
                                            <form

                                                                method="POST"
                                                                action="{{ route('employes.destroy', $employe->id) }}"
                                                                onsubmit="return confirm('Etes vous sur de vouloir supprimer ?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn " type="submit"><i class="fa-solid fa-trash" style="color: red;"></i></button>
                                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <!-- Button trigger modal -->

                        </div>
                    </div>
                    </div>
                </div>



                                 </div>
                </div>
            </div>



        </div>
    </div>
@endsection