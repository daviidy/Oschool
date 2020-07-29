<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Remember to include jQuery :) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>
<style type="text/css">
  .modal:before{
    height: 5%;
  }
  .modal a.close-modal {
    top: 5.5px!important;
    right: 6.5px!important;   
  }
  .modal{
    top: 0;
  }
  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<!-- Modal HTML embedded directly into document -->
<div id="myNoteStudent" class="modal">
  <table>
  <tr>
    <th>Notes</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  
</table>

  <a href="#" rel="modal:close">Close</a>
</div>

</body>
</html>
