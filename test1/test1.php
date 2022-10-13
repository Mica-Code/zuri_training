<form action="user_data.php" method="POST">

        <label for="name">Name:

            <input type="text" name="name">

        </label>

        <br>

        <label for="email">Email:

            <input type="text" name="email">

        </label>

        <br>

        <label for="dob">Date of Birth:

<input type="date" name="dob">

</label>

<br>

<label>Gender</label>
<select name="gender">
    <option disabled>--Select a Gender--</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="no_res">Rather Not Say</option>

</select>


<br>

<label>Country</label>
<select name="country">
    <option disabled>--Select a Country--</option>
    <option value="nigeria">Nigeria</option>
    <option value="gambia">Gambia</option>
    <option value="south">South Africa</option>

</select>

        <br>

        <br>

        <button type="submit">Submit</button>

    </form>

 

