<?php 
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    include 'core.class.php';
    $can = new CanCore();
/*
$sql = "SELECT * FROM tech_candidates INNER JOIN tech_can_exp ON tech_candidates.tech_can_id= tech_can_exp.tech_can_id";*/


$sql = "SELECT tech_candidates.tech_can_id, tech_candidates.tech_can_fullname, tech_candidates.tech_can_email, tech_candidates.tech_can_mobile,  tech_candidates.tech_can_gender, tech_candidates.tech_can_dor, tech_candidates.tech_can_appliedposition , SUM(tech_can_exp.tech_can_exp_years) AS sumval FROM tech_candidates INNER JOIN tech_can_exp ON tech_candidates.tech_can_id = tech_can_exp.tech_can_id  WHERE tech_candidates.tech_can_status =0 GROUP BY tech_candidates.tech_can_id" ;

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
                  <!-- <th> Total Experience </th>-->
                    <th> Action </th>        
                </tr>";
                
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                 $b = $row['tech_can_id'];
                $_SESSION['me'] = $b;
    echo "<tr>";
    echo "<td>" . $row['tech_can_id'] . "</td>";
    echo "<td>" . $row['tech_can_fullname'] . "</td>";
    echo "<td>" . $row['tech_can_email'] . "</td>";
    echo "<td>" . $row['tech_can_mobile'] . "</td>";
    echo "<td>" . $row['tech_can_gender'] . "</td>";
    echo "<td>" . $row['tech_can_dor'] . "</td>";
    //echo "<td>" . $row['sumval'] . "</td>";
    echo "<td>";
    echo "<a href='update_list.php?tech_can_id=$b'>View &nbsp;</a>";
    echo "<a href='update_list.php?tech_can_id=$b'>Edit &nbsp;</a>";
    echo "<a href='users/hr/date.php?tech_can_id=$b'>Reject &nbsp;</a>";
    echo "<a href='users/hr/hr_approve.php?tech_can_id=$b'>Approve &nbsp;</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
echo '</div>';
 ?>

