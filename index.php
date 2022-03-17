<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <p>
            <h2>DNS</h2>
            <form method="POST">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">www.</span>
                        </div>
                            <input type="text" id="dns" name="dns" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Escriba el DNS" required>
                            <div class="w3ls-login  w3l-sub">
                                <input name= "submit3" type="submit" value="ok">
                            </div>
                            <div class="input-group mb-3">
                                <br><p><b>Resultado: &nbsp; &nbsp;</b></p>
                                <?php
                                    if (isset($_POST['submit3'])) {
                                        $dns =$_POST['dns'];
                                        $result2 = gethostbyname($dns);                                    
                                    }
                                ?>
                                <p><?php 
                                    if (!empty($result2)){  
                                        echo $result2; 
                                    }
                                ?></p>
                        </div>
                    </div>
            </form>
            <h2>IP</h2>
            <form method="POST">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm2">IP</span>
                        </div>
                        <input type="text" id="ip" name="ip"class="form-control" value=""aria-label="Small" aria-describedby="inputGroup-sizing-sm2"placeholder="Escriba la IP" required>
                        <div class="w3ls-login  w3l-sub">
                            <input name= "submit2" type="submit" value="ok">
                        </div>
                        
                        <!--<input class="btn btn-success" name="submit2"type="submit2">ok</input>-->
                        <div class="input-group mb-3">
                            <br><p><b>Resultado: &nbsp; &nbsp;</b></p>
                            <?php
                                if (isset($_POST['submit2'])) {
                                    $ip =$_POST['ip'];
                                    $result = gethostbyaddr($ip);        
                                    /*var_dump($x);*/   
                                }
                            ?>
                            <p><?php       
                                if (!empty($result)){                          
                                    echo $result; 
                                }
                                ?></p>
                        </div>
                    </div>
            </form>


        </p>
       
        <div class="collapse" id="collapseExample2">
            <div class="card card-body">
                <form method="POST">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm2">IP</span>
                        </div>
                        <input type="text" id="ip" name="ip"class="form-control" value=""aria-label="Small" aria-describedby="inputGroup-sizing-sm2"placeholder="Escriba la IP" required>
                        <div class="w3ls-login  w3l-sub">
                            <input name= "submit2" type="submit" value="ok">
                        </div>
                        
                        <!--<input class="btn btn-success" name="submit2"type="submit2">ok</input>-->
                        <div class="input-group mb-3">
                            <br><p><b>Resultado: &nbsp; &nbsp;</b></p>
                            <?php
                                if (isset($_POST['submit2'])) {
                                    $ip =$_POST['ip'];
                                    $result = gethostbyaddr($ip);        
                                    /*var_dump($x);*/   
                                }
                            ?>
                            <p><?php echo $result; ?></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
