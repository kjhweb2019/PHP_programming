# boardz
게시판 검색 기능 완성하기

## 기존 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.html
```

## board.php (수정)
- board.php 에서 POST로 전달된 변수 값을 가져옴
    + search
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- 전달받은 변수 값 search 를 이용해서 select 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
    + mysql_query
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
- mysql_num_rows() 함수를 이용해서, 전달받은 레코드 수를 가져와 이미지 배치에 이용
- html의 각 위치(title, contents...) 에 전달받은 레코드의 각 속성 값을 적절히 echo() 함수를 통해 배치해서 출력

