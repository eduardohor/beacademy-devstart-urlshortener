<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    <title>Encurtador de Url</title>
</head>
<body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/storage/img/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </ul>
              <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="" class="nav-link">Nome do usuário</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Minhas Url's</a>
                  </li>
                  <li>
                    <a href="" class="btn btn-info">Sair</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
    @yield('body')
</body>
</html>