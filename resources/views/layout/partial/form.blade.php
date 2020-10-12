@csrf

<div class="form-group">
    <input type="text" class="form-control nome" name="nome" placeholder="Nome:" value="{{ $data->nome ?? old('nome') }}">

    <div class="alert alert-warning arni" style="display: none;">
            <p class="nm"></p>
        </div>

</div>

<div class="form-group">
    <input type="datetime" name="datanasc" onkeyup="return validDate()" class="form-control datanasc" value="{{ $data->datanasc ?? old('datanasc') }}" id="datanasc" placeholder="Data Nascimento:">

    <div class="alert alert-warning arni" style="display: none;">
        <p class="dat"></p>
    </div>

</div>

<div class="form-group">
    <input type="number" name="num" class="form-control num" value="{{ $data->num ?? old('num') }}" placeholder="Telefone:">

    <div class="alert alert-warning arni" style="display: none;">
        <p class="n"></p>
    </div>

</div>

<div class="form-group">
    <button class="btn btn-success botão">@yield('nmbtn')</button>
</div>


@push('script')

<script>
    function validDate() {

        var dat = document.getElementById("datanasc")
        var idade = document.getElementById("idade")
        var date = dat.value


        date = date.replace(/\D+/g, "")


        if (date.length > 4) {
            date = date.substring(0, 4) + "-" + date.substring(4)
        }
        if (date.length > 7) {
            date = date.substring(0, 7) + "-" + date.substring(7, 9)
        }


        dat.value = date




    }

    $(document).ready(function() {




    })
</script>

@endpush
