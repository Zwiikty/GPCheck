<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>SB Admin 2 - Dashboard</title>
    <!-- link css-->
    <link href="styleforindex.css" rel="stylesheet">
</head>

<body>
    <div id="toggle"></div>
    <div id="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Home</a></li>
        </ul>
    </div>

<script>
    const toggle = document.getElementById('toggle');
    const sidebar = document.getElementById('sidebar');

    document.onclick = function(e){
        if(e.target.id !== 'sidebar' && e.target.id !== 'toggle')
        {
            toggle.classList.remove('active');
            sidebar.classList.remove('active');
        }
    }

    
    
    toggle.onclick = function(){
        toggle.classList.toggle('active');
        sidebar.classList.toggle('active');
    }
    </script>
</body>
</html>