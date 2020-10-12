@extends('layout.page.app')

@section('dinamic')

<div class="container jumbotron">

    <section class="center">


        <table class="table table-striped table-reponsive">
            <thead>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Número</th>
                <th>Função</th>
            </thead>
            <tbody>

                @foreach ($data as $key => $value)
                <tr>
                    <td class="index">{{ $key }}</td>
                    <td>{{ $value->nome }}</td>
                    <td>{{ $value->datanasc }}</td>
                    <td>{{ $value->num }}</td>
                    <td>
                        <form action="{{ url("/$value->id") }}" method="post">
                            {{method_field('delete')}}
                            {!! csrf_field() !!}
                            <button class="btn btn-danger" onclick="return confirm('Desejas eliminar!')">Excluir</button>
                        </form>

                        <a href='{{url("{$value->id}/edit")}}' class="btn btn-primary">Editar</a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>



    </section>

    <a href="{{url('/create')}}" class="btn btn-success btn-block">Cadastrar</a>
    <!-- <button class="btn btn-secondary btn-block"> </button> -->

</div>

@endsection

@push('script')


@endpush
