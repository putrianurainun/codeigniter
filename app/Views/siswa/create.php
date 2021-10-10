<html>
    <title>siswa</title>
    <body>
        <form action="/siswaController/save" method="post">
            <table>
                <tr>
                    <th>Jurusan</th>
                    <td>:</td>
                    <td><select name="id_jurusan">
                    <?php foreach($jurusan as $jur): ?>
                         <option value="<?php echo $jur['id_jurusan'] ?>"><?php echo $jur['nama_jurusan'] ?></option>
                        <?php endforeach; ?>  
                    </select></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td>:</td>
                    <td><input type="text" name="nama_siswa"></td>
                </tr>
                <tr>
                    <th colspan="3"><button type="submit" class="btn btn-success">Submit</button></th>
                </tr>
            </table>
        </form>
    </body>
</html>