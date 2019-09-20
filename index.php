<?php
//Error_Reporting(E_ALL);

require  'vendor/autoload.php';

//require_once 'PHPWord.php';
// Template processor instance creation
//echo date('H:i:s'), ' Creating new TemplateProcessor instance...', EOL;
//$PHPWord = new \PhpOffice\PhpWord\PhpWord();
/**
 * @throws \PhpOffice\PhpWord\Exception\Exception
 * Создание word для юр вопросов
 *
 * https://www.youtube.com/watch?time_continue=156&v=ABUsfdD4HlQ
 */
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('resources/request.docx');print_r ($document);
//print_r($templateProcessor);

$templateProcessor->setValue('d_num', '777'); //номер договора
$templateProcessor->setValue('d_date', '04.10.2014'); //дата договора
$templateProcessor->setValue('d_station_departure', 'Никоненко'); //фамилия
$templateProcessor->setValue('d_station_destination', 'Никоненко'); //фамилия
$templateProcessor->setValue('shipper', 'Никоненко'); //фамилия
$templateProcessor->setValue('consignee', 'Никоненко'); //фамилия
$templateProcessor->setValue('count_and_type', 'Никоненко'); //фамилия
$templateProcessor->setValue('number_gu12', 'Никоненко'); //фамилия
$templateProcessor->setValue('etsng', 'Никоненко'); //фамилия
$templateProcessor->setValue('price', 'Никоненко'); //фамилия
$templateProcessor->setValue('name', 'Сергей');// имя
print_r($templateProcessor);
$templateProcessor->saveAs('documents/request.docx'); //имя заполненного шаблона для сохранения