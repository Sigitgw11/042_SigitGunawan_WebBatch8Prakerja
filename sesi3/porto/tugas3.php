<html>
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" href="tugas3.css">
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">product</a></li>
                <li><a href="#">gallery</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">my inventory</a></li>
            </ul>
        </nav>

        <section>
            <div class="cards">
                <div class="column">
                    <img class="img" src="hacktiv8.png" alt="" />
                    <p class="judul-foto">Avatar</p>
                </div>
                <div class="column">
                    <h1 style="margin-top: 8px;">Sigit Gunawan</h1>
                    <p style="margin-top: 8px;">Front End Developer</p>
                    <div class="row top">
                        <button class="btn-column1">Kontak</button>
                        <button class="btn-column2">Resume</button>
                    </div>
                </div>
                <div class="column">
                    <table class="tabel">
                        <tr>
                            <td >Availability</td>
                            <td> : </td>
                            <td>Full Time</td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td> : </td>
                            <td>22 Tahun</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td> : </td>
                            <td>Karawang, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Pengalaman</td>
                            <td> : </td>
                            <td>1 Tahun</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td> : </td>
                            <td>Sigitgunawan2580@gmail.com</td>
                        </tr>
                    </table>
                </div>
            </div>
        
        <section>
            <form action="return false;">
                <div class="card-form">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" required/>
                    <br>
                    <label for="role">Role</label>
                    <input type="text" name="role" required/>
                    <br>
                    <label for="availability">Availability</label>
                    <input type="text" name="availability" required/>
                    <br>
                    <label for="age">Age</label>
                    <input type="number" name="usia" required/>
                    <br>
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" required/>
                    <br>
                    <label for="experience">Year Experience</label>
                    <input type="number" name="yexp" required/>
                    <br>
                    <label for="email">Email</label>
                    <input type="text" name="email"/>
                    <br>

                <input style="cursor: pointer" type="submit" value="SUBMIT">
                </diiv>
            </form>
        </section>

    </body>
</html>