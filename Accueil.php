<?php include("includes/header.php")?>

<div class="slideshow">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript">

   $(function(){
        setInterval(function(){
        $(".slideshow ul").animate({marginLeft:-350},800,function(){
        $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
    })
    }, 3500);
    });

</script>

<ul>

    <li><img src="image1.jpg" alt="" width="300" height="300" /></li>
    <li><img src="image2.jpg" alt="" width="300" height="300" /></li>
    <li><img src="image3.jpg" alt="" width="300" height="300" /></li>             

</div>

<?php include("includes/footer.php")?>