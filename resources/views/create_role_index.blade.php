<!DOCTYPE html>
<html>
    <head>
        <title>Role Management</title>
        <link rel="stylesheet" href="{{ asset('css/register.style.css')}}">
    </head>
<body>
    <div class="container">
        <h1>Role Mangement</h1>
        <form action='/get_role/NA/ALL/ALL' method="post">
            @csrf 
            <input type="text" name="role_name" placeholder="Role Name" >
            <label >Status</label>
            <input type="radio" id= 'status1' value='active' name="role_status" placeholder="Status" >
            <label >active</label>
            <input type="radio" id= 'status2' value='inactive' name="role_status" placeholder="Status" >
            <label >inactive</label>
            <br/><br/><br/>
            <input type="submit" value="submit">

        </form>
    </div>
</body>
</html>
