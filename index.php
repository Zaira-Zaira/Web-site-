<?php
$python = (
     [
         "Classement" => "1", 
         "Langage" => "Python", 
         "Type" => "Web &  application"
     ]
     );

$C = (
    [
        "Classement" => "2", 
        "Langage" => "C++", 
        "Type" => "Application"
    ]
); 
$nodeJs = (
        [
            "Classement" => "3", 
            "Langage" => "Node js", 
            "Type" => " Web & application"
        ]
        );
$php = (
        [
          "Classement" => "4", 
          "Langage" => "PHP", 
          "Type" => " Web & application"
        ]
);

?>
<?php include_once  'head.php'?>
<body>
    <header>
        <h1>Spécial arrow <i aria-hidden="true" class="arrow-left"></i></h1>
    </header>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th role="columnheader">Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            foreach ($python as $key => $valeur) 
                            {
                                echo "<td>" . $valeur. "</td>";
                            }
                        
                        ?>   
                    </tr>


                    <tr>
                         <?php
                   
                             foreach ($C as $key => $valeur) 
                             {
                                echo "<td>" . $valeur. "</td>";
                             }
                         ?>
                    </tr>

                    <tr>
                           <?php
                   
                            foreach ($nodeJs as $key => $valeur) 
                               {
                              echo "<td>" . $valeur. "</td>";
                              }
                   ?>
                </tr>


                    <tr>
                    <?php
                   
                        foreach ($php as $key => $valeur) 
                        {
                          echo "<td>" . $valeur. "</td>";
                        }
                   ?>
                    </tr>

                </tbody>
                <tfoot>
                        <tr>
                            <th>Classement</th>
                            <th>Langage</th>
                            <th>Type</th>
                        </tr>
                </tfoot>
            </table>

        </div>
       
  <?php include_once 'footer.php' ?>
    </main>
</body>
</html>