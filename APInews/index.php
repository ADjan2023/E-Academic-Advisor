<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width = device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content="ie=edge">
    <title>DOCUMENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="index.css" rel="stylesheet" />
 </head>   
 <body>
     <?php
     $url = 'https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=b4102865c8b946fcbdee7bc133f801b7';
     $response = file_get_contents($url);
     $NewsData = json_decode($response);

     ?>
     <div class="jumbotron">
         <h1>GOOGLE NEWS API</h1>
     </div>
     <div class="container-fluid">
         <?php
         foreach($NewsData-> articles as $News)
         {
         
        ?> 
        <div class = "row NewsGrid">
            <div class = "col-md-3">
                <img src = "<?php echo $News-> urlToImage ?> " alt = "News thumbnail">
            </div> 
            <div class="col-md-9">
                <h2>TITLE : <?php echo $News -> title ?></h2>
                <h5>DESCRIPTION <?php echo $News -> description ?></h5>
                <p> CONTENT <?php echo $News -> content ?></p>
                <h6> AUTHOR <?php echo $News -> author ?> </h6>
                <h6> PUBLILSHED <?php echo $News -> publishedAt ?> </h6>
               <p><a href = "<?php $value ['url']?>">READ MORE</p>
            </div>   

            </div>
            <?php
         }
         ?>

        </div> 
 </body>
</html>