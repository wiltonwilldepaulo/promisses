<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pessoa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        Pesquisa pessoa
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form method="post" class="row g-3" name="frmpesquisa" id="frmpesquisa">
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">Pesquisa</label>
                                        <input type="search" class="form-control" name="pesquisa" id="pesquisa" placeholder="Digite sua pesquisa">
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-primary mb-3">Pesquisa</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>Código</td>
                                            <td>Nome</td>
                                            <td>Sobre nome</td>
                                            <td>CPF</td>
                                        </tr>
                                    </thead>
                                    <tbody id="dados">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/pessoa.js"></script>
</body>

</html>