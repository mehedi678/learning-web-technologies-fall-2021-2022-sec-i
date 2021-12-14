<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <table>
    <tr>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>limit_used</th>
    <th>login_limits</th>
    </tr>
 
    <tbody id="data"></tbody>


</table>

<script>
    //call ajax
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "data.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var name = data[a].name;
                var email = data[a].email;
                var password = data[a].password;
                var limit_used = data[a].limit_used;
                var login_limits = data[a].login_limits;

                //appending at html
                html += "<tr>";
                    html += "<td>" + name + "</td>";
                    html += "<td>" + email + "</td>";
                    html += "<td>" + password + "</td>";
                    html += "<td>" + limit_used + "</td>";
                    html += "<td>" + login_limits + "</td>";
                html += "</tr>";
            }
            //replacing the 
            document.getElementById("data").innerHTML += html;
        }
    };
</script>

</body>
</html>

 
