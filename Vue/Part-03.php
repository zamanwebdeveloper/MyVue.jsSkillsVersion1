<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <h1>Welcome to Learn Hunter</h1>
    <div id="app-1">
        <h2 v-bind:title="message">Come Here</h2>
    </div>
    <div id="app-2">
        <h2 v-bind:title="recent">Good Bye</h2>
    </div>
    <a href="Part-04.php">Part-04</a>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <script>
        new Vue({
            el:'#app-1',
            data:{
                message: 'Time is '+ new Date()
            }
        })
        new Vue({
            el:'#app-2',
            data:{
                recent: 'Time is '+ new Date().toLocaleString()
            }
        })

    </script>
</body>
</html>