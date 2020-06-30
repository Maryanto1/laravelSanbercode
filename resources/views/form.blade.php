<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanbercode</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
<form action="{{url('/welcome')}}">
                <label for="first-name">First name:</label>
                <br><br>
                <input id="first-name"type="text" required>

                <br><br>
                <label for="Last-name">Last name:</label>
                <br><br>
                <input id="Last-name"type="text" required> 
                <br>
                <br>
                <label >Gender:</label>
                    <br>
                    <br>
                    <input required type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input required type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input required type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                    <br>
                    <br>
                    <label for="">Nationality:</label>
                    <br>
                    <br>
                    <select>
                      <option value="volvo">Indonesian</option>
                      <option value="saab">Malaysian</option>
                      <option value="opel">English</option>
                      <option value="audi">Bangladesh</option>
                    </select>
                    <br>
                    <br>
                    <label for="">Language Spoken:</label>
                    <br>
                    <br>
                    <input  type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Bahasa Indonesia</label><br>
                    <input  type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> English</label><br>
                    <input  type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Other</label>
                    <br>
                    <br>
                    <label for="text-area">Bio:</label>
                    <br>
                    <br>
                    <textarea name="" id="text-area" cols="30" rows="10"></textarea>
                    <br>
                    <br>
                    <button type="submit">Sign Up</button>
    </form>

</body>
</html>