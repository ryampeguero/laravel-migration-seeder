@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di Partenza</th>
                            <th scope="col">Stazione di Arrivo</th>
                            <th scope="col">Orario di Partenza</th>
                            <th scope="col">Orario di Arrivo</th>
                        </tr>
                    </thead>
                    @foreach ($trainList as $train)
                        <tbody>
                            <td scope="col">{{ $train->id }}</td>
                            <td scope="col">{{ $train->codice_treno }}</td>
                            <td scope="col">{{ $train->azienda }}</td>
                            <td scope="col">{{ $train->stazione_partenza }}</td>
                            <td scope="col">{{ $train->stazione_arrivo }}</td>
                            <td scope="col">{{ $train->orario_partenza }}</td>
                            <td scope="col">{{ $train->orario_arrivo }}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
