<? $tm=1; $sm=3; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

<!-- data picker -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css" />  
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- data picker -->

<script type="text/javascript">
$(document).ready( function() {
		$("#go").click(function() {
				if( !($("input:radio[name='period']").is(":checked")) ){   // id 없이 name 값으로 확인시
						alert("캠프 기간을 선택하여 주십시요");
						return;
				} 
				
				/*
				if( $("#hdate").val() == "") {
						alert("희망날짜를 입력하여 주십시요");
						$("#hdate").focus();
						return;
				} 
				*/

				if( $("#mygroup").val() == "") {
						alert("단체명, 기관명을 입력하여 주십시요");
						$("#mygroup").focus();
						return;
				} 

				if( $("#uname").val() == "") {
						alert("이름 및 직위를 입력하여 주십시요");
						$("#uname").focus();
						return;
				} 

				if( $("#hp").val() == "") {
						alert("연락처를 입력하여 주십시요");
						$("#hp").focus();
						return;
				} 

				if( $("#email").val() == "") {
						alert("이메일을 입력하여 주십시요");
						$("#email").focus();
						return;
				} 

				if( $("#content").val() == "") {
						alert("내용을 입력하여 주십시요");
						$("#content").focus();
						return;
				} 

				$("#frm").submit();  //전송

		});

		$("#hdate").datepicker({
			changeMonth: true,
			dayNames: ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'],
			dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'], 
			monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			showButtonPanel: true, 
			currentText: '오늘 날짜', 
			closeText: '닫기', 
			dateFormat: "yy-mm-dd"
		});


});
</script>

<!-- 본문내용 -->
    <h3 class="h3-tit">캠프 1일차 (예시)</h3>
    <div class="gr_box">
        <div class="dotLst">
            <ul>
                <li><b>1교시(1H) : </b> 캠프소개 및 전체 유대감 형성</li>
                <li><b>2교시(1H) : </b> 학습 및 시간관리 유형 검사, 조편성 및 조별 유대감 형성</li>
                <li><b>3교시(1H30) : </b> 1.학습 및 시간관리 유형 검사 결과를 활용한 자기탐색</li>
                <li><b>4교시(1H30) : </b> 2.나의 미래에 맞는 나의 목표</li>
                <li><b>식사</b></li>
                <li><b>5교시(1H30) : </b> 3.효과적인 시간관리 전략</li>
                <li><b>6교시(1H30) : </b> 4.액션러닝을 활용한 새해 실행 계획 세우기</li>
                <li><b>휴식</b></li>
            </ul>
        </div>
    </div>

    <div class="gap"></div>

    <h3 class="h3-tit">캠프 2일차 (예시)</h3>
    <div class="gr_box">
        <div class="dotLst">
            <ul>
                <li><b>1교시(3H) : </b> 5. 미루기 Good Bye!</li>
                <li><b>식사</b></li>
                <li><b>2교시(1H) : </b> 만족도평가, 캠프 종료, 사진촬영</li>
            </ul>
        </div>
    </div>

    <div class="ssgap"></div>

	<div class="cred">※ 위의 경우는 하나의 예시이며 캠프 기간과 내용은 요청기관의 요구에 따라 맞춤형으로 제공됩니다. </div>

    <div class="block-line"></div>

    <h3 class="h3-tit">신청서 결과</h3>

    <div class="application_complete">
        <div class="img"><img src="/renew/home/share/img/sub/complete_img.png" alt="" /></div>
        <div class="title">신청이 완료되었습니다!</div>
        <div class="txt">신청내역 확인은 마이페이지 > 신청내역에서 확인하실 수 있습니다.</div>
        <div class="btn_box">
            <a href="#" class="btn btn_sky bw_md bh_lg">신청내역 보기</a>
        </div>
    </div>


<!-- //본문내용 -->

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>