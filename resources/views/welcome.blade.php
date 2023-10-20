<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> API Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Perguntas</th>
            <th scope="col">Resp1</th>
            <th scope="col">Resp2</th>
            <th scope="col">Resp3</th>
          </tr>
        </thead>
        <tbody>
            @foreach($respostas as $question)
            <tr>
                <td> {{$question->question}}</td>
                <td> {{$question->answer_a}}</td>
                <td> {{$question->answer_b}}</td>
                <td> {{$question->answer_c}}</td>
            <tr>
            @endforeach
       
          
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>