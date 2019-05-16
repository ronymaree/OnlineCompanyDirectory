$(document).ready(function () {
	$('select.ajax_trigger_company').change(function(){
		var id = $(this).val();

		function fill_data(data){
			var res = data.reply;
			$('input[name=txtcompanyname]').val(res.company_name);
			$('input[name=txtbrn]').val(res.brn);
			//$('input[name=cbomaintown]').val(res.main_town);
			$('input[name=txtaddress]').val(res.address);
			$('input[name=txtzipcode]').val(res.zip_code);
			$('input[name=txtnumemployees]').val(res.no_of_employees);
			$('input[name=txtfirstname]').val(res.first_name);
			$('input[name=txtlastname]').val(res.last_name);
			$('input[name=email]').val(res.email);
			$('input[name=txttelmob]').val(res.tel_mobile);
			$('input[name=txttelother]').val(res.tel_other);
			$('input[name=txtfax]').val(res.fax);
			$('input[name=txtwebsite]').val(res.website);

			/* select option update */
			$('select#cbomaintown option').each(function(){
				if($(this).val()==res.main_town){
					$(this).prop('selected',true);
				}
			});
			
			/* radio button update
			$('input.radio.male').prop('checked',false);
			$('input.radio.female').prop('checked',false);
			if(res.gender=='male'){
				$('input.radio.male').prop('checked','checked');
			}else{
				$('input.radio.female').prop('checked','checked');
			}*/
		}

		$.ajax({
			url: 'includes/ajax_trigger.php',
			type:'POST',
			dataType: 'JSON',
			data: 'company_id='+id+'&action=company_registration_update',
			success: fill_data
		});
	});

	$('#top_header .action_section ul li.login a').click(function(e){
		e.preventDefault();
		$('.signup_content').hide();
		$('.login_content').slideToggle();
	});

	$('#top_header .action_section ul li.signup a').click(function(e){
		e.preventDefault();
		$('.signup_content').slideToggle();
		$('.login_content').hide();
	});
});

$("document").ready(function () {
  function load(n, t){
    var el;
    if (t == "js") {
      el = document.createElement("script");
      el.setAttribute("type","text/javascript");
      el.setAttribute("src", n);
    } else if (t == "css") {
      el = document.createElement("link");
      el.setAttribute("rel", "stylesheet");
      el.setAttribute("type", "text/css");
      el.setAttribute("href", n);
    }
    document.getElementsByTagName("head")[0].appendChild(el);
  }

  load("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css", "css");
  load("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css", "css");
  $.getScript("//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js");

function getTextFieldData (name) {
  return $("label[for=\"rf-" + name + "\"]").text() + ": " + $("#rf-" + name).val() + "<br/>";
}
  
function getButtonGroupData (name) {
  return $("label[for=\"rf-" + name + "\"]").text() + ": " + $("#rf-" + name + " label.active")[0].innerText + "<br/>";
}
  
  
});

