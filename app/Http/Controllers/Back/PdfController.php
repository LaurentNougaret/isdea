<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Repositories\PDFRepository;
use App\Result;
use Illuminate\Support\Facades\App;
use ZanySoft\Zip\Zip;

class PdfController extends Controller
{

	private $project;

	public function __construct(PDFRepository $projects)
	{
		$this->project = $projects;

	}

	public function generatePDF(Result $result)
	{
		$data['projects']  = $this->project->getResultInfos($result->id);

 		$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('pdf.pdf_model', $data);
		$pdf->setOptions(['dpi' => 300, 'defaultFont' => 'Raleway']);
		$pdf->save(storage_path('app/public/pdf/' . $result->project_name . '.pdf'));

		$zip = Zip::create(storage_path('app/public/archives/archive.zip'));
		$zip->add(storage_path('app/public/pdf/' . $result->project_name . '.pdf'));

		return $pdf->stream('app/public/pdf/' . $result->project_name . '.pdf');
	}
}

