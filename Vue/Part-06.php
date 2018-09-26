<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <h1>Welcome to Learn Hunter</h1>
    <div id="root">
        <a target="_blank" :href="Topic.url" :title="Topic.title">{{Topic.name}}</a>
        <br>
        <br>
        <a target="_blank" :href="Topic2.url" :title="Topic2.title">{{Topic2.name}}</a>
    </div>


    <a href="Part-07.php">Part-07</a>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#root',
            data:{
                Topic:{
                    name: "Vue Js", title: "This is Framework", url:"https://github.com/zamanwebdeveloper?tab=repositories"
                },
                Topic2:{
                    name: "ZamanStore", title: "This is My Website", url:"https://github.com/zamanwebdeveloper/zamanstore.ml"
                }

            }
        })
    </script>
</body>
</html>