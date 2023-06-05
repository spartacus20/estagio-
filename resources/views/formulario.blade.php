<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>Formulário</h1>
    <form action="{{ route('formulario.send') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo"><br><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data"><br><br>

        <label for="data-inicio">Data de Início:</label>
        <input type="datetime-local" id="data-inicio" name="data_inicio"><br><br>

        <label for="data-fim">Data do Fim:</label>
        <input type="datetime-local" id="data-fim" name="data_fim"><br><br>

        <label for="lugares">Lugares a Publicar:</label><br>
        <input type="checkbox" id="lugar1" name="lugares[]" value="Pagina Web">
        <label for="lugar1">Página Web</label><br>
        <input type="checkbox" id="lugar2" name="lugares[]" value="Facebook">
        <label for="lugar2">Facebook</label><br>
        <input type="checkbox" id="lugar3" name="lugares[]" value="Instagram">
        <label for="lugar3">Instagram</label><br>
        <input type="checkbox" id="lugar4" name="lugares[]" value="LinkedIn">
        <label for="lugar4">LinkedIn</label><br>
        <input type="checkbox" id="lugar5" name="lugares[]" value="Twitter">
        <label for="lugar5">Twitter</label><br>
        <input type="checkbox" id="lugar6" name="lugares[]" value="Radios">
        <label for="lugar6">Rádios</label><br>
        <input type="checkbox" id="lugar7" name="lugares[]" value="Jornais">
        <label for="lugar7">Jornais</label><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <!-- Scripts necessários -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

    <!-- Script para exibir o toast em caso de erro -->
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                toastr.options = {
                    positionClass: 'toast-container',
                    closeButton: true,
                    progressBar: true,
                };
                toastr.error("{{ $errors->first() }}");
            });
        </script>
    @endif


</body>

</html>
