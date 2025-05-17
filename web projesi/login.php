<html>


<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="stiller.css">
    
</head>

<body>



   
 <div id="ustdivAlani"></div><br><br>
    



<?php 
session_start();
$girisBasari=false;

if(isset($_SESSION['giris']) && $_SESSION['giris'] === true)
{
 $girisBasari=true;
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
 if($_POST["email"]=="b241210015@sakarya.edu.tr" && $_POST["sifre"]=="b241210015")
			{ 
        $_SESSION['giris'] = true;
        $girisBasari=true;
      }
      else{
        echo "<div class='kutu'>Kullanıcı e postası ya da şifre hatalı!</div>";
        
      }    
    }
?>

<?php if ($girisBasari): ?>
  <div class="kutu">
    <?php
      echo "Merhaba b241210015 " . "<br>Girişiniz Onaylandı.<br>";
    ?>
    
    <a href="logout.php" class="btn btn-danger">Çıkış Yap</a>
  
  </div>
<?php endif; ?>



<?php if (!$girisBasari): ?>


<div class="kutu" >
  <div class="container d-flex justify-content-center">
    <form style="max-width: 500px; width: 100%;" action="login.php" method="post" onsubmit="return formKontrol()">
     <div class="form-group">
       <label for="emailgirisi">Email Adresi</label>
       <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
       <small id="emailYorum" class="form-text text-muted">Mailinizi giriniz.</small>
      </div>
     
     <div class="form-group">
       <label for="sifregirisi">Şifre</label>
       <input type="password" class="form-control" name="sifre" id="sifre">
       <small id="sifreYorum" class="form-text text-muted">Şifre domain içermeyen öğrenci numaranız olmalı.</small>
     </div>
      
     <div class="form-group form-check">
       <input type="checkbox" class="form-check-input" id="sifreGoster">
       <label class="form-check-label" for="exampleCheck1">Şifreyi göster.</label>
     </div>
     <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
  </div>
</div>

<?php endif; ?>

  <script>
   
    fetch("secenekler.html")
        .then(res => res.text())
        .then(veri => {
            document.getElementById("ustdivAlani").innerHTML = veri;
        });

        
document.getElementById("sifreGoster").addEventListener("change", function () {
     sifreGorunum = document.getElementById("sifre");
    if (this.checked) {
        sifreGorunum.type = "text";
    } else {
        sifreGorunum.type = "password";
    }
});

function formKontrol() {
    const email = document.getElementById("email").value.trim();
    const sifre = document.getElementById("sifre").value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "" || sifre === "") {
        alert("Lütfen giriş ekranını doldurunuz!");
        return false; 
    }
     if (!emailRegex.test(email)) {
        alert("Lütfen geçerli bir e-posta adresi giriniz!");
        return false;
    }


    return true; 
}


</script>






<div class="altdiv2" >
    <footer>
   <p>©Copyrigt 2025</p>
  
</footer>
</div>

</body>




</html>