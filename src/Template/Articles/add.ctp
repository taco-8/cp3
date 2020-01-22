
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
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

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
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
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

        <div class="jumbotron">
            <div class="container">

                <?=$this->Form->create($entity, ['url' => ['controller' => 'Articles', 'action' => 'add'], 'type' => 'post'])?>
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>


                        <?php if($this->Form->error('Articles.title')): ?>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" name="Articles[title]" value="<?=$entity->errtitle ?>">
                            <div class="invalid-feedback">
                                <?=$this->Form->error('Articles.title') ?>
                            </div>
                        <?php else: ?>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Articles[title]" value="<?=$entity->title ?>">
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Summary</label>
                        
                        <?php if($this->Form->error('Articles.summary')): ?>
                            <textarea class="form-control is-invalid" id="exampleFormControlTextarea2" rows="2" name="Articles[summary]"><?=$entity->errsummary ?></textarea>
                            <div class="invalid-feedback">
                                <?=$this->Form->error('Articles.summary') ?>
                            </div>
                        <?php else: ?>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="Articles[summary]"><?=$entity->summary ?></textarea>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="Articles[content]"><?=$entity->content ?></textarea>
                            <script>
                                  CKEDITOR.replace( 'Articles[content]' );
                          </script>
                    </div>

                    <button type="submit" class="btn btn-secondary">Add</button>

                <?=$this->Form->end()?>

            </div>
        </div> <!-- /container -->

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

</body>
</html>