<div class="table">
<?php

//print '<pre>'.print_r($user, 1).'</pre>';

$customer_id = $user['login_id'];


$sql = "SELECT * FROM request_table Where customer_id = $customer_id";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    print '<table id="table">';
    print '<tr>';
        print '<th>Date</th>';
        print '<th>Service</th>';
        print '<th>Category</th>';
        print '<th>Description</th>';
        print '<th>Town</th>';
        print '<th>Address</th>';
        print '<th>Budget</th>';
        print '<th>Date of Closure</th>';
        print '<th>Due Date</th>';
        print '<th> </th>';
    print '</tr>';
    while($row = mysqli_fetch_assoc($result)) {
        //print '<pre>'.print_r($row, 1).'</pre>';
        $company_services[$row['service_id']][] = $row['category_id']; 
        $service_id = $row['service_id'];
        $category_id = $row['category_id'];

        $sql_request = "SELECT * FROM request_table rt, services_table st, category_table ct Where st.service_id = rt.service_id AND ct.cat_id = rt.category_id AND rt.service_id = $service_id AND rt.category_id = $category_id";
        $result_request = mysqli_query($mysqli, $sql_request);
        if (mysqli_num_rows($result_request) > 0) {
            while($row_request = mysqli_fetch_assoc($result_request)) {
                //print '<pre>'.print_r($row_request, 1).'</pre>';
                print '<tr onClick = "readValues(this)">';
                    print '<td>'.$row_request['date_of_request'].'</td>';
                    print '<td>'.$row_request['service'].'</td>';
                    print '<td>'.$row_request['category'].'</td>';
                    print '<td>'.$row_request['description'].'</td>';
                    print '<td>'.$row_request['main_town'].'</td>';
                    print '<td>'.$row_request['address'].'</td>';
                    print '<td>'.$row_request['budget'].'</td>';
                    print '<td>'.$row_request['date_of_closure'].'</td>';
                    print '<td>'.$row_request['due_date'].'</td>';
                    //print '<td><a href="#popup" data-customer="'.$customer_id.'"  data-request="'.$row_request['request_id'].'" class="up">Send Quote</a></div></td>';



                print '</tr>';
            }
        }
    }
    print '</table>';
    //print '<pre>'.print_r($company_services, 1).'</pre>';
} else {
    echo "0 results";
}



?>
<script>


$("#table tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:first').html();
   //alert(value);    
});

/*$('.ok').on('click', function(e){
    alert($("#table tr.selected td:first").html());
});*/


$(document).ready(function() {

  $('a.up').click(function(event) {
    

    var company_id = $(this).data('company');
    var request_id = $(this).data('request');

    $("#feedback input[name='company_id']").val(company_id);
    $("#feedback input[name='request_id']").val(request_id);
    
    $('body').css('overflow', 'hidden');
    $('.popup').fadeIn(400,
      function() {
        $('#feedback')
          .css('display', 'block')
          .animate({
            opacity: 1,
            top: '25%'
          }, 200);
      });
    event.preventDefault();
  });

  $('.close, .popup').click(myFunction);
  $(document).keydown(function(eventObject) {
       if (eventObject.which == 27){
         myFunction()
       }
  });
  function myFunction() {

    $('body').css('overflow', 'auto');
    $('#feedback')
      .animate({
          opacity: 0,
          top: '10%'
        }, 200,
        function() {
          $(this).css('display', 'none');
          $('.popup').fadeOut(400);
        }
      );
  };
});
</script>



        <div id="popup" class="popup"></div>
        <form id="feedback" method="post" action="companyprofile.php?page=quotes">
          <a href="#close" class="close" title="Close"></a>
          <p style="color: #867666;">Send Quote</p>
          <label for="amount">Amount</label>
          <input type="text" name="amount" id="amount" required placeholder="Rs xxxxx" style="margin-left: 0px;">
          <label for="report" class="report">Comments</label>
          <textarea name="comments" rows="8" style="color: #867666;"></textarea>
          <input type="hidden" name="company_id">
          <input type="hidden" name="request_id">
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
    </div>







</div>