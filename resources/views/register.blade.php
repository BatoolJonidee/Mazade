<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/register.css">
    <title>Laravel</title>
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @error('fname')
        <div class="alert alert-danger" role="alert" style="width: 100%">
            {{ $message }}
        </div>
    @enderror
    @error('lname')
        <div class="alert alert-danger" role="alert" style="width: 100%">
            {{ $message }}
        </div>
    @enderror
    @error('email')
        <div class="alert alert-danger" role="alert" style="width: 100%">
            {{ $message }}
        </div>
    @enderror
    @error('password')
        <div class="alert alert-danger" role="alert" style="width: 100%">
            {{ $message }}
        </div>
    @enderror
    @error('conf-password')
        <div class="alert alert-danger" role="alert" style="width: 100%">
            {{ $message }}
        </div>
    @enderror
    @error('phone')
        <div class="alert alert-danger" role="alert" style="width: 100%">
            {{ $message }}
        </div>
    @enderror
    <select id="selectType">
        <option value="">Select Type</option>
        <option value="1">User</option>
        <option value="2">Company</option>
    </select>
    <form action=" {{ url('userReg') }} " method="POST" id="userForm">
        @csrf
        <input type="text" placeholder="First Name" name="fname"><br>
        <input type="text" placeholder="Last Name" name="lname"><br>
        <input type="email" placeholder="Ema-il" name="email"><br>
        <input type="password" placeholder="8-32 charchters(capital,small letters, number nd special char.)"
            name="password"><br>
        <input type="password" placeholder="Confirm Password" name="conf-password"><br>
        <input type="number" placeholder="phone (14 digits)" name="phone"><br><br>
        <input type="submit" value="Register">
    </form>
    <form action=" {{url('companyReg')}} " method="POST" id="companyForm">
        @csrf
        <input type="text" placeholder="Company Name" name="name"><br>
        <input type="email" placeholder="Ema-il" name="email"><br>
        <input type="password" placeholder="8-32 charchters(capital,small letters, number nd special char.)"
            name="password"><br>
        <input type="password" placeholder="Confirm Password" name="conf-password"><br>
        <input type="number" placeholder="Phone" name="phone"><br>
        <input type="number" placeholder="Commercial Register" name="commercial_register"><br>
        <textarea cols="20" rows="5" placeholder="Company Address" name="address"></textarea><br>

    </form>
    <script>
        let selectType = document.getElementById('selectType');
        selectType.addEventListener('change', function() {
            if (selectType.value == 1) {
                document.getElementById('userForm').style.display = 'block';
                document.getElementById('companyForm').style.display = 'none';
            }
            if (selectType.value == 2) {
                document.getElementById('companyForm').style.display = 'block'
                document.getElementById('userForm').style.display = 'none';
            }
        })
    </script>
</body>

</html>
