<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="NurBagusSajiwo 2072043">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Form</title>
</head>

<body>
   
        <form action="index.php" name="formIsian">
            <div style=" text-align: center;">
                <h2>Form input</h2>
            </div>
            <div>
                <table align="center" >
                    <tr>
                        <td width=110px>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td width=110px>Email</td>
                        <td>:</td>
                        <td><input type="email" name="em"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td width=110px>Phone number</td>
                        <td>:</td>
                        <td><input type="number" name="pn"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td width=110px>Hobby</td>
                        <td>:</td>
                        <td><input type="text" name="hb"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td width=110px>Description</td>
                        <td>:</td>
                        <td><textarea name="desc" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                </table>
            </div>
            <div style="width: 100%; text-align: center;">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
          
        </form>
    
</body>

</html>