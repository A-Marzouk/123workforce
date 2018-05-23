<!-- scripts-->
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"
    integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../slick-master/slick/slick.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script>
    $(document).ready(function(){
        $('.slickSlide').slick({
            lazyLoad: 'ondemand',
            dots: true,
            arrows:false,
            slidesPerRow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 478,
                    settings: {
                        slidesPerRow: 2,
                        rows: 1
                    }
                },
                {
                    breakpoint: 680,
                    settings: {
                        slidesPerRow: 2,
                        rows: 1
                    }
                }
            ]
        });
    });

</script>
</body>
</html>