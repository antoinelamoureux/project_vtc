<div class="container">
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
     foreach($results as $driver) {
       $id = $driver->getId_conducteur();
       echo "<tr>";
       echo "<td>".$id."</td>";
       echo "<td>".$driver->getPrenom()."</td>";
       echo "<td>".$driver->getNom()."</td>";
       echo "<td><a href='./index.php?action=updateDriver'><img src='./public/icons/edit.png' width='25px' height='25px'></a></td>";
       echo "<td><a href='./index.php?action=deleteDriver&id=$id'><img src='./public/icons/delete.png' width='25px' height='25px'></a></td>";
       echo "</tr>";
     }
     ?>
    </tbody>
  </table>
  </div>