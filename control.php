<?php

$text = trim($_POST['text']);
$censored = trim($_POST['censored']);
$lenghtText = strlen($text);
$textCensored = str_replace($censored, '***', $text);
$lenghtCensoredText = strlen($textCensored);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <title>control</title>
</head>

<body>
  <div class="container text-center my-3 bg-body-secondary p-3">

    <h1>control</h1>

    <label>Paragrafo</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" value="<?php echo $text ?>" readonly>
      <span class="input-group-text">
        <?php echo $lenghtText ?>
      </span>
    </div>

    <label>Parola da censurare</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" value="<?php echo $textCensored ?>" readonly>
      <span class="input-group-text">
        <?php echo $lenghtCensoredText ?>
      </span>
    </div>

    <div class="btn btn-danger">
      <a href="./" class="text-white text-decoration-none">Indietro</a>
    </div>
      
  </div>
</body>

</html>