<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>복잡한 시맨틱 HTML 반응형 예제</title>
    <link rel="stylesheet" href="/css/dulagen/app.css">
</head>
<body>

<!-- 헤더 영역 -->
<header>
    <div class="container">
        <!-- 로고 -->
        <h1 class="logo">로고</h1>
        <!-- 내비게이션 메뉴 (데스크톱) -->
        <nav class="nav-desktop">
            <ul class="nav-links">
                <li><a href="#">홈</a></li>
                <li><a href="#">소개</a></li>
                <li><a href="#">서비스</a></li>
                <li><a href="#">연락처</a></li>
            </ul>
        </nav>
        <!-- 메뉴 토글 버튼 (모바일에서 표시) -->
        <button class="menu-toggle" aria-label="메뉴 열기">&#9776;</button>
    </div>
</header>

<!-- 내비게이션 메뉴 (모바일) -->
<nav class="nav-mobile">
    <ul class="nav-links">
        <li><a href="#">홈</a></li>
        <li><a href="#">소개</a></li>
        <li><a href="#">서비스</a></li>
        <li><a href="#">연락처</a></li>
    </ul>
</nav>

<!-- 메인 콘텐츠 영역 -->
<main>
    <!-- 여기에 콘텐츠가 들어갑니다 -->
    <section>
        <h2>메인 콘텐츠</h2>
        <p>이곳에 메인 콘텐츠가 표시됩니다.</p>
        <!-- 스크롤을 테스트하기 위한 추가 내용 -->
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
        <p>추가 내용...</p>
    </section>
</main>

<!-- 푸터 영역 -->
<footer>
    <p>&copy; 2024 회사명. 모든 권리 보유.</p>
</footer>

<!-- JavaScript 파일 연결 -->
<script src="/js/script.js"></script>
</body>
</html>
