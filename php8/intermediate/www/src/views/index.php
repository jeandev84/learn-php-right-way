<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1><? //= $this->params['foo'] ?></h1>
   <h1><? //= $this->foo ?></h1>
   <h1><? //= $foo ?></h1>
   <form action="/upload" method="post" enctype="multipart/form-data">
       <input type="file" name="receipt">
       <button type="submit">Upload</button>
   </form>
</body>
</html>