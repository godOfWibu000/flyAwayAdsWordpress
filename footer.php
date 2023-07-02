<!-- Footer -->
<!-- Phone fixed -->
        <div class="live-call">
            <a href="tel:0941927604"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/call-icon.png" alt="" height="100%"><p>0941.927.604</p></a>
        </div>
        <div class="live-call live-zalo">
            <a href="https://zalo.me/0941927604" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/zalo-icon.png" alt="" height="100%"></a>
        </div>
        <div id="up-top">
            <span class="material-symbols-outlined" style="font-size: 45px; color: white;">keyboard_control_key</span>
        </div>
        <footer>
            <div class="footer-items">
                <div class="footer-item1">
                    <h2>Thông tin liên hệ</h2>
                    <div class="contact">
                        <h3>CÔNG TY TNHH TRUYỀN THÔNG FLY AWAY VIỆT NAM-FLY AWAY VIET NAM MEDIA COMPANY LIMITED</h3>
                        <p>Địa chỉ:P801, tầng 8, số 106 Tôn Đức Thắng, Phường Quốc Tử Giám, Quận Đống Đa, Thành phố Hà Nội, Việt Nam</p>
                        <p>Điện thoại:<a href="tel:0941927604">0941.927.604</a></p>
                        <p>Email:<a href="mailto:flyawayads@email.com"> flyaway@email.com</a></p>
                        <p>Mã số thuế:<a href="https://masothue.com/0108603490-cong-ty-tnhh-truyen-thong-fly-away-viet-nam">0108603490</a></p>
                        <div class="social-network">
                            <a href="https://www.facebook.com/vantuan.mkt" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook-icon.png" alt="" width="40px"></a>
                            <a href="https://zalo.me/0941927604" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/zalo-icon.png" alt="" width="40px"></a>
                            <a href="https://www.youtube.com/channel/UCok-TB21FHRnscjUPje6hyg" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube-icon.png" alt="" width="40px"></a>
                            <a href="https://www.tiktok.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/tiktok-icon.png" alt="" width="40px"></a>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29786.921629628596!2d105.80631221685465!3d21.058071152686797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aafe7260066b%3A0x4c2c988309aaa3db!2zSOG7kyBUw6J5!5e0!3m2!1svi!2s!4v1651373296512!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="footer-item2">
                    <h2>Dịch vụ</h2>
                    <ul>
                        <li><p><a href="">Tăng like</a></p></li>
                        <li><p><a href="">Tăng follow</a></p></li>
                        <li><p><a href="">Tăng tương tác</a></p></li>
                        <li><p><a href="">Tăng tin nhắn</a></p></li>
                    </ul>
                    <div class="service-item">

                    </div>
                </div>
                <div class="footer-item3">
                    <h2>Giới thiệu</h2>
                    <ul>
                        <li><p><a href="">Introduce A</a></p></li>
                        <li><p><a href="">Introduce B</a></p></li>
                        <li><p><a href="">Introduce C</a></p></li>
                        <li><p><a href="">Introduce D</a></p></li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_QfxhaR-AoM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div id="line"></div>
                <?php get_search_form(); ?>
            </div>
            <div class="copyright">
                <h3>©️Copyright by FlyAwayAds</h3>
            </div>
        </footer>
    </div>

    <!-- JS -->
    <script>
        //Toggle 
        const toggleButton = document.getElementById("toggle");
        const navbar = document.getElementsByClassName('nav-bar')[0]
        toggleButton.addEventListener("click", () => {
            navbar.classList.toggle('active');
            toggleButton.classList.toggle('action');
        });

        //Up-top
        window.addEventListener('scroll', function(){
            var header = document.querySelector("header");
            var uptop = document.getElementById("up-top");
            header.classList.toggle("sticky", window.scrollY > 0);
            uptop.classList.toggle("up-top-top", window.scrollY > 0);
        })

        $("#up-top").click(function(){
            $('html, body').animate({scrollTop: 0}, 700);
        });

        //Service
        function service1(){
            document.getElementById("service-content").innerHTML = "<h2>Quảng cáo bài viết và hình ảnh/video</h2><ul><li>Hỗ trợ tạo bài viết + banner quảng cáo.</li><li>Không giới hạn lượng tiếp cận khách hàng.</li><li>Tăng tương tác với khách hàng, tăng doanh số bán hàng.</li><li>Truyền cảm hứng mua sắm qua quảng cáo của bạn.</li><li>Truyền cảm hứng mua sắm qua quảng cáo của bạn.</li></ul>"
            document.getElementById("service-img").src = "<?php bloginfo('stylesheet_directory'); ?>/img/anh1.png";

            document.getElementById("service-btn1").style.background = "var(--main-color1)";
            document.getElementById("service-btn1").style.borderRadius = "20px";
            document.getElementById("service-btn1").style.color = "white"

            document.getElementById("service-btn2").style.background = "none";
            document.getElementById("service-btn2").style.borderRadius = "0";
            document.getElementById("service-btn2").style.color = "black"

            document.getElementById("service-btn3").style.background = "none";
            document.getElementById("service-btn3").style.borderRadius = "0";
            document.getElementById("service-btn3").style.color = "black"

            document.getElementById("service-btn4").style.background = "none";
            document.getElementById("service-btn4").style.borderRadius = "0";
            document.getElementById("service-btn4").style.color = "black"
        }
        function service2(){
            document.getElementById("service-content").innerHTML = "<h2>Quảng cáo tăng like fanpage</h2><ul><li>Hỗ trợ BANNER quảng cáo</li><li>Fanpage có nhiều like đồng nghĩa với fanpage uy tín.</li><li>100% like thật giúp tăng số lượng khách hàng tiềm năng.</li><li>Bạn chỉ phải trả tiền khi khách hàng Click vào quảng cáo. Đối với những người nhìn thấy quảng cáo nhưng không tương tác doanh nghiệp sẽ không mất phí.</li></ul>";
            document.getElementById("service-img").src = "<?php bloginfo('stylesheet_directory'); ?>/img/anh2.jpg";

            document.getElementById("service-btn2").style.background = "var(--main-color1)";
            document.getElementById("service-btn2").style.borderRadius = "20px";
            document.getElementById("service-btn2").style.color = "white"

            document.getElementById("service-btn1").style.background = "none";
            document.getElementById("service-btn1").style.borderRadius = "0";
            document.getElementById("service-btn1").style.color = "black"

            document.getElementById("service-btn3").style.background = "none";
            document.getElementById("service-btn3").style.borderRadius = "0";
            document.getElementById("service-btn3").style.color = "black"

            document.getElementById("service-btn4").style.background = "none";
            document.getElementById("service-btn4").style.borderRadius = "0";
            document.getElementById("service-btn4").style.color = "black"
        }
        function service3(){
            document.getElementById("service-btn3").style.background = "var(--main-color1)";
            document.getElementById("service-btn3").style.borderRadius = "20px";
            document.getElementById("service-btn3").style.color = "white"

            document.getElementById("service-btn1").style.background = "none";
            document.getElementById("service-btn1").style.borderRadius = "0";
            document.getElementById("service-btn1").style.color = "black"

            document.getElementById("service-btn2").style.background = "none";
            document.getElementById("service-btn2").style.borderRadius = "0";
            document.getElementById("service-btn2").style.color = "black"

            document.getElementById("service-btn4").style.background = "none";
            document.getElementById("service-btn4").style.borderRadius = "0";
            document.getElementById("service-btn4").style.color = "black"
        }
        function service4(){
            document.getElementById("service-btn4").style.background = "var(--main-color1)";
            document.getElementById("service-btn4").style.borderRadius = "20px";
            document.getElementById("service-btn4").style.color = "white"

            document.getElementById("service-btn1").style.background = "none";
            document.getElementById("service-btn1").style.borderRadius = "0";
            document.getElementById("service-btn1").style.color = "black"

            document.getElementById("service-btn2").style.background = "none";
            document.getElementById("service-btn2").style.borderRadius = "0";
            document.getElementById("service-btn2").style.color = "black"

            document.getElementById("service-btn3").style.background = "none";
            document.getElementById("service-btn3").style.borderRadius = "0";
            document.getElementById("service-btn3").style.color = "black"
        }
    </script>


    <!-- Facebook comment -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=588461539591711&autoLogAppEvents=1" nonce="MpvO5PfA"></script>
</body>
</html>