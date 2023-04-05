<?php 

include('koneksi.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id_kondektur'])) {
    // Get the id of the kondektur to be deleted
    $id_kondektur = $_GET['id_kondektur'];

    // Delete the corresponding records from the child table (trans_upn)
    $query_delete_child = "DELETE FROM trans_upn WHERE id_kondektur = '$id_kondektur'";
    $result_delete_child = mysqli_query(connection(), $query_delete_child);

    if (!$result_delete_child) {
      // If failed to delete child record, set status to error and exit
      $status = 'err_child';
      header("Location: kondektur.php?status=$status");
      exit();
    }

    // Delete the record from the parent table (konduktor)
    $query_delete_parent = "DELETE FROM kondektur WHERE id_kondektur = '$id_kondektur'";
    $result_delete_parent = mysqli_query(connection(), $query_delete_parent);

    if (!$result_delete_parent) {
      // If failed to delete parent record, set status to error and exit
      $status = 'err_parent';
      header("Location: kondektur.php?status=$status");
      exit();
    }

    // If both child and parent records are deleted successfully, set status to ok and redirect
    $status = 'ok';
    header("Location: kondektur.php?status=$status");
  }  
}
