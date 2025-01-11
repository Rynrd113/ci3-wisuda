<main class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Validasi Pembayaran</h4>
                </div>
                <div class="card-body">
                    <!-- Form Validasi Pembayaran -->
                    <form class="form form-horizontal" id="payment-validation-form">
                        <div class="row">
                            <!-- NIM -->
                            <div class="col-md-4">
                                <label for="student-id">NIM</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="student-id" class="form-control" name="student-id"
                                                required placeholder="NIM">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Status -->
                            <div class="col-md-4">
                                <label for="payment-status">Status Pembayaran</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select id="payment-status" class="form-control" name="payment-status"
                                                required>
                                                <option value="paid">Lunas</option>
                                                <option value="unpaid">Belum Lunas</option>
                                            </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-cash-stack"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Validasi Pembayaran</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Informasi Keuangan</h4>
                </div>
                <!-- Tabel Informasi Keuangan -->
                <div class="card-body">
                    <table class="table table-striped" id="financial-info-table">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Jumlah Tunggakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456789</td>
                                <td>John Doe</td>
                                <td><span class="badge bg-success">Lunas</span></td>
                                <td>Rp0,00</td>
                            </tr>
                            <tr>
                                <td>987654321</td>
                                <td>Jane Smith</td>
                                <td><span class="badge bg-danger">Belum Lunas</span></td>
                                <td>Rp7.500.000,00</td>
                            </tr>
                            <!-- Baris tambahan dapat ditambahkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>