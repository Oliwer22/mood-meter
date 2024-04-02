<?php

namespace App\Exports;

use App\Models\Review;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReviewsExport
{
    public function export()
    {
        $reviews = Review::all();
        $emojiNames = [
            1 => 'Dead',
            2 => 'Frown',
            3 => 'Neutral',
            4 => 'Smile',
            5 => 'Happy',
        ];

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Emoji');
        $sheet->setCellValue('E1', 'Review');
        $sheet->setCellValue('F1', 'Datum');
        $row = 2;
        foreach ($reviews as $review) {
            $sheet->setCellValue('A' . $row, $review->id);
            $sheet->setCellValue('B' . $row, $review->name);
            $sheet->setCellValue('C' . $row, $review->email);
            $sheet->setCellValue('D' . $row, $emojiNames[$review->emoji_id]);
            $sheet->setCellValue('E' . $row, $review->review);
            $sheet->setCellValue('F' . $row, $review->datum);

            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'reviews');
        $writer->save($temp_file);
        return $temp_file;
    }
}