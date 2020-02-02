<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>taco-8について</title>

  <!-- Custom styles for this template
  <link href="style.css" rel="stylesheet">
　-->
  <?= $this->Html->css('bs.css') ?>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'index']); ?>">TC-8</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'index']); ?>">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'About', 'action'=>'index']); ?>">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Contact', 'action'=>'index']); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron jumbotronwhite">
      <div class="container">
        <!-- <h1 class="display-5">taco-8について</h1><br> -->
        
        <p>taco-8.comでは、ゲーム、プログラミング、音楽、トレンド、ライフスタイルなどを発信しています。
        </p>
        <p>自作のツールは以下で公開しています。
        </p>

        <a href="<?=$this->Url->build(['controller'=>'Ip', 'action'=>'index']); ?>">
        <button type="button" class="btn btn-outline-dark">
        グローバルIPの確認</button></a>
        <br><br>

        <a href="<?=$this->Url->build(['controller'=>'Year', 'action'=>'index']); ?>">
        <button type="button" class="btn btn-outline-dark">
        西暦和暦リスト</button></a>
        <br><br>

        <!-- <button type="button" class="btn btn-outline-primary btn-lg" onclick='location.href="https://twitter.com/taco8blog";'>
        <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>&nbsp;&nbsp; taco-8 on twitter</button>
        <br><br>

        <button type="button" class="btn btn-outline-dark btn-lg" onclick='location.href="https://github.com/taco-8";'>
        <i class="fa fa-github fa-lg" aria-hidden="true"></i>&nbsp;&nbsp; taco-8 on github</button>
        <br><br>

        <button type="button" class="btn btn-outline-danger btn-lg" onclick='location.href="https://www.youtube.com/channel/UC8THvy3ecXu20emwkJpC_2w";'>
        <i class="fa fa-youtube fa-lg" aria-hidden="true"></i>&nbsp;&nbsp; taco-8 on youtube</button>  -->
            

      </div>
    </div>




  </main>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  
</body>
</html>