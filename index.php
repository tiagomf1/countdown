<html>
    <head>
    <link rel="stylesheet" href="./FlipClock-master/compiled/flipclock.css">    
    </head>
    
    
    <body>
        <script src="./jquery-3.1.1.min.js"></script>
	<script src="./FlipClock-master/compiled/flipclock.min.js"></script>
  
        
        
        <?php
        $descricao='25 de Dezembro às 20h';
        $datalimite="December 25, 2016 8:00 PM";
        $date = strtotime($datalimite);
        $remaining = $date - time();
  
        ?>
        
        <div>Descrição: <b>Tempo para</b> <?php echo $descricao ?> </div>
        <div class="your-clock" style="margin-top:100px;"></div>
        
        
        
        <script type="text/javascript">
	var clock = $('.your-clock').FlipClock(<?php echo $remaining ?>, {
	clockFace: 'DailyCounter',	
        countdown: true
	});
        </script>

    </body>
    
</html>