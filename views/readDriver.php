
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID conducteur</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Modification</th>
        <th scope="col">Supression</th>
      </tr>
    </thead>
    <tbody>
     <?php
     foreach($results as $car) {
       echo "<tr>";
       echo "<td>".$car->getId_conducteur()."</td>";
       echo "<td>".$car->getPrenom()."</td>";
       echo "<td>".$car->getNom()."</td>";
       echo "<td><a href='./index.php?action=updateCar'><img src='./public/icons/edit.png' width='25px' height='25px'></a></td>";
       echo "<td><a href='./index.php?action=updateCar'><img src='./public/icons/delete.png' width='25px' height='25px'></a></td>";
       echo "</tr>";
     }

     ?>
    </tbody>
  </table>
  