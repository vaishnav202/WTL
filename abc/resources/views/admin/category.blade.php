<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Category</title>
<style>
    /* Basic styling for demonstration purposes */
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }
    h1 {
        color: #333;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"] {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group button:hover {
        background-color: #0056b3;
    }
    
</style>
</head>
<body>
    <h1>Add Category</h1>
    
    <form action="{{url('add_category')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="categoryLabel">Category Label:</label>
            <input type="text" id="categoryname" name="categoryname" placeholder="Enter category label">
        </div>
        <div class="form-group">
            <button type="submit">Add Category</button>
        </div>
    
       
    </form>
    <table>
        <tr>
            <th>Category_name</th>
         
        </tr>
        <tr>
            @foreach($data as $data)
           
        </tr>
        <tr>
            <td> {{$data->category_name}} </td>
            <td> {{$data->id}} </td>
            <td> <a class="form-group button" href="{{url('edit_category',$data->id)}}">EDIT</a></td>
            <td> <a class="form-group button" href="{{url('delete_category',$data->id)}}">DELETE</a></td>
            
        </tr>
        @endforeach
    </table>
    
</body>
</html>
