<html >
    <meta charset="utf-8">
<head>
<style>
        ul {
            list-style-type: disc ;
            margin: 0;
            padding: 0;
            overflow: visible;
            background-color: #333333;
            display: ;
        }

        li   {
            display: block;
            color: white;
            text-align: center;
            padding: 1em;
            border: 3px ;
            margin-left: 0.5em;
        }
        
       
       
    </style>

</head> 

<body>
    <ul>

    <li>
     
    <a href="/php/KACPERSKY.php">wróć </a> 
    </li>
    
    </ul>
    <p>

   <?php $number = 0 ?>
<?php $string ='użytkownik' ?> 
<ul>

<?php while( $number <50 ) {
  
    echo '<li>' . $string ,  $number . '</li>';
    $number++;
} 
?>

</ul>
   </p>

</body>
</html>