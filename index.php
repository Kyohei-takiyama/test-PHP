<!-- @description 九九の表作成
		 @condition 
		 		1 ファイル名index.php
				2 for文処理
				3 tebleタグを使用
-->

<!-- 九九表 -->
<table border = "1">
	<?php
for ( $i = 1; $i <= 9; $i++ ) {
	// 段数
	print '<tr>';	
	for ( $j = 1; $j <= 9; $j++ ) {
		// 計算処理
		print '<td>' . $i*$j . '</td>';
	}
	print '</tr>';
}
?>
</table>




