<!-- user_form.php -->
<form id="userForm">
    <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo"><br><br>
    
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>
    
    <label for="prefix">Prefix:</label>
    <input type="text" id="prefix" name="prefix" required><br><br>
    
    <label for="suffix">Suffix:</label>
    <input type="text" id="suffix" name="suffix" required><br><br>
    
    <label for="nip">NIP:</label>
    <input type="text" id="nip" name="nip" pattern="\d{18}" title="NIP must be 18 digits" ><br><br>
    
    <label for="nik">NIK:</label>
    <input type="text" id="nik" name="nik" pattern="\d{16}" title="NIK must be 16 digits" required><br><br>
    
    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    
    <label for="address">Address:</label>
    <textarea id="address" name="address"></textarea><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="level">Level:</label>
    <select id="level" name="level">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br><br>
    
    <button type="submit">Submit</button>
</form>

<div id="userData"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#userForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '<?= base_url('user/store') ?>',
                data: $(this).serialize(),
                success: function(response) {
                    $('#userData').html('<p>Name: ' + response.fullname + '</p><p>Email: ' + response.email + '</p>');
                    $('#userForm')[0].reset();
                },
                error: function() {
                    alert('Error submitting data');
                }
            });
        });
    });
</script>
