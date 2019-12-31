<h2>Data Buku</h2>
<!DOCTYPE html>
<html>
    <head>
        <title>Remove HTML Table Selected Row</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            td:last-child{;cursor: pointer;}
        </style>
    </head>
    <body>
        
        <table id="table" class="table table-boredered">
            <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Buku</th>
            <th>Foto</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1.</td>
                <td>Syarah Hadits Hukum Bukhari Muslim</td>
                <td>Hadits</td>
                <td><img src="assets/img/as.jpg" width="60"></td>
                <td><button class="btn btn-danger">Hapus</button></td>
            </tr>
            
            <tr>
                <td>2.</td>
                <td>Aqidah Salaf Ahlu Sunnah Wal Jamaah</td>
                <td>Aqidah</td>
                <td><img src="assets/img/bsj.png" width="60"></td>
                <td><button class="btn btn-danger">Hapus</button></td>
            </tr>
            
            <tr>
                <td>3.</td>
                <td>Fiqih Sunnah Imam Syafii</td>
                <td>Fiqih</td>
                <td><img src="assets/img/bsj1.jpg" width="60"></td>
                <td><button class="btn btn-danger">Hapus</button></td>
            </tr>
            
            <tr>
                <td>4.</td>
                <td>Ilmu Dakwa</td>
                <td>Dakwa</td>
                <td><img src="assets/img/bsj2.jpg" width="60"></td>
                <td><button class="btn btn-danger">Hapus</button></td>
            </tr>
            
           <tr>
                <td>5.</td>
                <td>Quantum Dakwah dan Tarbiyah</td>
                <td>Dakwa dan Tarbiyah</td>
                <td><img src="assets/img/bsj3.jpg" width="60"></td>
                <td><button class="btn btn-danger">Hapus</button></td>
            </tr>

            </tbody>
        </table>
        
        <script>
    
            var index, table = document.getElementById('table');
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].cells[4].onclick = function()
                {
                    var c = confirm("Apakah kamu akan menghapus Produk ini");
                    if(c === true)
                    {
                        index = this.parentElement.rowIndex;
                        table.deleteRow(index);
                    }
                    
                    //console.log(index);
                };
                
            }
    
        </script>
        
    </body>
</html>