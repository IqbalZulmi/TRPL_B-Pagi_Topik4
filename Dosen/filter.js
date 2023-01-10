document.getElementById('hari').addEventListener('change', function() {
    var hari = this.value;

    // Kirim data ke server menggunakan metode HTTP POST
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'filter.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            // Ambil data yang dikembalikan oleh server
            var data = JSON.parse(this.responseText);

            // Kosongkan elemen HTML dropdown (select)
            document.getElementById('ruang').innerHTML = '';

            // Isi elemen HTML dropdown (select) dengan data yang diambil dari database
            data.forEach(function(item) {
                var option = document.createElement('option');
                option.value = item.kode_ruangan;
                option.innerHTML = item.kode_ruangan;
                document.getElementById('ruang').appendChild(option);
            });
        }
    };
    xhr.send('hari=' + hari);
});