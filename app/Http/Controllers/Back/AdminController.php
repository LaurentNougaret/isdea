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

    public function generatePDF(Result $result)
    {
        $projects = $this->project->getResultInfos($result->id);
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [210, 297],
            'orientation' => 'P',
            'debug' => true,
            'allow_output_buffering' => true,
        ]);


        $stylesheet = file_get_contents('css/app.css');
        $mpdf->WriteHTML('<style>'.$stylesheet.'</style>',1);

        ob_start();
        $html = ob_get_clean();

        ?>


        <!DOCTYPE html>

        <head>
            <meta charset="utf-8">


        </head>

        <body>

        <br><br><br><br>
        <hr style="border-bottom:1px solid #7f7f7f;">
        <table width="100%" class="" style=" font-family:Verdana;">
            <tr style="height:150px;">
                <td  width="10%" style="text-align:left; font-size: 11pt;color:#7f7f7f;font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;"><?php echo stripslashes($result->id); ?>
                </td>
                <td width="90%" style="text-align:left; padding-left: 155px; font-size: 20pt; color:#343893;font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-weight:bolder">
                <?php echo stripslashes($result->content[1]); ?>
                </td>
            </tr>

        </table>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 100px;padding:0px 10px;">
                    <h3 >Composition de l'équipe</h3>
                    <strong>Mandataire :</strong> <?php echo $result->project_content[2]; ?><br/><br/>
                    <strong>Concepteur(s) :</strong> <?php echo stripslashes($result->content[3]); ?><br/><br/>
                    <strong>Investisseur(s) / Promoteur(s) :</strong> <?php echo stripslashes($result->content[4]); ?><br/><br/>
                    <strong>Exploitant(s) :</strong> <?php echo stripslashes($result->content[5]); ?> <br /><br/>
                    <strong>Autre(s) :</strong> <?php echo stripslashes($result->content[6]); ?> <br/>
                </div>
            </div>
        </div>


        </body>


        <?php

        $html = ob_get_clean();
//        if( $mode == 'html' ){ echo $html; }
//        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

        $mpdf->WriteHTML($html,2);
        $mpdf->Output();
        return $mpdf;
    }
}

