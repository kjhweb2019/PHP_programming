# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!
create table tableboard_shop(
        num int auto_increment,
        date datetime,
        order_id char(10),
        name char(50),
        price int,
        quantity int,
        primary key(num)
    );

## index.php 수정
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- select 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL에 쿼리 스트링 전송
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
- html의 각 위치(date, order_id, ...) 에 전달받은 레코드의 각 속성 값을 적절히 echo() 함수를 통해 배치해서 출력

## board_form.php 수정
- index.php 에서 POST로 전달된 변수 값을 가져옴
    +  date, order_id, ... , quantity
- index.php 에서 GET으로 전달된 변수 값을 가져옴
    + num 
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- select 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL에 쿼리 스트링 전송
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
- html의 각 위치(date, order_id, ...) 에 전달받은 레코드의 각 속성 값을 적절히 echo() 함수를 통해 배치해서 출력


## function
### insert.php 수정
- board_form.php 에서 POST로 전달된 변수 값을 가져옴
    +  date, order_id, ... , quantity
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- insert 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL에 쿼리 스트링 전송
- mysql_query() 함수의 결과가 false라면 에러 메시지 전송
    + alert
### update.php 수정
- board_form.php 에서 POST로 전달된 변수 값을 가져옴
    +  date, order_id, ... , quantity
- board_from.php 에서 GET으로 전달된 변수 값을 가져옴
    + num 
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- update 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL에 쿼리 스트링 전송
- mysql_query() 함수의 결과가 false라면 에러 메시지 전송
    + alert


### delete.php 수정
- board_form.php 에서 GET으로 전달된 변수 값을 가져옴
    + num 
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- delete 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL에 쿼리 스트링 전송
- mysql_query() 함수의 결과가 false라면 에러 메tl지 전송
    + alert