<main class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Kelola Akun</h4>
                </div>
                <div class="card-body">
                    <!-- Tabel Kelola Akun -->
                    <table class="table table-striped" id="manage-account-table">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456789</td>
                                <td>John Doe</td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>987654321</td>
                                <td>Jane Smith</td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            <!-- Baris tambahan dapat ditambahkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Validasi Akun</h4>
                </div>
                <div class="card-body">
                    <p>Validasi akun mahasiswa dan kelola status mereka.</p>
                    <!-- Tabel Validasi Akun -->
                    <table class="table table-striped" id="account-validation-table">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456789</td>
                                <td>John Doe</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                                <td>
                                    <button class="btn btn-success">Aktif</button>
                                    <button class="btn btn-danger">Tidak Aktif</button>
                                </td>
                            </tr>
                            <tr>
                                <td>987654321</td>
                                <td>Jane Smith</td>
                                <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                <td>
                                    <button class="btn btn-success">Aktif</button>
                                    <button class="btn btn-danger">Tidak Aktif</button>
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