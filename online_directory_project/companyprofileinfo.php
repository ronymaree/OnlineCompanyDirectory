 <?php
                  $sql = "SELECT * FROM company_table WHERE login_id=" . $userid;
                  $result = mysqli_query($mysqli, $sql);
                  while($row = mysqli_fetch_assoc($result)){
                   print '<div class ="user-profile">';
                       print '<table>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Company Name: </strong></td>';
                       print '<td id="profile-text">' .$row['company_name']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>BRN:</strong></td>';
                       print '<td id="profile-text">' .$row['brn']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Address:</strong>';
                       print '<td id="profile-text">' .$row['address']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Town: </strong></td>';
                       print '<td id="profile-text">' .$row['main_town']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>ZIP Code: </strong></td>';
                       print '<td id="profile-text">' .$row['zip_code']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>First Name: </strong></td>';
                       print '<td id="profile-text">' .$row['first_name']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Last Name: </strong></td>';
                       print '<td id="profile-text">' .$row['last_name']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Email Address: </strong></td>';
                       print '<td id="profile-text">' .$row['email']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Mobile Phone: </strong></td>';
                       print '<td id="profile-text">' .$row['tel_mobile']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Website: </strong></td>';
                       print '<td id="profile-text">' .$row['website']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Other Telephone: </strong></td>';
                       print '<td id="profile-text">' .$row['tel_other']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Fax: </strong></td>';
                       print '<td id="profile-text">' .$row['fax']. '</td>';
                       print '</tr>';
                       print '<tr>';
                       print '<td id="profile-text"><strong>Company rating: </strong></td>';
                       print '<td id="profile-text">' .$row['company_rating']. '</td>';
                       print '</tr>';
                       print '</table>';
                     print '</div>';
                   }
                ?>