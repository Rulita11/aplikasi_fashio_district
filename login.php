<!DOCTYPE html >
< html  lang =" en " >

< kepala >
    < meta  charset =" utf-8 " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1, shrink-to-fit=no " >
    < judul > Masuk </ judul >
    < link  rel =" stylesheet " href =" https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css " integrity =" sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF63/Z6nronJ " crossorigin =" anonim " >

    < gaya >
        . formulir-masuk {
            lebar :  100 % ;
            lebar maks :  330 piksel ;
            bantalan :  15 piksel ;
            margin : otomatis;
            box-shadow :  0 px  10 px  10 px  rgba ( 0 ,  0 ,  0 ,  .2 );
        }

        tubuh {
            tampilan : -ms-flexbox;
            tampilan : fleksibel;
            -ms-flex-align : tengah;
            align-item : tengah;
            padding-top :  40 px ;
            padding-bottom :  40 px ;
            warna-latar belakang :  # f5f5f5 ;
        }

        html ,
        tubuh {
            tinggi :  100 % ;
        }
    </ gaya >
</ kepala >

< body  class =" text-center " >
    < div  class =" wadah " >
        < form  class =" form-signin " action =" aksi_login.php " method =" POST " >
        < h2  class =" h3 mb-3 font-weight-normal " > Masuk </ h2 >
        <?php
        if (isset( $ _SESSION [ 'error_1' ])) {
            echo " <div class='alert alert-danger'> { $ _SESSION [ 'error_1' ]} </div> ";
        }
        if (isset( $ _SESSION [ 'error_2' ])) {
            echo " <div class='alert alert-danger'> { $ _SESSION [ 'error_2' ]} </div> ";
        }
        
        ?>
        < label  untuk =" inputUsername " class =" sr-only " > Nama pengguna </ label >
        < jenis input  =" teks " nama =" nama pengguna " id =" inputUsername " class =" form-control mb-2 " placeholder =" Nama pengguna " diperlukan ="" autofocus ="" >
        < label  untuk =" inputPassword " class =" sr-only " > Sandi </ label >
        < input  type =" kata sandi " nama =" kata sandi " id =" inputPassword " class =" form-control " placeholder =" Kata sandi " diperlukan ="" >
        < div  class =" kotak centang mb-3 " >
            < jam >
            < label >
                < input  type =" checkbox " value =" true " name =" setcookie " > Ingat saya
            </ label >
        </ div >
        < button  class =" btn btn-sm btn-primary btn-block mb-3 " type =" submit " name =" login " > Masuk </ button >
        < a  href =" registrasi.php " > Daftar </ a >
    </ bentuk >
    </ div >
    


    < script  src =" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity =" sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin </ =" anonim " > naskah >
    < script  src =" https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integritas = " sha384 - Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD3 < / 7QP9yug anonim naskah >
</ tubuh >

</ html >
