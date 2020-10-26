<tr class="case1">
      <th> Réference de cable</th>
      <th> Quantité Planifié</th>
      <th> Dureé de production (min) </th>
      <th> Nombre des Postes </th>
     
    </tr>
<div>
<form action="#" method="post">
 <tr>
     <th>   <input type="number" name="numb" placeholder="quantité globale"> </th> 
     <th>   <input type="number" name="num" placeholder="temps par unité"></th> 
        <button type="submit" name="submit">Valider</button>
    </form>
</div>


<?php


if (isset($_POST['submit'])) {
echo "ho",$_POST['num'];
}
							
?>