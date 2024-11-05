<center>
    
    <div>
        <h1>Student List</h1>
        <br>
        <form action="find" method="get">
        <input type="text" name = "search" placeholder="Search Student by Name..." value='{{@$search}}'>
        <button>Find</button>
        </form>
        <br>
        <form action="delete-multi" method="post">
            @csrf
        <table border='1'>
        <tr>
            <td>Select</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Operations</td>
        </tr>

        @foreach($students as $student)
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{$student->id}}"></td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td><a href="{{'delete/'.$student->id}}"><span class="text-decoration-line: none">Delete</span></a> <a href="{{'edit/'.$student->id}}"><span class = "text-decoration-line: none">Edit</span></a></td>
        </tr>
        @endforeach
        </table>
        <br>
        <button>Delete Selected Student Data</button>
        </form>
        <br>
        {{$students->links()}}

        <br>
        <a href="/add">Add Student</a>

    
        
    </div>
</center>

<style>
    .w-5.h-5{
        width: 13px;
    }
</style>