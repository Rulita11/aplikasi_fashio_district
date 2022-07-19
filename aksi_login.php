<?php
memerlukan  'koneksi.php' ;
$ usr = $ _POST [ 'nama pengguna' ];
$ pwd = $ _POST [ 'kata sandi' ];

$ sql = $ koneksi -> query (" SELECT * FROM tabel_user WHERE username=' $ usr ' ");
$ data = mysqli_fetch_assoc( $ sql );

jika ( $ sql ) {
    if ( $ data [ 'username' ] === $ usr && $ data [ 'password' ] === $ pwd ) {
        sesi_mulai();
        $ _SESSION [ 'nama pengguna' ] = $ data [ 'nama pengguna' ];
        $ _SESSION [ 'tingkat' ] = $ data [ 'tingkat' ];
        header( 'Location:database_sales.php?login=berhasil' );
    } lain {
        $ 'SESSION [ ' error_1 ' ] = 'Username yamg tidak sesuai!' ;
        header( 'Lokasi:login.php' );
    }
} lain {
    $ 'SESSION [ ' error_2 ' ] = 'Password yamg tidak sesuai!' ;
    header( 'Lokasi:login.php' );
}
