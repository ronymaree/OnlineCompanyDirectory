<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>

 <?php
  include('includes/connection.php');
  if(isset($_POST['submit_upt'])){
    $company_id = $_POST['company_id'];
    $company_name=$_POST['txtcompanyname'];
    $brn=$_POST['txtbrn'];
    $main_town=$_POST['cbomaintown'];
    $address=$_POST['txtaddress'];
    $zip_code=$_POST['txtzipcode'];
    $no_of_employees=$_POST['txtnumemployees'];
    $first_name=$_POST['txtfirstname'];
    $last_name=$_POST['txtlastname'];
    $email=$_POST['email'];
    $tel_mobile=$_POST['txttelmob'];
    $tel_other=$_POST['txttelother'];
    $fax=$_POST['txtfax'];
    $website=$_POST['txtwebsite'];

    $query = "UPDATE company_table SET company_name='$company_name', brn='$brn', main_town='$main_town', address='$address', zip_code='$zip_code', no_of_employees='$no_of_employees', first_name='$first_name', last_name='$last_name', email='$email', tel_mobile='$tel_mobile', tel_other='$tel_other', fax='$fax', website='$website' WHERE company_id=$company_id";
        if(mysqli_query($mysqli,$query)){
      print 'Update succesful';
    }else{
      print 'Update failed :'.mysqli_error($mysqli);
    }
  }
  if($proceed){
    $user = "SELECT * FROM company_table ORDER BY company_name ASC";
    $res = mysqli_query($mysqli,$user);
  } 
  ?>

  




<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h1>Company Registration</h1>

<div class="company" id="company_details">
  <p>
   

    <label for="company_name">Select user:  </label>
      <select name="company_id" class="ajax_trigger_company">
        <option>Select company</option>
      <?php
          while($r = mysqli_fetch_assoc($res)){
            print '<option value="'.$r['company_id'].'">'.$r['company_name'].'</option>';
          }
        ?>
      </select>
  </p>
  <p>
    <label for="txtcompanyname">Company Name:</label>
    <input type="text" name="txtcompanyname" id="txtcompanyname">
  </p>
  <p>
    <label for="txtbrn">BRN No. :</label>
    <input type="text" name="txtbrn" id="txtbrn">
  </p>
  <p>


    <label for="cbomaintown">Main Town:</label>
    <select name="cbomaintown" id="cbomaintown" title="Select Main Town">
        <option value="" disabled="" selected="">Main Town / Village</option>
            
          ?&gt;
            <option value="16eme Mille">16eme Mille</option>
            
          ?&gt;
            <option value="Agalega">Agalega</option>
            
          ?&gt;
            <option value="Albion">Albion</option>
            
          ?&gt;
            <option value="Amitie Gokhoola">Amitie Gokhoola</option>
            
          ?&gt;
            <option value="Arsenal">Arsenal</option>
            
          ?&gt;
            <option value="Baie Du Cap">Baie Du Cap</option>
            
          ?&gt;
            <option value="Bambous">Bambous</option>
            
          ?&gt;
            <option value="Bambous Virieux">Bambous Virieux</option>
            
          ?&gt;
            <option value="Bananes ">Bananes </option>
            
          ?&gt;
            <option value="Beau Bassin">Beau Bassin</option>
            
          ?&gt;
            <option value="Beau Vallon">Beau Vallon</option>
            
          ?&gt;
            <option value="Bel Air">Bel Air</option>
            
          ?&gt;
            <option value="Bel Ombre">Bel Ombre</option>
            
          ?&gt;
            <option value="Benares">Benares</option>
            
          ?&gt;
            <option value="Black River">Black River</option>
            
          ?&gt;
            <option value="Bois Cheri">Bois Cheri</option>
            
          ?&gt;
            <option value="Bois Des Amourettes">Bois Des Amourettes</option>
            
          ?&gt;
            <option value="Bon Accueil">Bon Accueil</option>
            
          ?&gt;
            <option value="Bramsthan">Bramsthan</option>
            
          ?&gt;
            <option value="Brisee Verdiere">Brisee Verdiere</option>
            
          ?&gt;
            <option value="Britannia">Britannia</option>
            
          ?&gt;
            <option value="Calebasses">Calebasses</option>
            
          ?&gt;
            <option value="Camp Carol">Camp Carol</option>
            
          ?&gt;
            <option value="Camp De Masque">Camp De Masque</option>
            
          ?&gt;
            <option value="Camp De Masque Pave">Camp De Masque Pave</option>
            
          ?&gt;
            <option value="Camp Diable">Camp Diable</option>
            
          ?&gt;
            <option value="Camp Ithier">Camp Ithier</option>
            
          ?&gt;
            <option value="Cap Malheureux">Cap Malheureux</option>
            
          ?&gt;
            <option value="Cascavelle">Cascavelle</option>
            
          ?&gt;
            <option value="Case Noyale">Case Noyale</option>
            
          ?&gt;
            <option value="Central Flacq">Central Flacq</option>
            
          ?&gt;
            <option value="Chamarel">Chamarel</option>
            
          ?&gt;
            <option value="Chamouny">Chamouny</option>
            
          ?&gt;
            <option value="Chemin Grenier">Chemin Grenier</option>
            
          ?&gt;
            <option value="Clemencia">Clemencia</option>
            
          ?&gt;
            <option value="Cluny">Cluny</option>
            
          ?&gt;
            <option value="Congomah">Congomah</option>
            
          ?&gt;
            <option value="Cottage">Cottage</option>
            
          ?&gt;
            <option value="Creve Coeur">Creve Coeur</option>
            
          ?&gt;
            <option value="Curepipe">Curepipe</option>
            
          ?&gt;
            <option value="D'Epinay">D'Epinay</option>
            
          ?&gt;
            <option value="Dagotiere">Dagotiere</option>
            
          ?&gt;
            <option value="Dubreuil">Dubreuil</option>
            
          ?&gt;
            <option value="Eau Coulee">Eau Coulee</option>
            
          ?&gt;
            <option value="Ebene">Ebene</option>
            
          ?&gt;
            <option value="Ecroignard">Ecroignard</option>
            
          ?&gt;
            <option value="Flic en Flac">Flic en Flac</option>
            
          ?&gt;
            <option value="Fond du Sac">Fond du Sac</option>
            
          ?&gt;
            <option value="FOREST - SIDE">FOREST - SIDE</option>
            
          ?&gt;
            <option value="G.R.S.E">G.R.S.E</option>
            
          ?&gt;
            <option value="Goodlands">Goodlands</option>
            
          ?&gt;
            <option value="Grand Bay">Grand Bay</option>
            
          ?&gt;
            <option value="Grand Bel Air">Grand Bel Air</option>
            
          ?&gt;
            <option value="Grand Bois">Grand Bois</option>
            
          ?&gt;
            <option value="Grand Gaube">Grand Gaube</option>
            
          ?&gt;
            <option value="Grand Sable">Grand Sable</option>
            
          ?&gt;
            <option value="Grande Retraite">Grande Retraite</option>
            
          ?&gt;
            <option value="Gros Cailloux">Gros Cailloux</option>
            
          ?&gt;
            <option value="L'Avenir">L'Avenir</option>
            
          ?&gt;
            <option value="L'Escalier">L'Escalier</option>
            
          ?&gt;
            <option value="L'Esperance">L'Esperance</option>
            
          ?&gt;
            <option value="L'Esperance Trebuchet">L'Esperance Trebuchet</option>
            
          ?&gt;
            <option value="La Flora">La Flora</option>
            
          ?&gt;
            <option value="La Gaulette">La Gaulette</option>
            
          ?&gt;
            <option value="La Laura / Malenga">La Laura / Malenga</option>
            
          ?&gt;
            <option value="Lalmatie">Lalmatie</option>
            
          ?&gt;
            <option value="Laventure">Laventure</option>
            
          ?&gt;
            <option value="Le Hochet">Le Hochet</option>
            
          ?&gt;
            <option value="Le Morne">Le Morne</option>
            
          ?&gt;
            <option value="Long Mountain">Long Mountain</option>
            
          ?&gt;
            <option value="Mahebourg">Mahebourg</option>
            
          ?&gt;
            <option value="Mapou">Mapou</option>
            
          ?&gt;
            <option value="Mare D'Albert">Mare D'Albert</option>
            
          ?&gt;
            <option value="Mare La Chaux">Mare La Chaux</option>
            
          ?&gt;
            <option value="Mare Tabac">Mare Tabac</option>
            
          ?&gt;
            <option value="Medine Camp de Masque">Medine Camp de Masque</option>
            
          ?&gt;
            <option value="Melrose">Melrose</option>
            
          ?&gt;
            <option value="Midlands">Midlands</option>
            
          ?&gt;
            <option value="Moka">Moka</option>
            
          ?&gt;
            <option value="Montagne Blanche">Montagne Blanche</option>
            
          ?&gt;
            <option value="Morc St Andre ">Morc St Andre </option>
            
          ?&gt;
            <option value="New Grove">New Grove</option>
            
          ?&gt;
            <option value="Notre Dame">Notre Dame</option>
            
          ?&gt;
            <option value="Nouvelle Decouverte">Nouvelle Decouverte</option>
            
          ?&gt;
            <option value="Nouvelle France">Nouvelle France</option>
            
          ?&gt;
            <option value="Old Grand Port">Old Grand Port</option>
            
          ?&gt;
            <option value="Olivia">Olivia</option>
            
          ?&gt;
            <option value="Pamplemousses">Pamplemousses</option>
            
          ?&gt;
            <option value="Petit Bel Air">Petit Bel Air</option>
            
          ?&gt;
            <option value="Petit Raffray">Petit Raffray</option>
            
          ?&gt;
            <option value="Petite Riviere">Petite Riviere</option>
            
          ?&gt;
            <option value="Phoenix">Phoenix</option>
            
          ?&gt;
            <option value="Piton">Piton</option>
            
          ?&gt;
            <option value="Plaine des Papayes">Plaine des Papayes</option>
            
          ?&gt;
            <option value="Plaine Magnien">Plaine Magnien</option>
            
          ?&gt;
            <option value="Pointe aux Piments">Pointe aux Piments</option>
            
          ?&gt;
            <option value="Pointe aux Sables">Pointe aux Sables</option>
            
          ?&gt;
            <option value="PORT LOUIS">PORT LOUIS</option>
            
          ?&gt;
            <option value="Poste de Flacq">Poste de Flacq</option>
            
          ?&gt;
            <option value="Poudre D'Or Hamlet">Poudre D'Or Hamlet</option>
            
          ?&gt;
            <option value="Poudre D'Or Village">Poudre D'Or Village</option>
            
          ?&gt;
            <option value="Providence">Providence</option>
            
          ?&gt;
            <option value="Quartier Militaire">Quartier Militaire</option>
            
          ?&gt;
            <option value="QUATRE BORNES">QUATRE BORNES</option>
            
          ?&gt;
            <option value="Quatre Cocos">Quatre Cocos</option>
            
          ?&gt;
            <option value="Quatre Soeurs">Quatre Soeurs</option>
            
          ?&gt;
            <option value="Queen Victoria ">Queen Victoria </option>
            
          ?&gt;
            <option value="Reduit">Reduit</option>
            
          ?&gt;
            <option value="Richelieu">Richelieu</option>
            
          ?&gt;
            <option value="Ripailles">Ripailles</option>
            
          ?&gt;
            <option value="Riviere des Anguilles">Riviere des Anguilles</option>
            
          ?&gt;
            <option value="Riviere des Creoles">Riviere des Creoles</option>
            
          ?&gt;
            <option value="Riviere du Poste">Riviere du Poste</option>
            
          ?&gt;
            <option value="Riviere du Rempart">Riviere du Rempart</option>
            
          ?&gt;
            <option value="Roche Terre">Roche Terre</option>
            
          ?&gt;
            <option value="Roches Noires">Roches Noires</option>
            
          ?&gt;
            <option value="Rodrigues - Grand Montagne">Rodrigues - Grand Montagne</option>
            
          ?&gt;
            <option value="Rodrigues - La Ferme">Rodrigues - La Ferme</option>
            
          ?&gt;
            <option value="Rodrigues - Mont Lubin">Rodrigues - Mont Lubin</option>
            
          ?&gt;
            <option value="Rodrigues - Port Mathurin">Rodrigues - Port Mathurin</option>
            
          ?&gt;
            <option value="Rodrigues - Riviere Coco">Rodrigues - Riviere Coco</option>
            
          ?&gt;
            <option value="Rose Belle">Rose Belle</option>
            
          ?&gt;
            <option value="Rose- Hill">Rose- Hill</option>
            
          ?&gt;
            <option value="Saint Julien d'Hotman">Saint Julien d'Hotman</option>
            
          ?&gt;
            <option value="Saint Julien Village">Saint Julien Village</option>
            
          ?&gt;
            <option value="Saint Pierre">Saint Pierre</option>
            
          ?&gt;
            <option value="Sebastopol">Sebastopol</option>
            
          ?&gt;
            <option value="Souillac">Souillac</option>
            
          ?&gt;
            <option value="St Hubert">St Hubert</option>
            
          ?&gt;
            <option value="Surinam">Surinam</option>
            
          ?&gt;
            <option value="Tamarin">Tamarin</option>
            
          ?&gt;
            <option value="Terre Rouge">Terre Rouge</option>
            
          ?&gt;
            <option value="The Vale">The Vale</option>
            
          ?&gt;
            <option value="Tombeau Bay">Tombeau Bay</option>
            
          ?&gt;
            <option value="Triolet">Triolet</option>
            
          ?&gt;
            <option value="Trois Boutiques">Trois Boutiques</option>
            
          ?&gt;
            <option value="Trou aux Biches">Trou aux Biches</option>
            
          ?&gt;
            <option value="Trou D'Eau Douce">Trou D'Eau Douce</option>
            
          ?&gt;
            <option value="Tyack">Tyack</option>
            
          ?&gt;
            <option value="Union Ducray / St Aubin">Union Ducray / St Aubin</option>
            
          ?&gt;
            <option value="Union Park">Union Park</option>
            
          ?&gt;
            <option value="Vacoas / Floreal">Vacoas / Floreal</option>
            
          ?&gt;
            <option value="Verdun">Verdun</option>
            
          ?&gt;
            <option value="Ville Bague">Ville Bague</option>
                </select>


  </p>



  <p>
    <label for="txtaddress">Address:</label>
    <input type="text" name="txtaddress" id="txtaddress">
  </p>
  <p>
    <label for="txtzipcode">Zip Code:</label>
    <input type="text" name="txtzipcode" id="txtzipcode">
  </p>
  <p>
    <label for="txtnumemployees">Number of Employees:</label>
    <input name="txtnumemployees" type="number" id="txtnumemployees" min="1" value="1">
  </p>
</div>
<h3>Owner Details</h3>
<div class="company" id="owner_details">
  <p>
    <label for="txtfirstname">First Name:</label>
    <input type="text" name="txtfirstname" id="txtfirstname">
  </p>
  <p>
    <label for="txtlastname">Last Name:</label>
    <input type="text" name="txtlastname" id="txtlastname">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="txttelmob">Mobile Telephone Number:</label>
    <input type="text" name="txttelmob" id="txttelmob">
  </p>
  <p>
    <label for="txttelother">Landline Telephone Number:</label>
    <input type="text" name="txttelother" id="txttelother">
  </p>
  <p>
    <label for="txtfax">Fax Number:</label>
    <input type="text" name="txtfax" id="txtfax">
  </p>
  <p>
    <label for="txtwebsite">Website:</label>
    <input type="text" name="txtwebsite" id="txtwebsite">
  </p>
  <p></p>
</div>
<h4>Specialisation</h4>
<div class="company" id="specialisation">

  <p>
    <input type="checkbox" name="building" id="checkbox">
    Building

    <label for="select">Category:</label>
<select name="select" id="select" class="ajax_trigger_company">>

 <option>Select Company</option>
      <?php
          while($r = mysqli_fetch_assoc($res)){
            print '<option value="'.$r['cat_id'].'">'.$r['category'].'</option>';
          }
        ?>

</select>
  </p>
  
  <p>
    <input type="checkbox" name="checkbox2" id="checkbox2">
    <label for="checkbox2">Service 2 </label>
    <label for="select2">Category:</label>
    <select name="select" id="select2">
  </select>
  </p>
  <p>
    <input type="checkbox" name="checkbox3" id="checkbox3">
    <label for="checkbox3">Service 3 </label>
    <label for="select3">Category:</label>
    <select name="select" id="select3">
  </select>
  </p>
  <p>
    <input type="checkbox" name="checkbox4" id="checkbox4">
    <label for="checkbox4">Service 4 </label>
    <label for="select4">Category</label>
    <select name="select" id="select4">
  </select>
  </p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <input type="submit" name="submit" id="submit" value="Submit">
  <input type="button" name="button" id="button" value="Button">
  <input type="reset" name="reset" id="reset" value="Reset">
</p>
</body>
</html>
