<?php
	include './DB_manage/DBconnect.inc';

$page_current=$_GET['current_list'];

$list_start=($page_current-1)*10;
$list_count=10;


$result = mysql_db_query($database, "SELECT 
	c.studentYear,c.semester,c.major, l.subjectCode,c.sort,l.subjectName,l.professor,c.grade 
	FROM lecture  AS l LEFT JOIN course AS c ON c.subjectCode=l.subjectCode GROUP BY l.professor,l.subjectName ORDER BY c.studentYear,c.semester LIMIT $list_start,$list_count;
")
		or die("검색 에러");
	
	$resultCount = mysql_numrows($result);
	$i = 1;
	
	$html="<tr><td>교과목명</td><td>교수명</td><td>학점</td><td>구분</td><td>전공</td><td>평가보기</td></tr>";
	
			while($i<=$resultCount){
		
		$link = mysql_fetch_array($result);
		
		
		
		
		$sort =$link["sort"];
		$studentYear=$link["studentYear"];
		$semester =$link["semester"];
		$major=$link["major"];
		$subjectName =$link["subjectName"];
		$professor =$link["professor"];
		$grade =$link["grade"];
		$lectureNum = $link["lectureNum"];
		$subjecgkgtCode =$link["subjectCode"];
		
		
		
		if(!$link){
			echo "찾는 값이 없습니다.";
		}
		

		
		$html .='<tr>';
		$html .="<form id='ev' method='GET'>";
		$html .='<td>';
		$html .="<div name='$subjectName'>$subjectName</div>";
		$html .='</td>';
		
		$html .="<td name='professor1'>";
		$html .=$professor+$i;
		$html .='</td>';
		
		$html .='<td>';
		$html .=$grade+$i;
		$html .='</td>';
		
		$html .='<td>';
		$html .=$sort+$i;
		$html .='</td>';
		
		$html .='<td>';
		$html .=$major+$i;
		$html .='</td>';
		
		$html .='<td>';
		$html .="<a data-target='#lectureEv' role='submit' class='btn btn-default' data-toggle='modal'>강의평가</a>";
		$html .='</td>';
		
		$html .='</form>';
		$html .='</tr>';
		
		$i++;
	}
		
	$html .='</table>';
	echo $html;
?>