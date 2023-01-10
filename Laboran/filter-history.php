<form action="" method="post">
            <select name="status">
              <option value="all">all</option>
              <option value="terima">terima</option>
              <option value="tolak" selected>tolak</option>
            </select>
            <input type="submit" value="Filter">
          </form>

          <?php
                // Connect to the database
                include 'koneksi.php';

                // Check if the status filter has been set
                if (isset($_POST['status'])) {
                // Set the WHERE clause of the SQL query based on the value of the status filter
                  if ($_POST['status'] == 'all') {
                    $where = "WHERE status = 'terima' OR 'tolak'";
                  } else if ($_POST['status'] == 'terima') {
                    $where = "WHERE status = 'terima'";
                  } else if ($_POST['status'] == 'tolak') {
                    $where = "WHERE status = 'tolak'";
                  }


                // Execute the SQL query
                $sql = "SELECT * FROM peminjaman $where";
                $query = mysqli_query($db, $sql);
                $no = 1;
                while ($form = mysqli_fetch_array($query)) {
                  // Generate a row of the HTML table
                  echo "<tr>";
                  echo "<td>" . $no++ . "</td>";
                  echo "<td>" . $form['nim'] . "</td>";
                  echo "<td>" . $form['nama_mahasiswa'] . "</td>";
                  echo "<td>" . $form['anggota'] . "</td>";
                  echo "<td>" . $form['keperluan'] . "</td>";
                  echo "<td>" . $form['hari'] . "</td>";
                  echo "<td>" . $form['kode_ruangan'] . "</td>";
                  echo "<td>" . $form['dosen_penanggung_jawab'] . "</td>";
                  echo "<td>" . $form['tanggal_peminjaman'] . "</td>";
                  echo "<td>" . $form['jam_pinjaman_awal'] . "</td>";
                  echo "<td>" . $form['jam_pinjaman_akhir'] . "</td>";
                  echo "<td>" . $form['status'] . "</td>";
                  echo "<td>";
                  echo "<a href='hapus-history.php?no_form=" . $form['no_form'] . "' class='btn btn-sm btn-danger'>Hapus</a>";
                  echo "</td>";
                  echo "<tr>";
                }
              }
                ?>