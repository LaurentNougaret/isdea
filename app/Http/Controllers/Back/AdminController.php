<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Repositories\PDFRepository;
use App\Result;
use Mpdf\Mpdf;

class AdminController extends Controller
{

	private $project;

	public function __construct(PDFRepository $projects)
	{
		$this->project = $projects;

	}

	public function generatePDF(Result $result, $mode = 'pdf')
	{



	    $mpdf = new Mpdf([
			'mode' => 'utf-8',
			'format' => [210, 297],
			'orientation' => 'P',
		]);

		$projects = $this->project->getResultInfos($result->id);

		// Get css from a css file and stock it in a variable
//        $stylesheet = file_get_contents('css/app.css');

		// Copy the css content in <style> tag in html doc
//        $mpdf->WriteHTML('<style>'.$stylesheet.'</style>',1);


		// Create buffer
		ob_start();
		// Read and Empty buffer
		$html = ob_get_clean();

		?>

        <!DOCTYPE html>

        <head>
            <meta charset="utf-8">
            <link href="https://fonts.googleapis.com/css?family=Anton|Raleway" rel="stylesheet">

            <style>
                body {
                    font-size: 11pt;
                    line-height: 1.2;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                }

                blockquote {
                    line-height: 1.2;
                    background-color: #DDDCD0 !important;
                }

                h4 {
                    font-size: 16px;
                    font-weight:900;
                    color:#343893;
                    border-bottom: 1px solid #000000;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                    font-style: italic;
                    text-transform: uppercase;
                }

                h5 {
                    font-size: 14px;
                    font-weight:900;
                    color:#343893;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                    font-style: italic;
                }
                h4 {
                    font-style: normal; color: red; font-size: 12pt;}

                h3 {
                    background:#343893;
                    font-size:12pt;
                    padding:5px;
                    color:#ffffff;
                    text-transform: uppercase;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                }

                .avis {
                    padding: 0 !important;
                    padding-top: 10px !important;
                    background-color: #DDDCD0 !important;
                }

                strong {
                    font-weight: bold;
                }

                .form-group {
                    font-size: 10px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;
                }

                .avis {
                    background: #DCE6F1; padding: 10px; padding-top: 0; padding-bottom: 10px; margin-top: 5px; margin-bottom: 5px;
                }

                .domaine {
                    background: #D9D9D9; padding: 10px; padding-top: 0; padding-bottom: 10px; margin-top: 5px; margin-bottom: 5px;
                }
                .team {
                    height: 100px;
                    padding:0 10px;
                }

                .table1 {
                    font-family:Railway, "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                    width:100%;
                }

                .project_id {
                    text-align: left;
                    color: #7f7f7f;
                    width: 10%;
                }

                .project-title {
                    text-align: left;
                    padding-left: 155px;
                    font-size: 20pt;
                    color: #343893;
                    font-weight: bolder;
                    width: 90%;
                }
                hr {
                    border-bottom:1px solid #7f7f7f;
                }

                .project {
                    height:150px;
                }

                .synthesis {
                    height: 200px;
                    padding: 0 10px;"
                }

                .image1, .image2 {
                    text-align: center;
                    margin-top:20px;
                }

                .illustration {
                    max-height:250px;
                }

                .completeness {
                    height: 100px;
                }

                .analysis {
                    height: 200px;
                }

                .table-arrangement {
                    border: 0;
                    width: 100%;
                }

                .table-arrangement td {
                    width: 500%;
                    color: #000000;
                    padding: 10px;
                }
            </style>

        </head>

        <body>

        <br><br><br><br>
        <hr>
        <table  class="table1">
            <tr class="project" style="">
                <td class="project_id"><?php echo stripslashes($result->id); ?>
                </td>
                <td class="project-title">
					<?php echo stripslashes($projects->content[1]); ?>
                </td>
            </tr>

        </table>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group team">
                    <h3 ><?php echo trans('form.line-up')?></h3>
                    <strong><?php echo trans('form.line-up')?> :</strong> <?php echo $projects->content[2]; ?><br/><br/>
                    <strong><?php echo trans('form.designer')?> :</strong> <?php echo stripslashes($projects->content[3]); ?><br/><br/>
                    <strong><?php echo trans('form.investor.sponsor')?> :</strong> <?php echo stripslashes($projects->content[4]); ?><br/><br/>
                    <strong><?php echo trans('form.manager')?> :</strong> <?php echo stripslashes($projects->content[5]); ?> <br /><br/>
                    <strong><?php echo trans('form.other')?> :</strong> <?php echo stripslashes($projects->content[6]); ?> <br/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group synthesis">
                    <h3><?php echo trans('form.offer_synthesis')?></h3>
                    <h4><?php echo trans('form.description')?></h4>
					<?php echo stripslashes($projects->content[31]); ?><br/>
                    <br><br>
                    <h4><?php echo trans('form.advice.summary')?></h4>
                    <div class="avis">
                        <div class="quote">
							<?php echo stripslashes($projects->content[32]); ?><br/>
                        </div>
                    </div>
                </div>
                <pagebreak />
				<?php if( $projects->content[29] != '' ) : ?>
                    <div class="row">
                        <div class="col-md-12 image1">
                            <img class="illustration" src="<?php echo url('storage') . "/" . $projects->content[29] ?>"/>

                        </div>
                    </div>
				<?php endif; ?>
				<?php if( $projects->content[30] != '' ) : ?>
                    <div class="row">
                        <div class="col-md-12 image2">
                            <img class="illustration" src="<?php echo url('storage') . "/" . $projects->content[29] ?>"/>
                        </div>
                    </div>
				<?php endif; ?>
                <pagebreak />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group completeness">
                    <h3 ><?php echo trans('form.completeness.case')?></h3>
                    <h4><?php echo trans('form.missing_element.commentary')?> :</h4>
					<?php echo stripslashes($result->content[7]); ?>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo trans('form.offer_analysis_particular_conditions')?></h3>
                <div class="form-group analysis">
                    <h4><?php echo trans('form.recall.stage2')?></h4>
					<?php if( $result->content[8] != '') : ?>
						<?php echo stripslashes($result->content[8]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <br><br>
                    <h4><?php echo trans('form.recall.vigilance.point')?></h4>
					<?php if( $result->content[9] != '') : ?>
						<?php echo stripslashes($result->content[9]); ?><br/><br/>
					<?php endif; ?>
                    <br><br>
                    <h4><?php echo trans('form.lpd.urban')?></h4>
					<?php if( $result->content[10] != '') : ?>
						<?php echo stripslashes($result->content[10]); ?><br/>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <br/>
        <pagebreak />
        <div class="row">
            <div class="col-md-12">
                <h3 ><?php echo strtoupper(trans('form.analysis.offer'))?> - 1/3</h3>
                <div class="form-group">
                    <h4><?php echo trans('form.quality.program')?></h4>
					<?php if( $result->content[11] != '') : ?>
						<?php echo stripslashes($result->content[11]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.evolution.candidacy')?></h5>
					<?php if( $result->content[12] != '') : ?>
						<?php echo stripslashes($result->content[12]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.advice.program')?></h5>
					<?php if( $result->content[13] != '') : ?>
                        <div class="avis">
                            <div class="quote">
								<?php echo stripslashes($result->content[13]); ?><br/>
                            </div>
                        </div>
					<?php endif; ?>
                    <br><br>
                    <h4><?php echo trans('form.urban.quality')?></h4>
					<?php if( $result->content[14] != '') : ?>
						<?php echo stripslashes($result->content[14]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.advice.quality')?></h5>
					<?php if( $result->content[15] != '') : ?>
                        <div class="avis">
                            <div class="quote">
								<?php echo stripslashes($result->content[15]); ?><br/>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <pagebreak />
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo strtoupper(trans('form.analysis.offer'))?> - 2/3</h3>
                <div class="form-group">
                    <h4><?php echo trans('form.innovative.character')?></h4>
					<?php if( $result->content[16] != '') : ?>
						<?php echo stripslashes($result->content[16]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.evolution.candidacy')?></h5>
					<?php if( $result->content[17] != '') : ?>
						<?php echo stripslashes($result->content[17]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.advice.innovative')?></h5>
					<?php if( $result->content[18] != '') : ?>
                        <div class="avis">
                            <div class="quote">
								<?php echo stripslashes($result->content[18]); ?><br/>
                            </div>
                        </div>
					<?php endif; ?>
                    <br><br>
                    <h4><?php echo trans('form.global.warming')?></h4>
					<?php if( $result->content[19] != '') : ?>
						<?php echo stripslashes($result->content[19]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.evolution.candidacy')?></h5>
					<?php if( $result->content[20] != '') : ?>
						<?php echo stripslashes($result->content[20]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.global.advice')?></h5>
					<?php if( $result->content[21] != '') : ?>
                        <div class="avis">
                            <div class="quote">
								<?php echo stripslashes($result->content[21]); ?><br/>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <pagebreak />
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo strtoupper(trans('form.analysis.offer'))?> - 3/3</h3>
                <div class="form-group">
                    <div class="form-group">
                        <table class="table-arrangement">
                            <tr>
                                <td><h4><?php echo trans('form.legal.assembly')?></h4></td>
                                <td><h4><?php echo trans('form.financial.arrangement')?></h4></td>
                            </tr>
                            <tr>
                                <td>
                                    <div> <?php echo stripslashes($result->content[22]); ?></div>
                                </td>
                                <td>
                                    <div> <?php echo stripslashes($result->content[24]); ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td><h5><?php echo trans('form.advice.assembly')?></h5></td>
                                <td><h5><?php echo trans('form.advice.financial')?></h5></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avis">
                                        <div class="quote">
											<?php echo stripslashes($result->content[23]); ?><br/>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avis">
                                        <div class="quote">
											<?php echo stripslashes($result->content[25]); ?><br/>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                        </table>
                    </div>
                    <br><br>
                    <h4><?php echo ucfirst(strtolower(trans('form.sale.price')))?></h4>
					<?php if( $result->content[26] != '') : ?>
						<?php echo stripslashes($result->content[26]); ?><br/>
                        <br/>
					<?php endif; ?>
                    <h5><?php echo trans('form.advice.price')?></h5>
					<?php if( $result->content[27] != '') : ?>
                        <div class="avis">
                            <div class="quote">
								<?php echo stripslashes($result->content[27]); ?><br/>
                            </div>
                        </div>
					<?php endif; ?>
                    <br><br>
                    <h3><?php echo strtoupper(trans('form.analysis.domain'))?></h3>
					<?php if( $result->content[28] != '') : ?>
                        <div class="domaine">
                            <div class="quote">
								<?php echo stripslashes($result->content[28]); ?><br/>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
        </body>
		<?php
		$html = ob_get_clean();
//        if( $mode == 'html' ){ echo $html; }
//        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
//        $mpdf->WriteHTML($html,2);
		$mpdf->WriteHTML('hello',2);
		dd($mpdf->WriteHTML('hello',2));
		$mpdf->Output();

	}
}

