<style>
    #admin #header .header_wrap {
        width: 1100px;
        min-width: 1100px;
        margin: 30px auto;
    }
    #admin #wrap #container {
        width: 1100px;
        min-width: 1100px;
        margin: 0 auto;
    }
    #admin #container h4 {
       margin-bottom: 30px;
    }
</style>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>PHP TEST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body id="admin">
    <div id="header">
        <div class="header_wrap">
        <a href="http://arjoe.devleaguer.com/"><img src="/images/logo.jpg" alt="임블리 로고"></a>
        </div>
    </div>
    <div id="wrap">
        <div id="container">
            <div id="contents insert">
                <h4>admin: 제품 등록</h4>
                <form id="prdInsert" name="prdInsert">
                    <div class="form-group">
                        <label>이름</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label>설명</label>
                        <input type="text" class="form-control" name="sub" id="sub" required>
                    </div>
                    <div class="form-group">
                        <label>이미지</label>
                        <input type="file" name="image" id="image" required>
                        <div class="prev_image"></div>
                    </div>
                    <div class="form-group">
                        <label>가격</label>
                        <input type="text" class="form-control" name="price" id="price" required>
                    </div>
                    <div class="form-group">
                        <label>할인 가격</label>
                        <span style="color: red;">*할인의 경우에만 입력해주세요.</span>
                        <input type="text" class="form-control" name="sale_price" id="sale_price">
                    </div>
                    <div class="form-group">
                        <label>제품 구분</label>
                        <div class="form-control">
                            <label class="checkbox-inline"><input type="checkbox" id="vely_made" value="vely_made">자체제작</label>
                            <label class="checkbox-inline"><input type="checkbox" id="only_vely" value="only_vely">단독입고</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>상세 페이지</label>
                        <input type="text" class="form-control" name="url" id="url" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="checkForm()">완료</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>

<script>
    var title, sub, image, price, sale_price, vely_made, only_vely, url;
    function checkForm() {
        var form = document.prdInsert;

        fileUpload();
        
        // if(!form.title.value) {
        //     alert('제품 이름을 입력해주세요.')
        //     form.title.focus();
        // } else if (!form.sub.value) {
        //     alert('제품 설명을 입력해주세요.')
        //     form.sub.focus();
        // } else if (!form.image.value) {
        //     alert('제품 이미지를 추가해주세요.')
        // } else if (!form.price.value) {
        //     alert('제품 가격을 입력해주세요.')
        //     form.price.focus();
        // } else if (!form.url.value) {
        //     alert('제품 상세 주소를 입력해주세요.')
        //     form.url.focus();
        // } else {
        //     //입력값 변수에 저장
        //     fileUpload();
        // }
    }

    function fileUpload() {
        var datas, xhr;
     
        datas = new FormData();
        datas.append( 'image', $( '#image' )[0].files[0] );
     
        $.ajax({
            url: '/upload.php',
            contentType: 'multipart/form-data',
            type: 'POST',
            dataType: 'json',    
            mimeType: 'multipart/form-data',
            data: datas,  
            success: function (data) {              
                //  alert( data.url );
                 console.log(data)               
            },
            error : function (jqXHR, textStatus, errorThrown) {
                alert('ERRORS: ' + textStatus);
            },
            cache: false,
            contentType: false,
            processData: false
        });       
    }
</script>
