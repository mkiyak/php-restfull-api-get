<?php 
header('Content-type: application/json'); // Tarayıcıdan girdiğimizde JSON formatında görelim.

/* Bağlantıyı Başlat */
$mysqli = new mysqli("locahost","root","","webeditorleri");/* Bağlantıyı Kontrol Et */
if ($mysqli->connect_error){
    /* Bağlantı Başarısız İse */
    echo "Bağlantı Başarısız. Hata: " . $mysqli->connect_error;
    exit;
}else{
    /* Bağlantı Başarılı İse */
    echo "Bağlantı Başarılı.";
}/* Bağlantıyı Sonlandır. */


$Dizi = array(); // JSON Dizimizi Oluşturalım.

$sayac = 0; // İndis sayacımız

$results = $mysqli->query('SELECT * FROM kisiler'); //Kişiler tablomuzdan tüm verileri çekelim.

foreach ($results as $row) {  // Satır satır verileri çekiyoruz

    $Dizi['kisiler'][$sayac]['id'] = $row["id"]; // dizimizin kisiler -> indis -> id değerine çektiğimiz değeri atadık.
    $Dizi['kisiler'][$sayac]['isim'] = $row["isim"]; // dizimizin kisiler -> indis -> isim değerine çektiğimiz değeri atadık.
    $Dizi['kisiler'][$sayac]['soyisim'] = $row["soyisim"]; // dizimizin kisiler -> indis -> soyisim değerine çektiğimiz değeri atadık.
    $Dizi['kisiler'][$sayac]['yas'] = $row["yas"]; // dizimizin kisiler -> indis -> yas değerine çektiğimiz değeri atadık.
    $Dizi['kisiler'][$sayac]['cinsiyet'] = $row["cinsiyet"]; // dizimizin kisiler -> indis -> cinsiyet değerine çektiğimiz değeri atadık.

    $sayac++; // İndis sayacımızı arttırdık.
}

// JSON_UNESCAPED_UNICODE Türkçe karakterlerde bozulmasın diye kullanıyoruz.

echo json_encode($Dizi, JSON_UNESCAPED_UNICODE); //json dizimizi json formatına encode edip yazdırdık.


$mysqli->close();