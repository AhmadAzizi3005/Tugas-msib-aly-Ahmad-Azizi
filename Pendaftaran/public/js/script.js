
$(function(){

    $('.tombolTambahData').on('click',function(){
        $('#formModalLabel').html('Formulir Pendaftaran Lomba');
        $('.modal-footer button[type=submit]').html('Daftar');
    });
    $('.tampilModalUbah').on('click',function(){
        $('#formModalLabel').html('Ubah Data Peserta Lomba');
        $('.modal-footer button[type=submit]').html('Ubah');
        $('.modal-body form').attr('action','http://localhost/pendaftaran/public/pendaftaran/ubah');

        const id= $(this).data('id');
        console.log(id);

        $.ajax({
            url:'http://localhost/pendaftaran/public/Pendaftaran/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#fakultas').val(data.fakultas);
                $('#pil_lomba').val(data.pil_lomba);
                $('#motivasi').val(data.motivasi);
                $('#id').val(data.id);

            }
        });


    });
   

});