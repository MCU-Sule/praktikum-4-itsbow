<?php
    echo("<br><hr>");
    echo("<h1 align=center>Form input berhasil diterima</h1>");
    echo("<table align=center>
        <tr>
        <td>Nama saya adalah ". $_GET["nm"] ."
        </td>
        </tr>
        </table>");
    echo("<table align=center>
        <tr>
        <td>Email saya yaitu ". $_GET["em"] ."
        </td>
        </tr>
        </table>");
    echo("<table align=center>
        <tr>
        <td>No hp saya adalah ". $_GET["pn"] ."
        </td>
        </tr>
        </table>");
    echo("<table align=center>
        <tr>
        <td>hobby saya yaitu ". $_GET["hb"] ."
        </td>
        </tr>
        </table>");
    echo("<table align=center>
        <tr>
        <td>deskripsi diri saya adalah ". $_GET["desc"] ."
        </td>
        </tr>
        </table>");
    echo("<br><hr>");

?>