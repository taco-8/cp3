<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Test</title>

  <!-- Custom styles for this template
  <link href="style.css" rel="stylesheet">
　-->
  <?= $this->Html->css('bs.css') ?>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="">Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Category</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Category#1</a>
            <a class="dropdown-item" href="#">Category#2</a>
            <a class="dropdown-item" href="#">Category#3</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-5">Test</h1>
        <p>This is a template
        </p>

        <p><a class="btn btn-secondary" 
        href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'add']); ?>" 
        role="button">Add &raquo;</a></p>

        <br>

        <?=$this->Form->create(null, ['url' => ['controller' => 'Articles', 'action' => 'index'], 'type' => 'post', 
        'class' => 'form-inline my-2 my-lg-0'])?>
          <input class="form-control mr-sm-2" name="searchwd" value="<?=$searchwd ?>" type="text" placeholder="Search" aria-label="Search">  
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        <?=$this->Form->end()?>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <?php foreach($data->toArray() as $obj): ?>

            <div class="col-md-4">
            <small><?php echo date('Y-m-d',  strtotime($obj->date)); ?></small>
            <h2><?=h($obj->title) ?></h2>
            <p><?=h($obj->summary) ?></p>
            <p><a class="btn btn-secondary" 
            href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'edit']); ?>?id=<?=h($obj->id) ?>"
            role="button">Edit &raquo;</a>
            <a class="btn btn-outline-danger" 
            href="javascript:delItem('<?=h($obj->id) ?>');"
            role="button">Delete &raquo;</a>
            <a class="btn btn-outline-success" 
            href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'detail']); ?>?id=<?=h($obj->id) ?>"
            role="button">Detail &raquo;</a>
            
            </p><br>
            </div>

        <?php endforeach; ?>

      </div>

    </div> <!-- /container -->

    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        <?= $this->Paginator->prev('前へ'); ?>
        <?= $this->Paginator->numbers(array('modulus' => '3')); ?>
        <?= $this->Paginator->next('次へ'); ?>
      </ul>
    </nav>

  </main>

  <hr>

  <footer class="container">
    <p>&copy; Company 2020</p>
  </footer>

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
  
  <script>

  function delItem(id){
    if(window.confirm('delete?')){
      location.href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'delete']); ?>?id="+id;
    }
  }

  </script>

</body>
</html>