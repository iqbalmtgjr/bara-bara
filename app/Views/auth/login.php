<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="col-md-6 offset-md-3">
    <div class="row">
        <div class="col align-self-center">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title mt-3">Login</h4>
                </div>
                <div class="card-body">
                    <!-- Form -->
                    <form>
                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                        </div>
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button> <br>
                            <!-- Google Login Button -->
                            <a href="#" class="btn btn-danger mt-2" onclick="loginWithGoogle()">Login with Google</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>