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
@foreach($course->users as $user)
<div id="myNoteStudent{{$user->id}}" class="modal">
  <table>
  <tr>
     <th></th>
    <th>Notes</th>
    <th>Action</th>
  </tr>
  @foreach($course->quizzes as $quiz)
  <tr>
    <td>
        {{$quiz->lesson->title}}
    </td>
    <td>

        @if(count($quiz->results->where('user_id', $user->id)) > 0)
        {{$quiz->results->where('user_id', $user->id)->first()->quiz_result}}%
        @endif
    </td>
    <td>
        @if(count($quiz->results->where('user_id', $user->id)) > 0)
            @if($quiz->results->where('user_id', $user->id)->first()->quiz_result < $course->result && $quiz->results->where('user_id', $user->id)->first()->restart >= $quiz->attempts)
        <a href="/restartQuiz/{{$quiz->id}}/{{$quiz->results->where('user_id', $user->id)->first()->id}}/{{$user->id}}"><button  type="button" class="btn" style="background-color: #1bcc1b; color:#fff">Faire reprendre</button></a>
            @endif
        @endif
    </td>
  </tr>
  @endforeach
  <tr>
      <td>
          <strong>Total: </strong>
      </td>
      <td></td>
      <td></td>
  </tr>

</table>

  <a href="#" rel="modal:close">Fermer</a>
</div>
@endforeach

</body>
</html>
