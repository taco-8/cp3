
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <title><?=$entity->title ?> by taco-8</title>

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
        <li class="nav-item">
          <a class="nav-link" href="<?=$this->Url->build(['controller'=>'About', 'action'=>'index']); ?>">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Contact', 'action'=>'index']); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main">

        <div class="jumbotron jumbotronwhite">
            <div class="container">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <small><?php echo date('Y-m-d',  strtotime($entity->date)); ?></small>
                <br><br>
                <h3><?=$entity->title ?></h3>
                <br>
                <?=$entity->content ?>

                <br><br>

                <div class="form_conf">

                <a class="btn btn-outline-dark" 
                    href="javascript:history.back();"
                    role="button">&laquo; 一覧に戻る</a>
                
                  <a class="btn btn-outline-dark" 
                    href="<?=$this->Url->build(['controller'=>'Contact', 'action'=>'index']); ?>?id=<?=h($entity->id) ?>"
                    role="button">コメント &raquo;</a>

                </div>

            </div>
        </div> <!-- /container -->

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
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js">
</script>
</body>
</html>