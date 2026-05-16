<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP DataType & Syntax</title>

<style>
body{
    font-family: Arial, sans-serif;
    margin:0;
    background: linear-gradient(135deg,#0f172a,#312e81);
    color:#f8fafc;
}

header{
    background: linear-gradient(90deg,#6366f1,#06b6d4);
    padding:25px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,.4);
}
header h1{margin:0;font-size:38px}
header p{margin:5px}

section{
    max-width:900px;
    margin:auto;
    padding:30px;
}

.card{
    background:#1e293b;
    padding:22px;
    margin-bottom:25px;
    border-radius:15px;
    box-shadow:0 0 15px rgba(0,0,0,.5);
    transition:.3s;
}
.card:hover{
    transform:translateY(-5px);
    box-shadow:0 0 25px rgba(0,0,0,.8);
}

h2{color:#22c55e}
h3{color:#38bdf8}

code{
    display:block;
    background:#020617;
    padding:12px;
    border-radius:10px;
    margin-top:10px;
    color:#facc15;
}

footer{
    text-align:center;
    padding:20px;
    background:#020617;
    margin-top:40px;
}
</style>
</head>

<body>

<header>
    <h1>PHP Data Types & Syntax</h1>
    <p>Learn the basics of PHP programming</p>
</header>

<section>

<div class="card">
<h2>Datatype នៅក្នុង PHP</h2>
<h3>មាន 3 ក្រុមធំៗ</h3>
<p>1. Scalar Data Types<br>
2. Compound Data Types<br>
3. Special Data Types</p>
</div>

<div class="card">
<h2>1. Scalar Data Types</h2>
<p>• Integer – លេខគត់<br>
• Float – លេខទសភាគ<br>
• String – អក្សរ<br>
• Boolean – true / false</p>
</div>

<div class="card">
<h2>2. Compound Data Types</h2>
<p>• Array – ផ្ទុកទិន្នន័យច្រើនក្នុងអថេរតែមួយ<br>
• Object – ប្រើជាមួយ Class (OOP)</p>
</div>

<div class="card">
<h2>3. Special Data Types</h2>
<p>• NULL – គ្មានតម្លៃ<br>
• Resource – Database/File connection</p>
</div>

<div class="card">
<h2>PHP Syntax Examples</h2>

<h3>Integer</h3>
<code>$age = 20;
echo $age;</code>

<h3>Float</h3>
<code>$price = 11.5;
echo $price;</code>

<h3>String</h3>
<code>$name = "Koeung";
echo $name;</code>

<h3>Boolean</h3>
<code>$isLogin = true;
if($isLogin){
   echo "User បាន Login";
}</code>

<h3>Array</h3>
<code>$colors = ["Red","Green","Blue"];
echo $colors[0];</code>

<h3>Object</h3>
<code>class Student{
   public $name;
}
$stu = new Student();
$stu->name = "Koeung";
echo $stu->name;</code>

<h3>NULL</h3>
<code>$data = null;
if($data === null){
   echo "មិនមានទិន្នន័យ";
}</code>

<h3>Resource</h3>
<code>$file = fopen("test.txt","r");</code>

</div>

</section>

<footer>
</footer>

</body>
</html>