<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <button><a href="/create_role_index">Create new</button>
        <button><a href="/get_role/NA/Active/status">Click here to list active</button>
        <button><a href="/get_role/NA/Inactive/status">Click here to list inactive</button>
        <button><a href="/get_role/NA/ALL/ALL">Click here to all </button>
  <tr>
    
    <th>Role Name</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  @foreach($response_data as $i=> $data)
  <tr>
    <td>{{$data-> name}}</td>
    <td>{{$data-> status}}</td>
    <td>
        <button type="button"> <a href="/edit_role/{{$data->id}}">Edit</a></button>
        <button type="button"><a href="/delete_role/{{$data->id}}">Delete</a></button>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>