<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="NurBagusSajiwo 2072043">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Form</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    
</style>

<body>
   
        <form action="index2.php" name="formIsian">
            <div>
                <table align="center" border=1 > 
                    <tr>
                        <td  align=center bgcolor=red colspan=2>Kalkulator</td>
                    </tr>
                    <tr>
                        <td bgcolor=pink>Angka pertama</td>
                        <td><input type="number" name="anp"></td>
                    </tr>
                    <tr>
                        <td bgcolor=pink>Angka kedua</td>
                        <td><input type="number" name="ak"></td>
                    </tr>
                    <tr>
                        <td bgcolor=pink>Operator</td>
                        <td><select name="op">
                                <option selected disabled></option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align=center colspan=2 bgcolor=red>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    
</body>

</html>