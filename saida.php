<!doctype html>
<html>
    <head>
        <title>Declaração</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" type"text/css" href="folha.css">
        <?php 
          $nomeAluno =  $_POST["nomeAluno"];
          $nomeDisciplina =  $_POST["nomeDisciplina"];
          $nomeCurso =  $_POST["nomeCurso"];
          $linkLogo =  $_POST["linkLogo"];
          $notaVa1 =  $_POST["notaVa1"];
          $notaVa2 =  $_POST["notaVa2"];
          $notaVa3 =  $_POST["notaVa3"];
          $notaTrabalhos =  $_POST["notaTrabalhos"];
          $nomeProf =  $_POST["nomeProf"];
          $nomeCoord =  $_POST["nomeCoord"];

          $total = $notaVa1 + $notaVa2 + $notaVa3 + $notaTrabalhos;

          $passou = ($total >= 60)  /* verifica a situação do aluno*/ 
          ? ''
          : "<span style= 'color:red;'> NÃO </span> ";

          function calcula ($nt1,$nt2){
           return  round(($nt1/$nt2)*100);

          }
           $avalia = '' ;

           if ($total >= 90){
              $avalia = 'excelente';

           } 
            else if ($total >= 80) {
              $avalia = 'ótimo';

            }
              else if ($total >= 70) {
                $avalia = 'bom';

              }
                else if ($total >= 60) {
                 $avalia = 'ruim';

                }
                  else {
                    $avalia = 'péssimo';
                  }

          
          
        ?>
    </head>
    <header >
       <center> <img src= "<?= $linkLogo ?>" alt= "<?= $linkLogo ?>"  > </center>
       <hr>
    </header>
    <body>
      <h1 align = "center"> Declaração </h1>
      <p align = "center" >
          Declaramos, para os devidos fins, que <?= $nomeAluno ?>  <?= $passou ?> concluiu satisfatoriamente as atividades<br>
          da disciplina <?= $nomeDisciplina ?> do curso de <?= $nomeCurso ?> .
      </p>
      <p align ="center">
          Segue o desempenho de <?= $nomeAluno?>:
      </p>
      <table border = '1' align = 'center'>
        <thead>
          <tr>
            <th> Critério  </th>
            <th> Valor Total  </th>
            <th> Nota do aluno  </th>
            <th> Desempenho (%)  </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> Prova 1 </td>
            <td> 15 </td>
            <td> <?= $notaVa1 ?> </td>
            <td> <?php echo calcula($notaVa1,15) ?> </td>
          </tr>
          <tr>
            <td> Prova 2 </td>
            <td> 25 </td>
            <td> <?= $notaVa2 ?> </td>
            <td> <?php echo calcula($notaVa2,25) ?>  </td>
          </tr>
          <tr>
            <td> Prova 3 </td>
            <td> 35 </td>
            <td> <?= $notaVa3 ?> </td>
            <td> <?php echo calcula($notaVa3,35) ?>  </td>
          </tr>
          <tr>
            <td> Trabalhos </td>
            <td> 25 </td>
            <td> <?= $notaTrabalhos ?> </td>
            <td> <?php echo calcula($notaTrabalhos,25) ?>  </td>
          </tr>
        </tbody>
      </table>
      <p align ="center" >
          Com esse resultado, o conceito de <?= $nomeAluno ?> foi <em> <?= $avalia ?> </em>, já que sua
          nota total foi de <?= $total ?> pontos.
      </p>
      <p align = 'center'>
          Belo horizonte, <?php echo date("d/m/Y"); ?>
      </p><br>
      <div class = "final">
        <hr >
            <?= $nomeProf ?> - Professor(a) <br><br>
        <hr>
            <?= $nomeCoord ?> - Coordenador(a)
      </div>
  

    
    </body>
</html>