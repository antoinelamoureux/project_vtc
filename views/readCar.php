
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID vehicule</th>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
        <th scope="col">Couleur</th>
        <th scope="col">Immatriculation</th>
        <th scope="col">Supression</th>
      </tr>
    </thead>
    <tbody>
     <?php
     foreach($results as $car) {
       echo "<tr>";
       echo "<td>".$car->getId_vehicule()."</td>";
       echo "<td>".$car->getMarque()."</td>";
       echo "<td>".$car->getModele()."</td>";
       echo "<td>".$car->getCouleur()."</td>";
       echo "<td>".$car->getImmatriculation()."</td>";
       echo "<td><a href='./index.php?action=updateCar'><img src='./public/icons/edit.png' width='25px' height='25px'></a></td>";
       echo "<td><a href='./index.php?action=updateCar'><img src='./public/icons/delete.png' width='25px' height='25px'></a></td>";
       echo "</tr>";
     }

     ?>
    </tbody>
  </table>
  