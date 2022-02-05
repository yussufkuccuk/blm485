 <?php
    include("layoutAdmin.php")
    ?>

 <div class="page-wrapper p-t-45 p-b-50">
 <div style="padding-right: 20px;float:right"><a href="anasayfaAdmin.php">Anasayfaya Dön <i class="fas fa-arrow-circle-left"></i></a></div>
     <div class="wrapper wrapper--w680">
         <div class="card card-5">
             <div class="card-heading bg-gradient-primary">
                 <h2 class="title">ÖĞRENCİ EKLE</h2>
             </div>
             <div class="card-body">
                 <form method="POST" action="ogrenciEkleAdmin1.php">
                     <table>
                         <tr>
                             <td>
                                 Öğrencinin Kart Numarası:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="kart" placeholder="Kart Numarasını Giriniz" required />
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Adı:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="adi" placeholder="Öğrencinin Adı" required />
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Soyadı:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="soyadi" placeholder="Öğrencinin Soyadı" required />
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin TC Kimlik Numarası:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="tcKimlik" placeholder="Öğrencinin TC Kimlik No" required />
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Cep Telefonu:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="telefon" placeholder="Öğrencinin Cep Telefonu" required />
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Ev Adresi:
                             </td>
                             <td>
                                 <textarea class="input--style-5" name="adres" placeholder="Ev Adresi" style="width: 330px;" required></textarea>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Anne Adı:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="anneAdi" placeholder="Anne Adı" required>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Anne Cep Telefonu:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="anneCep" placeholder="Anne Cep No" required>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Baba Adı:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="babaAdi" placeholder="Baba Adı" required>
                             </td>
                         </tr>

                         <tr>
                             <td>
                                 Baba Cep Telefonu:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="babaCep" placeholder="Baba Cep No" required>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Doğum Tarihi:
                             </td>
                             <td>
                                 <input class="input--style-5" type="date" name="dogumTarihi" placeholder="Doğum Tarihini Giriniz" required>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Doğum Yeri:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="dogumYeri" placeholder="Doğum Yerini Giriniz" required>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Oda Numarası:
                             </td>
                             <td>
                                 <input class="input--style-5" type="text" name="odaNo" placeholder="Öğrencinin Oda Numarası" required>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 Öğrencinin Kaldığı Yurt:
                             </td>
                             <td>
                                 <select class="input--style-5" name="yurt" required>
                                     <?php
                                        $sorgu = mysqli_query($con, "select * from institutions");
                                        echo '<option value="0" >Öğrencinin Kaldığı Yurt</option>';
                                        while ($str = mysqli_fetch_array($sorgu)) {
                                            echo '<option value=' . $str['kurumId'] . ' >' . $str['kurumAdı'] . '</option>';
                                        }
                                        ?>

                                 </select>
                             </td>
                         </tr>
                         <tr>
                             <td></td>
                             <td>
                                 <input class="btn btn--radius-2 btn--blue" type="submit" name="Kaydet" value="Kaydet" style="width:110px">
                                 <input class="btn btn--radius-2 btn--blue" type="reset" name="Temizle" value="Temizle" style="width:110px">
                             </td>
                         </tr>

                     </table>
                 </form>
             </div>
         </div>
     </div>
 </div>

 </div>
 <!-- End of Content Wrapper -->

 <?php
    include("layoutFooterAdmin.php")
    ?>