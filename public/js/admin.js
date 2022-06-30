// Data wilayah

$(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#provinsi').on('change', function () {
        let id_provinsi = $('#provinsi').val();

        $.ajax({
            type: 'POST',
            url: "{{route('/get-kabupaten')}}",
            data: { id_provinsi: id_provinsi },
            cache: false,

            success: function (msg) {
                $('#kabupaten').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            }
        })
    })

    $('#kabupaten').on('change', function () {
        let id_kabupaten = $('#kabupaten').val();

        $.ajax({
            type: 'POST',
            url: "{{route('/get-kecamatan')}}",
            data: { id_kabupaten: id_kabupaten },
            cache: false,

            success: function (msg) {
                $('#kecamatan').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            }
        })
    })

    $('#kecamatan').on('change', function () {
        let id_kecamatan = $('#kecamatan').val();

        $.ajax({
            type: 'POST',
            url: "{{route('/get-kelurahan')}}",
            data: { id_kecamatan: id_kecamatan },
            cache: false,

            success: function (msg) {
                $('#kelurahan').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            }
        })
    })
});

// End Data Wilayah