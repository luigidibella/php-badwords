<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <title>php-badwords</title>
</head>
<body>

  <div class="container text-center my-3 bg-body-secondary p-3">

    <h1>php-badwords</h1>


    <form action="control.php" method="POST">
      <label>Paragrafo</label>
      <input name="text" class="form-control mb-3" aria-label="With input"></input>
      
      <label>Parola da censurare</label>
      <input name="censored" class="form-control mb-3" aria-label="With input"></input>

      <button class="btn btn-danger" type="submit">Invia</button>
    </form>
  </div>
  
</body>
</html>