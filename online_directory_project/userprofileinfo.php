 <?php
                  $sql = "SELECT * FROM customer_table WHERE login_id=" . $userid;
                  $result = mysqli_query($mysqli, $sql);
                  while($row = mysqli_fetch_assoc($result)){
                   print '<div class ="user-profile">';
                       print '<table>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>First Name: </strong></td>';
                       print '<td id="profile-text">' .$row['first_name']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Last Name: </strong></td>';
                       print '<td id="profile-text">' .$row['last_name']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Date of Birth: </strong></td>';
                       print '<td id="profile-text">' .$row['dob']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Email Address: </strong></td>';
                       print '<td id="profile-text">' .$row['email']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Mobile Phone: </strong></td>';
                       print '<td id="profile-text">' .$row['tel_mob']. '</td>';
                       print '</tr>';
                       print '<td id="profile-text"><strong>User rating: </strong></td>';
                       print '<td id="profile-text">' .$row['user_rating']. '</td>';
                       print '</tr>';
                       print '</table>';
                     print '</div>';
                   }
                ?>