
<? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/start.html" ?>

  <link rel="stylesheet" href="./css/main.css">

</head>
<body>
  <ul class = "skipmenu_list">

    <li><a href="#">메뉴바로가기</a></li>
    <li><a href="#">본문바로가기</a></li>
    <li><a href="#">하단바로가기</a></li>
    
  </ul>

  <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/header.html" ?>

  <!-- 의미없는 구역은 div -->
  <div id = "visual_wrap">
    <!-- 의미가 있는 컨텐츠를 담는 곳은 section -->
    <section id="visual">
        <h2 class="hidden">메인비쥬얼</h2>
        <ul id="visual_list">
          <li><a href="#"><img src="./images/visual_img_01.jpg" alt="Crystal ~~~~"></a></li>
          <li><a href="#"><img src="./images/visual_img_02.jpg" alt="Timeless ~~~~"></a></li>
          <li><a href="#"><img src="./images/visual_img_03.jpg" alt="The Skiny ~~~~"></a></li>
        </ul>
        <a href="#" id="next_btn"><img src="./images/next_btn.png" alt="다음보기"/></a>
        <a href="#" id="prev_btn"><img src="./images/prev_btn.png" alt="이전보기"/></a>
    </section>
  </div>

  <div id="contents_wrap">
    <section id="contents">
      <h2 class="hidden">컨텐츠영역</h2>
          <section id="use_install">
            <h3 class="hidden">설치사용방법안내</h3>
            <ul id="useinstall_list">
              <li>
                <p class = "useinstall_title">
                  HOW TO INSTALL
                </p>
                <p class="useinstall_image">
                  <img src="./images/banner_img_01.gif" alt="이미지설명">
                </p>
                <p class="useinstall_text">
                  제품 사용법을 자세히 설명해 드립니다.
                </p>
              </li>

              <li>
                <p class = "useinstall_title">
                  EVENT
                </p>
                <p class="useinstall_image">
                  <img src="./images/banner_img_02.gif" alt="이미지설명">
                </p>
                <p class="useinstall_text">
                  글램쉘의 다양한 이벤트에 참여해 보세요.
                </p>
              </li>

              <li>
                <p class = "useinstall_title">
                  POWER REVIEW
                </p>
                <p class="useinstall_image">
                  <img src="./images/banner_img_03.gif" alt="이미지설명">
                </p>
                <p class="useinstall_text">
                  사용후기 등 고객님의 의견을 듣습니다.
                </p>
              </li>

              <li>
                <p class = "useinstall_title">
                  NANUM & HOPE
                </p>
                <p class="useinstall_image">
                  <img src="./images/banner_img_04.gif" alt="이미지설명">
                </p>
                <p class="useinstall_text">
                  현재 활동중인 "나눔과 희망"활동 입니다.
                </p>
              </li>
            </ul>
          </section>
    </section>
  </div>

  <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/footer.html" ?>

</body>
</html>