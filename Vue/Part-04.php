<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <h1>Welcome to Learn Hunter</h1>
    <div id="root">
        <h3 v-if="show">Learn Hunter</h3>
    </div>


    <a href="Part-05.php">Part-05</a>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#root',
            data:{
                show:true
            }
        })
    </script>
</body>
</html>