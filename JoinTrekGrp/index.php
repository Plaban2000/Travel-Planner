<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Join Trek group - PHP/MySQL Demo Code</title>
</head>
<style>
    body
{
    background-image: url(trek.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    
    
}
input[type=text],
input[type=number],#txtMessage select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20
}
.box{
    
    
    background: rgba(0,0,0,0.1);
    flex-direction: column;
    padding: 25px 25px;
    
    
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
}
</style>

<body>
    <div class="box">
        <h1>Join Trek group</h1>
        <form action="home.php" method="POST">


            <label for="Name">Name </label>
            <input type="text" name="txtName" id="txtName">


            <label for="phnNo">Phone no</label>
            <input type="text" name="txtPhnNo" id="txtPhnN">


            <label for="member">Member</label>
            <input type="number" name="txtMember" id="txtMember">

            <label for="GroupName">Group Name </label>
            <input type="text" name="txtGroupName" id="txtGroupName">

            <label for="message">Message</label>
            <textarea name="txtMessage" id="txtMessage"></textarea>


            <input type="submit" name="Submit" id="Submit" value="Submit">
            

        </form>
    </div>
</body>

</html>