<?php 
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    $can = new CanCore();


$sql = "SELECT tech_candidates.tech_can_id, tech_candidates.tech_can_fullname, tech_candidates.tech_can_email, tech_candidates.tech_can_mobile,  tech_candidates.tech_can_gender, tech_candidates.tech_can_status , tech_candidates.tech_can_dor, tech_candidates.tech_can_appliedposition , tech_candidates.tech_can_technical_assign, tech_candidates.tech_can_hr_comment,SUM(tech_can_exp.tech_can_exp_years) AS sumval FROM tech_candidates INNER JOIN tech_can_exp ON tech_candidates.tech_can_id = tech_can_exp.tech_can_id WHERE tech_candidates.tech_can_status =0 GROUP BY tech_candidates.tech_can_id" ;

$result = $can->connection->query($sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($can->connection));
    exit();
}

echo '<div class="right_col" role="main">';
echo "<table border='1px'>   
            <thead>   
                <tr>  
                    <th> SR.NO. </th>   
                    <th> Name </th>
                    <th> Email </th>   
                    <th> Mobile </th>   
                    <th> Gender </th>        
                    <th> Date of registration </th>
                    <th> Position applied </th>
                    <th> Total Experience </th>
                    <th> Hr comment </th>
                    <th> Action </th>        
                </tr>";
                

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
           
                $h = $row['tech_can_id'];
                $g = round($row['sumval'],2); //round off total exp 
    echo "<tr>";
    echo "<td>" . $row['tech_can_id'] . "</td>";
    echo "<td>" . $row['tech_can_fullname'] . "</td>";
    echo "<td>" . $row['tech_can_email'] . "</td>";
    echo "<td>" . $row['tech_can_mobile'] . "</td>";
    echo "<td>" . $row['tech_can_gender'] . "</td>";
    echo "<td>" . $row['tech_can_dor'] . "</td>";
    echo "<td>" . $row['tech_can_appliedposition'] . "</td>";
    echo "<td>" . $g . "</td>";
    echo "<td>" . $row['tech_can_hr_comment'] . "</td>";
    echo "<td>";
    if($row['tech_can_technical_assign'] == $role){  
    echo "<a href='tech_list_view.php?tech_can_id=$h'>View &nbsp;</a>";
    //echo "<a href='tech_list_update.php?tech_can_id=$h'>Edit &nbsp;</a>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

 ?>
