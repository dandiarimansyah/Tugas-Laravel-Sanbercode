<html>

<head>
    <title>Form Pendaftaran</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
        @csrf

        <label for="firstname">First name:</label> <br><br>
        <input type="text" id="firstname" name="firstname">
        <br><br>

        <label for="lastname">Last name:</label> <br><br>
        <input type="text" id="lastname" name="lastname">
        <br><br>

        <input type="radio" name="gender" value="0">Male <br>
        <input type="radio" name="gender" value="1">Female <br>
        <input type="radio" name="gender" value="2">Other <br><br>

        <label>Nationality:</label> <br><br>
        <select>
            <option value="indonesian">Indonesian</option>
            <option value="chinese">Chinese</option>
            <option value="japanese">Japanese</option>
        </select>
        <br><br>

        <label>Language Spoken:</label> <br><br>
        <input type="checkbox" value="bhs_indo">Bahasa Indonesia <br>
        <input type="checkbox" value="bhs_inggris">English <br>
        <input type="checkbox" value="other">Other <br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        <button type="submit">Sign Up</button>

    </form>
</body>

</html>