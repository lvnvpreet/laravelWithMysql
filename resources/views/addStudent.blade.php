<center>
<div>
<h1>Add Student Data</h1>
    <form action="" method="POST">
        @csrf
        <div>
            <input type="text" id="name" name="name"  placeholder="Enter Name" required>
        </div>
        <br>
        <div>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>
        </div>
        <br>
        <div>
            <input type="text" id="phpne" name="phone" placeholder="Enter Phone" required>
        </div>
        <br>
        <button type="submit">Add Student</button>
    </form>
</div>

</center>