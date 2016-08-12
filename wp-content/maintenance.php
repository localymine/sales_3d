<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.1.0/jquery.countdown.min.js"></script>

<style>
    body { text-align: center; padding: 100px; }
    h1 { font-size: 50px; text-transform: uppercase;}
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }

    ul#clock {
        list-style: none;
        margin: 50px 0;
        padding: 0;
        display: block;
        text-align: center;
    }

    ul#clock li { display: inline-block; }

    ul#clock li span {
        font-size: 80px;
        font-weight: 300;
        line-height: 80px;
    }

    ul#clock li.seperator {
        font-size: 80px;
        line-height: 70px;
        vertical-align: top;
    }

    ul#clock li p {
        color: #a7abb1;
        font-size: 25px;
    }
</style>

<article>
    <h1>Launching Soon!</h1>
    <div>
        <p>&mdash; The On My Way &mdash;</p>
    </div>
</article>

<ul id="clock"></ul>

<script type="text/javascript">
    $('#clock').countdown('2016/10/31', function (event) {
        $(this).html(event.strftime(''
                + '<li><span class="days">%D</span><p class="days_text">Days</p></li>'
                + '<li class="seperator">:</li>'
                + '<li><span class="hours">%H</span><p class="hours_text">Hours</p></li>'
                + '<li class="seperator">:</li>'
                + '<li><span class="minutes">%M</span><p class="minutes_text">Minutes</p></li>'
                + '<li class="seperator">:</li>'
                + '<li><span class="seconds">%S</span><p class="seconds_text">Seconds</p></li>'
                ));
    });
</script>