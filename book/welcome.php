<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:quizlogin.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Career Guidance</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="home.php"><b>Career Guidance</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="welcome.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
            <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="welcome.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Preferences</a></li>
            <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>> <a href="welcome.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Disclamer</a></li>
            <li <?php echo''; ?> > <a href="index.php?q=welcome.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Appointment</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li <?php echo''; ?> > <a href="quizlogout.php?q=welcome.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
        </ul>




        </div>
    </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if(@$_GET['q']==1)
                {
                    echo'<center><h4>Note: Check the disclamer page before solving the quiz for instructions and rules about the quiz.</h4></center>';
                    $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</center></b></td><td><center><b>Action</b></center></td></tr>';
                    $c=1;
                    while($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $Yes = $row['Yes'];
                        $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);
                    if($rowcount == 0){
                        echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$title.'</center></td><td><center>'.$total.'</center></td><td><center>'.$Yes*$total.'</center></td><td><center><b><a href="welcome.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn sub1" style="color:black;margin:0px;background:#1de9b6"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></center></td></tr>';
                    }
                    else
                    {
                    echo '<tr style="color:#99cc32"><td><center>'.$c++.'</center></td><td><center>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></center></td><td><center>'.$total.'</center></td><td><center>'.$Yes*$total.'</center></td><td><center><b><a href="quizupdate.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                    }
                    }
                    $c=0;
                    echo '</table></div></div>';
                }?>

                <?php
                    if(@$_GET['q']== 'quiz' && @$_GET['step']== 2)
                    {

                        $eid=@$_GET['eid'];
                        $sn=@$_GET['n'];
                        $total=@$_GET['t'];
                        $q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
                        echo '<div class="panel" style="margin:5%">';
                        while($row=mysqli_fetch_array($q) )
                        {
                            $qns=$row['qns'];
                            $qid=$row['qid'];
                            echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br /><br />'.$qns.'</b><br /><br />';
                        }
                        $q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
                        echo '<form action="quizupdate.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
                        <br />';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $option=$row['option'];
                            $optionid=$row['optionid'];
                            echo'<input type="radio" name="ans" value="'.$optionid.'">&nbsp;'.$option.'<br /><br />';
                        }
                        echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
                    }

                    if(@$_GET['q']== 'result' && @$_GET['eid'])
                    {
                        $eid=@$_GET['eid'];
                        $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
                        echo  '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            $w=$row['No'];
                            $r=$row['Yes'];
                            $qa=$row['level'];
                            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
                                <tr style="color:#99cc32"><td>yes&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr>
                                <tr style="color:red"><td>No&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
                                <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        $q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        echo '</table></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']== 2)
                    {

                        echo'<center><h4>Note: Check in which quiz you have the highest marks and choose accordingly!!</h4></center>';
                        $q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
                        echo  '<div class="panel title">
                        <table class="table table-striped title1" >
                        <tr style="color:black;"><td><center><b>S.N.</b></center></td><td><center><b>Quiz</b></center></td><td><center><b>Question Solved</b></center></td><td><center><b>Score</b></center></td>';
                        $c=0;
                        while($row=mysqli_fetch_array($q) )
                        {
                        $eid=$row['eid'];
                        $s=$row['score'];
                        $qa=$row['level'];
                        $q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');

                        while($row=mysqli_fetch_array($q23) )
                        {  $title=$row['title'];  }
                        $c++;
                        echo '<tr><td><center>'.$c.'</center></td><td><center>'.$title.'</center></td><td><center>'.$qa.'</center></td><td><center>'.$s.'</center></td></tr>';
                    $a[$c]=$s;
                    $t[$c]=$title;
                    }
                        echo'</table></div>';
                       if($a[1]>$a[3] && $a[1]>$a[2])
                       {
                           echo"<center><h4>You have Scored highest in $t[1]!!</h4></center>";
                            echo"<center><h4>You should select <strong>$t[1]</strong>!!</h4></center>";
                       }
                       elseif($a[2]>$a[3] && $a[2]>$a[1])
                       {
                         echo"<center><h4>You have Scored highest in $t[2]!!</h4></center>";
                          echo"<center><h4>You should select <strong>$t[2]</strong>!!</h4></center>";
                       }
                       else
                       {
                         echo"<center><h4>You have Scored highest in $t[3]!!</h4></center>";
                          echo"<center><h4>You should select <strong>$t[3]</strong>!!</h4></center>";
                       }
                       echo'<center><h4>If still in doubt, please contact the counsellor and book your appointment .</h4></center>';
                    }

                    if(@$_GET['q']== 3)
                    {
                        $q=mysqli_query($con,"SELECT * FROM rank ORDER BY score DESC " )or die('Error223');
                        echo  '<div class="panel title"><div class="table-responsive">
                        <table class="table table-striped title1" >
                        <tr style="color:blue"><center><h1><strong>Career Guidance Quiz Info</strong></h1></center></tr>';
                        echo' <br>';
                        echo '<tr><h3><strong>~ General Instructions before attempting the quiz - </strong></h3></tr>';
                        echo '<tr><h4>1.The quiz part  consists of three quizzes. The end user has to attempt all the three quizzes to get result.</h4></tr>';
                        echo '<tr><h4>2.The three quiz are -  Science Quiz, Arts Quiz, Commerce Quiz.</h4></tr>';
                        echo '<tr><h4>3.Each  quiz consists of 10 questions. The questions are basic questions to get idea  about your the interests.</h4></tr>';
                        echo '<tr><h3><strong>~ After attempting all the three quiz -</strong></h3></tr>';
                        echo '<tr><h4>1.If you found that the marks in a particular quiz is highest. The you can choose the particular career field.</h4></tr>';
                        echo '<tr><h4>2.If there is a tie between marks in any of the quizzes then you can choose a career field that is common between the two fields or you can contact the counsellor.</h4></tr>';
                        echo '<tr><h4>3.The counsellor will guide you in choosing the right career field.</h4></tr>';
                        echo '<tr><h3><strong>~ Holland\'s Theory of Career choice -</strong></h3></tr>';
                        echo '<tr><h4>1.John Holland’s theory centres on the
                        notion that most people fit into one of
                        six personality types:
                        <br>
                        <br>
                        • realistic,
                        • investigative,
                        • artistic,
                        • social,
                        • enterprising, and
                        • conventional.</h4></tr>';
                        echo '<img src="image\holland.PNG" style=" display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 50%;">';
                        echo '<tr><h4>2.Realistic:<br><br> These people are usually assertive and competitive, and are interested in activities requiring motor coordination, skill and strength.  People with a realistic orientation usually prefer to work a problem through by doing something, rather than talking about it, or sitting and thinking about it.  They like concrete approaches to problem solving, rather than abstract theory.  They tend to be interested in scientific or mechanical rather than cultural and aesthetic areas.  They like to work with THINGS.</h4></tr>';
                        echo '<tr><h4>3.Investigative:<br><br> These people like to think and observe rather than act, to organize and understand information rather than to persuade.  They tend to prefer individual rather than people oriented activities.  They like to work with DATA.</h4></tr>';
                        echo '<tr><h4>4.Artistic:<br><br> These people are usually creative, open, inventive, original, perceptive, sensitive, independent and emotional. .  They do not like structure and rules, like tasks involving people or physical skills, and are more likely to express their emotions than others.  They like to think, organize and understand artistic and cultural areas.  They like to work with IDEAS and THINGS. </h4></tr>';
                        echo '<tr><h4>5.Social:<br><br> These people seem to satisfy their needs in teaching or helping situations.  They are different than R and I Types because they are drawn more to seek close relationships with other people and are less apt to want to be really intellectual or physical.  They like to work with PEOPLE.</h4></tr>';
                        echo '<tr><h4>6.Enterprising:<br><br> These people are good talkers, and use this skill to lead or persuade others.  They also value reputation, power, money and status, and will usually go after it.  They like to work with PEOPLE and DATA.</h4></tr>';
                        echo '<tr><h4>7.Conventional:<br><br> These people like rules and regulations and emphasize self-control.  They like structure and order, and dislike unstructured or unclear work and interpersonal situations.  They place value on  reputation, power, or status.They like to work with DATA.</h4></tr>';
                        echo '</table></div></div>';



                    }
                ?>

</body>
</html>
