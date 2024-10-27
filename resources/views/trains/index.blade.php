@extends("layouts.app")

@section("page-title", "Movies")

@section("main-content")

    <div class="container">
        <h1 class="fw-bold text-center p-5">Trains</h1>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Partenza</th>
                            <th scope="col">Arrivo</th>
                            <th scope="col">Data</th>
                            <th scope="col">Orario partenza</th>
                            <th scope="col">Orario arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">N. carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $trains as $train )
                        <tr>
                            <td>
                                {{ $train->id }}
                            </td>
                            <td>
                                {{ $train->Azienda }}
                            </td>
                            <td>
                                {{ $train->Stazione_di_partenza }}
                            </td>
                            <td>
                                {{ $train->Stazione_di_arrivo }}
                            </td>
                            <td>
                                {{ $train->Data_di_partenza }}
                            </td>
                            <td>
                                {{ $train->Orario_di_partenza }}
                            </td>
                            <td>
                                {{ $train->Orario_di_arrivo }}
                            </td>
                            <td>
                                {{ $train->Codice_treno }}
                            </td>
                            <td>
                                {{ $train->Numero_carrozze }}
                            </td>
                            <td>
                                {{ $train->In_orario }}
                            </td>
                            <td>
                                {{ $train->cancellato }}
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">No trains available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection



