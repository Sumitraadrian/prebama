<div class="col-12">
                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                    <h2><strong>Daftar Sebagai Penjual</strong></h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <form action="aksi/aksi_register.php" method="post">
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" id="name" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <input type="hidden" id="penjual" name="level" value="penjual"  >
                                    <input type="hidden" id="status" name="status" value="aktif"  >
                                    <!-- <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input type="password" id="password-confirm" class="form-control" required>
                                    </div> -->
                                    <div class="form-group">
                                        <!-- <div class="form-check">
                                            <input type="checkbox" id="agree" class="form-check-input" required>
                                            <label for="agree" class="form-check-label ml-2">I agree to Terms and Conditions</label>
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-dark">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </main>
                <!-- Main Content -->
            </div>