<html>

<head>
    <title>Transaksi Penjualan Sepatu </title>
</head>

<body>
    <center>
        <form action="<?= base_url('Tokosepatu/cetak'); ?> "method="post">
            <table bgcolor="purple">
                <tr>
                    <th colspan="3">
                        Transaksi Penjualan Sepatu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                            <hr>
                    </td>
                </tr>
                    <th>Nama Pembeli</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="no" id="no">
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">Pilih Merk Sepatu</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="kickers">Kickers</option>
                            <option value="eiger">Eiger</option>
                            <option value="buccherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option value="">Pilih Ukuran</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>  
                            <option value="38">38</option>  
                            <option value="39">39</option>  
                            <option value="40">40</option>    
                            <option value="41">41</option>  
                            <option value="42">42</option>  
                            <option value="43">43</option>  
                            <option value="44">44</option>    
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align ="center" colspan="3">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>