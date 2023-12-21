<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reigister</title>
    <link rel="stylesheet" href="back/css/style.css">
    <!-- Tambahkan tag skrip Ionicons jika belum ada -->
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2>Register</h2>

                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <label>Name</label>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label>Email Address</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <label>Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label>Confirm Password</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <label for="level" class="col-md-4 col-form-label text-md-end"></label>
                        <div class="col-md-6">
                            <select id="level" name="level" class="form-control @error('level') is-invalid @enderror" required autocomplete="level" autofocus>
                                <option value="penulis" {{ old('level') == 'penulis' ? 'selected' : '' }}>Penulis</option>
                            </select>
                            @error('level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>