<!DOCTYPE html>
<html>
<head>
    <title>Iletisim</title>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="stiller.css">
</head>
<body>


<div id="ustdivAlani"></div><br><br>

<div class="kutu">

<div>
<h2>Formdan Gelen Veriler</h2>
</div>

<div>
  <strong>İsminiz:</strong> <?php echo $_POST['isim'] ; ?>
</div>
<div>
  <strong>Email:</strong> <?php echo $_POST['email'] ; ?>
</div>
<div>
  <strong>Cinsiyet:</strong> <?php echo $_POST['cinsiyet']; ?>
</div>
<div>
  <strong>Konu:</strong> <?php echo $_POST['konu'] ; ?>
</div>
<div>
  <strong>Mesaj:</strong> <?php echo $_POST['mesaj']; ?>
</div>

</div>



<script>

    fetch("secenekler.html")
        .then(res => res.text())
        .then(veri => {
            document.getElementById("ustdivAlani").innerHTML = veri;
        });

</script>



</body>
</html>
