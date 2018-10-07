<html>
    <head>
    <body>
<?php
    $link=mysqli_connect("localhost", "root","");
    mysqli_select_db($link,"registration");
?>

<?php
    $result=mysqli_query($link,"SELECT * FROM products");
    while($row=mysqli_fetch_array($result))
    {

?>
        <div class="row"
            <div class="col-sm-8 text-right">
            <img class="pagination rounded float-right" src="../admin/<?php echo $row["upload"]; ?>"alt="products"/>
            </div>
            <div>
            <h2><?php echo $row["productprice"]; ?></h2>
            <p><?php echo $row["productname"]; ?></p>
            </div>
        </div>
<?php
    }
?>
    <body>
    <head>
</html>