<html>
    <head>
        <title>Pagination</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/Jpages.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="../js/jPages.js"></script>
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" type"text/css" href="./style.css"

    </head>
    <body>
            <script>
                    $(function(){
                        /* initiate the plugin */
                        $("div.holder").jPages({
                            containerID  : "itemContainer",
                            perPage      : 4,
                            startPage    : 1,
                            startRange   : 1,
                            midRange     : 3,
                            endRange     : 1,
                        });
                    });
            </script>
            <ul id="itemContainer">
                <li><img src="./game images/1.jpg" alt="image"></li>
                <li><img src="./game images/2.jpg" alt="image"></li>
                <li><img src="./game images/3.jpg" alt="image"></li>
                <li><img src="./game images/4.jpg" alt="image"></li>
                <li><img src="./game images/5.jpg" alt="image"></li>
                <li><img src="./game images/6.jpg" alt="image"></li>
                <li><img src="./game images/7.jpg" alt="image"></li>
                <li><img src="./game images/8.jpg" alt="image"></li>
                <li><img src="./game images/9.jpg" alt="image"></li>
                <li><img src="./game images/10.jpg" alt="image"></li>
                <li><img src="./game images/11.jpg" alt="image"></li>
                <li><img src="./game images/12.jpg" alt="image"></li>
                <li><img src="./game images/13.jpg" alt="image"></li>
                <li><img src="./game images/14.jpg" alt="image"></li>
                <li><img src="./game images/15.jpg" alt="image"></li>
                <li><img src="./game images/16.jpg" alt="image"></li>
                <li><img src="./game images/18.jpg" alt="image"></li>
                <li><img src="./game images/19.jpg" alt="image"></li>
                <li><img src="./game images/20.jpg" alt="image"></li>
                <li><img src="./game images/21.jpg" alt="image"></li>
                <li><img src="./game images/22.jpg" alt="image"></li>
                <li><img src="./game images/23.jpg" alt="image"></li>
                <li><img src="./game images/24.jpg" alt="image"></li>
                <li><img src="./game images/25.jpg" alt="image"></li>
                <li><img src="./game images/26.jpg" alt="image"></li>
                <li><img src="./game images/27.jpg" alt="image"></li>
                <li><img src="./game images/28.jpg" alt="image"></li>
                <li><img src="./game images/29.jpg" alt="image"></li>
                <li><img src="./game images/30.jpg" alt="image"></li>


            </ul>
            <div class="holder">
                    <span class="arrowPrev"></span>
                    <a class="jp-previous jp-disabled"></a>
                    <a class="jp-current">1</a>
                    <span class="jp-hidden">...</span>
                    <a>2</a>
                    <a>3</a>
                    <a>4</a>
                    <a>5</a>
                    <a class="jp-hidden">6</a>
                    <a class="jp-hidden">7</a>
                    <a class="jp-hidden">8</a>
                    <a class="jp-hidden">9</a>
                    <span>...</span>
                    <a>10</a>
                    <span class="arrowNext"><a class="jp-next"></a></span>
            </div>
    </body>
</html>
