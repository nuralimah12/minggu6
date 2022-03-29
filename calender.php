<!DOCTYPE html>
<html>
    <head>
        <title>KALENDER</title><br>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class>
        <?php
            $day = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
            $tglskrng = date("d");
            
            echo "<table>";
            echo "<tr>";
            echo "<td width='40px'>".date("F")."</td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'></td>";
            echo "<td width='40px'>" .date("Y")."</td>";
            echo "</tr>";         
            echo "</table>";
            echo "<table> ";
           

            $tgl = 1;
            echo "<hr>";
            echo "<table>";
            for($i = 0; $i<6; $i++){
                echo "<tr>";
                if ($i == 1){
                    echo "<hr>";
                    foreach ($day as $value){
                        
                        if($value == "Sun"){
                        echo "<td align='center' width='40px'><p style='color:red'>$value</p></td>";
                        }else{
                        echo "<td align='center' width='40px' >$value </td>";
                        }
                    }
                }
            }


            for($j = 1;$j<6;$j++){
                if($j == 1){
                    echo '<tr>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center">1</td>
                    <td align="center">2</td>
                    <td align="center">3</td>
                    <td align="center">4</td>
                    <td align="center">5</td>
                    </tr>';
                }else if($j == 2){
                    echo '<tr>
                    <td align="center"><font color="#FF0000"><b>6</font></td>
                    <td align="center">7</td>
                    <td align="center">8</td>
                    <td align="center">9</td>
                    <td align="center">10</td>
                    <td align="center">11</td>
                    <td align="center">12</td>
                    </tr>';
                }else if($j == 3){
                    echo '<tr>
                    <td align="center"><font color="#FF0000"><b>13</font></td>
                    <td align="center">14</td>
                    <td align="center">15</td>
                    <td align="center">16</td>
                    <td align="center">17</td>
                    <td align="center">18</td>
                    <td align="center">19</td>
                    </tr>';
                }else if($j == 4){
                    echo '<tr>
                    <td align="center"><font color="#FF0000"><b>20</font></td>
                    <td align="center">21</td>
                    <td align="center">22</td>
                    <td align="center">23</td>
                    <td align="center">24</td>
                    <td align="center">25</td>
                    <td align="center">26</td>
                    </tr>';
                }else{
                    echo '<tr>
                        <td align="center"><font color="#FF0000"><b>27</font></td>
                        <td align="center">28</td>
                        <td align="center">29</td>
                        <td align="center">30</td>
                        <td align="center">31</td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>';
                }  
            } 
               
        ?>
        </div>
</body>
</html>
             