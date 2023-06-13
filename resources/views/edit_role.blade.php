<!DOCTYPE html>
<html>
    <head>
        <title>Role Management</title>
        <link rel="stylesheet" href="{{ asset('css/register.style.css')}}">
    </head>
<body>
    <div class="container">
        <h1>Role Mangement</h1>
        <form action="update_role" method="post">
            @csrf 
            <input type="text" value="{{$data->name}}" name="role_name" placeholder="Role Name" >
            <input type="hidden" value="{{$data->id}}" name="record_id" placeholder="record_id" >
            <input type="hidden" value="{{$data->status}}" id="status" >
            
            <label >Status</label>
            <input type="radio" id= 'status1' value='active' name="role_status" placeholder="Status" >
            <label >active</label>
            <input type="radio" id= 'status2' value='inactive' name="role_status" placeholder="Status" >
            <label >inactive</label>
            <script>
                let status=document.getElementById('status').value;
                console.log(status);
                if(status==="Active"){
                    document.getElementById('status1').checked= true;
                }
                else{
                    document.getElementById('status2').checked= true;
                }
            </script>
            <br/><br/><br/>
            <input type="submit" value="update">

        </form>
    </div>
</body>
</html>
