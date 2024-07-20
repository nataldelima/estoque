<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">

        <h1>Listagem de Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <?php

            foreach ($produtos as $p) { ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td class="text-end"><a href="produtos/mostra/<?= $p->id ?>" class="btn btn-primary"><i class="bi bi-search"></i></a> <a href="#" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>
                </tr>
            <?php }       ?>

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
