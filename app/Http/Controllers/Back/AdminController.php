<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Repositories\PDFRepository;
use App\Result;
use Mpdf\Mpdf;
use App;


class AdminController extends Controller
{

	private $project;

	public function __construct(PDFRepository $projects)
	{
		$this->project = $projects;

	}

	public function generatePDF(Result $result)
	{
		$data['projects']  = $this->project->getResultInfos($result->id);

//		dd($data['projects']->content);
//		$data['prenom'] = "Julien";

 		$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('pdf.invoice', $data);
		$pdf->setOptions(['dpi' => 300, 'defaultFont' => 'sans-serif']);
		return $pdf->stream('invoice.pdf');

	}
}

