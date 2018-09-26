<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <h1>Welcome to Learn Hunter</h1>
    <div id="root">
        <ul>
            <li v-for="learnhunter in learnhunters">
                {{learnhunter.name}}({{learnhunter.topics}})
            </li>
        </ul>
    </div>


    <a href="Part-08.php">Part-08</a>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#root',
            data:{
                learnhunters:[
                    {name: "laravel", topics:6},
                    {name: "codeingniter",topics:4},
                    {name: "ruby on rails",topics:6},
                    {name: "python", topics:3},
                    {name: "golanguage", topics:1}
                    ]
            }
        })
    </script>
</body>
</html>