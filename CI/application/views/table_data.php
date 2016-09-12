<table>

<tr>
<td>Nom</td>
<td>Prénom</td>
<td>Addresse</td>
<td>Mail</td>
</tr>


<!-- Simple affichage du tableau avec boucle -->
<?php
foreach ($data as $row) {
?>

<tr>
<td><?php echo $row->nom; ?></td>
<td><?php echo $row->prenom; ?></td>
<td><?php echo $row->adresse; ?></td>
<td><?php echo $row->mail; ?></td>
</tr>

<?php
}
?>

</table>