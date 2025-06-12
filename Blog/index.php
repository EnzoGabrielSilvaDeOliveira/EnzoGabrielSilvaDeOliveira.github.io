<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Alert Bootstrap -->
<div class="alert alert-success text-center mb-0" role="alert">
    Bem-vindo ao meu blog!
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Meu Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteúdo Principal -->
<div class="container mt-4">
    <div class="row">
        <!-- Área de Postagens -->
        <div class="col-md-8">

            <?php
            // Array de postagens
            $postagens = [
                [
                    'titulo' => 'Primeira Postagem',
                    'data' => '10/06/2025',
                    'imagem' => 'img/imagem1.jpg',
                    'conteudo' => 'Este é o primeiro parágrafo da primeira postagem. Aqui vai um resumo breve.',
                ],
                [
                    'titulo' => 'Segunda Postagem',
                    'data' => '11/06/2025',
                    'imagem' => 'img/imagem2.jpg',
                    'conteudo' => 'Este é o primeiro parágrafo da segunda postagem. Conteúdo interessante segue abaixo.',
                ],
                [
                    'titulo' => 'Terceira Postagem',
                    'data' => '12/06/2025',
                    'imagem' => 'img/imagem3.jpg',
                    'conteudo' => 'Aqui está a terceira postagem. Sempre há novidades por aqui!',
                ]
            ];

            // Exibir postagens
            foreach ($postagens as $post) {
                echo '
                <div class="card mb-4">
                    <img src="' . $post['imagem'] . '" class="card-img-top" alt="' . $post['titulo'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $post['titulo'] . '</h5>
                        <p class="text-muted">' . $post['data'] . '</p>
                        <p class="card-text">' . $post['conteudo'] . '</p>
                        <a href="#" class="btn btn-primary">Leia mais...</a>
                    </div>
                </div>
                ';
            }
            ?>

        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Sobre o Autor</h5>
                    <p>Sou um entusiasta de tecnologia apaixonado por compartilhar conhecimento através de artigos e postagens.</p>
                    <a href="#" class="btn btn-secondary btn-sm">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rodapé com Formulário -->
<footer class="bg-dark text-white mt-4 p-4">
    <div class="container">
        <h5>Contato</h5>
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Seu nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="seu@email.com">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <p class="mt-3 mb-0">Telefone: (00) 1234-5678 | E-mail: contato@meublog.com</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
