<html>

<head>
    <style>
        #header {
            background-color:black;
            color:white;
            text-align:center;
            padding:5px;
        }
        #nav {
            line-height:30px;
            background-color:#eeeeee;
            height:300px;
            width:100px;
            float:left;
            padding:5px;
        }
        #section {
            width:350px;
            float:left;
            padding:10px;
        }
        #footer {
            background-color:black;
            color:white;
            clear:both;
            text-align:center;
            padding:5px;
        }

        .row {
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 5px;
        }
    </style>


</head>
<body>

<div id="header">
    <h1>SPA</h1>
</div>

<div id="nav">
    Home<br>
    <a href="userlist.html">Users</a><br>
    <a href="servicelist.html">Service</a>
    <br>
</div>

<div id="section">
    <h1>Users </h1>

    <a href="newuser.html">+ New User</a>
    <!--Form starts here-->
    <form>
       <table border="1">
           <tr>
               <th>User ID</th>
               <th>Name</th>
               <th>Role</th>
           </tr>

           <?php
           //mysql connection open
           $mysqlconn = new mysqli('localhost','root','root','spa');

           $sqlQuery="SELECT * FROM users";
           $userRecordsList= $mysqlconn->query($sqlQuery);


           foreach($userRecordsList as $userRecord){
               ?>
               <tr>
                   <td><?=$userRecord['user_id'] ?></td>
                   <td><?=$userRecord['first_name'] ?></td>
                   <td><?=$userRecord['last_name'] ?></td>
               </tr>
           <?php
           }

           //var_dump($userRecordsList); exit();
           ?>


       </table>
    </form>
    <!--Form Ends here-->

</div>

<div id="footer">
    Copyright © W3Schools.com
</div>

</body>
</html>