<main class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Foto untuk Validasi</h4>
                    <button id="download-all-photos" class="btn btn-primary">
                        Unduh Semua Foto
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12345678</td>
                                <td>John Doe</td>
                                <td>
                                    <img src="path/to/photo1.jpg" alt="Foto John Doe" width="100" />
                                </td>
                                <td><span class="badge bg-success">Valid</span></td>
                                <td>
                                    <button class="btn btn-success">Valid</button>
                                    <button class="btn btn-danger">Tidak Valid</button>
                                </td>
                            </tr>
                            <tr>
                                <td>87654321</td>
                                <td>Jane Smith</td>
                                <td>
                                    <img src="path/to/photo2.jpg" alt="Foto Jane Smith" width="100" />
                                </td>
                                <td>
                                    <span class="badge bg-danger">Tidak Valid</span>
                                </td>
                                <td>
                                    <button class="btn btn-success">Valid</button>
                                    <button class="btn btn-danger">Tidak Valid</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
