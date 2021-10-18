<?php
    echo("<table align=center border=1 > 
            <tr>
                <td  align=center bgcolor=green colspan=2>Kalkulator</td>
            </tr>
            <tr>
                <td bgcolor=lightgreen>Angka pertama</td>
                <td align=center width=130px>" . $_GET["anp"] . "</td>
            </tr>
            
            <tr>
                <td bgcolor=lightgreen>Angka kedua</td>
                <td align=center width=130px>" . $_GET["ak"] . "</td>
            </tr>
            <tr>
                <td bgcolor=lightgreen>Operator</td>
                <td align=center width=130px>" . $_GET["op"] . "</td>
            </tr>
            <tr>
                <td align=center colspan=2 bgcolor=green>
                    hasil = ??
                </td>
            </tr>
        </table>");

?>