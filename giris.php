<?php
    $username = $_POST['kullaniciadi'];
    $password = $_POST['sifre'];
   
    if($username == "g201210007@sakarya.edu.tr" && $password == "g201210007"){
        echo "
            <nav>
                <table>
                <tr>
                        <td><a href='/index.html' class='btn butonlar'>Hakkımda</a></td>
                        <td><a href='/ozgecmis.html' class='btn butonlar'>Özgeçmiş</a></td>
                        <td><a href='/nigde.html' class='btn butonlar'>Memleketim Niğde</a></td>
                        <td><a href='/mirasimiz.html' class='btn butonlar'>Mirasımız</a></td>
                        <td><a href='/ilgialanlari.html' class='btn butonlar'>İlgi Alanlarım</a></td>
                        <td><a href='/iletisim.html' class='btn butonlar'>İletişim</a></td>
                        <td><a href='/girisyap.html' class='btn butonlar'>Giriş Yap</a></td>
                </tr>
                </table>
            </nav>     
        
            
        Hoşgeldiniz -g201210007- ";
    }
    else{
        echo "Hatalı giriş";
    }
?>