<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<?php
  $sql="select * from books";
  $books=$db->query($sql);
?>

<h1>Kirjalista</h1>
<table border="1">
  <thead>
   <tr><th>Kirja id</th> <th>Nimi</th> <th>Tekijä</th> <th>ISBN</th></tr>
  </thead>
  <tbody>
    <tr>
      <td>735710</td> <td>testi1</td> <td>testi2</td> <td>testi3</td>
      <?php
      foreach ($books as $row) {
          echo '<tr>';
          echo '<td>'.$row['books_id'].'</td>';
          echo '<td>'.$row['books_name'].'</td>';
          echo '<td>'.$row['author'].'</td>';
          echo '<td>'.$row['isbn'].'</td>';
          echo '</tr>';
      }
      ?>
    </tr>
  </tbody>
</table>

<?php include "footer.php"; ?>
