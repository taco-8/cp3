
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
  
  <title><?=$titleyear ?> 西暦和暦リスト</title>

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

                <div class="form-group">
                    <label for="year" class="control-label col-xs-2">西暦和暦リスト</label>
                    <div class="col-xs-3">
                    <select class="form-control" id="year" name="year" onChange="chyear();">

                    <?php
                        foreach($selectyearlist as $k => $v ){
                            if($k==$currentyear){
                                echo '<option value='.$k.' selected="selected">'.$v.'</option>';
                            }else{
                                echo '<option value='.$k.'>'.$v.'</option>';
                            }
                        }
                    ?>

                    </select>
                    </div>
                </div>
                <br>
                <p id="ename"></p>

                <img id="mypic">
                <br><br>
                <div id='resetbtn' style='display:none;'>
                <button type="button" class="btn btn-outline-dark" onclick='reload();'>
                今年</button>
                <div>


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

<script>

$(function(){
  chyear();
});

function reload(){
  location.reload();
}

function chyear(){
  var year = $('[name=year]').val();
  document.getElementById("ename").innerHTML = toEto(year);

  var pics_src = new Array("eto_01.png","eto_02.png","eto_03.png","eto_04.png","eto_05.png","eto_06.png","eto_07.png","eto_08.png","eto_09.png","eto_10.png","eto_11.png","eto_12.png");
  document.getElementById("mypic").src="./img/eto/"+pics_src[year % 12];

  var cyear = '<?=$currentyear ?>';
  if(year != cyear){
    document.getElementById("resetbtn").style.display="block";
  }else{
    document.getElementById("resetbtn").style.display="none";
  }

}

function toEto(year) {
  var eto =  ["申(サル)","酉(ニワトリ)","戌(イヌ)","亥(イノシシ)","子(ネズミ)","丑(ウシ)","寅(トラ)","卯(ウサギ)","辰(リュウ)","巳(ヘビ)","午(ウマ)","未(ヒツジ)"];
  return eto[year % 12];
}

</script>

</body>
</html>