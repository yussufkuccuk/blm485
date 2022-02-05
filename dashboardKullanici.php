

<div class=col-xl-3 col-md-6 mb-4><a href="ogrenciDetailKullaniciTüm.php">
        <div class=card border-left-primary shadow h-100 py-2>
            <div class=card-body>
                <div class=row no-gutters align-items-center>
                    <div class=col mr-2>
                        <div class=text-xs font-weight-bold text-primary text-uppercase mb-1>Toplam Öğrenci Sayısı</div>
                        <div class=h5 mb-0 font-weight-bold text-gray-800>
                            <?php
                            $id = $_SESSION['kullaniciId'];
                            $query = mysqli_query($con, "select * from admins where id='$id'");
                            $x = mysqli_fetch_assoc($query);
                            $y = $x['kurumId'];
                            $var = 0;
                            $sorgu = mysqli_query($con, "select * from students1 where kurumId='$y'");
                            while ($str = mysqli_fetch_array($sorgu)) {
                                $var += 1;
                            }
                            echo $var;
                            ?>
                        </div>
                    </div>
                    <div class=col-auto>
                        <i class=fas fa-user-graduate fa-2x text-gray-300></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
