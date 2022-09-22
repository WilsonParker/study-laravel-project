@extends('web.pages.nbc_template')
@section('sub_content')
    <div class="sub_content">
        <div class="sub_title">
            <p class="tit">훈련비 지원</p>
            <div class="mosa_box">
                <p style="color:blue">("2020.01.01. 이전)</p>
                <p>
                    보험연도에 200만원 이내에서 지원
                <p style="font-size:12px"> &nbsp;&nbsp;(다만, 근로자 수강지원금,(구)능력개발카드,근로자 직무능력향상 지원금, 내일배움카드제(재직자) 및 근로자 직업능력개발훈련 지원금을 모두 합산하여<br> &nbsp;&nbsp; 해당 보험연도에 200만원,5년간 300만원을 초과할 수 없음)
                </p>
                <p>고용위기지역근로자의 경우 보험연도에 300만원, 5년간 400만원 <br>
                <p>고용보험미가입근로자의 경우 보험연도에 150만원, 5년간 225만원<br>
                </p>
                <br>
                <p style="color:blue";>("2020.01.01. 이후)</p>
                <p>
                    실업, 재직, 자영업 여부에 관계 없이 내일배움카드 한장으로 5년간 사용 가능<br>
                    개인당 300~500만원의 훈련비용 지원<br>
                    취업성공패키지I참여자 등 저소득계층에게는 500만원 지원<br>
                    국가기간‧전략사업직종, 과정평가형 자격과정 등 특화과정은 훈련비 전액 지원<br>
                    자부담 비율은 직종별 취업률 등에 따라 차등 적용<br>
                    자부담5%p 추가 부과(일반사무, 회계, 요양보호사, 음식조리, 공예, 바리스타, 제과제빵, 이미용, 문화콘텐츠제작, 간호조무사)<br>
                    #유의사항<br>
                    동일과정 반복수강 불가, 동일 직종의 훈련과정은 1년에 최대 3회까지 수강가능, 동일기간에 실시 되지 않는 훈련과정은 1일 최대 3개 과정까지 수강 가능<br>
                </p>
            </div>
        </div>

        <div class="sub_title">
            <p class="tit">수강포기시 패널티 안내</p>
            <p>아래와 같이 국민내일배움카드제 미수료 패널티를 안내 합니다.</p>
        </div>
        <table class="t_style16">
            <tr>
                <th>구 분</th>
                <th>차감액</th>

            </tr>
            <tr>
                <td>1. 질병·사고, 훈련기관 사정, 천재지변 등 불가피한 사유 없이 중도에 훈련 수강을 그만둔 경우</td>
                <td>-1회 20만원<br />-2회 50만원<br/>-3회 이상 100만원</td>

            </tr>
            <tr>
                <td>2. 거짓이나 그 밖의 부정한 방법으로 출결체크하여 제36조제1항제3호에 따라 제적된 경우</td>
                <td>-전액			</td>

            </tr>
            <tr>
                <td>3. 제4조의 지원대상에 해당하지 않거나 제5조의 지원제외 대상에 해당함에도 불구하고 거짓이나 그 밖의 부정한 방법으로 계좌를 발급받거나, 지원받은 경우</td>
                <td>-전액</td>

            </tr>
        </table>

    </div>
@endsection