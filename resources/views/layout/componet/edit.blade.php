@extends('layout.page.app')

@section('nmbtn', 'Actualizar')

@section('dinamic')

    <div class="container jumbotron">

        <div class="alert alert-danger arni" style="display: none;">
            <h2 class="sms"></h2>
        </div>

        <section>
            <a href="/" class="btn btn-link">Volta</a>
            <form action="" method="post" id="form">
                {!! method_field('PUT') !!}
                @include('layout.partial.form')
            </form>
        </section>
    </div>


@endsection

@push('script')
    <script>
        $(document).ready(function() {



            $(".botão").click(function(e) {
                e.preventDefault()

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })

                var formData = {
                    nome: $(".nome").val(),
                    datanasc: $(".datanasc").val(),
                    num: $(".num").val()
                }


                $.ajax({
                    url: '{{ url("/$data->id") }}',
                    method: 'PUT',
                    data: formData,
                    success: function(data) {
                        $(".arni").css("display", "none");
                        alert(data)
                    },
                    error: function(data) {
                        alert(data)
                        $(".arni").css("display", "block");
                        var sms = data.responseJSON;
                        $(".sms").html(sms.message)
                        var dt = data.responseJSON
                        $(".nm").html(dt.errors.nome)
                        $(".n").html(dt.errors.num)
                        $(".dat").html(dt.errors.datanasc);


                    }

                })





            })



        });

    </script>
@endpush

@push('css')

    <style>
        .jumbotron {
            width: 500px;
        }

    </style>

@endpush
