<main class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Validasi Toga</h4>
                </div>
                <div class="card-body">
                    <!-- Form Validasi Toga -->

                    <form class="form form-horizontal" id="toga-validation-form">
                        <div class="row">
                            <!-- NIM -->
                            <div class="col-md-4">
                                <label for="nim">NIM</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="nim" class="form-control" name="nim" required
                                                placeholder="NIM" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-badge"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Nama -->
                            <div class="col-md-4">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="nama" class="form-control" name="nama" required
                                                placeholder="Nama" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tanggal Pengambilan -->
                            <div class="col-md-4">
                                <label for="toga-date">Tanggal Pengambilan</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="date" id="toga-date" class="form-control" name="toga-date"
                                                required />
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item Toga -->
                            <div class="col-md-4">
                                <label for="toga-items">Item Toga</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="baju-toga" name="toga-items"
                                        value="Baju Toga" />
                                    <label class="form-check-label" for="baju-toga">Baju Toga</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="topi-toga" name="toga-items"
                                        value="Topi Toga" />
                                    <label class="form-check-label" for="topi-toga">Topi Toga</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="samir-fakultas"
                                        name="toga-items" value="Samir sesuai fakultas" />
                                    <label class="form-check-label" for="samir-fakultas">Samir sesuai fakultas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="name-tag" name="toga-items"
                                        value="Name tag dan nomor urut" />
                                    <label class="form-check-label" for="name-tag">Name tag dan nomor urut</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="slempang" name="toga-items"
                                        value="Slempang" />
                                    <label class="form-check-label" for="slempang">Slempang</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dasi-toga" name="toga-items"
                                        value="Dasi toga" />
                                    <label class="form-check-label" for="dasi-toga">Dasi toga, khusus untuk yang bukan
                                        pascasarjana</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sleber" name="toga-items"
                                        value="Sleber atau kerah wisuda" />
                                    <label class="form-check-label" for="sleber">Sleber atau kerah wisuda</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gordon" name="toga-items"
                                        value="Gordon atau medali wisuda" />
                                    <label class="form-check-label" for="gordon">Gordon atau medali wisuda</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="map-wisuda" name="toga-items"
                                        value="Map wisuda" />
                                    <label class="form-check-label" for="map-wisuda">Map wisuda</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tabung-wisuda" name="toga-items"
                                        value="Tabung wisuda" />
                                    <label class="form-check-label" for="tabung-wisuda">Tabung wisuda</label>
                                </div>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                    Validasi Toga
                                </button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Tabel Data Validasi -->
            <div class="card">
                <div class="card-header">
                    <h4>Data Validasi Toga</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="validation-data-table">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Item</th>
                                <th>Rincian Item</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456789</td>
                                <td>John Doe</td>
                                <td>8/10</td>
                                <td>
                                    Baju Toga, Topi Toga, Samir sesuai fakultas, Name tag
                                    dan nomor urut, Slempang, Dasi toga, Sleber atau kerah
                                    wisuda, Gordon atau medali wisuda
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm"
                                        onclick="printReceipt('123456789', 'John Doe', '8/10', 'Baju Toga, Topi Toga, Samir sesuai fakultas, Name tag dan nomor urut, Slempang, Dasi toga, Sleber atau kerah wisuda, Gordon atau medali wisuda')">
                                        Cetak Kwitansi
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>987654321</td>
                                <td>Jane Smith</td>
                                <td>7/10</td>
                                <td>
                                    Baju Toga, Topi Toga, Samir sesuai fakultas, Name tag
                                    dan nomor urut, Slempang, Sleber atau kerah wisuda,
                                    Gordon atau medali wisuda
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm"
                                        onclick="printReceipt('987654321', 'Jane Smith', '7/10', 'Baju Toga, Topi Toga, Samir sesuai fakultas, Name tag dan nomor urut, Slempang, Sleber atau kerah wisuda, Gordon atau medali wisuda')">
                                        Cetak Kwitansi
                                    </button>
                                </td>
                            </tr>
                            <!-- Baris tambahan dapat ditambahkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>