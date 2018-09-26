<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <h1>Welcome to Learn Hunter</h1>
    <div id="learn">


    </div>
    <div id="hunter">
        {{welcome}}
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <script>
        new Vue({
            el:'#hunter',
            data:{
                welcome: 'Hello World!'
            }

        })
    </script>
</body>
</html>