<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de Endereço</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="container">
        @if (isset($message))
            <div class="alert alert-{{ $message[1] }} alert-dismissible fade show" role="alert">
                <span>{{ $message[0] }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="{{ route('endereco.create') }}" class="btn btn-primary">Criar endereco</a>
        <a href="/" class="btn btn-primary">Voltar</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">logradouro</th>
                    <th scope="col">numero</th>
                    <th scope="col">complemento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                    <tr>
                        <th scope="row">{{ $endereco->id }}</th>
                        <td>{{ $endereco->bairro }}</td>
                        <td>{{ $endereco->logradouro }}</td>
                        <td>{{ $endereco->numero }}</td>
                        <td>{{ $endereco->complemento }}</td>

                        <td>
                            <a href="{{ route('endereco.show', $endereco->id) }}" class="btn btn-primary">Mostrar</a>
                            <a href="{{ route('endereco.edit', $endereco->id) }}" class="btn btn-secondary">Editar</a>
                            <a href="#" class="btn btn-danger btnRemover" data-bs-toggle="modal"
                                data-bs-target="#deleteModal" value="{{ route('endereco.destroy', $endereco->id) }}">
                                Remover
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remoção de recurso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja realmente remover este recurso?
                </div>
                <div class="modal-footer">
                    <form id="id-form-modal-botao-remover" method="post" action="">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Procura todos elementos da página que tenha a classe btnRemover
        let arrayBotaoRemover = document.querySelectorAll(".btnRemover");
        let formModalBotaoRemover = document.querySelector("#id-form-modal-botao-remover");
        arrayBotaoRemover.forEach(element => {
            element.addEventListener('click', configuraBotaoRemoverModal);
        });

        function configuraBotaoRemoverModal() {
            formModalBotaoRemover.setAttribute("action", this.getAttribute("value"));
        }
    </script>
    -
</body>


</html>
