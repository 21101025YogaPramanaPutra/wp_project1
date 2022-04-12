<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    Konversi Suhu<br><br>
    konversi:<br>
    <form  method="post">
    <input type="radio" name="hitung" value="fahrenhait" >Celcius ke Fahrenhait
    <input type="radio" name="hitung" value="celcius" >Fahrenhait ke celcius<br>
    Nilai Suhu<br><input type="text"  name="nilai"><br><br>
    <input type="submit" name="submit" value="CONVERSI">
    </form>

 <?php
    if(isset($_POST["submit"])){
        $jumlah=$_POST['nilai'];
        $hitung=$_POST['hitung'];

    if($hitung=="fahrenhait"){
        $hasil=(9/5)*$jumlah+32;
            echo "Hasil Konversi : <br> °F = (9/5) x °C + 32 <br> °F = (9/5) x $jumlah + 32<br>°F = $hasil";
    }else if($hitung=="celcius"){
        $hsl=(5/9)*($jumlah-32);
            echo "Hasil Konversi : <br> °C = (9/5) x (°F - 32) <br> °C = (9/5) x ($jumlah - 32) <br> °C = $hsl";
        }
     }
?>
</body>
</html>