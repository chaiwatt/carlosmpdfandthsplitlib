<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
    public function Create(){
		require_once (base_path('/vendor/notyes/thsplitlib/THSplitLib/segment.php'));
		$segment = new \Segment();
		$body = "การอ่านที่ดีนั้นเกิดจากทักษะการฝึกฝนและการเรียนรู้ การอ่านเป็นการสื่อสารระหว่าง ผู้ส่งสารด้วยการเขียนกับผู้อ่าน โดยอาศัยตัวหนังสือเป็นสื่อ ผู้อ่านจึงเกิดความรู้ ความคิดและประสบการณ์ สามารถนำความรู้ความคิดและประสบการณ์เหล่านั้นไปใช้ในชีวิตประจำวันได้ แต่ผลจากการอ่านที่ผู้อ่านได้รับนั้นย่อมได้รับผลแตกต่างกัน เพราะฉะนั้นการมีความรู้เกี่ยวกับการอ่านจะช่วยให้เกิดประโยชน์ต่อผู้อ่านได้";
		$words = $segment->get_segment_array($body);
        $data = [
			'body' => $words
		];
				
		$pdf = PDF::loadView('pdf', $data);
		return $pdf->stream('pdf');
    }
}
