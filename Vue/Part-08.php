<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <h1>Welcome to Learn Hunter</h1>
    <div id="root">
        <span v-if="name">Learn Hunter</span>
        <span v-else>Kaktarua</span>
    </div>


    <a href="Part-08.php">Part-08</a>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#root',
            data:{
                name:true
            }
        })
    </script>
</body>
</html>