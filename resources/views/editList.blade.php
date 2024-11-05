<center>
<div>
<h1>Edit Student Data</h1>
    <form action="/edit-student/{{$student->id}}" method="POST">
        @csrf
        <input type="hidden" name ="_method" value= "put">
        <div>
            <input type="text" id="name" name="name"  placeholder="Enter Name" value="{{$student->name}}" required>
        </div>
        <br>
        <div>
            <input type="email" id="email" name="email" placeholder="Enter Email" value="{{$student->email}}" required>
        </div>
        <br>
        <div>
            <input type="text" id="phpne" name="phone" placeholder="Enter Phone" value="{{$student->phone}}" required>
        </div>
        <br>
        <button type="submit">Update</button>
        <a href="{{'/list'}}">Cancel</a>
    </form>
</div>

</center>